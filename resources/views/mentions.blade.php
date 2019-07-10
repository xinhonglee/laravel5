@extends('layouts.front')

@section('content')
<header class="banner">
  <amp-img class="cover" layout="fill" src="/assets/banner1.jpg"></amp-img>
  <div class="title">
    <h1>Mentions légales</h1>
  </div>
</header>

<article class="content">
  <h4>Loopsider</h4>
  <p>71 rue du Faubourg-Saint-Martin
  <br />
  75010 Paris
  <br />
  France</p>

  <h4>Téléphone</h4>
  <p>09.88.99.90.61</p>

  <h4>Edité par JAG</h4>
  <p>SAS au capital de 4500€
  <br />
  RCS Paris 832 111 959
  <br />
  Numéro de TVA : FR52832111959</p>

  <h4>Numéro de déclaration simplifiée Cnil</h4>
  <p>en cours</p>

  <h4>Membre du Syndicat de la presse indépendante d’information en ligne (Spiil)</h4>
  <p>Charte éthique et déontologique à lire ici</p>

  <h4>Directeur de la publication</h4>
  <p>Giuseppe de Martino</p>

  <h4>Hébergement du site</h4>
  <p>OVH</p>

  <p class="mt2">Design by <a href="">Upian</a></p>
</article>
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
