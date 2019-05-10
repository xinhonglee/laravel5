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
        <p style="color:#6d6d6d">Rich text</p>
        <ckeditor :editor="editor" v-model="elementHtml" :config="editorConfig"></ckeditor>
    </div>
</template>

<script>
  import ClassicEditor from '@ckeditor/ckeditor5-editor-classic/src/classiceditor';
  import Essentials from '@ckeditor/ckeditor5-essentials/src/essentials';
  import Bold from '@ckeditor/ckeditor5-basic-styles/src/bold';
  import Italic from '@ckeditor/ckeditor5-basic-styles/src/italic';
  import Heading from '@ckeditor/ckeditor5-heading/src/heading';
  import Paragraph from '@ckeditor/ckeditor5-paragraph/src/paragraph';
  import CustomStyle from '../../../../components/common/CK5CustomStyle/customstyle';

  export default {
    name: "setting-rich-text",
    props: {
      el: Object
    },
    data () {
      return {
        editor: ClassicEditor,
        editorConfig: {
          plugins: [
            Essentials,
            Bold,
            Italic,
            Heading,
            Paragraph,
            CustomStyle
          ],
          toolbar: {
            items: [
              'heading',
              'bold',
              'italic',
              'customStyle'
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