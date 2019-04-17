<template>
  <div>
    <md-field>
      <label>Id</label>
      <md-input v-model="pageId"></md-input>
    </md-field>
    <md-field>
      <label>Auto Advance After(s)</label>
      <md-input v-model="autoAdvanceAfter"></md-input>
    </md-field>
    <img v-if="backgroundAudioVignette" :src="backgroundAudioVignette" class="attachment-image md-elevation-7"/>
    <br>
    <button type="button" class="md-button md-raised md-theme-default px-3 ml-0"
            id="upload_back_audio_page">
      Select an Audio
    </button>
  </div>
</template>

<script>
  export default {
    name: "setting-page",
    props: {
      page: Object
    },
    data () {
      return {
        cloudinaryInfo: null
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
              vm.backgroundAudio = result.secure_url;
            }
          },
          document.getElementById("upload_back_audio_page")
        );
      }
    },
    mounted () {
      this.cloudinaryInfo = {
        cloud_name: this.$store.state.cloudinary.cloudName,
        api_key: this.$store.state.cloudinary.apiKey,
        username: this.$store.state.cloudinary.userName,
        timestamp: this.$store.state.cloudinary.timestamp,
        signature: this.$store.state.cloudinary.signature,
        button_class: 'md-button md-raised md-theme-default px-3 ml-0',
        button_caption: 'Select an Audio',
        multiple: false
      };
      this.generateMediaLibraries();
    },
    computed: {
      pageId: {
        get () {
          if (!_.isNil(this.page && this.page.id)) {
            return this.page.id;
          }
          return '';
        },
        set: _.debounce(function (value) {
          if (this.pageId !== value && this.pageId !== "")
            Vue.$emit('setting:page', { id: value });
        }, 2000),
      },
      autoAdvanceAfter: {
        get () {
          if (!_.isNil(this.page && this.page['auto-advance-after'])) {
            return this.page['auto-advance-after'];
          }
          return '';
        },
        set: _.debounce(function (value) {
          if (this.autoAdvanceAfter !== value)
            Vue.$emit('setting:page', { 'auto-advance-after': value });
        }, 2000),
      },
      backgroundAudio: {
        get () {
          if (!_.isNil(this.page && this.page['background-audio'])) {
            return this.page['background-audio'];
          }
          return '';
        },
        set (value) {
          if (this.backgroundAudio !== value) {
            Vue.$emit('setting:page', { 'background-audio': value });
          }
        },
      },
      backgroundAudioVignette: {
        get () {
          if (!_.isNil(this.page && this.page['background-audio'])) {
            return this.page['background-audio'].substr(0, this.page['background-audio'].lastIndexOf(".")) + ".jpg";
          }
          return '';
        },
      }
    }
  }
</script>

<style scoped>

</style>