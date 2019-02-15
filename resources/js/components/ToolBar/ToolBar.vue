<template>
  <div class="app-toolbar md-elevation-4">
    <div class="page-index">
      <md-tabs class="md-transparent">
        <md-tab :id="index.toString()" :md-label="(index + 1).toString()" v-for="(page, index) in story.data.pages"
                :key="index"></md-tab>
      </md-tabs>
    </div>
    <ul class="page-tools">
      <li @click="showDialog = true">+ Add a new page</li>
      <li>Page structure...</li>
      <li>Save current page as model</li>
    </ul>
    <md-dialog :md-active.sync="showDialog">
      <md-dialog-title>Add a new page</md-dialog-title>

      <md-dialog-content>
        <div class="page-templates">
          <div class="page-template" v-for="(template, index) in pageTemplates" :key="index" @click="selectedPage = index">
            <div class="page-template-image" :class="selectedPage === index ? 'selected md-elevation-4' : ''"
                 :style="{backgroundImage: 'url(' + template.image_url + ')'}"></div>
            <p>{{ template.name }}</p>
          </div>
        </div>
      </md-dialog-content>

      <md-dialog-actions>
        <md-button class="md-primary" @click="showDialog = false">Close</md-button>
        <md-button class="md-primary" @click="addNewPage">Add</md-button>
      </md-dialog-actions>
    </md-dialog>
  </div>
</template>

<script>
  export default {
    name: "app-toolbar",
    data () {
      return {
        pageTemplates: [
          { id: '1', name: 'Blank', image_url: '', data: [] },
          { id: '2', name: 'Title', image_url: '', data: [] },
          { id: '3', name: 'Video + Text + Context', image_url: '', data: [] },
          { id: '4', name: 'Video + Text', image_url: '', data: [] },
          { id: '5', name: 'Video + Context', image_url: '', data: [] },
          { id: '6', name: 'Video + Quote', image_url: '', data: [] }
        ],
        showDialog: false,
        selectedPage: -1,
      }
    },
    methods: {
      addNewPage () {
        if(this.selectedPage < 0) {
          Vue.alertBox({
            title: 'Template Selection Error',
            text: "Please select one of the existing templates!",
            type: 'error'
          });
        }

        let insert = this.story;
        insert.data.pages.push(this.pageTemplates[this.selectedPage].data);
        this.$store.dispatch('saveAMPStory', insert);
        this.selectedPage = -1;

        this.showDialog = false;
      },
    },
    computed: {
      story () {
        if (!_.isNil(this.$store.state.story)) {
          return this.$store.state.story;
        }
      }
    }
  }
</script>

<style scoped>
  .page-templates {
    display: flex;
  }

  .page-template {
    display: inline-block;
    float: left;
    width: 120px;
    padding: 5px;
    text-align: center;
  }

  .page-template-image {
    width: 100%;
    height: 180px;
    border: 1px solid gray;
    margin-bottom: 10px;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
  }

  .page-template-image.selected {
    border: 1px solid red;
    opacity: 0.8;
  }

  .page-template-image:hover {
    border: 1px solid red;
  }
</style>