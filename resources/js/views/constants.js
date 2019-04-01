const layerTemplates = [
  {
    slug: "fill",
    name: "Fill",
    image_url: "/assets/layer-templates/fill.png",
    data: {
      id: "",
      template: "fill",
      styles: {},
      elements: [],
    },
  },
  {
    slug: "vertical",
    name: "Vertical",
    image_url: "/assets/layer-templates/vertical.png",
    data: {
      id: "",
      template: "vertical",
      styles: {},
      elements: [],
    },
  },
  {
    slug: "horizontal",
    name: "Horizontal",
    image_url: "/assets/layer-templates/horizontal.png",
    data: {
      id: "",
      template: "horizontal",
      styles: {},
      elements: [],
    },
  },
  {
    slug: "thirds",
    name: "Thirds",
    image_url: "/assets/layer-templates/thirds.png",
    data: {
      id: "",
      template: "thirds",
      styles: {},
      elements: [
        // {
        //   "grid-area": "upper-third",
        //   type: "",
        //   properties: {}
        // },
        // {
        //   "grid-area": "middle-third",
        //   type: "",
        //   properties: {}
        // },
        // {
        //   "grid-area": "lower-third",
        //   type: "",
        //   properties: {}
        // }
      ],
    },
  }
];

const elementTypes = [
  { slug: "richtext", name: "Rich Text" },
  { slug: "img", name: "Image" },
  { slug: "video", name: "Video" },
  { slug: "audio", name: "Audio" },
  { slug: "timeago", name: "Time Ago" },
  { slug: "fit-text", name: "Fit Text" },
  { slug: "gfycat", name: "Gfycat" },
  { slug: "google-vr-view-image", name: "Google VR Image" },
];

const imageFilters = [".jpg", ".png", ".gif"];

const ctaTypes = ["img", "richtext", "timeago", "fit-text"];

const gridAreas = [
  { slug: "upper-third", name: "Upper Third" },
  { slug: "middle-third", name: "Middle Third" },
  { slug: "lower-third", name: "Lower Third" },
];

const elementLayouts = [
  { slug: "fill", name: "Fill" },
  { slug: "fixed", name: "Fixed" },
  { slug: "fixed-height", name: "Fixed Height" },
  { slug: "flex-item", name: "Flex Item" },
  { slug: "nodisplay", name: "No display" },
  { slug: "responsive", name: "Responsive" },
];

const blankPageTemplate =  {
    id: "",
    title: "Blank",
    image_url: "",
    data: {
      "auto-advance-after": "1",
      "background-audio": "",
      layers: [],
      cta_layer: {
        type: "",
        class: "",
        properties: {}
      },
    }
};



const animations = [
  {slug: "drop", name: "drop"},
  {slug: "fade-in", name: "fade-in"},
  {slug: "fly-in-bottom", name: "fly-in-bottom"},
  {slug: "fly-in-left", name: "fly-in-left"},
  {slug: "fly-in-right", name: "fly-in-right"},
  {slug: "fly-in-top", name: "fly-in-top"},
  {slug: "pulse", name: "pulse"},
  {slug: "rotate-in-left", name: "rotate-in-left"},
  {slug: "rotate-in-right", name: "rotate-in-right"},
  {slug: "twirl-in", name: "twirl-in"},
  {slug: "whoosh-in-left", name: "whoosh-in-left"},
  {slug: "whoosh-in-right", name: "whoosh-in-right"},
  {slug: "pan-left", name: "pan-left"},
  {slug: "pan-right", name: "pan-right"},
  {slug: "pan-down", name: "pan-down"},
  {slug: "pan-up", name: "pan-up"},
  {slug: "zoom-in", name: "zoom-in"},
  {slug: "zoom-out", name: "zoom-out"},
];

export default {
  layerTemplates,
  elementTypes,
  imageFilters,
  ctaTypes,
  gridAreas,
  elementLayouts,
  blankPageTemplate,
  animations
}