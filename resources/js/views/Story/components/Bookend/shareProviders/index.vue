<template>

</template>

<script>
  export default {
    name: "share-providers",
    props: {
      providers: Array
    },
    data () {
      return {
        facebook: {
          app_id: '',
          href: '',
          quote: ''
        },
        twitter: {
          url: '',
          text: '',
        },
        pinterest: {
          media: '',
          url: '',
          description: ''
        },
        gplus: {
          url: ''
        },
        tumblr: {
          url: '',
          text: '',
        },
        whatsapp: {
          text: ''
        },
        email: {
          subject: '',
          body: '',
          recipient: ''
        },
        sms: {
          body: ''
        },
        line: {
          url: '',
          text: ''
        },
      }
    }
  }
</script>

<style scoped>

</style>