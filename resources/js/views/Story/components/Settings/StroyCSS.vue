<template>
  <div class="code-editor">
    <div class="code-editor_index">
      <div v-for="i in lines">{{i}}</div>
    </div>
    <textarea v-model="css"></textarea>
  </div>
</template>

<script>
  export default {
    name: "story-css",
    data() {
      return {
        lines: 1,
        css: '',
      }
    },
    mounted() {
      if (this.$store.state.story) {
        this.css = this.$store.state.story.data.css;
      }
    },
    watch: {
      css(value) {
          const lines = value.split(/\r*\n/);
          this.lines = lines.length;
          Vue.$emit('story:settings', { css: value });
      },
    }
  }
</script>

<style scoped>

</style>