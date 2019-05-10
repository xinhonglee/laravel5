const layerTemplates = [
  {
    slug: 'fill',
    name: 'Fill',
    icon: '/assets/layer-templates/fill.png',
    data: {
      id: '',
      template: 'fill',
      styles: {},
      elements: [],
    },
  },
  {
    slug: 'vertical',
    name: 'Vertical',
    icon: '/assets/layer-templates/vertical.png',
    data: {
      id: '',
      template: 'vertical',
      styles: {},
      elements: [],
    },
  },
  {
    slug: 'horizontal',
    name: 'Horizontal',
    icon: '/assets/layer-templates/horizontal.png',
    data: {
      id: '',
      template: 'horizontal',
      styles: {},
      elements: [],
    },
  },
  {
    slug: 'thirds',
    name: 'Thirds',
    icon: '/assets/layer-templates/thirds.png',
    data: {
      id: '',
      template: 'thirds',
      styles: {},
      elements: [],
    },
  }
];

const elementTypes = [
  { slug: 'richtext', name: 'Rich Text' },
  { slug: 'img', name: 'Image' },
  { slug: 'video', name: 'Video' },
  { slug: 'audio', name: 'Audio' },
  { slug: 'timeago', name: 'Time Ago' },
  { slug: 'fit-text', name: 'Fit Text' },
  { slug: 'gfycat', name: 'Gfycat' },
  { slug: 'google-vr-view-image', name: 'Google VR Image' },
];

const imageFilters = ['.jpg', '.png', '.gif'];

const ctaTypes = ['img', 'richtext', 'timeago', 'fit-text'];

const gridAreas = [
  { slug: 'upper-third', name: 'Upper Third' },
  { slug: 'middle-third', name: 'Middle Third' },
  { slug: 'lower-third', name: 'Lower Third' },
];

const elementLayouts = [
  { slug: 'fill', name: 'Fill' },
  { slug: 'fixed', name: 'Fixed' },
  { slug: 'fixed-height', name: 'Fixed Height' },
  { slug: 'flex-item', name: 'Flex Item' },
  { slug: 'nodisplay', name: 'No display' },
  { slug: 'responsive', name: 'Responsive' },
];

const blankPageTemplate = {
  id: '',
  title: 'Blank',
  image_url: '',
  data: {
    'auto-advance-after': '',
    'background-audio': '',
    layers: [],
    cta_layer: {
      type: '',
      class: '',
      properties: {}
    },
  }
};

const animations = [
  { slug: 'drop', name: 'drop' },
  { slug: 'fade-in', name: 'fade-in' },
  { slug: 'fly-in-bottom', name: 'fly-in-bottom' },
  { slug: 'fly-in-left', name: 'fly-in-left' },
  { slug: 'fly-in-right', name: 'fly-in-right' },
  { slug: 'fly-in-top', name: 'fly-in-top' },
  { slug: 'pulse', name: 'pulse' },
  { slug: 'rotate-in-left', name: 'rotate-in-left' },
  { slug: 'rotate-in-right', name: 'rotate-in-right' },
  { slug: 'twirl-in', name: 'twirl-in' },
  { slug: 'whoosh-in-left', name: 'whoosh-in-left' },
  { slug: 'whoosh-in-right', name: 'whoosh-in-right' },
  { slug: 'pan-left', name: 'pan-left' },
  { slug: 'pan-right', name: 'pan-right' },
  { slug: 'pan-down', name: 'pan-down' },
  { slug: 'pan-up', name: 'pan-up' },
  { slug: 'zoom-in', name: 'zoom-in' },
  { slug: 'zoom-out', name: 'zoom-out' },
];

const bookend = {
  shareProviders: [
    { slug: 'twitter', name: 'Twitter', icon: '/assets/bookend/twitter.png' },
    { slug: 'facebook', name: 'Facebook', icon: '/assets/bookend/facebook.png' },
    { slug: 'youtube', name: 'Youtube', icon: '/assets/bookend/youtube.png' },
    { slug: 'pinterest', name: 'Pinterest', icon: '/assets/bookend/pinterest.png' },
    { slug: 'gplus', name: 'G+', icon: '/assets/bookend/gplus.png' },
    { slug: 'tumblr', name: 'Tumblr', icon: '/assets/bookend/tumblr.png' },
    { slug: 'whatsapp', name: 'Whatsapp', icon: '/assets/bookend/whatsapp.png' },
    { slug: 'email', name: 'Email', icon: '/assets/bookend/email.png' },
    { slug: 'sms', name: 'SMS', icon: '/assets/bookend/sms.png' },
    { slug: 'line', name: 'LINE', icon: '/assets/bookend/line.png' },
  ],
  components: [
    { slug: 'heading', name: 'Heading', icon: '/assets/bookend/heading.png' },
    { slug: 'small', name: 'Small', icon: '/assets/bookend/small.png' },
    { slug: 'landscape', name: 'Landscape', icon: '/assets/bookend/landscape.png' },
    { slug: 'portrait', name: 'Portrait', icon: '/assets/bookend/portrait.png' },
    { slug: 'cta-link', name: 'CTA', icon: '/assets/bookend/cta.png' },
    { slug: 'textbox', name: 'TextBox', icon: '/assets/bookend/textbox.png' }
  ]
};

export default {
  layerTemplates,
  elementTypes,
  imageFilters,
  ctaTypes,
  gridAreas,
  elementLayouts,
  blankPageTemplate,
  animations,
  bookend
}