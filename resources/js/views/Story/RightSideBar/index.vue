<template>
  <div class="story-right-sidebar md-elevation-3">
    <h4>{{ propertyName }} Properties</h4>
    <md-divider></md-divider>
    <md-tabs class="md-transparent md-no-animation" md-alignment="centered" md-dynamic-height md-border-bottom md-no-ink-bar>
      <md-tab id="tab-story-setting" md-label="SETTINGS">
        <property-settings></property-settings>
      </md-tab>
      <md-tab id="tab-story-design" md-label="DESIGN">
        <property-design></property-design>
      </md-tab>
      <md-tab id="tab-story-animation" md-label="ANIMATION">
        <property-animation></property-animation>
      </md-tab>
    </md-tabs>
  </div>
</template>

<script>
  import PropertySettings from "./PropertySettings";
  import PropertyDesign from "./PropertyDesign";
  import PropertyAnimation from "./PropertyAnimation";
  export default {
    name: "story-right-side-bar",
    components: { PropertyAnimation, PropertyDesign, PropertySettings },
    data() {
      return {
        propertyName: 'Rich Text',
      }
    }
  }
</script>

<style scoped>

</style>