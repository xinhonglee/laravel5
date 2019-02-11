<template>
  <div>
    <b-row class="justify-content-center">
      <b-col md="7">
        <span>Video Description</span>
        <md-field>
          <md-icon class="mr-2">wrap_text</md-icon>
          <md-textarea v-model="description" md-autogrow :disabled="!editable"></md-textarea>
        </md-field>
        <span>Video Date</span>
        <md-datepicker v-model="date" :disabled="!editable"/>
        <span>Video Category</span>
        <md-field>
          <md-icon class="mr-2">category</md-icon>
          <md-select v-model="video_category_id" name="category" id="category" :disabled="!editable">
            <md-option v-for="(category, index) in video_categories" :value="category.id" :key="index">
              {{ category.name }}
            </md-option>
          </md-select>
        </md-field>
        <b-row class="mt-5">
          <b-col md="6">
            <span class="label-poss-btn">Video File</span>
            <button type="button" class="md-raised ml-5 px-3" id="upload_video">Select a file</button>
            <div class="mt-4">
              <p v-if="video_id"><strong>ID: &nbsp;&nbsp;&nbsp;{{ video_id }}</strong></p>
              <p v-if="video_url"><strong>URL:</strong> {{ video_url }}</p>
              <img v-if="videoVignette" class="md-elevation-3" :src="videoVignette"/>
            </div>
          </b-col>
          <b-col md="6">
            <span class="label-poss-btn">Cover File</span>
            <button type="button" class="md-raised ml-5 px-3" id="upload_cover">Select a file</button>
            <div class="mt-4">
              <p v-if="cover_id"><strong>ID: &nbsp;&nbsp;&nbsp;{{ cover_id }}</strong></p>
              <p v-if="cover_url"><strong>URL:</strong> {{ cover_url }}</p>
              <img v-if="coverVignette" class="md-elevation-3" :src="coverVignette"/>
            </div>
          </b-col>
        </b-row>
      </b-col>
    </b-row>
  </div>
</template>

<script>
  export default {
    name: "video-edit",
    data () {
      return {
        id: '',
        description: '',
        date: '',
        video_id: '',
        video_url: '',
        cover_id: '',
        cover_url: '',
        videoVignette: '',
        coverVignette: '',
        video_category_id: '',
        video_categories: [],
        cloudinary_cloud_name: '',
        cloudinary_user_name: '',
        cloudinary_api_key: '',
        cloudinary_timestamp: '',
        cloudinary_signature: '',
      }
    },
    methods: {
      loadVideo (id) {
        Vue.block();
        this.$http.get('/video/' + id).then((response) => {
          Vue.unBlock();
          const data = response.data;

          this.id = data.id;
          this.description = data.description;
          this.date = data.date;
          this.video_id = data.video_id;
          this.video_url = data.video_url;
          this.cover_id = data.cover_id;
          this.cover_url = data.cover_url;
          this.video_category_id = data.category ? data.category.id : '';
          this.videoVignette = data.video_url.substr(0, data.video_url.lastIndexOf(".")) + ".jpg";
          this.coverVignette = data.cover_url.substr(0, data.cover_url.lastIndexOf(".")) + ".jpg";

          this.$store.dispatch('updateAppTitle', data.title);

        }, (error) => {
          Vue.unBlock();
        }).catch(Vue.handleClientError);
      },
      loadCategory () {
        this.$http.get('/video/category').then((response) => {
          this.video_categories = response.data;
        }, (error) => {
        }).catch(Vue.handleClientError);
      },
      createVideo () {
        Vue.block();
        let data = {
          "title": this.title,
          "description": this.description,
          "date": this.date,
          "video_id": this.video_id,
          "cover_id": this.cover_id,
          "video_url": this.video_url,
          "cover_url": this.cover_url,
          "video_category_id": this.video_category_id,
        };
        this.$http.post('/video/create', data).then((response) => {
          Vue.unBlock();
          Vue.alertBox({
            title: 'Success',
            text: "Successfully created new video!",
            type: 'success'
          });
          this.id = response.data.id;
          this.$store.dispatch('updateAppEditable', false);
        }, (error) => {
          Vue.unBlock();
        }).catch(Vue.handleClientError);
      },
      updateVideo () {
        Vue.block();
        let data = {
          "title": this.title,
          "description": this.description,
          "date": this.date,
          "video_id": this.video_id,
          "cover_id": this.cover_id,
          "video_url": this.video_url,
          "cover_url": this.cover_url,
          "video_category_id": this.video_category_id,
          "id": this.id,
        };
        this.$http.put('/video/update', data).then((response) => {
          Vue.unBlock();
          Vue.alertBox({
            title: 'Success',
            text: "Successfully updated this video!",
            type: 'success'
          });
          this.$store.dispatch('updateAppEditable', false);
        }, (error) => {
          Vue.unBlock();
        }).catch(Vue.handleClientError);
      },
      initializeCloudinary () {
        this.$http.get('/video/cloud').then((response) => {
          this.cloudinary_cloud_name = response.data.cloud_name;
          this.cloudinary_user_name = response.data.user_name;
          this.cloudinary_api_key = response.data.api_key;
          this.cloudinary_timestamp = response.data.timestamp;
          this.cloudinary_signature = response.data.signature;

          this.generateVideoMediaLibrary();
          this.generateCoverMediaLibrary();
        }, (error) => {
        }).catch(Vue.handleClientError);
      },
      generateVideoMediaLibrary () {
        let vm = this;
        cloudinary.createMediaLibrary(
          {
            cloud_name: this.cloudinary_cloud_name,
            api_key: this.cloudinary_api_key,
            username: this.cloudinary_user_name,
            timestamp: this.cloudinary_timestamp,
            signature: this.cloudinary_signature,
            button_class: 'md-button md-raised ml-5 md-theme-default px-3',
            button_caption: 'Select a file',
            multiple: false
          },
          {
            insertHandler: function (data) {
              let result = data.assets[0];
              vm.video_id = result.public_id;
              vm.video_url = result.secure_url;
              vm.videoVignette = result.secure_url.substr(0, result.secure_url.lastIndexOf(".")) + ".jpg";
            }
          },
          document.getElementById("upload_video")
        );
      },
      generateCoverMediaLibrary () {
        let vm = this;
        cloudinary.createMediaLibrary(
          {
            cloud_name: this.cloudinary_cloud_name,
            api_key: this.cloudinary_api_key,
            username: this.cloudinary_user_name,
            timestamp: this.cloudinary_timestamp,
            signature: this.cloudinary_signature,
            button_class: 'md-button md-raised ml-5 md-theme-default px-3',
            button_caption: 'Select a file',
            multiple: false
          },
          {
            insertHandler: function (data) {
              let result = data.assets[0];
              vm.cover_id = result.public_id;
              vm.cover_url = result.secure_url;
              vm.coverVignette = result.secure_url.substr(0, result.secure_url.lastIndexOf(".")) + ".jpg";
            }
          },
          document.getElementById("upload_cover")
        );
      },
    },
    mounted () {
      this.loadCategory();
      this.initializeCloudinary();
      if (this.$route.params.id) {
        console.log(this.$route.params.id);
        this.loadVideo(this.$route.params.id);
        this.$store.dispatch('updateAppEditable', false);
      } else {
        this.$store.dispatch('updateAppTitle', 'Untitled Video');
        this.$store.dispatch('updateAppEditable', true);
      }
      Vue.$on('app:publish', () => {
        if (this.id) {
          this.updateVideo();
        } else {
          this.createVideo();
        }
      });
      Vue.$on('app:setting', () => {
      });
    },
    computed: {
      editable () {
        return this.$store.state.app.editable;
      },
      title () {
        return this.$store.state.app.title;
      }
    },
    beforeDestroy () {
      Vue.$off('app:publish');
      Vue.$off('app:setting');
    },
  }
</script>

<style scoped>
  p {
    word-break: break-all;
  }
  textarea {
    height: 100px !important;
  }
</style>