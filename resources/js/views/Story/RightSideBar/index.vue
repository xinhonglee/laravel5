<template>
  <div class="story-right-sidebar md-elevation-3">
    <h4>{{ propertyName }} Properties</h4>
    <md-divider></md-divider>
    <md-tabs class="md-transparent" md-alignment="centered">
      <md-tab id="tab-story-setting" md-label="SETTINGS"></md-tab>
      <md-tab id="tab-story-design" md-label="DESIGN"></md-tab>
      <md-tab id="tab-story-animation" md-label="ANIMATION"></md-tab>
    </md-tabs>
  </div>
</template>

<script>
  export default {
    name: "story-right-side-bar",
    data() {
      return {
        propertyName: 'Rich Text'
      }
    }
  }
</script>

<style scoped>

</style>