<amp-img src="{{ $properties['src'] }}"
    width="{{ $properties['width']}}"
    height="{{ $properties['height']}}"
    layout="{{ $properties['layout']}}"
    @if (!empty($element['animate-in'])) animate-in="{{ $element['animate-in']}}" @endif
    @if (!empty($element['animate-in-delay'])) animate-in-delay="{{ $element['animate-in-delay']}}" @endif
    @if (!empty($element['grid-area'])) grid-area="{{ $element['grid-area']}}" @endif>
</amp-img>
