@extends('layouts.front')

@section('content')

@php ($i = 0)
<header class="xs-hide">
  <amp-carousel height="819" layout="fixed-height" type="carousel" autoplay="" loop="">
	@for ($k = 0; $k < 5; $k++)
    @if ($videos->count()>=($i+1))
    <article class="slide">
      <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="fill" class="cover"></amp-img>
      <div class="caption">
        <amp-timeago layout="fixed" width="300" class="time"
    height="25"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
        <h2>{{$videos[$i]->title}}</h2>
        <a href="{{route('player', $videos[$i]->slug)}}" class="btn"><amp-img class="up" src="../assets/play_up.svg" layout="fixed" width="17" height="22" style="margin-right:10px;top:4px;"></amp-img> Voir la vidéo</a>
      </div>
    </article>
    @endif
    @php ($i++)
	@endfor
  </amp-carousel>
</header>
@php ($i = 0)
<header class="sm-hide md-hide lg-hide">
  <amp-carousel height="497" layout="fixed-height" type="carousel" autoplay="" loop="" class="mobile">
	@for ($k = 0; $k < 5; $k++)
    @if ($videos->count()>=($i+1))
    <article class="slide">
      <amp-img src="{{$videos[$i]->cover_url}}" layout="fill" class="cover"></amp-img>
      <div class="caption">
        <amp-timeago layout="fixed" width="300" class="time"
    height="25"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
        <h2>{{$videos[$i]->title}}</h2>
        <a href="{{route('player', $videos[$i]->slug)}}" class="btn"><amp-img class="up" src="../assets/play_up.svg" layout="fixed" width="10" height="13" style="top:2px;"></amp-img></a>
      </div>
    </article>
    @endif
    @php ($i++)
    @endfor
  </amp-carousel>
</header>

<h2 class="section">A la une</h2>

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
    @php ($i++)
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
@if ($hasMorePages)
<section class="more">
  <a href="/videos/" class="">Toutes les vidéos</a>
</section>
@endif
<section class="social">
  <h2 class="xs-hide">Retrouvez Loopsider sur les réseaux</h2>
  <ul>
    <li>
			<a href="https://www.facebook.com/Loopsider/" target="_blank">
				<amp-img src="/assets/facebook_green.svg" media="(max-width: 40rem)" width="13" height="25" layout="fixed"></amp-img>
				<amp-img src="/assets/facebook_green.svg" media="(min-width: 40.06rem) and (max-width: 52rem)" width="20" height="38" layout="fixed"></amp-img>
				<amp-img src="/assets/facebook_green.svg" media="(min-width: 52.06rem) and (max-width: 64rem)" width="27" height="52" layout="fixed"></amp-img>
				<amp-img src="/assets/facebook_green.svg" media="(min-width: 64.06rem)" width="34" height="66" layout="fixed"></amp-img>				
			</a>
		</li>
        <li>
			<a href="https://twitter.com/Loopsidernews" target="_blank">
				<amp-img src="/assets/twitter_green.svg"  media="(max-width: 40rem)" width="27" height="23" layout="fixed"></amp-img>
				<amp-img src="/assets/twitter_green.svg" media="(min-width: 40.06rem) and (max-width: 52rem)" width="43" height="37" layout="fixed"></amp-img>
				<amp-img src="/assets/twitter_green.svg" media="(min-width: 52.06rem) and (max-width: 64rem)" width="59" height="50" layout="fixed"></amp-img>
				<amp-img src="/assets/twitter_green.svg" media="(min-width: 64.06rem)" width="75" height="64" layout="fixed"></amp-img>
			</a>
		</li>
        <li>
			<a href="https://www.youtube.com/channel/UC6bn_ABjeTwbJFGFMQbZFlw" target="_blank">
				<amp-img src="/assets/youtube_green.svg"  media="(max-width: 40rem)" width="34" height="25" layout="fixed"></amp-img>
				<amp-img src="/assets/youtube_green.svg" media="(min-width: 40.06rem) and (max-width: 52rem)" width="53" height="39" layout="fixed"></amp-img>
				<amp-img src="/assets/youtube_green.svg" media="(min-width: 52.06rem) and (max-width: 64rem)" width="73" height="54" layout="fixed"></amp-img>
				<amp-img src="/assets/youtube_green.svg" media="(min-width: 64.06rem)" width="92" height="66" layout="fixed"></amp-img>
			</a>
		</li>
        <li>
			<a href="https://www.instagram.com/loopsider/" target="_blank">
				<amp-img src="/assets/instagram_green.svg" media="(max-width: 40rem)" width="24" height="24" layout="fixed"></amp-img>
				<amp-img src="/assets/instagram_green.svg" media="(min-width: 40.06rem) and (max-width: 52rem)" width="38" height="38" layout="fixed"></amp-img>
				<amp-img src="/assets/instagram_green.svg" media="(min-width: 52.06rem) and (max-width: 64rem)" width="52" height="52" layout="fixed"></amp-img>
				<amp-img src="/assets/instagram_green.svg" media="(min-width: 64.06rem)" width="65" height="65" layout="fixed"></amp-img>
			</a>
		</li>
        <li>
			<a href="#">
				<amp-img src="/assets/snapchat_green.svg"  media="(max-width: 40rem)" width="27" height="26" layout="fixed"></amp-img>
				<amp-img src="/assets/snapchat_green.svg" media="(min-width: 40.06rem) and (max-width: 52rem)" width="43" height="35" layout="fixed"></amp-img>
				<amp-img src="/assets/snapchat_green.svg" media="(min-width: 52.06rem) and (max-width: 64rem)" width="59" height="49" layout="fixed"></amp-img>
				<amp-img src="/assets/snapchat_green.svg" media="(min-width: 64.06rem)" width="71" height="67" layout="fixed"></amp-img>
			</a>
		</li>
  </ul>
  <div class="footer-img xs-hide">
	<div class="gradient"></div>
	<amp-img class="xs-hide" layout="responsive" width="1680" height="994" src="/assets/background_footer.jpg"></amp-img>
  </div>
</section>
@endsection
