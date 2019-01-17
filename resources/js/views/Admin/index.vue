<template>
  
</template>

<script>
  export default {
    name: "admin",

    mounted() {
      this.$store.dispatch('updateAppTitle', 'Admin');
    }
  }
</script>

<style scoped>

</style>