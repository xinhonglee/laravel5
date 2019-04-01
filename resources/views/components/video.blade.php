<amp-video
    @if (!empty($element['grid-area'])) grid-area="{{ $element['grid-area']}}" @endif
    @if (!empty($properties['src'])) src="{{ $properties['src'] }}" @endif
    @if (!empty($properties['width'])) width="{{ $properties['width']}}" @endif
    @if (!empty($properties['height'])) height="{{ $properties['height']}}" @endif
    layout="{{ !empty($properties['layout']) ? $properties['layout'] : 'fill'}}"
    @if (!empty($properties['poster'])) poster="{{ $properties['poster']}}" @endif
    @if (!empty($properties['autoplay'])) autoplay @endif
    @if (!empty($properties['loop']))loop @endif
    >
</amp-video>
