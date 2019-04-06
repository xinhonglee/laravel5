<div
  @if (!empty($element['animate-in'])) animate-in="{{ $element['animate-in']}}" @endif
  @if (!empty($element['animate-in-duration'])) animate-in-duration="{{ $element['animate-in-duration']}}s" @endif
  @if (!empty($element['animate-in-delay'])) animate-in-delay="{{ $element['animate-in-delay']}}s" @endif
  @if (!empty($element['animate-in-after'])) animate-in-after="{{ $element['animate-in-after']}}" @endif
  @if (!empty($element['grid-area'])) grid-area="{{ $element['grid-area']}}" @endif
  >
  @if (!empty($properties['html']))
    {!! $properties['html'] !!}
  @endif
</div>
