<template>
  <div>
    <md-field>
      <label>Id</label>
      <md-input v-model="property.id"></md-input>
    </md-field>
    <md-field>
      <label>Class</label>
      <md-input v-model="property.class"></md-input>
    </md-field>
    <br>
    <p style="color:#6d6d6d">[ HTML ]</p>
    <ckeditor :editor="editor" v-model="property.html" :config="editorConfig"></ckeditor>
  </div>
</template>

<script>
  import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

  export default {
    name: "setting-rich-text",
    data () {
      return {
        editor: ClassicEditor,
        property: {
          id: '',
          class: '',
          html: '<p>Content of the editor.</p>',
        },
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
    },
    watch: {
      property: {
        handler(property) {
          Vue.$emit('setting:properties', property);
        },
        deep: true
      },
    }
  }
</script>

<style scoped>

</style>