<template>
    <div class="story-bookend">
        <ul class="story-bookend_share">
            <li>
                <img :src="getShareProviderIcon('facebook')"/>
                <md-checkbox v-model="shareProviders.facebook" class="md-primary"></md-checkbox>
            </li>
            <li>
                <img :src="getShareProviderIcon('twitter')"/>
                <md-checkbox v-model="shareProviders.twitter" class="md-primary"></md-checkbox>
            </li>
            <li>
                <img :src="getShareProviderIcon('youtube')"/>
                <md-checkbox v-model="shareProviders.youtube" class="md-primary"></md-checkbox>
            </li>
        </ul>
    </div>
</template>

<script>
  import constants from '../../../constants';
  import utils from '../../../utils';

  export default {
    name: "story-bookend",
    data () {
      return {
        shareProviders: {
          facebook: false,
          twitter: false,
          youtube: false
        },
        components: []
      }
    },
    methods: {
      getShareProviderIcon (slug) {
        const share = utils.getBookendShareProvider(slug);
        return share ? share.icon : ''
      }
    }
  }
</script>

<style scoped>

</style>