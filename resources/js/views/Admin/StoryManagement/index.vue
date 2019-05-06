<template>
  <div>
    <p>Default CSS</p>
    <div class="code-editor">
      <div class="code-editor_index">
        <div v-for="i in lines">{{i}}</div>
      </div>
      <textarea v-model="setting"></textarea>
    </div>

    <p class="mt-3">RichText</p>


    <md-button class="md-raised md-primary my-3 float-right" @click="saveStyle">
      SAVE
    </md-button>
  </div>
</template>

<script>
  export default {
    name: "story-management",
    data () {
      return {
        lines: 1,
        setting: '',
        richtext: []
      }
    },
    methods: {
      serializeStyle(data) {
        this.setting = data.filter( style => {
          return style.slug = 'setting'
        })[0].data;
        this.richtext = data.filter( style => {
          return style.slug = 'richtext'
        })[0].data;
      },
      saveStyle () {
        const data = {
          "setting": this.setting,
          "richtext": this.richtext
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
      }
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