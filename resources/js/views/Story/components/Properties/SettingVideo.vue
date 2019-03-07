<template>
  <div>
    <md-field>
      <label>Id</label>
      <md-input v-model="elementId"></md-input>
    </md-field>
    <md-field>
      <label>Class</label>
      <md-input v-model="elementClass"></md-input>
    </md-field>
    <md-field>
      <label>Video URL</label>
      <md-input v-model="elementSrc"></md-input>
    </md-field>
  </div>
</template>

<script>
  export default {
    name: "setting-video",
    props: {
      el: Object
    },
    data () {
      return {}
    },
    computed: {
      elementId: {
        get () {
          if (!_.isNil(this.el && this.el.id)) {
            return this.el.id;
          }
          return '';
        },
        set: _.debounce(function (value) {
          if (this.elementId !== value)
            Vue.$emit('setting:properties', { id: value });
        }, 2000),
      },
      elementClass: {
        get () {
          if (!_.isNil(this.el && this.el.class)) {
            return this.el.class;
          }
          return '';
        },
        set: _.debounce(function (value) {
          if (this.elementClass !== value)
            Vue.$emit('setting:properties', { class: value });
        }, 2000),
      },
      elementSrc: {
        get () {
          if (!_.isNil(this.el && this.el.properties && this.el.properties.src)) {
            return this.el.properties.src;
          }
          return '';
        },
        set: _.debounce(function (value) {
          if (this.elementSrc !== value)
            Vue.$emit('setting:properties', { properties: { src: value } });
        }, 2000),
      },
    },
  }
</script>

<style scoped>

</style>