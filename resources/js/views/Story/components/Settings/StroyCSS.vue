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
      }
    },
    computed: {
      css: {
        get () {
          if (!_.isNil(this.$store.state.story)) {
            return this.$store.state.story.data.css;
          }
          return '';
        },
        set: _.debounce(function (value) {
          if (this.css !== value)
            Vue.$emit('story:settings', { css: value });
        }, 2000)
      },
    },
    watch: {
      css(value) {
        if(value) {
          const lines = value.split(/\r*\n/);
          this.lines = lines.length;
        }
      },
    }
  }
</script>

<style scoped>

</style>