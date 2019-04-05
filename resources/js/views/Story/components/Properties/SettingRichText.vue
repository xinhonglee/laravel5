<template>
  <div>
    <md-field>
      <label>Id</label>
      <md-input v-model="elementId"></md-input>
    </md-field>
    <md-field>
      <label>Class</label>
      <md-input v-model="elementClass"></md-input>
    </md-field>
    <br>
    <p style="color:#6d6d6d">[ Rich Text ]</p>
    <ckeditor :editor="editor" v-model="elementHtml" :config="editorConfig"></ckeditor>
  </div>
</template>

<script>
  import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

  export default {
    name: "setting-rich-text",
    props: {
      el: Object
    },
    data () {
      return {
        editor: ClassicEditor,
        editorConfig: {
          toolbar: {
            items: [
              'heading',
              'bold',
              'italic',
            ]
          }
        },
      };
    },
    computed: {
      elementId: {
        get () {
          if (!_.isNil(this.el && this.el.id)) {
            return this.el.id;
          }
          return '';
        },
        set: _.debounce(function (value) {
          if (this.elementId !== value)
            Vue.$emit('setting:properties', { id: value });
        }, 2000),
      },
      elementClass: {
        get () {
          if (!_.isNil(this.el && this.el.class)) {
            return this.el.class;
          }
          return '';
        },
        set: _.debounce(function (value) {
          if (this.elementClass !== value)
            Vue.$emit('setting:properties', { class: value });
        }, 2000),
      },
      elementHtml: {
        get () {
          if (!_.isNil(this.el && this.el.properties && this.el.properties.html)) {
            return this.el.properties.html;
          }
          return '';
        },
        set: _.debounce(function (value) {
          if (this.elementHtml !== value)
            Vue.$emit('setting:properties', { properties: { html: value } });
        }, 2000),
      },
    },
  }
</script>

<style scoped>

</style>