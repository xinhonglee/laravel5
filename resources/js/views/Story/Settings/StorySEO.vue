<template>
  <div>
    <md-field>
      <label>Headline</label>
      <md-input></md-input>
    </md-field>
    <md-field>
      <label>Description</label>
      <md-input></md-input>
    </md-field>
    <md-field>
      <label>Keywords</label>
      <md-input></md-input>
    </md-field>
    <md-field>
      <label>Author name</label>
      <md-input></md-input>
    </md-field>
    <span class="label-poss-btn">Cover Image</span>
    <button type="button" class="md-raised ml-5 px-3" id="upload_story_cover">Select a file</button>
    <md-field>
      <label>Publisher</label>
      <md-input></md-input>
    </md-field>
    <span class="label-poss-btn">Publisher Logo</span>
    <button type="button" class="md-raised ml-5 px-3" id="upload_story_publisher_logo">Select a file</button>
  </div>
</template>

<script>
  export default {
    name: "story-seo",
    data() {
      return {}
    }
  }
</script>

<style scoped>

</style>