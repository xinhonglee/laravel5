<template>
  <div class="page-layer">
    <div class="layer-property">
      <img class="property-icon" :src="layer.icon" alt="No Icon"/>
      <div class="property-name">{{ layer.name }}</div>
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
    data () {
      return {
        layer: {
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
        }
      }
    }
  }
</script>

<style scoped>

</style>