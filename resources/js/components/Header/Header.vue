<template>
  <header class="app-header navbar">
    <b-link class="navbar-brand" to="/backoffice">
      <img src="/assets/logo.png"/>
    </b-link>
    <div class="navbar-title">
      <h4 class="m-0">POSS | {{ title }}</h4>
    </div>
    <b-navbar-nav class="ml-auto">
      <HeaderDropdownAccnt/>
    </b-navbar-nav>
  </header>
</template>

<script>
  import HeaderDropdownAccnt from './HeaderDropdownAccnt.vue';

  export default {
    name: 'app-header',

    data () {
      return {

      }
    },

    components: {
      HeaderDropdownAccnt
    },

    computed: {
      title() {
          return this.$store.state.app.title;
      }
    },
  }
</script>

<style scoped>

</style>