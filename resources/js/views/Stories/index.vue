<template>
  <div>
    <md-table v-model="stories" md-sort="name" md-sort-order="asc" md-card>
      <md-table-row slot="md-table-row" slot-scope="{ item }" @click="redirectToStory(item)">
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
    },
    {
      id: 6,
      title: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
      owner: 'Lisa Freeman',
      last_update: 'Jan 10 2019',
    },
    {
      id: 7,
      title: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
      owner: 'Lisa Freeman',
      last_update: 'Jan 10 2019',
    },
    {
      id: 8,
      title: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
      owner: 'Admin',
      last_update: 'Jan 10 2019',
    },
    {
      id: 9,
      title: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
      owner: 'Admin',
      last_update: 'Jan 10 2019',
    },
    {
      id: 10,
      title: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
      owner: 'Admin',
      last_update: 'Jan 10 2019',
    }
  ];

  export default {
    name: "stories",
    data () {
      return {
        stories: data,
        backStories: data,
      }
    },
    methods: {
      filterdByUser(userName) {
        if(userName !== 'all') {
          this.stories = this.backStories.filter((story)=> {
            return story.owner === userName
          })
        } else {
          this.stories = this.backStories;
        }
      },
      redirectToStory(story) {
        this.$store.dispatch('updateAppTitle', story.title);
        this.$router.push(`/backoffice/story/${story.id}`);
      }
    },
    mounted() {
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