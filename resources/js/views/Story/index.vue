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
        editable: false
      }
    },
    mounted() {
      Vue.$on('content:edit', (editable) => {
        this.editable = editable;
      })
    },
    beforeDestroy() {
      Vue.$off('content:edit');
    }
  }
</script>

<style scoped>

</style>