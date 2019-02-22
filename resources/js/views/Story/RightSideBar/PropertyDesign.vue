<template>
  <div class="property-design">
    <template v-if="element">
      <design-rich-text v-if="this.element.type === 'richtext'" :el="element"></design-rich-text>
      <design-image v-if="this.element.type === 'img'" :el="element"></design-image>
      <design-audio v-if="this.element.type === 'audio'" :el="element"></design-audio>
      <design-video v-if="this.element.type === 'video'" :el="element"></design-video>
    </template>
  </div>
</template>

<script>
  import DesignImage from "./Designs/DesignImage";
  import DesignAudio from "./Designs/DesignAudio";
  import DesignVideo from "./Designs/DesignVideo";
  import DesignRichText from "./Designs/DesignRichText";
  export default {
    name: "property-design",
    components: {
      DesignRichText,
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