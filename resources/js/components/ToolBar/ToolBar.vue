<template>
  <div class="app-toolbar md-elevation-4">
    <div class="page-index">
      <md-tabs class="md-transparent">
        <md-tab :id="index.toString()" :md-label="(index + 1).toString()" v-for="(page, index) in pages" :key="index"></md-tab>
      </md-tabs>
    </div>
    <ul class="page-tools">
      <li>+ Add a new page</li>
      <li>Page structure...</li>
      <li>Save current page as model</li>
    </ul>
  </div>
</template>

<script>
  export default {
    name: "app-toolbar",
    data() {
      return {
        pages: [
          {id: '1', name: 'test'},
          {id: '2', name: 'test'},
          {id: '3', name: 'test'},
          {id: '4', name: 'test'},
          {id: '5', name: 'test'},
          {id: '6', name: 'test'},
        ],

      }
    }
  }
</script>

<style scoped>

</style>