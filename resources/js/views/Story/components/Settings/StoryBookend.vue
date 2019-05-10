<template>
    <div class="story-bookend">
        <ul class="story-bookend_share-providers">
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
        <div class="clearfix"></div>
        <div class="story-bookend_components mt-3">
            <md-button class="btn-add-component md-fab md-primary">
                <md-icon>add</md-icon>
            </md-button>
            <div class="content">
                <template v-if="components.length > 0">

                </template>
                <template v-else>
                    <ul class="available-components">
                        <li v-for="(comp, compIndex) of availableComponents" :index="compIndex">
                            <div class="component-icon"></div>
                            <div class="component-name">{{comp.name}}</div>
                        </li>
                    </ul>
                </template>
            </div>
        </div>
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
        components: [],
        availableComponents: constants.bookend.components
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