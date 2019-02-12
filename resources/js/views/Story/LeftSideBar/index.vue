<template>
  <div class="story-left-sidebar md-elevation-3">
    <h4>Page {{ activePage }} of {{ totalPages }}</h4>
    <md-divider></md-divider>
    <div class="template-list">
      <template v-for="(layer, index) in pageLayers">
        <page-layer :layer="layer"></page-layer>
      </template>
    </div>
    <md-button class="md-fab md-primary" @click="addLayer">
      <md-icon>add</md-icon>
    </md-button>
  </div>
</template>

<script>
  import PageLayer from "./PageLayer";
  const tempLayer = {
    id: '',
    name: 'Thirds Template',
    icon: '/assets/phone-3.png',
    styles: {},
    elements: [
      {
        name: 'Upper Third',
        value: '',
        type: 'Rich Text',
        styles: {},
      },
      {
        name: 'Middle Third',
        value: '',
        type: 'Rich Text',
        styles: {},
      },
      {
        name: 'Bottom Third',
        value: '',
        type: 'Rich Text',
        styles: {},
      }
    ]
  };

  import AMP from '../constants';

  export default {
    name: "story-left-side-bar",
    components: { PageLayer },
    data () {
      return {
        activePage: 1,
        totalPages: 6,
        pageLayers: [
          tempLayer
        ]
      }
    },
    methods: {
      addLayer () {
        this.pageLayers.push(tempLayer);

        return false;
      },
      removeLayer () {
        return false;
      },
    }
  }
</script>

<style scoped>

</style>