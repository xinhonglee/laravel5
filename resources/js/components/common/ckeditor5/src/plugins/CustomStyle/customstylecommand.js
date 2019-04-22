import Command from '@ckeditor/ckeditor5-core/src/command';
import first from '@ckeditor/ckeditor5-utils/src/first';
import { isCustomDefault } from './utils';
const CUSTOMSTYLE = 'customStyle';

export default class CustomStyleCommand extends Command {

  refresh() {
    const firstBlock = first( this.editor.model.document.selection.getSelectedBlocks() );

    this.isEnabled = !!firstBlock && this._canBeCustomStyle( firstBlock );

    this.value = ( this.isEnabled && firstBlock.hasAttribute( 'customStyle' ) ) ? firstBlock.getAttribute( 'customStyle' ) : 'default';
  }

  execute( options = {} ) {
    const editor = this.editor;
    const model = editor.model;
    const doc = model.document;
    const value = options.value;

    model.change( writer => {
      const blocks = Array.from( doc.selection.getSelectedBlocks() ).filter( block => this._canBeCustomStyle( block ) );
      const currentCustomStyle = blocks[ 0 ].getAttribute( 'customStyle' );

      const removeCustomStyle = isCustomDefault( value ) || currentCustomStyle === value || !value;

      if ( removeCustomStyle ) {
        removeCustomStyleFromSelection( blocks, writer );
      } else {
        setCustomStyleOnSelection( blocks, writer, value );
      }
    } );
  }

  _canBeCustomStyle( block ) {
    return this.editor.model.schema.checkAttribute( block, CUSTOMSTYLE );
  }
}


function removeCustomStyleFromSelection( blocks, writer ) {
  for ( const block of blocks ) {
    writer.removeAttribute( CUSTOMSTYLE, block );
  }
}

function setCustomStyleOnSelection( blocks, writer, customStyle ) {
  for ( const block of blocks ) {
    writer.setAttribute( CUSTOMSTYLE, customStyle, block );
  }
}
