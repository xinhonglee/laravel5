<template>
  <div class="property-settings">
    <template v-if="element">
      <setting-rich-text v-if="this.element === 'richtext'"></setting-rich-text>
      <setting-image v-if="this.element === 'img'"></setting-image>
      <setting-video v-if="this.element === 'video'"></setting-video>
      <setting-audio v-if="this.element === 'audio'"></setting-audio>
    </template>
  </div>
</template>

<script>
  import SettingRichText from "./Settings/SettingRichText";
  import SettingImage from "./Settings/SettingImage";
  import SettingVideo from "./Settings/SettingVideo";
  import SettingAudio from "./Settings/SettingAudio";
  export default {
    name: "property-settings",
    components: {
      SettingAudio,
      SettingVideo,
      SettingImage,
      SettingRichText
    },
    props: {
      element: String
    },
    methods: {
    },
  }
</script>

<style scoped>

</style>