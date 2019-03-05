<template>
  <div class="stories-list">
    <md-table v-model="stories" md-sort="name" md-sort-order="asc" md-card>
      <md-table-row slot="md-table-row" slot-scope="{ item }" @click="redirectToStory(item)">
        <md-table-cell md-label="Title">{{ item.title }}</md-table-cell>
        <md-table-cell md-label="Owner" md-sort-by="owner">{{ item.owner }}</md-table-cell>
        <md-table-cell md-label="Last Update" md-sort-by="last_update">{{ item.last_update }}</md-table-cell>
      </md-table-row>
    </md-table>
    <md-button class="md-fab md-primary btn-poss-new-item" @click="redirectToCreateStory">
      <md-icon>add</md-icon>
    </md-button>
  </div>
</template>

<script>
  export default {
    name: "stories",
    data () {
      return {
        stories: [],
        backStories: [],
      }
    },
    methods: {
      filterdByUser(userName) {
        if(userName !== 'all') {
          this.stories = this.backStories.filter((story)=> {
            return story.owner_id === this.$store.state.userInfo.id;
          })
        } else {
          this.stories = this.backStories;
        }
      },
      redirectToStory(story) {
        this.$store.dispatch('updateAppTitle', story.title);
        this.$router.push(`/backoffice/story/${story.id}`);
      },
      redirectToCreateStory() {
        this.$router.push('/backoffice/story');
      },
      loadStories() {
        Vue.block();
        this.$http.get('/story/list').then((response) => {
          Vue.unBlock();
          this.stories = response.data.map((story) => {
            return {
              'id': story.id,
              'title': story.title,
              'owner': story.user.name,
              'owner_id': story.user.id,
              'last_update': story.updated_at ? story.updated_at : '',
            }
          });
          this.backStories = this.stories;
        }, (error) => {
          Vue.unBlock();
        }).catch(Vue.handleClientError);
      },
    },
    mounted() {
      this.loadStories();
      this.$store.dispatch('updateAppTitle', 'Stories');
      Vue.$on('user:select', (userName) => {
        this.filterdByUser(userName);
      });
    },
    beforeDestroy () {
      Vue.$off('user:select');
    }
  }
</script>

<style scoped>

</style>