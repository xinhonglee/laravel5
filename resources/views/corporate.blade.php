@extends('layouts.front')

@section('content')
  <header class="banner">
    <amp-img class="cover" layout="fill" src="/assets/banner1.jpg"></amp-img>
    <div class="title">
      <h1><span>Regarder.</span>
      <br />
      <span>Comprendre.<span>
      <br />
      <span>Partager.<span></h1>
    </div>
  </header>

  <section class="intro">
    <div class="clearfix mxn2 ">
      <div class="sm-col sm-col-4 px2 center">
        <amp-img src="/assets/phone.png" width="263" height="714" layout="fixed"></amp-video>
      </div>
      <div class="sm-col sm-col-8 px2 mt4">
        <h3>Des images pour écrire un monde en mouvement.</h3>
        <p>Conçu pour les écrans et les réseaux sociaux, Loopsider raconte et décrypte en images les histoires qui font l’actualité. Celles qui vous touchent et qui vous inspirent, celles qui vous rendent curieux et qui vous connectent aux autres. Ici. Maintenant.</p>
        <ul class="social">
          <a href="#"><li><amp-img src="/assets/facebook_green.png" width="13" height="24" layout="fixed"></amp-img></li></a>
          <a href="#"><li><amp-img src="/assets/twitter_green.png" width="27" height="24" layout="fixed"></amp-img></li></a>
          <a href="#"><li><amp-img src="/assets/youtube_green.png" width="34" height="24" layout="fixed"></amp-img></li></a>
          <a href="#"><li><amp-img src="/assets/insta_green.png" width="25" height="24" layout="fixed"></amp-img></li></a>
          <a href="#"><li><amp-img src="/assets/snap_green.png" width="27" height="24" layout="fixed"></amp-img></li></a>
        </ul>
      </div>
  </section>

  <section class="chiffres">
    <h2>Chiffres</h2>
    <ul>
      <li><span class="number">50</span> <span class="unit">millions</span> vidéos vues / mois</li>
      <li><span class="number">500 000</span> followers sur les réseaux</li>
      <li><span class="number">2</span> <span class="unit">millions</span> de reach hebdomadaire</li>
      <li><span class="number">50</span><span class="unit">%</span> de notre audience a moins de 25 ans</li>
    </ul>
  </section>

  <section class="team">
    <h2>Team</h2>
    <div class="clearfix mxn2 ">
      <div class="sm-col sm-col-6 px2 photo">
        <amp-img src="/assets/johan.png" width="540" height="670" layout="responsive"></amp-img>
        <h4>Johan Hufnagel</h4>
        <p>Directeur de la rédaction</p>
      </div>
      <div class="sm-col sm-col-6 px2 photo">
        <amp-img src="/assets/daphnee.png" width="540" height="670" layout="responsive"></amp-img>
        <h4>Daphnée Denis</h4>
        <p>Rédactrice en chef</p>
      </div>
    </div>
    <div class="clearfix mxn2 ">
      <div class="sm-col sm-col-6 px2 photo">
        <amp-img src="/assets/giuseppe.png" width="540" height="670" layout="responsive"></amp-img>
        <h4>Giuseppe de Martino</h4>
        <p>CEO</p>
      </div>
      <div class="sm-col sm-col-6 px2 photo">
        <amp-img src="/assets/arnaud.png" width="540" height="670" layout="responsive"></amp-img>
        <h4>Arnaud Maillard</h4>
        <p>COO</p>
      </div>
    </div>
  </section>

  <section class="newsletter">
    <h2>Newsletter</h2>
    <ul>
      <a href="mailto:exemple@gmail.com"><li>exemple@gmail.com</li></a>
    </ul>
  </section>

  <section class="contact">
    <h2>Contact</h2>
    <ul>
      <a href="mailto:exemple@gmail.com"><li>Vous êtes un annonceur</li></a>
      <a href="mailto:exemple@gmail.com"><li>Vous souhaitez postuler</li></a>
      <a href="mailto:exemple@gmail.com"><li>Vous souhaitez nous envoyer une vidéo</li></a>
    </ul>
  </section>
@endsection
