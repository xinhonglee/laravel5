<template>
    <div class="story-bookend">
        <ul class="story-bookend_share-providers">
            <li v-for="(share, compIndex) of shareProviders" :index="compIndex">
                <img :src="getShareProviderIcon(share.slug)"/>
                <md-checkbox v-model="share.value" class="md-primary"></md-checkbox>
            </li>
        </ul>
        <div class="clearfix"></div>
        <div class="story-bookend_components mt-3" :class="{flex: components.length === 0}">
            <div v-if="components.length > 0" class="components mb-3">
                <div v-for="(comp, compIndex) of components" :index="compIndex"
                     class="story-bookend_component">
                    <div class="component-icon mt-3">
                        <img :src="comp.icon"/>
                    </div>
                    <div class="component-content">
                        <dynamic-bookend-component :type="getUcString(comp.slug)"/>
                    </div>
                    <div class="component-tools mt-3">
                        <span @click="orderUpComponent(compIndex)">
                            <md-icon style="transform: rotate(-90deg);">trending_flat</md-icon>
                        </span>
                        <span @click="orderDownComponent(compIndex)">
                            <md-icon style="transform: rotate(90deg);">trending_flat</md-icon>
                        </span>
                        <span @click="removeComponent(compIndex)">
                            <md-icon>delete_outline</md-icon>
                        </span>
                    </div>
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
  import DynamicBookendComponent from "../Bookend/DynamicBookendComponent";

  export default {
    name: "story-bookend",
    components: { DynamicBookendComponent },
    data () {
      return {
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
      orderUpComponent(index) {

      },
      orderDownComponent (index) {

      },
      getShareProviderIcon (slug) {
        const share = utils.getBookendShareProvider(slug);
        return share ? share.icon : ''
      },
      getUcString (str) {
        return str.charAt(0).toUpperCase() + str.slice(1);
      }
    }
  }
</script>

<style scoped>

</style>