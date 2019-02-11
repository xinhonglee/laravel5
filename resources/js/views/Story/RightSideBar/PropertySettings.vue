<template>
  <div class="property-settings">
    <settings-text></settings-text>
    <!--<settings-heading></settings-heading>-->
    <!--<settings-image></settings-image>-->
    <!--<settings-video></settings-video>-->
    <!--<settings-audio></settings-audio>-->
  </div>
</template>

<script>
  import SettingsText from "./Settings/SettingsText";
  import SettingsHeading from "./Settings/SettingsHeading";
  import SettingsImage from "./Settings/SettingsImage";
  import SettingsVideo from "./Settings/SettingsVideo";
  import SettingsAudio from "./Settings/SettingsAudio";
  export default {
    name: "property-settings",
    components: {
      SettingsAudio,
      SettingsVideo,
      SettingsImage,
      SettingsHeading,
      SettingsText
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