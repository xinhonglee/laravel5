<template>
  <div class="story-left-sidebar md-elevation-3">
    <template v-if="story.data.pages.length > 0">
      <h4>Page {{ story.selected.page + 1 }} of {{ story.data.pages.length }}</h4>
      <md-divider></md-divider>
      <div class="template-list">
        <template v-for="(layer, index) in story.data.pages[story.selected.page].layers">
          <page-layer :layer="layer"
                      :layerIndex="index"
                      :pageIndex="story.selected.page">
          </page-layer>
        </template>
      </div>
      <md-button class="md-fab md-primary" @click="showDialog = true">
        <md-icon>add</md-icon>
      </md-button>
      <md-dialog :md-active.sync="showDialog">
        <md-dialog-title>Add a new layer</md-dialog-title>

        <md-dialog-content>
          <div class="layer-templates-list">
            <div class="layer-template"
                 v-for="(template, index) in layerTemplates"
                 @click="selectedLayer = index"
                 :key="index">
              <div class="layer-template-image"
                   :class="selectedLayer === index ? 'selected md-elevation-7' : ''"
                   :style="{backgroundImage: 'url(' + template.image_url + ')'}">
              </div>
              <p>{{ template.name }}</p>
            </div>
          </div>
        </md-dialog-content>

        <md-dialog-actions>
          <md-button class="md-primary" @click="showDialog = false">Close</md-button>
          <md-button class="md-primary" @click="addLayer">Add</md-button>
        </md-dialog-actions>
      </md-dialog>
    </template>
    <md-dialog-confirm
      :md-active.sync="showRemoveLayerDialog"
      md-title="Do you really want to remove this layer?"
      md-confirm-text="Agree"
      md-cancel-text="Disagree"
      @md-cancel="showRemoveLayerDialog = false"
      @md-confirm="removeLayer"/>
    <md-dialog-confirm
      :md-active.sync="showRemoveElementDialog"
      md-title="Do you really want to remove this element?"
      md-confirm-text="Agree"
      md-cancel-text="Disagree"
      @md-cancel="showRemoveElementDialog = false"
      @md-confirm="removeElement"/>
  </div>
</template>

<script>
  import constants from '../constants';
  import PageLayer from "./PageLayer";

  const tempLayer = {
    id: '',
    template: 'thirds',
    styles: {},
    elements: [
      {
        'grid-area': 'upper-third',
        type: 'richtext',
      },
      {
        'grid-area': 'middle-third',
        type: '',
      },
      {
        'grid-area': 'lower-third',
        type: 'richtext',
      }
    ],
  };

  export default {
    name: "story-left-side-bar",
    components: { PageLayer },
    data () {
      return {
        showDialog: false,
        layerTemplates: constants.layerTemplates,
        showRemoveLayerDialog: false,
        showRemoveElementDialog: false,
        selectedLayer: -1,
        removeLayerIndex: -1,
        removeElementIndex: -1,
      }
    },
    methods: {
      addLayer () {
        let pages = this.story.data.pages;
        pages[this.story.selected.page].layers.push(tempLayer);
        this.$store.dispatch('saveAMPStory', {
          data: {
            pages: pages
          },
          publish: false
        });

        this.showDialog = false;
      },
      removeLayer () {
        let pages = this.story.data.pages;
        pages[this.story.selected.page].layers.splice(this.removeLayerIndex, 1);
        this.$store.dispatch('saveAMPStory', {
          data: {
            pages: pages
          },
          publish: false
        });
        this.$store.dispatch('selectAMPStory', {
          page: this.story.selected.page,
          layer: -1,
          element: -1,
        });
      },
      removeElement () {
        let pages = this.story.data.pages;
        pages[this.story.selected.page].layers[this.removeLayerIndex].elements.splice(this.removeElementIndex, 1);
        this.$store.dispatch('saveAMPStory', {
          data: {
            pages: pages
          },
          publish: false
        });
        this.$store.dispatch('selectAMPStory', {
          page: this.story.selected.page,
          layer: -1,
          element: -1,
        });
      }
    },
    mounted () {
      Vue.$on("remove:layer", (index) => {
        this.removeLayerIndex = index;
        this.showRemoveLayerDialog = true;
      });
      Vue.$on("remove:element", (data) => {
        this.removeLayerIndex = data.layerIndex;
        this.removeElementIndex = data.elementIndex;
        this.showRemoveElementDialog = true;
      });
    },
    computed: {
      story () {
        return this.$store.state.story;
      },
    },
    beforeDestroy () {
      Vue.$off("remove:layer");
      Vue.$off("remove:element");
    }
  }
</script>

<style scoped>
  .layer-templates-list {
    display: flex;
  }

  .layer-template {
    display: inline-block;
    float: left;
    width: 120px;
    padding: 5px;
    text-align: center;
  }

  .layer-template-image {
    width: 100%;
    height: 180px;
    margin-bottom: 10px;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
  }

  .layer-template-image:hover {
    box-shadow: 0px 1px 10px 2px rgba(0, 0, 0, 0.2);
  }
</style>