<template>
  <div class="app-filter md-elevation-4">
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
          <md-input></md-input>
        </md-field>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "app-filter",
    methods: {
      selectedUser(userName) {
        if(userName !== 'all') {
          userName = 'Admin'; // temporary name, it should be come from Vue Store
        }
        Vue.$emit('user:select', userName);
      }
    }
  }
</script>

<style scoped lang="scss">

</style>