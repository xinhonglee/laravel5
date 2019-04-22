import Plugin from '@ckeditor/ckeditor5-core/src/plugin';
import CustomStyleEditing from './customstyleediting';
import CustomStyleUI from './customstyleui';

export default class CustomStyle extends Plugin {
  /**
   * @inheritDoc
   */
  static get requires() {
    return [CustomStyleEditing, CustomStyleUI];
  }
  /**
   * @inheritDoc
   */
  static get pluginName() {
    return 'customStyle';
  }
}