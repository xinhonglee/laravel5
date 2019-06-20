<amp-story-grid-layer
    style={{ 
        "margin-top:" .$layer['margin']['top'] 
        ."%;margin-right:" .$layer['margin']['right'] 
        ."%;margin-bottom:" .$layer['margin']['bottom'] 
        ."%;margin-left:" .$layer['margin']['left'] ."%;"
    }}
    @if (!empty($layer['template'])) template="{{ $layer['template'] }}" @endif
    >
    @foreach ($layer['elements'] as $element)
    <div style="position:relative">
        <div 
            @if ( !empty($element['properties']['verticalPositioning']) && $element['properties']['verticalPositioning']=='top') style="position:absolute;top:0%;width:100%" @endif
            @if ( !empty($element['properties']['verticalPositioning']) && $element['properties']['verticalPositioning']=='middle') style="position:absolute;top:50%;transform:translateY(-50%);width:100%" @endif
            @if ( !empty($element['properties']['verticalPositioning']) && $element['properties']['verticalPositioning']=='bottom') style="position:absolute;top:100%;transform:translateY(-100%);width:100%" @endif
        
        > 
            @includeWhen($element['type']=='img', 'components.img', ['element' => $element, 'properties' => $element['properties']])
            @includeWhen($element['type']=='richtext', 'components.richtext', ['element' => $element, 'properties' => $element['properties']])
            @includeWhen($element['type']=='video', 'components.video', ['element' => $element, 'properties' => $element['properties']])
        </div>
    </div>
    @endforeach
</amp-story-grid-layer>

