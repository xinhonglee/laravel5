@extends('layouts.front')

@section('content')

<section class="header cat">
  <h2>{{ $category->name }}</h2>
</section>

<div class="header-img">
	<div class="gradient"></div>
	<amp-img class="cover" layout="fill" src="/assets/banner1.jpg"></amp-img>
</div>

@php ($i = 0)
<header class="xs-hide">
  <amp-carousel height="819" layout="fixed-height" type="carousel" autoplay="" loop="">
	@for ($k = 0; $k < 5; $k++)
    @if ($videos->count()>=($i+1))
    <article class="slide">
      <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="fill" class="cover"></amp-img>
      <div class="caption">
        <amp-timeago layout="fixed" width="160" class="time"
    height="30"
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
        <amp-timeago layout="fixed" width="160" class="time"
    height="30"
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
            <amp-timeago layout="fixed" width="160" class="time"
    height="30"
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
            <amp-timeago layout="fixed" width="160" class="time"
    height="30"
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
                <amp-timeago layout="fixed" width="160" class="time"
    height="30"
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
                <amp-timeago layout="fixed" width="160" class="time"
    height="30"
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
                <amp-timeago layout="fixed" width="160" class="time"
    height="30"
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
                <amp-timeago layout="fixed" width="160" class="time"
    height="30"
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
            <amp-timeago layout="fixed" width="160" class="time"
    height="30"
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
  <a href="/page/{{ $page+1 }}" class="">Toutes les vidéos</a>
</section>
@endif
<section class="social sm-hide md-hide lg-hide">
  <ul>
    <li>
      <a href="#">
        <amp-img src="../assets/facebook_green.svg" media="(min-width: 40.06rem)" width="25" height="49" layout="fixed"></amp-img>
        <amp-img src="../assets/facebook_green.svg" media="(max-width: 40rem)" width="13" height="30" layout="fixed"></amp-img>
      </a>
    </li>
    <li>
      <a href="#">
        <amp-img src="../assets/twitter_green.svg" media="(min-width: 40.06rem)" width="54" height="45" layout="fixed"></amp-img>
        <amp-img src="../assets/twitter_green.svg" media="(max-width: 40rem)" width="27" height="23" layout="fixed"></amp-img>
      </a>
    </li>
    <li>
      <a href="#">
        <amp-img src="../assets/youtube_green.svg" media="(min-width: 40.06rem)" width="68" height="48" layout="fixed"></amp-img>
        <amp-img src="../assets/youtube_green.svg" media="(max-width: 40rem)" width="34" height="30" layout="fixed"></amp-img>
      </a>
    </li>
    <li>
      <a href="#">
        <amp-img src="../assets/instagram_green.svg" media="(min-width: 40.06rem)" width="47" height="46" layout="fixed"></amp-img>
        <amp-img src="../assets/instagram_green.svg" media="(max-width: 40rem)" width="24" height="24" layout="fixed"></amp-img>
      </a>
    </li>
    <li>
      <a href="#">
        <amp-img src="../assets/snapchat_green.svg" media="(min-width: 40.06rem)" width="53" height="50" layout="fixed"></amp-img>
        <amp-img src="../assets/snapchat_green.svg" media="(max-width: 40rem)" width="27" height="26" layout="fixed"></amp-img>
      </a>
    </li>
  </ul>
</section>
@endsection
