<template>
  <div>
    <story-left-side-bar></story-left-side-bar>
    <div class="story-view">

    </div>
    <story-right-side-bar></story-right-side-bar>
  </div>
</template>

<script>
  import StoryLeftSideBar from "./LeftSideBar/index";
  import StoryRightSideBar from "./RightSideBar/index";
  export default {
    name: "story-edit",
    components: { StoryRightSideBar, StoryLeftSideBar },
  }
</script>

<style scoped>

</style>