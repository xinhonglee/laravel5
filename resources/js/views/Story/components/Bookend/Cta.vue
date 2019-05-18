<template>
    <div>
        <md-field>
            <label>Button Text</label>
            <md-input v-model="text" placeholder=""></md-input>
        </md-field>
        <md-field>
            <label>Button Url</label>
            <md-input v-model="url" placeholder=""></md-input>
        </md-field>
    </div>
</template>

<script>
  export default {
    name: "bookend-cta",
    data() {
      return {
        text: '',
        url: ''
      }
    },
  }
</script>

<style scoped>

</style>