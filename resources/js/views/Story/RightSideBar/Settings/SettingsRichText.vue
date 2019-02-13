<template>
  <div>
    <md-field>
      <label>Id</label>
      <md-input></md-input>
    </md-field>
    <md-field>
      <label>Class</label>
      <md-input></md-input>
    </md-field>
    <md-field>
      <ckeditor :editor="editor" v-model="editorData" :config="editorConfig"></ckeditor>
    </md-field>
  </div>
</template>

<script>
  import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

  export default {
    name: "settings-rich-text",
    data () {
      return {
        editor: ClassicEditor,
        editorData: '<p>Content of the editor.</p>',
        editorConfig: {
          toolbar: {
            items: [
              'heading',
              'bold',
              'italic',
            ]
          }
        }
      };
    }
  }
</script>

<style scoped>

</style>