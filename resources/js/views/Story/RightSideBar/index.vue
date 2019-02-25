<template>
  <div class="story-right-sidebar md-elevation-3">
    <template v-if="element && element.type">
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
      getPropertyName (slug) {
        const element = utils.getElement(slug);
        return element ? element.name : '';
      },
    },
    mounted () {
      Vue.$on('setting:properties', (data) => {
        const element = _deepmerge(this.element, data);
        console.log(">>>>>>>>>>>>>>");
        console.log(element);

        const pages = this.$store.state.story.data.pages;
        const selected = this.$store.state.story.selected;
        pages[selected.page].layers[selected.layer].elements[selected.element] = element;
        this.$store.dispatch('saveAMPStory', {
          data: {
            pages: pages
          },
          publish: false
        });
      });
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
    },
    beforeDestroy () {
      Vue.$off('setting:properties');
    },
  }
</script>

<style scoped>

</style>