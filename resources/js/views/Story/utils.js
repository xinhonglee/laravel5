import constants from './constants';

const getLayerTemplate = (slug) => {
  if(!_.isNil(slug)) {
    return constants.layerTemplates.find((template) => {
      return template.slug === slug;
    });
  }
  return null;
};

const getElement = (slug) => {
  if(!_.isNil(slug)) {
    return constants.elementTypes.find((element) => {
      return element.slug === slug;
    });
  }
  return null;
};

const getGridArea = (slug) => {
  if(!_.isNil(slug)) {
    return constants.gridAreas.find((area) => {
      return area.slug === slug;
    });
  }
  return null;
};

const isGridArea = (slug) => {
  return slug === 'thirds';
};

const serializeData = (data1, data2) => {

};

export default {
  getLayerTemplate,
  getElement,
  getGridArea,
  isGridArea
}