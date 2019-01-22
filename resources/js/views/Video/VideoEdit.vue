<template>
  <div>
    <b-row class="justify-content-center">
      <b-col md="5">
      <md-field>
        <md-icon>wrap_text</md-icon>
        <label>Video Description</label>
        <md-textarea v-model="description" md-autogrow></md-textarea>
      </md-field>
      <md-field>
        <md-icon>event</md-icon>
        <label>Video Date</label>
        <md-input v-model="date"></md-input>
      </md-field>
      <md-field>
        <md-icon>category</md-icon>
        <label>Video Category</label>
        <md-select v-model="video_category_id" name="category" id="category">
          <md-option v-for="(category, index) in video_categories" :value="category.id">{{ category.name }}</md-option>
        </md-select>
      </md-field>
      <div class="mt-5">
        <span class="label-poss-btn">Video File</span>
        <md-button class="md-raised ml-5">Select a file</md-button>
      </div>
      <div class="mt-5">
        <span class="label-poss-btn">Cover File</span>
        <md-button class="md-raised ml-5">Select a file</md-button>
      </div>
      </b-col>
    </b-row>
  </div>
</template>

<script>
  export default {
    name: "video-edit",
    data() {
      return {
        id: '',
        title: '',
        description: '',
        date: '',
        video_id: '',
        video_url: '',
        cover_id: '',
        cover_url: '',
        video_category_id: '',
        video_categories: [],
      }
    },
    methods: {
      loadVideo(id) {
        Vue.block();
        this.$http.get('/video/' + id).then((response) => {
          Vue.unBlock();
          const data = response.data[0];

          this.id = data.id;
          this.title = data.title;
          this.description = data.description;
          this.date = data.date;
          this.video_id = data.video_id;
          this.video_url = data.video_url;
          this.cover_id = data.cover_id;
          this.cover_url = data.cover_url;
          this.video_category_id = data.category.name;

        }, (error) => {
          Vue.unBlock();
        }).catch(Vue.handleClientError);
      },
      loadCategory() {
        this.$http.get('/video/category').then((response) => {
          this.video_categories = response.data;
        }, (error) => {
        }).catch(Vue.handleClientError);
      }
    },
    mounted() {
      this.loadVideo(1);
      this.loadCategory();
    }
  }
</script>

<style scoped>

</style>