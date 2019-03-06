<template>
  <div>
    <story-left-side-bar></story-left-side-bar>
    <div class="story-page-view md-elevation-3">
      <iframe id="story_page_view" width="100%" height="100%"
              v-if="storyPageUrl" :src="storyPageUrl"></iframe>
    </div>
    <story-right-side-bar></story-right-side-bar>
    <md-dialog :md-active.sync="settingDialog">
      <md-dialog-title>Settings</md-dialog-title>
      <md-dialog-content style="min-width: 700px;">
        <md-divider></md-divider>
        <md-tabs class="md-transparent md-no-animation" md-dynamic-height>
          <md-tab id="tab-story-seo" md-label="SEO">
            <story-seo></story-seo>
          </md-tab>
          <md-tab id="tab-story-url" md-label="URL">
            <story-url></story-url>
          </md-tab>
          <md-tab id="tab-story-advertising" md-label="ADVERTISING">
            <story-advertising></story-advertising>
          </md-tab>
          <md-tab id="tab-story-analytics" md-label="ANALYTICS">
            <story-analytics></story-analytics>
          </md-tab>
        </md-tabs>
      </md-dialog-content>
      <md-dialog-actions>
        <md-button class="md-primary" @click="settingDialog = false">Close</md-button>
        <md-button class="md-primary" @click="saveSettings">Ok</md-button>
      </md-dialog-actions>
    </md-dialog>
  </div>
</template>

<script>
  import StoryLeftSideBar from "./LeftSideBar/index";
  import StoryRightSideBar from "./RightSideBar/index";
  import StorySeo from "./Settings/StorySEO";
  import StoryAdvertising from "./Settings/StoryAdvertising";
  import StoryAnalytics from "./Settings/StoryAnalytics";
  import StoryUrl from "./Settings/StoryURL";

  export default {
    name: "story-edit",
    components: {
      StoryAnalytics,
      StoryAdvertising,
      StorySeo,
      StoryUrl,
      StoryRightSideBar,
      StoryLeftSideBar,
    },
    data () {
      return {
        settingDialog: false,
        settings: {
          backgroundAudio: "",
          posterPortraitSrc: "",
          posterSquareSrc: "",
          posterLandscapeSrc: "",
          publisher: "",
          publisherLogoSrc: "",
          supportsLandscape: true,
        },
      }
    },
    methods: {
      /**
       * save story global setting
       */
      saveSettings () {
        this.$store.dispatch('saveAMPStory', {
          data: {
            ...this.settings
          },
          publish: false
        });
      },
      /**
       * reload story_page_view iframe
       */
      reloadIframe () {
        document.getElementById('story_page_view').contentWindow.location.reload();
      },
    },
    computed: {
      /**
       *  generate embed url to put iframe from selected story and page
       */
      storyPageUrl () {
        if (!_.isNil(this.$store.state.story) &&
          this.$store.state.story.data.pages.length > 0 &&
          this.$store.state.story.selected.page >= 0) {
          return `${app_url}/embed/story/${this.$store.state.story.id}/page/${this.$store.state.story.data.pages[this.$store.state.story.selected.page].id}`;
        }
        return null;
      },
      /**
       * fetch selected page content from the store
       */
      page () {
        if (!_.isNil(this.$store.state.story) &&
          this.$store.state.story.data.pages.length > 0 &&
          this.$store.state.story.selected.page >= 0) {
          return this.$store.state.story.data.pages[this.$store.state.story.selected.page];
        }
        return '';
      },
    },
    watch: {
      /**
       * reload story page view whenever selected page content is changed
       */
      page: {
        handler: _.debounce(function (data) {
          this.reloadIframe();
        }, 200),
        deep: true
      }
    },
    mounted () {
      // select page action
      this.$store.dispatch('selectAMPStory', {
        page: 0,
        layer: -1,
        element: -1,
      });

      // app publish action emit receiver from EditableHeader Component
      Vue.$on('app:publish', () => {
        this.$store.dispatch('saveAMPStory', { data: {}, publish: true });
      });
      // app setting action emit receiver from EditableHeader Component
      Vue.$on('app:setting', () => {
        this.settingDialog = true;
      });
      // story settings action emit receiver from Settings components on the right sidebar
      Vue.$on('story:settings', (data) => {
        this.settings = Object.assign(this.settings, data);
        console.log(this.settings);
        this.$store.dispatch('saveAMPStory', {
          data: {
            ...this.settings
          },
          publish: false
        });
      });
    },
    beforeDestroy () {
      Vue.$off('app:publish');
      Vue.$off('app:setting');
      Vue.$off('story:settings');
    },
  }
</script>