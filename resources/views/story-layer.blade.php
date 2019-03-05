<amp-story-grid-layer template="{{ $layer['template'] }}">
  @foreach ($layer['elements'] as $element)
      @includeWhen($element['type']=='image', 'components.img', ['element' => $element, 'properties' => $element['properties']])
      @includeWhen($element['type']=='richtext', 'components.richtext', ['element' => $element, 'properties' => $element['properties']])
      @includeWhen($element['type']=='video', 'components.video', ['element' => $element, 'properties' => $element['properties']])
  @endforeach
</amp-story-grid-layer>
