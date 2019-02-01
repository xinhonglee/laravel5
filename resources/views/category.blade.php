@extends('layouts.front')

@section('content')

<section class="header category">
  <h2>{{ $category->name }}</h2>
</section>

<div class="header-img">
	<div class="gradient"></div>
	<amp-img class="cover" layout="fill" src="/assets/banner1.jpg"></amp-img>
</div>

<header class="xs-hide">
  <amp-carousel height="819" layout="fixed-height" type="carousel" autoplay="" loop="">
    @php ($i = 0)
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
    @if ($videos->count()>=($i+1))
    <article class="slide">
      <amp-img src="{{$videos[1]->cover_url}}" layout="fill" class="cover"></amp-img>
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
    @if ($videos->count()>=($i+1))
    <article class="slide">
      <amp-img src="{{$videos[2]->cover_url}}" layout="fill" class="cover"></amp-img>
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
  </amp-carousel>
</header>
<header class="sm-hide md-hide lg-hide">
  <amp-carousel height="497" layout="fixed-height" type="carousel" autoplay="" loop="" class="mobile">
    @php ($i = 0)
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
  </amp-carousel>
</header>

<h2 class="section">A la une</h2>

<section class="video-wall">
  <div class="clearfix">
    @php ($i = 0)
    @if ($videos->count()>=($i+1))
    <div class="lg-col lg-col-3 md-col md-col-6">
      <a href="{{route('player', $videos[$i]->slug)}}">
        <article class="video"><div class="bg">
          <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
          <div class="caption">
            <amp-timeago layout="fixed" width="160" class="time"
              height="30"
              datetime="{{$videos[$i]->ISODate}}"
              locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
            <h2 class="small">{{$videos[$i]->title}}</h2>
          </div>
		      <div class="btn"></div>
        <div></article>
      </a>
    </div>
    @endif
    @php ($i++)
    @if ($videos->count()>=($i+1))
    <div class="lg-col lg-col-3 md-col md-col-6">
      <a href="{{route('player', $videos[$i]->slug)}}">
        <article class="video"><div class="bg">
          <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
          <div class="caption">
            <amp-timeago layout="fixed" width="160" class="time"
    height="30"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
            <h2 class="small">{{$videos[$i]->title}}</h2>
          </div>
		  <div class="btn"></div>
        </div></article>
      </a>
    </div>
    @endif
    @php ($i++)
    @if ($videos->count()>=($i+1))
    <div class="lg-col lg-col-3 md-col md-col-6">
      <a href="{{route('player', $videos[$i]->slug)}}">
        <article class="video"><div class="bg">
          <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
          <div class="caption">
            <amp-timeago layout="fixed" width="160" class="time"
    height="30"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
            <h2 class="small">{{$videos[$i]->title}}</h2>
          </div>
		  <div class="btn"></div>
        </div></article>
      </a>
    </div>
    @endif
    @php ($i++)
    @if ($videos->count()>=($i+1))
    <div class="lg-col lg-col-3 md-col md-col-6">
      <a href="{{route('player', $videos[$i]->slug)}}">
        <article class="video"><div class="bg">
          <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
          <div class="caption">
            <amp-timeago layout="fixed" width="160" class="time"
    height="30"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
            <h2 class="small">{{$videos[$i]->title}}</h2>
          </div>
		  <div class="btn"></div>
        </div></article>
      </a>
    </div>
    @endif
  </div>
  <div class="clearfix">
    @php ($i++)
    @if ($videos->count()>=($i+1))
    <div class="lg-col lg-col-6">
      <a href="{{route('player', $videos[$i]->slug)}}">
        <article class="video"><div class="bg">
          <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
          <div class="caption">
            <amp-timeago layout="fixed" width="160" class="time"
    height="30"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
            <h2>{{$videos[$i]->title}}</h2>
          </div>
		  <div class="btn"></div>
        </div></article>
      </a>
    </div>
    @endif
    <div class="lg-col lg-col-6">
      <div class="clearfix">
        @php ($i++)
        @if ($videos->count()>=($i+1))
        <div class="md-col md-col-6">
          <a href="{{route('player', $videos[$i]->slug)}}">
            <article class="video"><div class="bg">
              <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <amp-timeago layout="fixed" width="160" class="time"
    height="30"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
			  <div class="btn"></div>
            </div></article>
          </a>
        </div>
        @endif
        @php ($i++)
        @if ($videos->count()>=($i+1))
        <div class="md-col md-col-6">
          <a href="{{route('player', $videos[$i]->slug)}}">
            <article class="video"><div class="bg">
              <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <amp-timeago layout="fixed" width="160" class="time"
    height="30"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
			  <div class="btn"></div>
            </div></article>
          </a>
        </div>
      </div>
      @endif
      <div class="clearfix">
        @php ($i++)
        @if ($videos->count()>=($i+1))
        <div class="md-col md-col-6">
          <a href="{{route('player', $videos[$i]->slug)}}">
            <article class="video"><div class="bg">
              <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <amp-timeago layout="fixed" width="160" class="time"
    height="30"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
			  <div class="btn"></div>
            </div></article>
          </a>
        </div>
        @endif
        @php ($i++)
        @if ($videos->count()>=($i+1))
        <div class="md-col md-col-6">
          <a href="{{route('player', $videos[$i]->slug)}}">
            <article class="video"><div class="bg">
              <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <amp-timeago layout="fixed" width="160" class="time"
    height="30"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
			  <div class="btn"></div>
            </div></article>
          </a>
        </div>
        @endif
      </div>
    </div>
  </div>
  <div class="clearfix">
    <div class="lg-col lg-col-6">
      <div class="clearfix">
        @php ($i++)
        @if ($videos->count()>=($i+1))
        <div class="md-col md-col-6">
          <a href="{{route('player', $videos[$i]->slug)}}">
            <article class="video"><div class="bg">
              <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <amp-timeago layout="fixed" width="160" class="time"
    height="30"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
			  <div class="btn"></div>
            </div></article>
          </a>
        </div>
        @endif
        @php ($i++)
        @if ($videos->count()>=($i+1))
        <div class="md-col md-col-6">
          <a href="{{route('player', $videos[$i]->slug)}}">
            <article class="video"><div class="bg">
              <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <amp-timeago layout="fixed" width="160" class="time"
    height="30"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
			  <div class="btn"></div>
            </div></article>
          </a>
        </div>
        @endif
      </div>
      <div class="clearfix">
        @php ($i++)
        @if ($videos->count()>=($i+1))
        <div class="md-col md-col-6">
          <a href="{{route('player', $videos[$i]->slug)}}">
            <article class="video"><div class="bg">
              <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <amp-timeago layout="fixed" width="160" class="time"
    height="30"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
			  <div class="btn"></div>
            </div></article>
          </a>
        </div>
        @endif
        @php ($i++)
        @if ($videos->count()>=($i+1))
        <div class="md-col md-col-6">
          <a href="{{route('player', $videos[$i]->slug)}}">
            <article class="video"><div class="bg">
              <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <amp-timeago layout="fixed" width="160" class="time"
    height="30"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
			  <div class="btn"></div>
            </div></article>
          </a>
        </div>
      </div>
    </div>
    @endif
    @php ($i++)
    @if ($videos->count()>=($i+1))
    <div class="lg-col lg-col-6">
      <a href="{{route('player', $videos[$i]->slug)}}">
        <article class="video"><div class="bg">
          <amp-img src="{{$videos[$i]->cover_url}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
          <div class="caption">
            <amp-timeago layout="fixed" width="160" class="time"
    height="30"
    datetime="{{$videos[$i]->ISODate}}"
    locale="fr">{{$videos[$i]->ISODate}}</amp-timeago>
            <h2>{{$videos[$i]->title}}</h2>
          </div>
		  <div class="btn"></div>
        </div></article>
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
@endsection
