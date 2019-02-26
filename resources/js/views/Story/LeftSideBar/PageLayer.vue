<template>
  <div class="page-layer">
    <div class="layer-template">
      <img class="template-icon" :src="getLayerTemplateImage(layer.template)" alt="No Icon"/>
      <div class="template-name">{{ getLayerTemplateName(layer.template)}} Template</div>
      <div class="btn-remove" @click="removeLayer(layerIndex)"><md-icon>delete_outline</md-icon></div>
    </div>
    <div class="layer-elements">
      <div class="element" v-for="(element, index) of layer.elements" :key="index">
        <template v-if="isGridArea(layer.template)">
          <div class="element-grid-area" v-html="getGridAreaName(element['grid-area'])"></div>
        </template>
        <div class="element-type"
             :class="isSelected(index) ? 'selected' : ''"
             @click="selectElement(index)">
          [<span>{{ getElementName(element.type)}}</span>]
          <div class="btn-remove" @click="removeElement(layerIndex, index)"><md-icon>delete_outline</md-icon></div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import constants from '../constants';
  import utils from '../utils';

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
      addElement () {
        return false;
      },
      changeElement () {
        return false;
      },
      removeElement (layerIndex, elementIndex) {
        Vue.$emit("remove:element", {
          layerIndex: layerIndex,
          elementIndex: elementIndex,
        });
      },
      removeLayer (index) {
        Vue.$emit("remove:layer", index);
      },
      isSelected (index) {
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
      selectElement (index) {
        this.$store.dispatch('selectAMPStory', {
          page: this.pageIndex,
          layer: this.layerIndex,
          element: index,
        });
      },
      getLayerTemplateName (slug) {
        const template = utils.getLayerTemplate(slug);
        return template ? template.name : '';
      },
      getLayerTemplateImage (slug) {
        const template = utils.getLayerTemplate(slug);
        return template ? template.image_url : '';
      },
      getElementName (slug) {
        const element = utils.getElement(slug);
        return element ? element.name : '';
      },
      getGridAreaName (slug) {
        const grid = utils.getGridArea(slug);
        return grid ? grid.name : '';
      },
      isGridArea (slug) {
        return utils.isGridArea(slug)
      },
    },
  }
</script>

<style scoped>

</style>