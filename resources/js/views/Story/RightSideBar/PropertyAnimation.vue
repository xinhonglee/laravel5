<template>
  <div class="property-animation">
    <md-field>
      <label>Animation In</label>
      <md-input v-model="animationIn"></md-input>
    </md-field>
    <md-field>
      <label>Animation In Duration</label>
      <md-input v-model="animationInDuration"></md-input>
    </md-field>
    <md-field>
      <label>Animation In Delay</label>
      <md-input v-model="animationInDelay"></md-input>
    </md-field>
    <md-field>
      <label>Animation In After</label>
      <md-input v-model="animationInAfter"></md-input>
    </md-field>
  </div>
</template>

<script>
  export default {
    name: "property-animation",
    props: {
      element: Object
    },
    data() {
      return {
        animationIn: '',
        animationInDuration: '',
        animationInDelay: '',
        animationInAfter: '',
      }
    },
  }
</script>

<style scoped>

</style>