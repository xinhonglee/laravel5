<div
  @if (!empty($properties['animate-in'])) animate-in="{{ $properties['animate-in']}}" @endif
  @if (!empty($properties['animate-in-delay'])) animate-in-delay="{{ $properties['animate-in-delay']}}" @endif
  @if (!empty($properties['grid-area'])) animate-in-delay="{{ $properties['grid-area']}}" @endif
  >
  {!! $properties['html'] !!}
</div>
