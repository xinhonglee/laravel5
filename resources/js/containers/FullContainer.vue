<template>
  <div class="app">
    <app-header></app-header>
    <div class="app-body">
      <app-filter></app-filter>
      <app-sidebar></app-sidebar>
      <div class="app-content">
        <router-view></router-view>
      </div>
    </div>
  </div>
</template>

<script>
  import AppHeader from "../components/Header/Header";
  import AppFilter from "../components/Filter/Filter";
  import AppSidebar from "../components/Sidebar/Sidebar";

  export default {
    name: "Full",
    components: {
      AppHeader,
      AppSidebar,
      AppFilter
    }
  }
</script>

<style scoped>
  .app-body {
    background: #d9d9d9;
  }
</style>