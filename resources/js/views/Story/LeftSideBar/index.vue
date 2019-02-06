<template>
  <div class="story-left-sidebar md-elevation-3">
    <h4>Page {{ activePage }} of {{ totalPages }}</h4>
    <md-divider></md-divider>
    <div class="template-list">
      <page-layer></page-layer>
      <page-layer></page-layer>
      <page-layer></page-layer>
    </div>
    <md-button class="md-fab md-primary">
      <md-icon>add</md-icon>
    </md-button>
  </div>
</template>

<script>
  import PageLayer from "./PageLayer";
  export default {
    name: "story-left-side-bar",
    components: { PageLayer },
    data() {
      return {
        activePage: 1,
        totalPages: 6,
      }
    }
  }
</script>

<style scoped>

</style>