<template>
  <div class="page-layer">
    <div class="layer-template"
         :class="isLayerSelected() ? 'selected' : ''"
         @click="selectLayer">
      <img class="template-icon" :src="getLayerTemplateImage(layer.template)" alt="No Icon"/>
      <div class="template-name">{{ getLayerTemplateName(layer.template)}} Template</div>
      <div class="btn-remove" @click="removeLayer">
        <md-icon>delete_outline</md-icon>
      </div>
    </div>
    <div class="layer-elements">
      <div class="element" v-for="(element, index) of layer.elements" :key="index">
        <template v-if="isGridArea(layer.template)">
          <div class="element-grid-area" v-html="getGridAreaName(element['grid-area'])"></div>
        </template>
        <div class="element-type"
             :class="isElementSelected(index) ? 'selected' : ''"
             @click="selectElement(index)">
          [ <span>{{ getElementName(element.type)}}</span> ]
          <div class="btn-remove" @click="removeElement(index)">
            <md-icon>delete_outline</md-icon>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import utils from '../../utils';

  export default {
    name: "page-layers",
    props: {
      layer: Object,
      layerIndex: Number,
      pageIndex: Number,
    },
    data () {
      return {
        toggleSetting: false,
        layerTemplate: null,
        layerElements: null,
      }
    },
    methods: {
      /**
       * remove element
       *
       * @param elementIndex
       */
      removeElement (elementIndex) {
        Vue.$emit("remove:element", {
          layerIndex: this.layerIndex,
          elementIndex: elementIndex,
        });
      },

      /**
       * remove layer
       */
      removeLayer () {
        Vue.$emit("remove:layer", this.layerIndex);
      },

      /**
       * current layer is selected ?
       *
       * @returns {boolean}
       */
      isLayerSelected () {
        if (this.$store.state.story.selected.page !== this.pageIndex) {
          return false;
        }
        if (this.$store.state.story.selected.layer !== this.layerIndex) {
          return false;
        }
        if (this.$store.state.story.selected.element >= 0) {
          return false;
        }
        return true;
      },

      /**
       * current element is selected by index
       *
       * @param index
       * @returns {boolean}
       */
      isElementSelected (index) {
        if (this.$store.state.story.selected.page !== this.pageIndex) {
          return false;
        }
        if (this.$store.state.story.selected.layer !== this.layerIndex) {
          return false;
        }
        if (this.$store.state.story.selected.element !== index) {
          return false;
        }
        return true;
      },

      /**
       * select layer
       *
       * @param index
       */
      selectLayer (index) {
        this.$store.dispatch('selectAMPStory', {
          page: this.pageIndex,
          layer: this.layerIndex,
          element: -1,
        });
      },

      /**
       * select element
       *
       * @param index
       */
      selectElement (index) {
        this.$store.dispatch('selectAMPStory', {
          page: this.pageIndex,
          layer: this.layerIndex,
          element: index,
        });
      },

      /**
       * get Layer Template name by slug
       *
       * @param slug
       * @returns {string}
       */
      getLayerTemplateName (slug) {
        const template = utils.getLayerTemplate(slug);
        return template ? template.name : '';
      },

      /**
       * get Layer Template Image by slug
       *
       * @param slug
       * @returns {string}
       */
      getLayerTemplateImage (slug) {
        const template = utils.getLayerTemplate(slug);
        return template ? template.image_url : '';
      },

      /**
       * get Element name by slug
       *
       * @param slug
       * @returns {string}
       */
      getElementName (slug) {
        const element = utils.getElement(slug);
        return element ? element.name : '';
      },

      /**
       * get GridArea name by slug
       *
       * @param slug
       * @returns {string}
       */
      getGridAreaName (slug) {
        const grid = utils.getGridArea(slug);
        return grid ? grid.name : '';
      },

      /**
       * whether current element is in GridArea on thirds Template
       *
       * @param slug
       * @returns {*}
       */
      isGridArea (slug) {
        return utils.isGridArea(slug)
      },
    },
  }
</script>

<style scoped>

</style>