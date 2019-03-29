<template>
  <div>
    <div class="md-layout">
      <div class="md-layout-item">
        <p>Poster Portrait Image</p>
        <button type="button" class="md-button md-raised md-theme-default px-3" id="upload_poster_portrait_image">Select
          a file
        </button>
      </div>
      <div class="md-layout-item">
        <img v-if="posterPortraitSrc" :src="posterPortraitSrc" class="attachment-image md-elevation-7"/>
      </div>
    </div>
    <div class="md-layout">
      <div class="md-layout-item">
        <p>Poster Square Image</p>
        <button type="button" class="md-button md-raised md-theme-default px-3" id="upload_poster_square_image">Select a
          file
        </button>
      </div>
      <div class="md-layout-item">
        <img v-if="posterSquareSrc" :src="posterSquareSrc" class="attachment-image md-elevation-7"/>
      </div>
    </div>
    <div class="md-layout">
      <div class="md-layout-item">
        <p>Poster Landscape Image</p>
        <button type="button" class="md-button md-raised md-theme-default px-3" id="upload_poster_landscape_image">
          Select a file
        </button>
      </div>
      <div class="md-layout-item">
        <img v-if="posterLandscapeSrc" :src="posterLandscapeSrc" class="attachment-image md-elevation-7"/>
      </div>
    </div>
    <md-switch v-model="supportsLandscape">Supports Landscape</md-switch>
    <md-field>
      <label>Publisher</label>
      <md-input v-model="publisher"></md-input>
    </md-field>
    <div class="md-layout">
      <div class="md-layout-item">
        <p>Publisher Logo</p>
        <button type="button" class="md-button md-raised md-theme-default px-3" id="upload_story_publisher_logo">Select
          a file
        </button>
      </div>
      <div class="md-layout-item">
        <img v-if="publisherLogoSrc" :src="publisherLogoSrc" class="attachment-image md-elevation-7"/>
      </div>
    </div>
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
        const vm = this;
        cloudinary.createMediaLibrary(
          { ...vm.cloudinaryInfo },
          {
            insertHandler: function (data) {
              let result = data.assets[0];
              vm.posterPortraitSrc = result.secure_url.substr(0, result.secure_url.lastIndexOf(".")) + ".jpg";
            }
          },
          document.getElementById("upload_poster_portrait_image")
        );
        cloudinary.createMediaLibrary(
          { ...vm.cloudinaryInfo },
          {
            insertHandler: function (data) {
              let result = data.assets[0];
              vm.posterSquareSrc = result.secure_url.substr(0, result.secure_url.lastIndexOf(".")) + ".jpg";
            }
          },
          document.getElementById("upload_poster_square_image")
        );
        cloudinary.createMediaLibrary(
          { ...vm.cloudinaryInfo },
          {
            insertHandler: function (data) {
              let result = data.assets[0];
              vm.posterLandscapeSrc = result.secure_url.substr(0, result.secure_url.lastIndexOf(".")) + ".jpg";
            }
          },
          document.getElementById("upload_poster_landscape_image")
        );
        cloudinary.createMediaLibrary(
          { ...vm.cloudinaryInfo },
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
        button_class: 'md-button md-raised md-theme-default px-3',
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
        set (value) {
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
        set (value) {
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
        set (value) {
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
        set (value) {
          console.log(value);
          if (this.supportsLandscape !== value)
            Vue.$emit('story:settings', { supportsLandscape: value });
        }
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
        set (value) {
          if (this.publisherLogoSrc !== value)
            Vue.$emit('story:settings', { publisherLogoSrc: value });
        }
      }
    }
  }
</script>

<style scoped>
  .md-layout {
    padding-bottom: 20px;
  }
</style>