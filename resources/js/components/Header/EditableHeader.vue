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
          <md-icon v-if="editable">settings</md-icon>
          <md-icon>publish</md-icon>
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
      return {
        editable: false,
      }
    },

    components: {
      HeaderDropdownAccnt
    },

    methods: {
      toggleEdit () {
        this.editable = !this.editable;
        Vue.$emit('content:edit', this.editable);
      }
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
    }
  }
</script>

<style scoped>

</style>