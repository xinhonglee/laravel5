<template>
  <div>
    <story-left-side-bar></story-left-side-bar>
    <div class="story-page-view md-elevation-3">
    <!--<iframe src="https://mic.com/stories/327/what-happens-in-your-brain-when-you-listen-to-music"-->
              <!--width="100%" height="100%"></iframe>-->
    </div>
    <story-right-side-bar></story-right-side-bar>
  </div>
</template>

<script>
  import StoryLeftSideBar from "./LeftSideBar/index";
  import StoryRightSideBar from "./RightSideBar/index";
  export default {
    name: "story-edit",
    components: {
      StoryRightSideBar,
      StoryLeftSideBar,
    },
    mounted() {
      // select page action
      this.$store.dispatch('selectAMPStory', {
        page: 0,
        layer: -1,
        element: -1,
      });
    },
    methods: {
    }
  }
</script>

<style scoped>

</style>