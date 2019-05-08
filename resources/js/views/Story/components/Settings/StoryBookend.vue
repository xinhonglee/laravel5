<template>
    <div>
        <template v-for="(share, shareIndex) of shareProviders">
            <ul>
                <li>{{share.slug}}</li>
            </ul>
        </template>
    </div>
</template>

<script>
  import constants from '../../../constants';

  export default {
    name: "story-bookend",
    data() {
      return {
        ...constants.bookend
      }
    }
  }
</script>

<style scoped>

</style>