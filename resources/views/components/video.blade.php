<amp-video src="{{ $properties['src'] }}"
    @if (!empty($properties['autoplay']))autoplay @endif
    @if (!empty($properties['loop']))loop @endif
    width="{{ $properties['width']}}"
    height="{{ $properties['height']}}"
    layout="{{ $properties['layout']}}"
    poster="{{ $properties['poster']}}">
</amp-video>
