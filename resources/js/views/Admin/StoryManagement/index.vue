<template>
  <div>
    <p>Default CSS</p>
    <div class="code-editor">
      <div class="code-editor_index">
        <div v-for="i in lines">{{i}}</div>
      </div>
      <textarea v-model="css"></textarea>
    </div>

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
        css: '',
        styleId: '',
      }
    },
    methods: {
      saveStyle () {
        if (this.styleId) {
          this.updateStyle();
        } else {
          this.createStyle();
        }
      },
      loadStyle () {
        Vue.block();
        this.$http.get('/story/style').then((response) => {
          Vue.unBlock();
          this.css = response.data.data;
          this.styleId = response.data.id;
        }, (error) => {
          Vue.unBlock();
        }).catch(Vue.handleClientError);
      },
      createStyle () {
        const data = {
          "data": this.css
        };
        Vue.block();
        this.$http.post('/admin/create-style-stories', data).then((response) => {
          Vue.unBlock();
          this.css = response.data.data;
          this.styleId = response.data.id;
        }, (error) => {
          Vue.unBlock();
        }).catch(Vue.handleClientError);
      },
      updateStyle () {
        const data = {
          "id": this.styleId,
          "data": this.css
        };
        Vue.block();
        this.$http.put('/admin/update-style-stories', data).then((response) => {
          Vue.unBlock();
        }, (error) => {
          Vue.unBlock();
        }).catch(Vue.handleClientError);
      }
    },
    mounted () {
      this.loadStyle();
    },
    watch: {
      css (value) {
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