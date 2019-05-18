<template>
    <div>
        <md-field class="mt-3">
            <label>Textbox</label>
            <md-textarea v-model="text" rows="5" ></md-textarea>
        </md-field>
    </div>
</template>

<script>
  export default {
    name: "bookend-textbox",
    data() {
      return {
        text: ''
      }
    }
  }
</script>

<style scoped>

</style>