const layerTemplates = [
  { slug: 'fill', name: 'Fill'},
  { slug: 'vertical', name: 'Vertical'},
  { slug: 'horizontal', name: 'Horizontal'},
  { slug: 'thirds', name: 'Thirds'}
];

const elementTypes = [
  {slug: 'audio', name: 'Audio'},
  {slug: 'gfycat', name: 'Gfycat'},
  {slug: 'google-vr-view-image', name: 'Google VR Image'},
  {slug: 'img', name: 'Image'},
  {slug: 'video', name: 'Video'},
  {slug: 'richtext', name: 'Rich Text'},
  {slug: 'timeago', name: 'Time Ago'},
  {slug: 'fit-text', name: 'Fit Text'},
];

const animations = [
  {slug: 'animate-in', name: 'Animate In'},
  {slug: 'animate-in-duration', name: 'Animate In Duration'},
  {slug: 'animate-in-delay', name: 'Animate In Delay'},
  {slug: 'animate-in-after', name: 'Animate In After'},
];

const imageFilters = ['.jpg', '.png', '.gif'];

const ctaTypes = ['img', 'richtext', 'timeago', 'fit-text'];

const gridAreas = [
  {
    template: 'thirds',
    areas: [
      { slug: 'lower-third', name: 'Lower Third'},
      { slug: 'middle-third', name: 'Middle Third'},
      { slug: 'upper-third', name: 'Upper Third'}
    ]
  }
];

export default {
  layerTemplates,
  elementTypes,
  animations,
  imageFilters,
  ctaTypes,
  gridAreas
}