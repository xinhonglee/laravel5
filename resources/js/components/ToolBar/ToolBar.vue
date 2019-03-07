<template>
  <div class="app-toolbar md-elevation-4">
    <div class="page-index">
      <md-tabs class="md-transparent">
        <md-tab
          v-for="(page, index) in story.data.pages"
          :id="index.toString()"
          :md-label="(index + 1).toString()"
          :key="index"
          @click="selectPage(index)">
        </md-tab>
      </md-tabs>
    </div>
    <ul class="page-tools">
      <li @click="showDialog = true">+ Add a new page</li>
      <li>Page structure...</li>
      <li @click="showPageTemplateModal">Save current page as model</li>
    </ul>
    <md-dialog :md-active.sync="showDialog">
      <md-dialog-title>Add a new page</md-dialog-title>
      <md-dialog-content>
        <div class="story-templates-list">
          <div class="page-template"
               v-for="(template, index) in pageTemplates"
               @click="selectedTemplate = index"
               :key="index">
            <div class="page-template-image"
                 :class="selectedTemplate === index ? 'selected md-elevation-7' : ''"
                 :style="{backgroundImage: 'url(' + template.image_url + ')'}">
            </div>
            <p>{{ template.title }}</p>
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
  import constants from '../../views/constants';

  export default {
    name: "app-toolbar",
    data () {
      return {
        pageTemplates: [constants.blankPageTemplate],
        showDialog: false,
        selectedTemplate: -1,
      }
    },
    methods: {
      loadTemplates () {
        this.pageTemplates = [constants.blankPageTemplate];
        this.$http.get('/story-template/list').then((response) => {
          this.pageTemplates.push(...response.data);
        }, (error) => {
        }).catch(Vue.handleClientError);
      },
      showPageTemplateModal () {
        console.log("[save:page-template] action trigger ...");
        Vue.$emit('show:page-template-dialog');
      },
      selectPage (index) {
        this.$store.dispatch('selectAMPStory', {
          page: index,
          layer: -1,
          element: -1,
        });
      },
      addNewPage () {
        if (this.selectedTemplate < 0) {
          Vue.alertBox({
            title: 'Template Selection Error',
            text: "Please select one of the existing templates!",
            type: 'error'
          });
        }
        // add page template
        const story = this.story;
        story.data.pages.push({...this.pageTemplates[this.selectedTemplate].data, id: Date.now()});
        story.publish = false;
        this.$store.dispatch('saveAMPStory', story);

        // select page action
        this.$store.dispatch('selectAMPStory', {
          page: this.story.data.pages.length - 1,
          layer: -1,
          element: -1,
        });

        this.selectedTemplate = -1;
        // close dialog
        this.showDialog = false;
      },
    },
    mounted () {
      this.loadTemplates();
      Vue.$on("reload:story-templates", () => {
        this.loadTemplates();
      });
    },
    computed: {
      story () {
        if (!_.isNil(this.$store.state.story)) {
          return this.$store.state.story;
        }
      },
    },
    beforeDestroy () {
      Vue.$off("reload:story-templates");
    },
  }
</script>

<style scoped>
  .story-templates-list {
    display: block;
    min-width: 700px;
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
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .page-template-image:hover {
    box-shadow: 0px 1px 10px 2px rgba(0, 0, 0, 0.2);
  }
</style>