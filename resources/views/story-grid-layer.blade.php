<amp-story-grid-layer
    @if (!empty($layer['template'])) template="{{ $layer['template'] }}" @endif
    >
    @foreach ($layer['elements'] as $element)
        <div style="position:absolute;width:100%;">
            @includeWhen($element['type']=='img', 'components.img', ['element' => $element, 'properties' => $element['properties']])
            @includeWhen($element['type']=='richtext', 'components.richtext', ['element' => $element, 'properties' => $element['properties']])
            @includeWhen($element['type']=='video', 'components.video', ['element' => $element, 'properties' => $element['properties']])
        </div>
    @endforeach
</amp-story-grid-layer>

