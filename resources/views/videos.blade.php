@extends('layouts.front')

@section('content')

<section class="header">
  <h2>Toutes les vidéos</h2>
</section>

<section class="video-wall">
  <div class="clearfix">
    @php ($i = 0)
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
  </div>
  <div class="clearfix">
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
    <div class="lg-col lg-col-6">
      <div class="clearfix">
        @php ($i++)
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
      </div>
      @endif
      <div class="clearfix">
        @php ($i++)
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
      </div>
      <div class="clearfix">
        @php ($i++)
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
      </div>
    </div>
    @endif
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
@endsection
