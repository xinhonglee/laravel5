<template>
  <div class="story-right-sidebar md-elevation-3">
    <template v-if="element && element.type">
      <h4>{{ propertyName }} Properties</h4>
      <md-divider></md-divider>
      <md-tabs class="md-transparent md-no-animation" md-dynamic-height md-border-bottom md-no-ink-bar>
        <md-tab id="tab-property-setting" md-label="SETTINGS">
          <property-settings :element="element"></property-settings>
        </md-tab>
        <md-tab id="tab-property-design" md-label="DESIGN">
          <property-design :element="element"></property-design>
        </md-tab>
        <md-tab id="tab-property-animation" md-label="ANIMATION">
          <property-animation :element="element"></property-animation>
        </md-tab>
      </md-tabs>
    </template>
    <template v-if="(layer && layer.template) || (element && element['grid-area'] && !element.type)">
      <h4>New element</h4>
      <md-divider></md-divider>
      <elements></elements>
    </template>
  </div>
</template>

<script>
  import PropertySettings from "./PropertySettings";
  import PropertyDesign from "./PropertyDesign";
  import PropertyAnimation from "./PropertyAnimation";
  import Elements from "./Elements";
  import utils from '../utils';

  export default {
    name: "story-right-side-bar",
    components: {
      Elements,
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
      Vue.$on('add:element', (slug) => {
        const pages = this.$store.state.story.data.pages;
        const selected = this.$store.state.story.selected;
        if (pages[selected.page].layers[selected.layer].template !== 'thirds') {
          pages[selected.page].layers[selected.layer].elements.push({ type: slug });
        } else if (selected.element >=0 ){
          const element = pages[selected.page].layers[selected.layer].elements[selected.element];
          pages[selected.page].layers[selected.layer].elements[selected.element] = {
            'grid-area': element['grid-area'],
            type: slug
          };
        } else {
          Vue.alertBox({
            title: 'Error',
            text: 'Please select a blank grid inside of the Thirds template',
            type: 'error'
          });
        }
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
      layer () {
        const selected = this.$store.state.story.selected;
        if (selected.layer >= 0 && selected.element < 0) {
          return this.$store.state.story.data.pages[selected.page].layers[selected.layer];
        }
        return null;
      },
    },
    beforeDestroy () {
      Vue.$off('setting:properties');
      Vue.$off('add:element');
    },
  }
</script>

<style scoped>

</style>