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

const toLower = text => {
  return text.toString().toLowerCase()
};

const searchTable = (items, term) => {
  if (term) {
    return items.filter(item => {
      let result = false;
      Object.keys(item).forEach((key) => {
        if(toLower(item[key]).includes(toLower(term))) {
          result = true;
          return true;
        }
      });
     return result;
    })
  }

  return items
};

export default {
  getLayerTemplate,
  getElement,
  getGridArea,
  isGridArea,
  searchTable
}