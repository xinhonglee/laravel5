<template>
  <div class="app">
    <div class="container">
      <authorized-clients></authorized-clients>
      <br>
      <clients></clients>
      <br>
      <personal-access-tokens></personal-access-tokens>
    </div>
  </div>
</template>

<script>
  import AuthorizedClients from '../components/passport/AuthorizedClients';
  import Clients from '../components/passport/Clients';
  import PersonalAccessTokens from '../components/passport/PersonalAccessTokens';

  export default {
    name: "Passport",
    components: {
      AuthorizedClients,
      Clients,
      PersonalAccessTokens
    }
  }
</script>

<style scoped>
  .app {
    margin-top: 100px;
  }
</style>