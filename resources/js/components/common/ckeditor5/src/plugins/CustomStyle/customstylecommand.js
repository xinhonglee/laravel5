import Command from '@ckeditor/ckeditor5-core/src/command';
import first from '@ckeditor/ckeditor5-utils/src/first';
import { isDefault } from './utils';
const CUSTOMSTYLE = 'customStyle';

export default class CustomStyleCommand extends Command {

  refresh() {
    const firstBlock = first( this.editor.model.document.selection.getSelectedBlocks() );

    this.isEnabled = !!firstBlock && this._canBeCustomStyle( firstBlock );

    this.value = ( this.isEnabled && firstBlock.hasAttribute( 'customStyle' ) ) ? firstBlock.getAttribute( 'customStyle' ) : 'default';
    // const model = this.editor.model;
    // const doc = model.document;
    // this.isEnabled = true;
    // this.value = this.isEnabled && doc.selection.hasAttribute( 'customStyle' ) ?  doc.selection.getAttribute( 'customStyle' ) : 'default';
    // console.log(this.value)
  }

  execute( options = {} ) {
    const editor = this.editor;
    const model = editor.model;
    const doc = model.document;
    const value = options.value;

    model.change( writer => {
      const blocks = Array.from( doc.selection.getSelectedBlocks() ).filter( block => this._canBeCustomStyle( block ) );
      const currentCustomStyle = blocks[ 0 ].getAttribute( 'customStyle' );

      const removeCustomStyle = isDefault( value ) || currentCustomStyle === value || !value;

      if ( removeCustomStyle ) {
        removeCustomStyleFromSelection( blocks, writer );
      } else {
        setCustomStyleOnSelection( blocks, writer, value );
      }
    } );

    // const model = this.editor.model;
    // const document = model.document;
    // const selection = document.selection;
    //
    // const customStyle = options.value;
    // console.log(customStyle);
    //
    // model.change( writer => {
    //   const ranges = model.schema.getValidRanges( selection.getRanges(), 'customStyle' );
    //
    //   if ( selection.isCollapsed ) {
    //     const position = selection.getFirstPosition();
    //     console.log("collapsed position:", position)
    //
    //     // When selection is inside text with `customStyle` attribute.
    //     if ( selection.hasAttribute( 'customStyle' ) ) {
    //       const isSameCustomStyle = value => {
    //         return value.item.hasAttribute( 'customStyle' ) && value.item.getAttribute( 'customStyle' ) === this.value;
    //       };
    //
    //       const customStyleStart = position.getLastMatchingPosition( isSameCustomStyle, { direction: 'backward' } );
    //       const customStyleEnd = position.getLastMatchingPosition( isSameCustomStyle );
    //
    //       const customStyleRange = writer.createRange( customStyleStart, customStyleEnd );
    //
    //       // Then depending on current value...
    //       if ( !customStyle || this.value === customStyle ) {
    //         // ...remove attribute when passing highlighter different then current or executing "eraser".
    //         writer.removeAttribute( 'customStyle', customStyleRange );
    //         writer.removeSelectionAttribute( 'customStyle' );
    //       } else {
    //         // ...update `highlight` value.
    //         writer.setAttribute( 'customStyle', customStyle, customStyleRange );
    //         writer.setSelectionAttribute( 'customStyle', customStyle );
    //       }
    //     } else if ( customStyle ) {
    //       writer.setSelectionAttribute( 'customStyle', customStyle );
    //     }
    //   } else {
    //     console.log(ranges)
    //     for ( const range of ranges ) {
    //       console.log("collapsed position:", range)
    //       if ( customStyle ) {
    //         writer.setAttribute( 'customStyle', customStyle, range );
    //       } else {
    //         writer.removeAttribute( 'customStyle', range );
    //       }
    //     }
    //   }
    // } );
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
