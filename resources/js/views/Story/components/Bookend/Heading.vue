<template>
    <div>
        <md-field>
            <label>Text</label>
            <md-input v-model="heading" placeholder="Read More"></md-input>
        </md-field>
    </div>
</template>

<script>
  export default {
    name: "bookend-heading",
    data() {
      return {
        heading: ''
      }
    }
  }
</script>

<style scoped>

</style>