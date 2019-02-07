<template>
  <div class="page-layer">
    <div class="layer-property">
      <img class="property-icon" :src="layer.icon" alt="No Icon"/>
      <div class="property-name">{{ layer.name }}</div>
    </div>
    <div class="layer-setting">
      <span @click="toggleSetting = !toggleSetting"><md-icon>settings</md-icon></span>
      <div class="setting-pane md-elevation-3" v-if="toggleSetting">
         <b-link @click="remove">Remove</b-link>
      </div>
    </div>
    <div class="layer-elements">
      <div class="element" v-for="(element, index) of layer.elements" :key="index">
        <div class="element-name" v-html="element.name"></div>
        <div class="element-type">[ {{ element.type }} ]</div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "page-layer",
    props: {
      layer: Object
    },
    data () {
      return {
        toggleSetting: false
      }
    },
    methods: {
      remove() {
        return false;
      }
    }
  }
</script>

<style scoped>

</style>