@extends('layouts.front')

@section('content')

<header class="xs-hide">
  <amp-carousel height="819" layout="fixed-height" type="carousel" autoplay="" loop="">
    @php ($i = 0)
    @if ($videos->count()>=($i+1))
    <article class="slide">
      <amp-img src="{{$videos[$i]->coverUrl}}" width="819" height="819" layout="fill" class="cover"></amp-img>
      <div class="caption">
        <span class="time">{{$videos[$i]->date}}</span>
        <h2>{{$videos[$i]->title}}</h2>
        <a href="{{route('player', $videos[$i]->slug)}}" class="btn"><amp-img src="../assets/play_hover.png" layout="fixed" width="17" height="22" style="margin-right:10px;top:4px;"></amp-img> Voir la vidéo</a>
      </div>
    </article>
    @endif
    @php ($i++)
    @if ($videos->count()>=($i+1))
    <article class="slide">
      <amp-img src="{{$videos[1]->coverUrl}}" layout="fill" class="cover"></amp-img>
      <div class="caption">
        <span class="time">{{$videos[$i]->date}}</span>
        <h2>{{$videos[$i]->title}}</h2>
        <a href="{{route('player', $videos[$i]->slug)}}" class="btn"><amp-img src="../assets/play_hover.png" layout="fixed" width="17" height="22" style="margin-right:10px;top:4px;"></amp-img> Voir la vidéo</a>
      </div>
    </article>
    @endif
    @php ($i++)
    @if ($videos->count()>=($i+1))
    <article class="slide">
      <amp-img src="{{$videos[2]->coverUrl}}" layout="fill" class="cover"></amp-img>
      <div class="caption">
        <span class="time">{{$videos[$i]->date}}</span>
        <h2>{{$videos[$i]->title}}</h2>
        <a href="{{route('player', $videos[$i]->slug)}}" class="btn"><amp-img src="../assets/play_hover.png" layout="fixed" width="17" height="22" style="margin-right:10px;top:4px;"></amp-img> Voir la vidéo</a>
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
      <amp-img src="{{$videos[$i]->coverUrl}}" layout="fill" class="cover"></amp-img>
      <div class="caption">
        <span class="time">{{$videos[$i]->date}}</span>
        <h2>{{$videos[$i]->title}}</h2>
        <a href="{{route('player', $videos[$i]->slug)}}" class="btn"><amp-img src="../assets/play_hover.png" layout="fixed" width="10" height="13" style="top:2px;"></amp-img></a>
      </div>
    </article>
    @endif
    @php ($i++)
    @if ($videos->count()>=($i+1))
    <article class="slide">
      <amp-img src="{{$videos[$i]->coverUrl}}" layout="fill" class="cover"></amp-img>
      <div class="caption">
        <span class="time">{{$videos[$i]->date}}</span>
        <h2>{{$videos[$i]->title}}</h2>
        <a href="{{route('player', $videos[$i]->slug)}}" class="btn"><amp-img src="../assets/play_hover.png" layout="fixed" width="10" height="13" style="top:2px;"></amp-img></a>
      </div>
    </article>
    @endif
    @php ($i++)
    @if ($videos->count()>=($i+1))
    <article class="slide">
      <amp-img src="{{$videos[$i]->coverUrl}}" layout="fill" class="cover"></amp-img>
      <div class="caption">
        <span class="time">{{$videos[$i]->date}}</span>
        <h2>{{$videos[$i]->title}}</h2>
        <a href="{{route('player', $videos[$i]->slug)}}" class="btn"><amp-img src="../assets/play_hover.png" layout="fixed" width="10" height="13" style="top:2px;"></amp-img></a>
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
        <article class="video">
          <amp-img src="{{$videos[$i]->coverUrl}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
          <div class="caption">
            <span class="time">{{$videos[$i]->date}}</span>
            <h2 class="small">{{$videos[$i]->title}}</h2>
          </div>
        </article>
      </a>
    </div>
    @endif
    @php ($i++)
    @if ($videos->count()>=($i+1))
    <div class="lg-col lg-col-3 md-col md-col-6">
      <a href="{{route('player', $videos[$i]->slug)}}">
        <article class="video">
          <amp-img src="{{$videos[$i]->coverUrl}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
          <div class="caption">
            <span class="time">{{$videos[$i]->date}}</span>
            <h2 class="small">{{$videos[$i]->title}}</h2>
          </div>
        </article>
      </a>
    </div>
    @endif
    @php ($i++)
    @if ($videos->count()>=($i+1))
    <div class="lg-col lg-col-3 md-col md-col-6">
      <a href="{{route('player', $videos[$i]->slug)}}">
        <article class="video">
          <amp-img src="{{$videos[$i]->coverUrl}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
          <div class="caption">
            <span class="time">{{$videos[$i]->date}}</span>
            <h2 class="small">{{$videos[$i]->title}}</h2>
          </div>
        </article>
      </a>
    </div>
    @endif
    @php ($i++)
    @if ($videos->count()>=($i+1))
    <div class="lg-col lg-col-3 md-col md-col-6">
      <a href="{{route('player', $videos[$i]->slug)}}">
        <article class="video">
          <amp-img src="{{$videos[$i]->coverUrl}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
          <div class="caption">
            <span class="time">{{$videos[$i]->date}}</span>
            <h2 class="small">{{$videos[$i]->title}}</h2>
          </div>
        </article>
      </a>
    </div>
    @endif
  </div>
  <div class="clearfix">
    @php ($i++)
    @if ($videos->count()>=($i+1))
    <div class="lg-col lg-col-6">
      <a href="{{route('player', $videos[$i]->slug)}}">
        <article class="video">
          <amp-img src="{{$videos[$i]->coverUrl}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
          <div class="caption">
            <span class="time">{{$videos[$i]->date}}</span>
            <h2>{{$videos[$i]->title}}</h2>
          </div>
        </article>
      </a>
    </div>
    @endif
    <div class="lg-col lg-col-6">
      <div class="clearfix">
        @php ($i++)
        @if ($videos->count()>=($i+1))
        <div class="md-col md-col-6">
          <a href="{{route('player', $videos[$i]->slug)}}">
            <article class="video">
              <amp-img src="{{$videos[$i]->coverUrl}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <span class="time">{{$videos[$i]->date}}</span>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
            </article>
          </a>
        </div>
        @endif
        @php ($i++)
        @if ($videos->count()>=($i+1))
        <div class="md-col md-col-6">
          <a href="{{route('player', $videos[$i]->slug)}}">
            <article class="video">
              <amp-img src="{{$videos[$i]->coverUrl}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <span class="time">{{$videos[$i]->date}}</span>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
            </article>
          </a>
        </div>
      </div>
      @endif
      <div class="clearfix">
        @php ($i++)
        @if ($videos->count()>=($i+1))
        <div class="md-col md-col-6">
          <a href="{{route('player', $videos[$i]->slug)}}">
            <article class="video">
              <amp-img src="{{$videos[$i]->coverUrl}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <span class="time">{{$videos[$i]->date}}</span>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
            </article>
          </a>
        </div>
        @endif
        @php ($i++)
        @if ($videos->count()>=($i+1))
        <div class="md-col md-col-6">
          <a href="{{route('player', $videos[$i]->slug)}}">
            <article class="video">
              <amp-img src="{{$videos[$i]->coverUrl}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <span class="time">{{$videos[$i]->date}}</span>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
            </article>
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
            <article class="video">
              <amp-img src="{{$videos[$i]->coverUrl}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <span class="time">{{$videos[$i]->date}}</span>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
            </article>
          </a>
        </div>
        @endif
        @php ($i++)
        @if ($videos->count()>=($i+1))
        <div class="md-col md-col-6">
          <a href="{{route('player', $videos[$i]->slug)}}">
            <article class="video">
              <amp-img src="{{$videos[$i]->coverUrl}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <span class="time">{{$videos[$i]->date}}</span>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
            </article>
          </a>
        </div>
        @endif
      </div>
      <div class="clearfix">
        @php ($i++)
        @if ($videos->count()>=($i+1))
        <div class="md-col md-col-6">
          <a href="{{route('player', $videos[$i]->slug)}}">
            <article class="video">
              <amp-img src="{{$videos[$i]->coverUrl}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <span class="time">{{$videos[$i]->date}}</span>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
            </article>
          </a>
        </div>
        @endif
        @php ($i++)
        @if ($videos->count()>=($i+1))
        <div class="md-col md-col-6">
          <a href="{{route('player', $videos[$i]->slug)}}">
            <article class="video">
              <amp-img src="{{$videos[$i]->coverUrl}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
              <div class="caption">
                <span class="time">{{$videos[$i]->date}}</span>
                <h2 class="small">{{$videos[$i]->title}}</h2>
              </div>
            </article>
          </a>
        </div>
      </div>
    </div>
    @endif
    @php ($i++)
    @if ($videos->count()>=($i+1))
    <div class="lg-col lg-col-6">
      <a href="{{route('player', $videos[$i]->slug)}}">
        <article class="video">
          <amp-img src="{{$videos[$i]->coverUrl}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
          <div class="caption">
            <span class="time">{{$videos[$i]->date}}</span>
            <h2>{{$videos[$i]->title}}</h2>
          </div>
        </article>
      </a>
    </div>
    @endif
  </div>
</section>
@if ($hasMorePages)
<section class="more">
  <a href="/page/{{ $page+1 }}" class="">Voir plus</a>
</section>
@endif
<section class="social">
  <h2 class="xs-hide">Retrouvez Loopsider<br />sur les réseaux</h2>
  <ul>
    <li>
      <a href="#">
        <amp-img src="../assets/facebook_black.png" media="(min-width: 40.06rem)" width="25" height="49" layout="fixed"></amp-img>
        <amp-img src="../assets/facebook_green.png" media="(max-width: 40rem)" width="13" height="25" layout="fixed"></amp-img>
      </a>
    </li>
    <li>
      <a href="#">
        <amp-img src="../assets/twitter_black.png" media="(min-width: 40.06rem)" width="54" height="45" layout="fixed"></amp-img>
        <amp-img src="../assets/twitter_green.png" media="(max-width: 40rem)" width="27" height="23" layout="fixed"></amp-img>
      </a>
    </li>
    <li>
      <a href="#">
        <amp-img src="../assets/youtube_black.png" media="(min-width: 40.06rem)" width="68" height="48" layout="fixed"></amp-img>
        <amp-img src="../assets/youtube_green.png" media="(max-width: 40rem)" width="34" height="25" layout="fixed"></amp-img>
      </a>
    </li>
    <li>
      <a href="#">
        <amp-img src="../assets/insta_black.png" media="(min-width: 40.06rem)" width="47" height="46" layout="fixed"></amp-img>
        <amp-img src="../assets/insta_green.png" media="(max-width: 40rem)" width="24" height="24" layout="fixed"></amp-img>
      </a>
    </li>
    <li>
      <a href="#">
        <amp-img src="../assets/snap_black.png" media="(min-width: 40.06rem)" width="53" height="50" layout="fixed"></amp-img>
        <amp-img src="../assets/snap_green.png" media="(max-width: 40rem)" width="27" height="26" layout="fixed"></amp-img>
      </a>
    </li>
  </ul>
<section>
@endsection
