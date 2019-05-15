<template>
    <div class="story-management">
        <p>Default CSS</p>
        <div class="code-editor">
            <div class="code-editor_index">
                <div v-for="i in lines">{{i}}</div>
            </div>
            <textarea v-model="setting"></textarea>
        </div>
        <p class="mt-3">Rich Text Editor Custom Styles</p>
        <div class="rich-text-styles">
            <div class="style" v-for="(item, index) of richTextStyles" :index="index">
                <md-field>
                    <label>Type</label>
                    <md-input v-model="item.type"></md-input>
                </md-field>
                <md-field>
                    <label>Label</label>
                    <md-input v-model="item.label"></md-input>
                </md-field>
                <md-field>
                    <label>Style</label>
                    <md-input v-model="item.style"></md-input>
                </md-field>
                <span class="remove-style" @click="showRemoveStyleDialog(index)">
                   <md-icon>delete_outline</md-icon>
                   <md-tooltip md-direction="top">Remove</md-tooltip>
                </span>
            </div>
            <md-button class="md-primary" @click="addStyle">Add a Custom Style</md-button>
        </div>
        <md-button class="md-raised md-primary my-3 float-right" @click="saveStyle">
            SAVE
        </md-button>
        <md-dialog-confirm
            :md-active.sync="showRemoveDialog"
            md-title="Do you really want to remove this custom style?"
            md-confirm-text="Ok"
            md-cancel-text="Cancel"
            @md-cancel="showRemoveDialog = false"
            @md-confirm="removeStyle"/>
    </div>
</template>

<script>
  export default {
    name: "story-management",
    data () {
      return {
        lines: 1,
        setting: '',
        richTextStyles: [
              { type: '', label: '', style: '' }
        ],
        showRemoveDialog: false,
        removeStyleIndex: null,
      }
    },
    methods: {
      serializeStyle (data) {
        if(data.length > 0) {
          const fSettings = data.filter(style => {
            return style.slug === 'setting'
          });
          const fRichTextStyles = data.filter(style => {
              return style.slug === 'richtext'
          });
          if (fSettings.length > 0) {
            this.setting = fSettings[0].data;
          }
          if (fRichTextStyles.length > 0) {
            this.richTextStyles = JSON.parse(fRichTextStyles[0].data);
          }
        }
      },
      addStyle () {
        this.richTextStyles.push(
          { type: '', label: '', style: '' }
        );
      },
      removeStyle () {
        this.richTextStyles.splice(this.removeStyleIndex, 1);
      },
      saveStyle () {
        const data = {
          'setting': this.setting,
          'richtext': JSON.stringify(this.richTextStyles)
        };
        Vue.block();
        this.$http.post('/admin/save-style-stories', data).then((response) => {
          Vue.unBlock();
          this.serializeStyle(response.data)
        }, (error) => {
          Vue.unBlock();
        }).catch(Vue.handleClientError);
      },
      loadStyle () {
        Vue.block();
        this.$http.get('/story/style').then((response) => {
          Vue.unBlock();
          this.serializeStyle(response.data)
        }, (error) => {
          Vue.unBlock();
        }).catch(Vue.handleClientError);
      },
      showRemoveStyleDialog(index) {
        event.stopPropagation();
        this.showRemoveDialog = true;
        this.removeStyleIndex = index;
      },
    },
    mounted () {
      this.loadStyle();
    },
    watch: {
      setting (value) {
        if (value) {
          const lines = value.split(/\r*\n/);
          this.lines = lines.length;
        }
      },
    }
  }
</script>

<style scoped>

</style>