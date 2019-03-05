<template>
  <div>
    <div>
      <span class="label-poss-btn">Poster Portrait Image</span>
      <button type="button" class="md-raised ml-5 px-3" id="upload_poster_portrait_image">Select a file</button>
      <img v-if="posterPortraitSrc" :src="posterPortraitSrc"/>
    </div>
    <div>
      <span class="label-poss-btn">Poster Square Image</span>
      <button type="button" class="md-raised ml-5 px-3" id="upload_poster_square_image">Select a file</button>
      <img v-if="posterSquareSrc" :src="posterSquareSrc"/>
    </div>
    <div>
      <span class="label-poss-btn">Poster Landscape Image</span>
      <button type="button" class="md-raised ml-5 px-3" id="upload_poster_landscape_image">Select a file</button>
      <img v-if="posterLandscapeSrc" :src="posterLandscapeSrc"/>
    </div>
    <md-switch v-model="supportsLandscape">Supports Landscape</md-switch>
    <md-field>
      <label>Publisher</label>
      <md-input v-model="publisher"></md-input>
    </md-field>
    <span class="label-poss-btn">Publisher Logo</span>
    <button type="button" class="md-raised ml-5 px-3" id="upload_story_publisher_logo">Select a file</button>
    <img v-if="publisherLogoSrc" :src="publisherLogoSrc"/>
  </div>
</template>

<script>
  export default {
    name: "story-seo",
    data () {
      return {
        cloudinaryInfo: null,
      }
    },
    methods: {
      generateMediaLibraries () {
        let vm = this;
        cloudinary.createMediaLibrary(
          {...vm.cloudinaryInfo},
          {
            insertHandler: function (data) {
              let result = data.assets[0];
              vm.posterPortraitSrc = result.secure_url.substr(0, result.secure_url.lastIndexOf(".")) + ".jpg";
            }
          },
          document.getElementById("upload_poster_portrait_image")
        );
        cloudinary.createMediaLibrary(
          {...vm.cloudinaryInfo},
          {
            insertHandler: function (data) {
              let result = data.assets[0];
              vm.posterSquareSrc = result.secure_url.substr(0, result.secure_url.lastIndexOf(".")) + ".jpg";
            }
          },
          document.getElementById("upload_poster_square_image")
        );
        cloudinary.createMediaLibrary(
          {...vm.cloudinaryInfo},
          {
            insertHandler: function (data) {
              let result = data.assets[0];
              vm.posterLandscapeSrc = result.secure_url.substr(0, result.secure_url.lastIndexOf(".")) + ".jpg";
            }
          },
          document.getElementById("upload_poster_landscape_image")
        );
        cloudinary.createMediaLibrary(
          {...vm.cloudinaryInfo},
          {
            insertHandler: function (data) {
              let result = data.assets[0];
              vm.publisherLogoSrc = result.secure_url.substr(0, result.secure_url.lastIndexOf(".")) + ".jpg";
            }
          },
          document.getElementById("upload_story_publisher_logo")
        );
      },
    },
    mounted () {
      this.cloudinaryInfo = {
        cloud_name: this.$store.state.cloudinary.cloudName,
        api_key: this.$store.state.cloudinary.apiKey,
        username: this.$store.state.cloudinary.userName,
        timestamp: this.$store.state.cloudinary.timestamp,
        signature: this.$store.state.cloudinary.signature,
        button_class: 'md-button md-raised ml-5 md-theme-default px-3',
        button_caption: 'Select a file',
        multiple: false
      };
      this.generateMediaLibraries();
    },
    computed: {
      posterPortraitSrc: {
        get () {
          if (!_.isNil(this.$store.state.story)) {
            return this.$store.state.story.data.posterPortraitSrc;
          }
          return '';
        },
        set(value) {
          if (this.posterPortraitSrc !== value)
            Vue.$emit('story:settings', { posterPortraitSrc: value });
        },
      },
      posterSquareSrc: {
        get () {
          if (!_.isNil(this.$store.state.story)) {
            return this.$store.state.story.data.posterSquareSrc;
          }
          return '';
        },
        set(value) {
          if (this.posterSquareSrc !== value)
            Vue.$emit('story:settings', { posterSquareSrc: value });
        }
      },
      posterLandscapeSrc: {
        get () {
          if (!_.isNil(this.$store.state.story)) {
            return this.$store.state.story.data.posterLandscapeSrc;
          }
          return '';
        },
        set(value) {
          if (this.posterLandscapeSrc !== value)
            Vue.$emit('story:settings', { posterLandscapeSrc: value });
        }
      },
      supportsLandscape: {
        get () {
          if (!_.isNil(this.$store.state.story)) {
            return this.$store.state.story.data.supportsLandscape;
          }
          return true;
        },
        set: _.debounce(function (value) {
          if (this.supportsLandscape !== value)
            Vue.$emit('story:settings', { supportsLandscape: value });
        }, 2000)
      },
      publisher: {
        get () {
          if (!_.isNil(this.$store.state.story)) {
            return this.$store.state.story.data.publisher;
          }
          return '';
        },
        set: _.debounce(function (value) {
          if (this.publisher !== value)
            Vue.$emit('story:settings', { publisher: value });
        }, 2000)
      },
      publisherLogoSrc: {
        get () {
          if (!_.isNil(this.$store.state.story)) {
            return this.$store.state.story.data.publisherLogoSrc;
          }
          return '';
        },
        set(value) {
          if (this.publisherLogoSrc !== value)
            Vue.$emit('story:settings', { publisherLogoSrc: value });
        }
      }
    }
  }
</script>

<style scoped>

</style>