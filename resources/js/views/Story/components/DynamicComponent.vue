<template>
    <component :is="component" :data="data" v-if="component" />
</template>
<script>
  export default {
    name: 'dynamic-component',
    props: ['data', 'type', 'path'],
    data() {
      return {
        component: null,
      }
    },
    computed: {
      loader() {
        if (!this.type) {
          return null
        }
        return () => import(`./Bookend/heading.vue`)
      },
    },
    mounted() {
      this.loader()
        .then(() => {
          this.component = () => this.loader()
        })
        .catch(() => {
          this.component = () => import(`${this.path}/index`)
        })
    },
  }
</script>