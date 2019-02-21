<template>
  <div>
    <md-button class="md-raised md-primary" @click="showAddDialog = true">Create Template</md-button>
    <md-divider></md-divider>
    <div class="story-templates-list">
      <div class="page-template"
           v-for="(template, index) in pageTemplates" :key="index"
           :class="selectedTemplate === index ? 'selected md-elevation-7' : ''">
        <span class="page-template-remove" @click="showDeleteDialog = true"><md-icon>remove_circle</md-icon></span>
        <div class="page-template-image"
             :style="{backgroundImage: 'url(' + template.image_url + ')'}"
             @click="selectTemplate(index)"></div>
        <p>{{ template.name }}</p>
      </div>
    </div>
    <md-dialog :md-active.sync="showAddDialog">
      <md-dialog-title>Add a new template</md-dialog-title>
      <md-dialog-content>
        <div>
          <md-field>
            <label>Template Name</label>
            <md-input v-model="addTemplateName"></md-input>
          </md-field>
          <md-field>
            <label>Template Image URL</label>
            <md-input v-model="addTemplateImageUrl"></md-input>
          </md-field>
          <md-field>
            <label>Template JSON Data</label>
            <md-textarea v-model="addJsonString" rows="20"></md-textarea>
          </md-field>
        </div>
      </md-dialog-content>
      <md-dialog-actions>
        <md-button class="md-primary" @click="showAddDialog = false">Close</md-button>
        <md-button class="md-raised md-primary" @click="addTemplate">Add</md-button>
      </md-dialog-actions>
    </md-dialog>
    <md-dialog :md-active.sync="showUpdateDialog">
      <md-dialog-title>Add a new template</md-dialog-title>
      <md-dialog-content>
        <div>
          <md-field>
            <label>Template Name</label>
            <md-input v-model="updateTemplateName"></md-input>
          </md-field>
          <md-field>
            <label>Template Image URL</label>
            <md-input v-model="updateTemplateImageUrl"></md-input>
          </md-field>
          <md-field>
            <label>Template JSON Data</label>
            <md-textarea v-model="updateJsonString" rows="20"></md-textarea>
          </md-field>
        </div>
      </md-dialog-content>
      <md-dialog-actions>
        <md-button class="md-primary" @click="showUpdateDialog = false">Close</md-button>
        <md-button class="md-raised md-primary" @click="updateTemplate">Update</md-button>
      </md-dialog-actions>
    </md-dialog>
    <md-dialog-confirm
      :md-active.sync="showDeleteDialog"
      md-title="Do you really want to delete this template?"
      md-content="This template will be permanently deleted from the Database."
      md-confirm-text="Agree"
      md-cancel-text="Disagree"
      @md-cancel="showDeleteDialog = false"
      @md-confirm="deleteTemplate"/>
  </div>
</template>

<script>
  export default {
    name: "story-template-management",
    data () {
      return {
        pageTemplates: [],
        selectedTemplate: -1,
        showAddDialog: false,
        showUpdateDialog: false,
        addTemplateName: '',
        addTemplateImageUrl: '',
        addJsonString: '',
        updateTemplateName: '',
        updateTemplateImageUrl: '',
        updateJsonString: '',
        showDeleteDialog: false,
      }
    },
    methods: {
      loadTemplates () {
        this.$http.get('/story-template/list').then((response) => {
          this.pageTemplates = response.data;
        }, (error) => {
        }).catch(Vue.handleClientError);
      },
      selectTemplate (index) {
        this.selectedTemplate = index;
        this.updateTemplateName = this.pageTemplates[index].name;
        this.updateTemplateImageUrl = this.pageTemplates[index].image_url;
        this.updateJsonString = this.pageTemplates[index].data;
        this.showUpdateDialog = true;
      },
      addTemplate () {
        this.showAddDialog = false;
        Vue.block();
        let data = {
          "name": this.addTemplateName,
          "image_url": this.addTemplateImageUrl,
          "data": this.addJsonString,
        };
        this.$http.post('/admin/create-story-template', data).then((response) => {
          Vue.unBlock();
          Vue.alertBox({
            title: 'Success',
            text: "Successfully created new story template!",
            type: 'success'
          });
          this.loadTemplates();
          this.selectedTemplate = -1;
        }, (error) => {
          Vue.unBlock();
        }).catch(Vue.handleClientError);
      },
      updateTemplate () {
        this.showUpdateDialog = false;
        Vue.block();
        let data = {
          "id": this.pageTemplates[this.selectedTemplate],
          "name": this.updateTemplateName,
          "image_url": this.updateTemplateImageUrl,
          "data": this.updateJsonString,
        };
        this.$http.put('/admin/update-story-template', data).then((response) => {
          Vue.unBlock();
          Vue.alertBox({
            title: 'Success',
            text: "Successfully updated this story template!",
            type: 'success'
          });
          this.loadTemplates();
        }, (error) => {
          Vue.unBlock();
        }).catch(Vue.handleClientError);
      },
      deleteTemplate (index) {
        this.showDeleteDialog = false;
        Vue.block();
        let data = {
          "id": this.pageTemplates[this.selectedTemplate].id
        };
        this.$http.post('/admin/delete-story-template', data).then((response) => {
          Vue.unBlock();
          Vue.alertBox({
            title: 'Success',
            text: "Successfully deleted this story template!",
            type: 'success'
          });
          this.loadTemplates();
          this.selectedTemplate = -1;
        }, (error) => {
          Vue.unBlock();
        }).catch(Vue.handleClientError);
      }
    },
    mounted () {
      this.loadTemplates();
    }

  }
</script>

<style lang="scss" scoped>
  .story-templates-list {
    /*border-top: 1px solid gray;*/
  }

  .page-template {
    display: inline-block;
    padding: 20px;
    width: 160px;
    vertical-align: top;
    text-align: center;
    background: #eeeeee;
    margin: 10px;
    position: relative;
  }

  .page-template-remove {
    position: absolute;
    right: 5px;
    top: 5px;
    display: none;
    cursor: pointer;
  }

  .page-template-image {
    width: 100%;
    height: 180px;
    border: 1px solid #d9d9d9;
    margin: 10px auto;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .page-template:hover {
    box-shadow: 0px 1px 10px 2px rgba(0, 0, 0, 0.2);

  }

  .page-template.selected {
    .page-template-remove {
      display: block;
    }
  }

  .md-dialog {
    max-width: 768px;
    width: 100%;
  }
</style>