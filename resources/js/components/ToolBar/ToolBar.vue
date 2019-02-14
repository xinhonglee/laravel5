<template>
  <div class="app-toolbar md-elevation-4">
    <div class="page-index">
      <md-tabs class="md-transparent">
        <md-tab :id="index.toString()" :md-label="(index + 1).toString()" v-for="(page, index) in pages" :key="index"></md-tab>
      </md-tabs>
    </div>
    <ul class="page-tools">
      <li @click="addNewPage">+ Add a new page</li>
      <li>Page structure...</li>
      <li>Save current page as model</li>
    </ul>
    <md-dialog :md-active.sync="showDialog">
      <md-dialog-title>Add a new page</md-dialog-title>

      <div>
        test
      </div>

      <md-dialog-actions>
        <md-button class="md-primary" @click="showDialog = false">Close</md-button>
        <md-button class="md-primary" @click="showDialog = false">Save</md-button>
      </md-dialog-actions>
    </md-dialog>
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
          {id: '7', name: 'test'},
          {id: '8', name: 'test'},
         ],
        showDialog: false
      }
    },
    methods: {
      addNewPage() {
        this.showDialog = true;
        return false;
      }
    }
  }
</script>

<style scoped>

</style>