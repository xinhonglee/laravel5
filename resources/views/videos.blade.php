@extends('layouts.front')

@section('content')

<section class="header">
  <h2>Toutes les vidéos</h2>
</section>

@php ($i=0)
<section class="video-wall">
  <div class="clearfix">
	{{-- 4 small videos --}}
	@for ($k = 0; $k < 4; $k++)
    @if ($videos->count()>=($i+1))
    <div class="lg-col lg-col-3 md-col md-col-6">
      <a href="{{route('player', $videos[$i]->slug)}}">
        <article class="video">
          <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
          <div class="caption">
            <amp-timeago layout="fixed" width="300" class="time"
    height="25"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
            <h2 class="small">{{$videos[$i]->title}}</h2>
          </div>
		  <div class="btn"></div>
        </article>
      </a>
    </div>
    @endif
    @php ($i++)
	@endfor
  </div>
  <div class="clearfix">
	{{-- 1 big video --}}
    @if ($videos->count()>=($i+1))
    <div class="lg-col lg-col-6">
      <a href="{{route('player', $videos[$i]->slug)}}">
        <article class="video">
          <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
          <div class="caption">
            <amp-timeago layout="fixed" width="300" class="time"
    height="25"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
            <h2>{{$videos[$i]->title}}</h2>
          </div>
		  <div class="btn"></div>
        </article>
      </a>
    </div>
	@php ($i++)
    @endif
    <div class="lg-col lg-col-6">
      <div class="clearfix">
	    {{-- 2 small videos --}}
		@for ($k = 0; $k < 2; $k++)
        @if ($videos->count()>=($i+1))
        <div class="md-col md-col-6">
          <a href="{{route('player', $videos[$i]->slug)}}">
            <article class="video">
              <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <amp-timeago layout="fixed" width="300" class="time"
    height="25"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
			  <div class="btn"></div>
            </article>
          </a>
        </div>
        @endif
        @php ($i++)
        @endfor
      </div>
      <div class="clearfix">
		{{-- 2 small videos --}}
        @for ($k = 0; $k < 2; $k++)
        @if ($videos->count()>=($i+1))
        <div class="md-col md-col-6">
          <a href="{{route('player', $videos[$i]->slug)}}">
            <article class="video">
              <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <amp-timeago layout="fixed" width="300" class="time"
    height="25"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
			  <div class="btn"></div>
            </article>
          </a>
        </div>
        @endif
        @php ($i++)
        @endfor
      </div>
    </div>
  </div>
  <div class="clearfix">
    <div class="lg-col lg-col-6">
      <div class="clearfix">
        {{-- 2 small videos --}}
		@for ($k = 0; $k < 2; $k++)
        @if ($videos->count()>=($i+1))
        <div class="md-col md-col-6">
          <a href="{{route('player', $videos[$i]->slug)}}">
            <article class="video">
              <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <amp-timeago layout="fixed" width="300" class="time"
    height="25"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
			  <div class="btn"></div>
            </article>
          </a>
        </div>
        @endif
        @php ($i++)
		@endfor
      </div>
      <div class="clearfix">
        {{-- 2 small videos --}}
		@for ($k = 0; $k < 2; $k++)
        @if ($videos->count()>=($i+1))
        <div class="md-col md-col-6">
          <a href="{{route('player', $videos[$i]->slug)}}">
            <article class="video">
              <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <amp-timeago layout="fixed" width="300" class="time"
    height="25"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
			  <div class="btn"></div>
            </article>
          </a>
        </div>
        @endif
        @php ($i++)
		@endfor
      </div>
    </div>
    @if ($videos->count()>=($i+1))
    <div class="lg-col lg-col-6">
      <a href="{{route('player', $videos[$i]->slug)}}">
        <article class="video">
          <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
          <div class="caption">
            <amp-timeago layout="fixed" width="300" class="time"
    height="25"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
            <h2>{{$videos[$i]->title}}</h2>
          </div>
		  <div class="btn"></div>
        </article>
      </a>
    </div>
    @endif
  </div>
</section>
<section class="pagination">
  @php ($url='/videos/')
  @if (isset($category)) @php($url=$url.$category->slug.'/') @endif
  <a href="{{ $url }}page/{{ $page-1 }}" class="@if ($page==0) disabled @endif">
    <amp-img src="/assets/prev.svg" width="42" height="15" layout="fixed"></amp-img>
  </a>
  <span class="current">{{ $page+1 }}</span><span class="total"> / {{ $nbPages }}</span>
  <a href="{{ $url }}page/{{ $page+1 }}" class="@if (!$hasMorePages) disabled @endif">
	<amp-img src="/assets/next.svg" width="42" height="15" layout="fixed"></amp-img>
  </a>
</section>
<section class="social sm-hide md-hide lg-hide">
  <ul>
    <li>
      <a href="https://www.facebook.com/Loopsider/" target="_blank">
        <amp-img src="/assets/facebook_green.svg" media="(min-width: 40.06rem)" width="25" height="49" layout="fixed"></amp-img>
        <amp-img src="/assets/facebook_green.svg" media="(max-width: 40rem)" width="13" height="25" layout="fixed"></amp-img>
      </a>
    </li>
    <li>
      <a href="https://twitter.com/Loopsidernews" target="_blank">
        <amp-img src="/assets/twitter_green.svg" media="(min-width: 40.06rem)" width="54" height="45" layout="fixed"></amp-img>
        <amp-img src="/assets/twitter_green.svg" media="(max-width: 40rem)" width="27" height="23" layout="fixed"></amp-img>
      </a>
    </li>
    <li>
      <a href="https://www.youtube.com/channel/UC6bn_ABjeTwbJFGFMQbZFlw" target="_blank">
        <amp-img src="/assets/youtube_green.svg" media="(min-width: 40.06rem)" width="68" height="48" layout="fixed"></amp-img>
        <amp-img src="/assets/youtube_green.svg" media="(max-width: 40rem)" width="34" height="25" layout="fixed"></amp-img>
      </a>
    </li>
    <li>
      <a href="https://www.instagram.com/loopsider/" target="_blank">
        <amp-img src="/assets/instagram_green.svg" media="(min-width: 40.06rem)" width="47" height="46" layout="fixed"></amp-img>
        <amp-img src="/assets/instagram_green.svg" media="(max-width: 40rem)" width="24" height="24" layout="fixed"></amp-img>
      </a>
    </li>
    <li>
      <a href="#">
        <amp-img src="/assets/snapchat_green.svg" media="(min-width: 40.06rem)" width="53" height="50" layout="fixed"></amp-img>
        <amp-img src="/assets/snapchat_green.svg" media="(max-width: 40rem)" width="27" height="26" layout="fixed"></amp-img>
      </a>
    </li>
  </ul>
</section>
@endsection
