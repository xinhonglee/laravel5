<template>
  <div class="app">
    <template v-if="showEditableHeader">
      <app-editable-header></app-editable-header>
    </template>
    <template v-else>
      <app-header></app-header>
    </template>
    <div class="app-body">
      <template v-if="showAppFilter">
        <app-filter></app-filter>
      </template>
      <template v-if="showAppSiderbar">
        <app-sidebar></app-sidebar>
      </template>
      <div class="app-content" :class="showAppSiderbar ? 'sidebar' : ''">
        <router-view></router-view>
      </div>
    </div>
  </div>
</template>

<script>
  import AppHeader from "../components/Header/Header";
  import AppFilter from "../components/Filter/Filter";
  import AppSidebar from "../components/Sidebar/Sidebar";
  import AppEditableHeader from "../components/Header/EditableHeader";

  export default {
    name: "main-container",
    components: {
      AppEditableHeader,
      AppHeader,
      AppSidebar,
      AppFilter
    },
    computed: {
      showAppFilter () {
        return [
          'Videos',
          'Stories'
        ].includes(this.$route.name);
      },
      showEditableHeader() {
        return [
          'Video',
          'Story'
        ].includes(this.$route.name);
      },
      showAppSiderbar() {
        return [
          'Videos',
          'Stories',
          'Admin',
          'Analytics'
        ].includes(this.$route.name);
      },
    }
  }
</script>

<style scoped>

</style>