<template>
  <header class="app-header navbar">
    <b-link class="navbar-brand" to="/backoffice">
      <img src="/assets/logo.png"/>
    </b-link>
    <span class="navbar-title">
      POSS | STORIES
    </span>
    <b-navbar-nav class="ml-auto">
      <HeaderDropdownAccnt/>
    </b-navbar-nav>
  </header>
</template>

<script>
  import HeaderDropdownAccnt from './HeaderDropdownAccnt.vue';

  export default {
    name: 'app-header',

    components: {
      HeaderDropdownAccnt
    },
  }
</script>

<style scoped>

</style>