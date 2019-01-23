<template>
  <header class="app-header navbar">
    <b-link class="navbar-brand" to="/backoffice">
      <img src="/assets/logo.png"/>
    </b-link>
    <div class="editable-header-title">
      <input type="text" v-model="title" :disabled="!editable">
    </div>
    <div class="editable-tools mr-3">
      <span class="icon-group">
          <span v-if="editable" @click="setting"><md-icon>settings</md-icon></span>
          <span v-if="editable" @click="publish"><md-icon>publish</md-icon></span>
      </span>
      <md-button class="md-raised" @click="toggleEdit">
        <md-icon>{{ editable ? 'visibility' : 'edit' }}</md-icon>
        {{ editable ? 'View' : 'Edit' }}
      </md-button>
    </div>
    <b-navbar-nav class="ml-auto">
      <HeaderDropdownAccnt/>
    </b-navbar-nav>
  </header>
</template>

<script>
  import HeaderDropdownAccnt from './HeaderDropdownAccnt.vue';

  export default {
    name: "app-editable-header",
    data () {
      return {}
    },

    components: {
      HeaderDropdownAccnt
    },

    methods: {
      toggleEdit () {
        this.$store.dispatch('updateAppEditable', !this.editable);
      },
      publish () {
        console.log("[app:publish] action trigger ...");
        Vue.$emit('app:publish');
      },
      setting () {
        console.log("[app:setting] action trigger ...");
        Vue.$emit('app:setting');
      },
    },
    computed: {
      title: {
        get () {
          return this.$store.state.app.title;
        },
        set (value) {
          this.$store.dispatch('updateAppTitle', value);
        }
      },
      editable () {
        return this.$store.state.app.editable;
      }
    }
  }
</script>

<style scoped>

</style>