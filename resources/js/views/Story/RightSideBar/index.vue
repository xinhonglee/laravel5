<template>
  <div class="story-right-sidebar md-elevation-3">
    <template v-if="element">
      <h4>{{ propertyName }} Properties</h4>
      <md-divider></md-divider>
      <md-tabs class="md-transparent md-no-animation" md-dynamic-height md-border-bottom md-no-ink-bar>
        <md-tab id="tab-story-setting" md-label="SETTINGS">
          <property-settings :element="element"></property-settings>
        </md-tab>
        <md-tab id="tab-story-design" md-label="DESIGN">
          <property-design :element="element"></property-design>
        </md-tab>
        <md-tab id="tab-story-animation" md-label="ANIMATION">
          <property-animation :element="element"></property-animation>
        </md-tab>
      </md-tabs>
    </template>
  </div>
</template>

<script>
  import PropertySettings from "./PropertySettings";
  import PropertyDesign from "./PropertyDesign";
  import PropertyAnimation from "./PropertyAnimation";
  import utils from '../utils';

  export default {
    name: "story-right-side-bar",
    components: {
      PropertyAnimation,
      PropertyDesign,
      PropertySettings
    },
    data () {
      return {
        propertyName: '',
      }
    },
    methods: {
      getPropertyName(slug) {
        const element = utils.getElement(slug);
        return element ? element.name : '';
      },
    },
    computed: {
      element () {
        const selected = this.$store.state.story.selected;
        if (selected.element >= 0) {
          const el = this.$store.state.story.data.pages[selected.page].layers[selected.layer].elements[selected.element];
          this.propertyName = this.getPropertyName(el.type);
          return el;
        }
        return null;
      },
    }
  }
</script>

<style scoped>

</style>