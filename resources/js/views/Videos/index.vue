<template>
  <div class="videos-list">
    <md-button class="md-raised md-primary mb-3 pr-2 ml-0" @click="redirectToCreateVideo">
      <md-icon>add</md-icon> CREATE
    </md-button>
    <md-table v-model="searches" md-sort="last_update" md-sort-order="asc" md-card>
      <md-table-empty-state md-label="No videos found"></md-table-empty-state>
      <md-table-row slot="md-table-row" slot-scope="{ item }" @click="redirectToVideo(item)">
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
    name: "videos",
    data () {
      return {
        filters: [],
        searches: [],
        videos: [],
      }
    },
    methods: {
      filterdByUser (userName) {
        if (userName !== 'all') {
          this.filters = this.videos.filter((video) => {
            return video.owner_id === this.$store.state.userInfo.id;
          })
        } else {
          this.filters = this.videos;
        }
        Vue.$emit('search:clear');
      },
      search(term) {
        this.searches = utils.searchTable(this.filters, term);
      },
      redirectToVideo (video) {
        this.$router.push(`/backoffice/video/${video.id}`);
      },
      redirectToCreateVideo() {
        this.$router.push('/backoffice/video');
      },
      loadVideos () {
        Vue.block();
        this.$http.get('/video/list').then((response) => {
          Vue.unBlock();
          this.videos = response.data.map((video) => {
            return {
              'id': video.id,
              'title': video.title,
              'owner': video.user.name,
              'owner_id': video.user.id,
              'last_update': video.updated_at ? video.updated_at : '',
            }
          });
          this.searches = this.videos;
          this.filters = this.videos;
        }, (error) => {
          Vue.unBlock();
        }).catch(Vue.handleClientError);
      },
    },
    mounted () {
      this.loadVideos();
      this.$store.dispatch('updateAppTitle', 'Videos');
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