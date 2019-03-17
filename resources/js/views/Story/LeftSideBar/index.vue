<template>
  <div class="story-left-sidebar md-elevation-3">
    <template v-if="story.data.pages.length > 0 && story.selected.page >= 0">
      <div class="sidebar-header">
        <span class="title">
          Page {{ story.selected.page + 1 }} of {{ story.data.pages.length }}
        </span>
        <div class="btn-more" @click="showPageTools = !showPageTools">
          <md-icon>more_vert</md-icon>
        </div>
        <div class="page-tools md-elevation-3" v-if="showPageTools">
          <ul>
            <li @click="duplicatePage">Duplicate</li>
            <li @click="showRemovePageDialog=true">Remove</li>
          </ul>
        </div>
      </div>
      <md-divider></md-divider>
      <div class="template-list">
        <template v-if="story.data.pages[story.selected.page]">
          <page-layer
            v-for="(layer, index) of story.data.pages[story.selected.page].layers"
            :layer="layer"
            :layerIndex="index"
            :pageIndex="story.selected.page"
            :key="index"
          >
          </page-layer>
        </template>
      </div>
      <md-button class="md-fab md-primary" @click="showDialog = true">
        <md-icon>add</md-icon>
      </md-button>
    </template>
    <md-dialog :md-active.sync="showDialog">
      <md-dialog-title>Add a new layer</md-dialog-title>
      <md-dialog-content>
        <div class="layer-templates-list">
          <div class="layer-template"
               v-for="(template, index) in layerTemplates"
               @click="selectedLayer = index"
               :key="index">
            <div class="layer-template-image"
                 :class="{'selected md-elevation-7' : selectedLayer === index}"
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
    <md-dialog-confirm
      :md-active.sync="showRemovePageDialog"
      md-title="Do you really want to remove this page?"
      md-confirm-text="Agree"
      md-cancel-text="Disagree"
      @md-cancel="showRemoveLayerDialog = false"
      @md-confirm="removePage"/>
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
  import constants from '../../constants';
  import PageLayer from "./PageLayer";

  export default {
    name: "story-left-side-bar",
    components: { PageLayer },
    data () {
      return {
        showDialog: false,
        layerTemplates: constants.layerTemplates,
        showRemovePageDialog: false,
        showRemoveLayerDialog: false,
        showRemoveElementDialog: false,
        selectedLayer: -1,
        removeLayerIndex: -1,
        removeElementIndex: -1,
        showPageTools: false,
      }
    },
    methods: {
      /**
       * duplicate selected page
       */
      duplicatePage () {
        const pages = Object.assign([], this.story.data.pages);
        const id = Date.now();
        pages.push({ ...pages[this.story.selected.page], id: id });
        this.$store.dispatch('saveAMPStory', {
          data: {
            pages: pages,
          },
          publish: false
        });
        this.$store.dispatch('selectAMPStory', {
          page: pages.length - 1,
          layer: -1,
          element: -1,
        });
        Vue.$emit("duplicate:page", id);
        this.showPageTools = false;
      },
      /**
       * remove selected page from story
       */
      removePage () {
        const pages = Object.assign([], this.story.data.pages);
        pages.splice(this.story.selected.page, 1);
        this.$store.dispatch('saveAMPStory', {
          data: {
            pages: pages
          },
          publish: false
        });
        this.$store.dispatch('selectAMPStory', {
          page: -1,
          layer: -1,
          element: -1,
        });
        this.showPageTools = false;
      },
      /**
       * add new layer to the selected page
       */
      addLayer () {
        const pages = Object.assign([], this.story.data.pages);
        pages[this.story.selected.page].layers.push(this.layerTemplates[this.selectedLayer].data);
        this.$store.dispatch('saveAMPStory', {
          data: {
            pages: pages
          },
          publish: false
        });
        this.$store.dispatch('selectAMPStory', {
          page: this.story.selected.page,
          layer: (pages[this.story.selected.page].layers.length - 1),
          element: -1,
        });
        this.showDialog = false;
      },
      /**
       * remove selected layer from selected page
       */
      removeLayer () {
        const pages = Object.assign([], this.story.data.pages);
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
      /**
       * remove selected element from selected layer
       */
      removeElement () {
        const pages = Object.assign([], this.story.data.pages);
        if (pages[this.story.selected.page].layers[this.removeLayerIndex].template !== 'thirds') {

          pages[this.story.selected.page].layers[this.removeLayerIndex].elements.splice(this.removeElementIndex, 1);

        } else { // in case of selected template thirds, it should be keep grid-area info

          const gridArea = pages[this.story.selected.page].layers[this.removeLayerIndex].elements[this.removeElementIndex]['grid-area'];

          pages[this.story.selected.page].layers[this.removeLayerIndex].elements[this.removeElementIndex] = {
            'grid-area': gridArea,
            type: '',
            properties: {}
          }
        }
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
      // remove layer emit receiver from PageLayer Component
      Vue.$on("remove:layer", (index) => {
        this.removeLayerIndex = index;
        this.showRemoveLayerDialog = true;
      });
      // remove element emit receiver from PageLayer Component
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
</style>