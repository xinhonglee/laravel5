<template>
  <div>
    <md-field>
      <label>Width</label>
      <md-input v-model="width"></md-input>
    </md-field>
    <md-field>
      <label>Height</label>
      <md-input v-model="height"></md-input>
    </md-field>
    <md-field>
      <label>Layout</label>
      <md-select v-model="layout">
        <md-option v-for="(opt, index) in layoutOptions" :value="opt.slug" :key="index">
          {{ opt.name }}
        </md-option>
      </md-select>
    </md-field>
  </div>
</template>

<script>
  import constants from '../../constants';
  export default {
    name: "design-image",
    data() {
      return {
        width: '',
        height: '',
        layout: '',
        layoutOptions: constants.elementLayouts
      }
    },
  }
</script>

<style scoped>

</style>