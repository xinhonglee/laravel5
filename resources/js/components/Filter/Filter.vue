<template>
  <div class="app-filter md-elevation-4">
    <b-row>
      <b-col md="8">
        <md-tabs class="md-transparent">
          <md-tab id="all" md-label="ALL"></md-tab>
          <md-tab id="by-me" md-label="OWNED BY ME"></md-tab>
        </md-tabs>
      </b-col>
      <b-col md="4">
        <div class="tool-box md-transparent">
          <div class="search">
            <md-field class="m-0 md-transparent">
              <md-icon>search</md-icon>
              <label>Search</label>
              <md-input></md-input>
            </md-field>
          </div>
          <div class="sort">
            <md-icon>sort_by_alpha</md-icon>
          </div>
        </div>
      </b-col>
    </b-row>
  </div>
</template>

<script>
  export default {
    name: "app-filter"
  }
</script>

<style scoped lang="scss">
  .app-filter {
    background: #eeeeee;
    padding-bottom: 10px;
  }

  .tool-box {
    display: flex;
  }

  .search {
    flex: 4;
    .md-icon:after {
      background: none;
    }
  }

  .sort {
    flex: 1;
    width: 100%;
    margin-left: 10px;
    min-height: 48px;
    padding-top: 16px;
    display: -webkit-box;
    position: relative;
    font-family: inherit
  }
</style>