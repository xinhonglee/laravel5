<template>
  <div class="property-design">
    <template v-if="element">
      <design-image v-if="this.element === 'img'"></design-image>
      <design-audio v-if="this.element === 'audio'"></design-audio>
      <design-video v-if="this.element === 'video'"></design-video>
    </template>
  </div>
</template>

<script>
  import DesignImage from "./Designs/DesignImage";
  import DesignAudio from "./Designs/DesignAudio";
  import DesignVideo from "./Designs/DesignVideo";
  export default {
    name: "property-design",
    components: {
      DesignVideo,
      DesignAudio,
      DesignImage,
    },
    props: {
      element: String
    },
  }
</script>

<style scoped>

</style>