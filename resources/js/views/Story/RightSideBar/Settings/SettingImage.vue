<template>
  <div>
    <md-field>
      <label>Id</label>
      <md-input v-model="property.id"></md-input>
    </md-field>
    <md-field>
      <label>Class</label>
      <md-input v-model="property.class"></md-input>
    </md-field>
    <md-field>
      <label>Image URL</label>
      <md-input v-model="property.src"></md-input>
    </md-field>
  </div>
</template>

<script>
  export default {
    name: "setting-image",
    data () {
      return {
        property: {
          id: '',
          class: '',
          src: '',
        },
      }
    },
    watch: {
      property: {
        handler(property) {
          Vue.$emit('setting:properties', property);
        },
        deep: true
      },
    }
  }
</script>

<style scoped>

</style>