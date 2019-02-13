<template>
  <div class="property-settings">
    <settings-rich-text></settings-rich-text>
    <!--<settings-image></settings-image>-->
    <!--<settings-video></settings-video>-->
    <!--<settings-audio></settings-audio>-->
  </div>
</template>

<script>
  import SettingsRichText from "./Settings/SettingsRichText";
  import SettingsImage from "./Settings/SettingsImage";
  import SettingsVideo from "./Settings/SettingsVideo";
  import SettingsAudio from "./Settings/SettingsAudio";
  export default {
    name: "property-settings",
    components: {
      SettingsAudio,
      SettingsVideo,
      SettingsImage,
      SettingsRichText
    },
    methods: {
      isSelected(param = '') {
        if(param) {

        }
        return false;
      }
    },
  }
</script>

<style scoped>

</style>