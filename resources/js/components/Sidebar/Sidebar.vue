<template>
  <div class="app-sidebar">
      <md-list class="md-transparent">
        <md-list-item>
          <md-icon>stay_current_portrait</md-icon>
          <span class="md-list-item-text">STORIES</span>
        </md-list-item>
        <md-list-item>
          <md-icon>video_library</md-icon>
          <span class="md-list-item-text">VIDEOS</span>
        </md-list-item>
        <md-list-item class="border-list-item py-3 my-3">
          <md-icon>bar_chart</md-icon>
          <span class="md-list-item-text">Analytics</span>
        </md-list-item>
        <md-list-item>
          <md-icon>settings</md-icon>
          <span class="md-list-item-text">Admin</span>
        </md-list-item>
      </md-list>
  </div>
</template>

<script>
  export default {
    name: "app-sidebar"
  }
</script>

<style scoped>

</style>