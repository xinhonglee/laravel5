<template>
  <div>
    <md-table v-model="videos" md-sort="name" md-sort-order="asc" md-card>
      <md-table-row slot="md-table-row" slot-scope="{ item }" @click="redirectToVideo(item)">
        <md-table-cell md-label="Title">{{ item.title }}</md-table-cell>
        <md-table-cell md-label="Owner" md-sort-by="owner">{{ item.owner }}</md-table-cell>
        <md-table-cell md-label="Last Update" md-sort-by="last_update">{{ item.last_update }}</md-table-cell>
      </md-table-row>
    </md-table>
    <md-button class="md-fab md-primary btn-poss-new-item" @click="redirectToCreateVideo">
      <md-icon>add</md-icon>
    </md-button>
  </div>
</template>

<script>
  export default {
    name: "videos",
    data () {
      return {
        videos: [],
        backVideos: [],
      }
    },
    methods: {
      filterdByUser (userName) {
        if (userName !== 'all') {
          this.videos = this.backVideos.filter((video) => {
            return video.owner_id === this.$store.state.userInfo.id;
          })
        } else {
          this.videos = this.backVideos;
        }
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
          this.backVideos = this.videos;
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
    },
    beforeDestroy () {
      Vue.$off('user:select');
    }
  }
</script>

<style scoped>

</style>