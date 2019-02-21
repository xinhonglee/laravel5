<template>
  <div class="story">
    <template v-if="editable">
      <story-edit></story-edit>
    </template>
    <template v-else>
      <story-view></story-view>
    </template>
  </div>
</template>

<script>
  import StoryEdit from "./StoryEdit";
  import StoryView from "./StoryView";
  export default {
    name: "story",
    components: { StoryView, StoryEdit },
    data() {
      return {
      }
    },
    methods: {
      loadStory(id) {
        Vue.block();
        this.$http.get('/story/' + id).then((response) => {
          Vue.unBlock();
          this.$store.dispatch('updateAMPStory', response.data);
          this.$store.dispatch('updateAppTitle', response.data.name);
        }, (error) => {
          Vue.unBlock();
        }).catch(Vue.handleClientError);
      }
    },
    mounted() {
      if (this.$route.params.id) {
        console.log(this.$route.params.id);
        this.loadStory(this.$route.params.id);
        this.$store.dispatch('updateAppEditable', false);
      } else {
        this.$store.dispatch('updateAppTitle', 'Untitled Story');
        this.$store.dispatch('updateAppEditable', true);
        this.$store.dispatch('clearAMPStory');
      }
    },
    computed: {
      editable() {
        return this.$store.state.app.editable;
      }
    }
  }
</script>

<style scoped>

</style>