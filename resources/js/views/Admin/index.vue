<template>
  <div class="admin">
    <md-tabs>
      <md-tab id="tab-posts" md-label="Users">
        <user-management></user-management>
      </md-tab>
      <md-tab id="tab-home" md-label="Story Templates">
        <story-template-management></story-template-management>
      </md-tab>
      <md-tab id="tab-pages" md-label="Videos">
        Videos Management
      </md-tab>
    </md-tabs>
  </div>
</template>

<script>
  import UserManagement from "./UserManagement/Index";
  import StoryTemplateManagement from "./StoryTemplateManagment/Index";
  export default {
    name: "admin",
    components: {
      StoryTemplateManagement,
      UserManagement
    },
    mounted() {
      this.$store.dispatch('updateAppTitle', 'Admin');
    }
  }
</script>

<style scoped>

</style>