<amp-video
    @if (!empty($properties['id'])) id="{{ $properties['id'] }}" @endif
    @if (!empty($properties['src'])) src="{{ $properties['src'] }}" @endif
    @if (!empty($properties['width'])) width="{{ $properties['width']}}" @endif
    @if (!empty($properties['height'])) height="{{ $properties['height']}}" @endif
    layout="{{ !empty($properties['layout']) ? $properties['layout'] : 'fill'}}"
    @if (!empty($properties['poster'])) poster="{{ $properties['poster']}}" @endif
    @if (!empty($properties['autoplay'])) autoplay @endif
    @if (!empty($properties['loop']))loop @endif
    @if (!empty($element['animate-in'])) animate-in="{{ $element['animate-in']}}" @endif
    @if (!empty($element['animate-in-duration'])) animate-in-duration="{{ $element['animate-in-duration']}}s" @endif
    @if (!empty($element['animate-in-delay'])) animate-in-delay="{{ $element['animate-in-delay']}}s" @endif
    @if (!empty($element['animate-in-after'])) animate-in-after="{{ $element['animate-in-after']}}" @endif
    @if (!empty($element['grid-area'])) grid-area="{{ $element['grid-area']}}" @endif
    >
</amp-video>
