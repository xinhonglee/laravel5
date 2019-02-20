<template>
  <div class="story-left-sidebar md-elevation-3">
    <h4>Page {{ story.selected.page + 1 }} of {{ story.data.pages.length }}</h4>
    <md-divider></md-divider>
    <div class="template-list">
      <template v-for="(layer, index) in pageLayers">
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
        gridArea: 'upper-third',
        type: 'richtext',
      },
      {
        gridArea: 'middle-third',
        type: 'richtext',
      },
      {
        gridArea: 'lower-third',
        type: 'richtext',
      }
    ],
  };

  export default {
    name: "story-left-side-bar",
    components: { PageLayer },
    data () {
      return {
        pageLayers: [
          tempLayer
        ],
        showDialog: false,
        layerTemplates: constants.layerTemplates,
        selectedLayer: -1,
      }
    },
    methods: {
      addLayer () {
        this.pageLayers.push(tempLayer);
        this.showDialog = false;
      },
      removeLayer () {
        return false;
      },
    },
    computed: {
      story () {
        return this.$store.state.story;
      },
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