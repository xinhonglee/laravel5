<template>
  <div class="property-design">
    <template v-if="element">
      <design-image v-if="this.element.type === 'img'"></design-image>
      <design-audio v-if="this.element.type === 'audio'"></design-audio>
      <design-video v-if="this.element.type === 'video'"></design-video>
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
      element: Object
    },
  }
</script>

<style scoped>

</style>