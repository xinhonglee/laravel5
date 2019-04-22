import Plugin from '@ckeditor/ckeditor5-core/src/plugin';
import CustomStyleCommand from './customstylecommand';
import {customStyles} from './utils';

export default class CustomStyleEditing extends Plugin {
  constructor(editor) {
    super(editor);
    editor.config.define('customStyle', {
      options: customStyles
    });
  }

  init() {
    const editor = this.editor;
    const schema = editor.model.schema;

    // Filter out unsupported options.
    const enabledOptions = editor.config.get('customStyle.options');
    // Allow custom style attribute on all blocks.
    schema.extend('$block', { allowAttributes: 'customStyle' });
    editor.model.schema.setAttributeProperties( 'customStyle', { isFormatting: true } );
    const definition = _buildDefinition(enabledOptions);

    editor.conversion.attributeToAttribute(definition);
    editor.commands.add('customStyle', new CustomStyleCommand(editor));
  }
}

// @private
function _buildDefinition(options) {
  const definition = {
    model: {
      key: 'customStyle',
      values: options.map(option => option.type).slice()
    },
    view: {}
  };
  options.forEach(option=> {
    definition.view[option.type] = {
      key: 'style',
      value: option.style
    };
  });
  return definition;
}
