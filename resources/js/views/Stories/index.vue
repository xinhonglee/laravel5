<template>
  <div class="stories-list">
    <md-button class="md-raised md-primary mb-3 pr-2 ml-0" @click="redirectToCreateStory">
      <md-icon>add</md-icon> CREATE
    </md-button>
    <md-table v-model="searches" md-sort="last_update" md-sort-order="asc" md-card>
      <md-table-empty-state md-label="No stories found"></md-table-empty-state>
      <md-table-row slot="md-table-row" slot-scope="{ item }" @click="redirectToStory(item)">
        <md-table-cell md-label="Title" md-sort-by="title">{{ item.title }}</md-table-cell>
        <md-table-cell md-label="Owner" md-sort-by="owner">{{ item.owner }}</md-table-cell>
        <md-table-cell md-label="Last Update" md-sort-by="last_update">{{ item.last_update }}</md-table-cell>
      </md-table-row>
    </md-table>
  </div>
</template>

<script>
  import utils from "../utils";
  export default {
    name: "stories",
    data () {
      return {
        filters: [],
        searches: [],
        stories: [],
      }
    },
    methods: {
      filterdByUser(userName) {
        if(userName !== 'all') {
          this.filters = this.stories.filter((story)=> {
            return story.owner_id === this.$store.state.userInfo.id;
          })
        } else {
          this.filters = this.stories;
        }
        Vue.$emit('search:clear');
      },
      search(term) {
        this.searches = utils.searchTable(this.filters, term);
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
          this.searches = this.stories;
          this.filters = this.stories;
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
      Vue.$on('search:table', (term) => {
        this.search(term);
      });
      Vue.$emit('search:clear');
    },
    beforeDestroy () {
      Vue.$off('user:select');
      Vue.$off('search:table');
    }
  }
</script>

<style scoped>

</style>