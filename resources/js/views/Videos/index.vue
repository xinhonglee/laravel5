<template>
  <div>
    <md-table v-model="videos" md-sort="name" md-sort-order="asc" md-card>
      <md-table-row slot="md-table-row" slot-scope="{ item }" @click="redirectToVideo(item)">
        <md-table-cell md-label="Title">{{ item.title }}</md-table-cell>
        <md-table-cell md-label="Owner" md-sort-by="owner">{{ item.owner }}</md-table-cell>
        <md-table-cell md-label="Last Update" md-sort-by="last_update">{{ item.last_update }}</md-table-cell>
      </md-table-row>
    </md-table>
  </div>
</template>

<script>
  const data = [
    {
      id: 1,
      title: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
      owner: 'Lisa Freeman',
      last_update: 'Jan 10, 2019',
    },
    {
      id: 2,
      title: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
      owner: 'Lisa Freeman',
      last_update: 'Jan 10, 2019',
    },
    {
      id: 3,
      title: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
      owner: 'Admin',
      last_update: 'Jan 10, 2019',
    },
    {
      id: 4,
      title: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
      owner: 'Admin',
      last_update: 'Jan 10, 2019',
    },
    {
      id: 5,
      title: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
      owner: 'Admin',
      last_update: 'Jan 10, 2019',
    }
  ];

  export default {
    name: "videos",
    data () {
      return {
        videos: data,
        backVideos: data,
      }
    },
    methods: {
      filterdByUser(userName) {
        if(userName !== 'all') {
          this.videos = this.backVideos.filter((video)=> {
            return video.owner === userName
          })
        } else {
          this.videos = this.backVideos;
        }
      },
      redirectToVideo(video) {
        this.$store.dispatch('updateAppTitle', video.title);
        this.$router.push(`/backoffice/video/${video.id}`);
      }
    },
    mounted() {
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