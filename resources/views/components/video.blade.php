<amp-video
    @if (!empty($properties['src'])) src="{{ $properties['src'] }}" @endif
    @if (!empty($properties['width'])) width="{{ $properties['width']}}" @endif
    @if (!empty($properties['height'])) height="{{ $properties['height']}}" @endif
    @if (!empty($properties['layout'])) layout="{{ $properties['layout']}}" @endif
    @if (!empty($properties['poster'])) poster="{{ $properties['poster']}}" @endif
    @if (!empty($properties['autoplay'])) autoplay @endif
    @if (!empty($properties['loop']))loop @endif
    >
</amp-video>
