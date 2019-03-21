<template>
  <div class="app-filter">
    <div class="tab-navigation">
      <md-tabs class="md-transparent">
        <md-tab id="all" md-label="ALL" @click="selectedUser('all')"></md-tab>
        <md-tab id="by-me" md-label="OWNED BY ME" @click="selectedUser('me')"></md-tab>
      </md-tabs>
    </div>
    <div class="tool-box md-transparent">
      <div class="search">
        <md-field class="m-0 md-transparent">
          <md-icon>search</md-icon>
          <label>Search</label>
          <md-input v-model="search"></md-input>
        </md-field>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "app-filter",
    data() {
      return {
        search: '',
      }
    },
    methods: {
      selectedUser(userName) {
        if(userName !== 'all') {
          userName = 'Admin'; // temporary name, it should be come from Vue Store
        }
        Vue.$emit('user:select', userName);
      },
    },
    watch: {
      search() {
        Vue.$emit('search:table', this.search);
      }
    },
    mounted() {
      Vue.$on('search:clear', () => {
        this.search = '';
      });
    },
    beforeDestroy() {
      Vue.$off('search:clear');
    }
  }
</script>

<style scoped lang="scss">

</style>