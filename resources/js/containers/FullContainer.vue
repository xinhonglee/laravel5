<template>
  <div class="app">
    <app-header></app-header>
    <div class="container-fluid">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
  import AppHeader from "../components/Header/Header";
  export default {
    name: "Full",
    components: {
      AppHeader
    }
  }
</script>

<style scoped>

</style>