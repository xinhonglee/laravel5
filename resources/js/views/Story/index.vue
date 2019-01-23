<template>
  <div>
    <template v-if="editable">
      <story-edit></story-edit>
    </template>
    <template v-else>
      <story-view></story-view>
    </template>
  </div>
</template>

<script>
  import StoryEdit from "./StoryEdit";
  import StoryView from "./StoryView";
  export default {
    name: "stories",
    components: { StoryView, StoryEdit },
    data() {
      return {
      }
    },
    mounted() {
      this.$store.dispatch('updateAppEditable', false);
    },
    computed: {
      editable() {
        return this.$store.state.app.editable;
      }
    }
  }
</script>

<style scoped>

</style>