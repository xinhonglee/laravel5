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
      <label>Video URL</label>
      <md-input v-model="property.src"></md-input>
    </md-field>
    <md-field>
      <label>Video AutoPlay</label>
      <md-input v-model="property.autoplay"></md-input>
    </md-field>
    <md-field>
      <label>Video Loop</label>
      <md-input v-model="property.loop"></md-input>
    </md-field>
  </div>
</template>

<script>
  export default {
    name: "setting-video",
    data () {
      return {
        property: {
          id: '',
          class: '',
          src: '',
          loop: '',
          autoplay: ''
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