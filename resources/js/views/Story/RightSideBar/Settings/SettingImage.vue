<template>
  <div>
    <md-field>
      <label>Id</label>
      <md-input v-model="id"></md-input>
    </md-field>
    <md-field>
      <label>Class</label>
      <md-input v-model="eClass"></md-input>
    </md-field>
    <md-field>
      <label>Image URL</label>
      <md-input v-model="src"></md-input>
    </md-field>
  </div>
</template>

<script>
  export default {
    name: "setting-image",
    data () {
      return {
        id: '',
        eClass: '',
        src: '',
      }
    },
  }
</script>

<style scoped>

</style>