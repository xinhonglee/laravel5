<template>
    <div class="story-bookend">
        <ul class="story-bookend_share-providers">
            <li v-for="(share, compIndex) of shareProviders" :index="compIndex">
                <img :src="getShareProviderIcon(share.slug)"/>
                <md-checkbox v-model="share.value" class="md-primary"></md-checkbox>
            </li>
        </ul>
        <div class="clearfix"></div>
        <dynamic-component :data="components" :type="type" :path="path"></dynamic-component>
        <div class="story-bookend_components mt-3" :class="{flex: components.length === 0}">
            <div v-if="components.length > 0" class="components">
                <div v-for="(comp, compIndex) of components" :index="compIndex">
                    <div class="component-name">{{comp.name}}</div>
                    <!--<dynamic-component :data="comp" :type="comp.slug" :path="path"></dynamic-component>-->
                </div>
            </div>
            <md-button class="btn-add-component md-fab md-primary" @click="addComponent">
                <md-icon>add</md-icon>
            </md-button>
            <ul v-if="components.length === 0" class="available-components">
                <li v-for="(comp, compIndex) of availableComponents" :index="compIndex">
                    <div class="component-icon">
                        <img :src="comp.icon"/>
                    </div>
                    <div class="component-name">{{comp.name}}</div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
  import constants from '../../../constants';
  import utils from '../../../utils';
  import DynamicComponent from "../DynamicComponent";

  export default {
    name: "story-bookend",
    components: { DynamicComponent },
    data () {
      return {
        path: 'Bookend',
        type: 'heading',
        shareProviders: [
          { 'slug': 'facebook', 'value': false },
          { 'slug': 'twitter', 'value': false },
          { 'slug': 'pinterest', 'value': false },
          { 'slug': 'gplus', 'value': false },
          { 'slug': 'tumblr', 'value': false },
          { 'slug': 'whatsapp', 'value': false },
          { 'slug': 'email', 'value': false },
          { 'slug': 'sms', 'value': false },
          { 'slug': 'line', 'value': false }
        ],
        components: [],
        availableComponents: constants.bookend.components
      }
    },
    methods: {
      addComponent () {
        if (this.components.length < this.availableComponents.length) {
          this.components.push(this.availableComponents[this.components.length]);
        }
      },
      removeComponent (index) {
        this.components.splice(index, 1);
      },
      getShareProviderIcon (slug) {
        const share = utils.getBookendShareProvider(slug);
        return share ? share.icon : ''
      },
    }
  }
</script>

<style scoped>

</style>