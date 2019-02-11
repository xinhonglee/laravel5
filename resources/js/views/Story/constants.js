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

const elementAnimations = [
  {slug: 'animate-in', name: 'Animate In'},
  {slug: 'animate-in-duration', name: 'Animate In Duration'},
  {slug: 'animate-in-delay', name: 'Animate In Delay'},
  {slug: 'animate-in-after', name: 'Animate In After'},
];

const imageTypes = ['.jpg', '.png', '.gif'];

export default {
  layerTemplates,
  elementTypes,
  elementAnimations,
  imageTypes
}