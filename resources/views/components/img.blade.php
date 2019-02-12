<amp-img src="{{ $properties['src'] }}"
    width="{{ $properties['width']}}"
    height="{{ $properties['height']}}"
    layout="{{ $properties['layout']}}"
    @if (!empty($properties['animate-in'])) animate-in="{{ $properties['animate-in']}}" @endif
    @if (!empty($properties['animate-in-delay'])) animate-in-delay="{{ $properties['animate-in-delay']}}" @endif
    @if (!empty($properties['grid-area'])) grid-area="{{ $properties['grid-area']}}" @endif>
</amp-img>
