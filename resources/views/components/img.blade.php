<amp-img
    @if (!empty($properties['src'])) src="{{ $properties['src'] }}" @endif
    @if (!empty($properties['width'])) width="{{ $properties['width']}}" @endif
    @if (!empty($properties['height'])) height="{{ $properties['height']}}" @endif
    @if (!empty($properties['layout'])) layout="{{ $properties['layout']}}" @endif
    @if (!empty($element['animate-in'])) animate-in="{{ $element['animate-in']}}" @endif
    @if (!empty($element['animate-in-delay'])) animate-in-delay="{{ $element['animate-in-delay']}}" @endif
    @if (!empty($element['grid-area'])) grid-area="{{ $element['grid-area']}}" @endif>
</amp-img>
