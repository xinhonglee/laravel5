<amp-story-page id = "{{ $page['id'] }}"
  @if (!empty($page['auto-advance-after']))auto-advance-after = "{{ $page['auto-advance-after'] }}"@endif
  @if (!empty($page['background-audio']))background-audio = "{{ $page['background-audio'] }}"@endif>
  @each('story-layer', $page['layers'], 'layer')
</amp-story-page>
