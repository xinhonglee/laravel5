<amp-story-grid-layer template="{{ $layer['template'] }}">
  @foreach ($layer['elements'] as $element)
      @includeWhen($element['type']=='image', 'components.img', ['properties' => $element['properties']])
      @includeWhen($element['type']=='richtext', 'components.richtext', ['properties' => $element['properties']])
      @includeWhen($element['type']=='video', 'components.video', ['properties' => $element['properties']])
  @endforeach
</amp-story-grid-layer>
