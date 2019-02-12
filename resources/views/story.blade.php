<!doctype html>
<html ⚡>
  <head>
    <meta charset="utf-8">
    <title>Joy of Pets</title>
    <link rel="canonical" href="pets.html">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-video"
        src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
    <script async custom-element="amp-story"
        src="https://cdn.ampproject.org/v0/amp-story-1.0.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400" rel="stylesheet">
  </head>
  <body>
    <!-- Cover page -->
    <amp-story standalone
        title="{{ $story['title'] }}"
        publisher="{{ $story['publisher'] }}"
        publisher-logo-src="{{ $story['publisher-logo-src'] }}"
        poster-portrait-src="{{ $story['poster-portrait-src'] }}">
      @each('story-page', $story['pages'], 'page')
      <amp-story-bookend src="{{ $story['bookend'] }}" layout="nodisplay">
      </amp-story-bookend>
    </amp-story>
  </body>
</html>
</body>
