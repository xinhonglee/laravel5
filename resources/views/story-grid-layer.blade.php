<amp-story-grid-layer
    @if (!empty($layer['template'])) template="{{ $layer['template'] }}" @endif
    >
    @foreach ($layer['elements'] as $element)
        @includeWhen($element['type']=='img', 'components.img', ['element' => $element, 'properties' => $element['properties']])
        @includeWhen($element['type']=='richtext', 'components.richtext', ['element' => $element, 'properties' => $element['properties']])
        @includeWhen($element['type']=='video', 'components.video', ['element' => $element, 'properties' => $element['properties']])
    @endforeach
</amp-story-grid-layer>
