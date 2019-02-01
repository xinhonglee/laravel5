@extends('layouts.front')

@section('content')
  <header class="banner">
    <amp-img class="cover" layout="fill" src="/assets/banner1.jpg"></amp-img>
    <div class="title">
      <h1>Regarder. Comprendre. Partager.</h1>
	  <ul class="social">
        <li>
			<a href="#">
				<amp-img src="/assets/facebook_green.svg" media="(max-width: 40rem)" width="13" height="25" layout="fixed"></amp-img>
				<amp-img src="/assets/facebook_green.svg" media="(min-width: 40.06rem) and (max-width: 52rem)" width="20" height="38" layout="fixed"></amp-img>
				<amp-img src="/assets/facebook_green.svg" media="(min-width: 52.06rem) and (max-width: 64rem)" width="27" height="52" layout="fixed"></amp-img>
				<amp-img src="/assets/facebook_green.svg" media="(min-width: 64.06rem)" width="34" height="66" layout="fixed"></amp-img>				
			</a>
		</li>
        <li>
			<a href="#">
				<amp-img src="/assets/twitter_green.svg"  media="(max-width: 40rem)" width="27" height="23" layout="fixed"></amp-img>
				<amp-img src="/assets/twitter_green.svg" media="(min-width: 40.06rem) and (max-width: 52rem)" width="43" height="37" layout="fixed"></amp-img>
				<amp-img src="/assets/twitter_green.svg" media="(min-width: 52.06rem) and (max-width: 64rem)" width="59" height="50" layout="fixed"></amp-img>
				<amp-img src="/assets/twitter_green.svg" media="(min-width: 64.06rem)" width="75" height="64" layout="fixed"></amp-img>
			</a>
		</li>
        <li>
			<a href="#">
				<amp-img src="/assets/youtube_green.svg"  media="(max-width: 40rem)" width="34" height="25" layout="fixed"></amp-img>
				<amp-img src="/assets/youtube_green.svg" media="(min-width: 40.06rem) and (max-width: 52rem)" width="53" height="39" layout="fixed"></amp-img>
				<amp-img src="/assets/youtube_green.svg" media="(min-width: 52.06rem) and (max-width: 64rem)" width="73" height="54" layout="fixed"></amp-img>
				<amp-img src="/assets/youtube_green.svg" media="(min-width: 64.06rem)" width="92" height="66" layout="fixed"></amp-img>
			</a>
		</li>
        <li>
			<a href="#">
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
	</div>
  </header>

  <section class="intro">
    <div class="clearfix mxn2 ">
      
      <div class="sm-col sm-col-8 px2 mt4">
        <h3>Des images pour écrire un monde en mouvement.</h3>
        <p>Conçu pour les écrans et les réseaux sociaux, Loopsider raconte et décrypte en images les histoires qui font l’actualité. Celles qui vous touchent et qui vous inspirent, celles qui vous rendent curieux et qui vous connectent aux autres. Ici. Maintenant.</p>
      </div>
	  <div class="sm-col sm-col-4 px2 center mt2">
        <amp-img src="/assets/phone.png" width="263" height="714" layout="responsive"></amp-video>
      </div>
  </section>

  <section class="chiffres">
	<div class="content">
		<h2>En chiffres</h2>
		<p class="subtitle">La plus forte croissance d'un média<br class="xs-hide"/>sur facebook en 2018.</p>
		<div class="clearfix border">
			<div class="sm-col sm-col-3 border">
				<div class="number">
					30 
				</div>
				<div class="unit">
					millions
				</div>
				<div class="comment">
					de personnes touchées<br />chaque mois
				</div>
			</div>
			<div class="sm-col sm-col-3 border">
				<div class="number">
					3
				</div>
				<div class="unit">
					millions
				</div>
				<div class="comment">
					de personnes touchées<br />chaque jour
				</div>
			</div>
			<div class="sm-col sm-col-3 border">
				<div class="number">
					50
				</div>
				<div class="unit">
					millions
				</div>
				<div class="comment">
					de vidéos vues<br />chaque mois
				</div>
			</div>
			<div class="sm-col sm-col-3 border">
				<div class="number">
					1
				</div>
				<div class="unit">
					million
				</div>
				<div class="comment">
					d'interactions uniques<br />chaque mois
				</div>
			</div>
		</div>
		<p class="center tagline-green">
			Loopsider
		</p>
		<p class="center tagline">
			un enjeu
		</p>
		<p class="subtitle center">
			De l’attention à l’engagement,
			<br />
			de l’engagement au partage
		</p>
	</div>
	<div class="footer-img">
		<div class="gradient"></div>
		<amp-img layout="responsive" width="1680" height="994" src="/assets/background_footer.jpg"></amp-img>
	</div>
  </section>
  
  <section class="contents">
	<h3 class="center">Nous produisons des contenus qui créent la conversation chez les Millenials</h3>
	<div class="clearfix mxn2">
		<div class="sm-col sm-col-4 px2">	
			<div class="cell">
				<amp-img layout="fixed" width="56" height="56" src="/assets/facebook_black.svg"></amp-img>
				<p>Notre équipe crée et produit des contenus pour les marques.</p>
			</div>
		</div>
		<div class="sm-col sm-col-4 px2">	
			<div class="cell">
				<amp-img layout="fixed" width="57" height="56" src="/assets/facebook_black.svg"></amp-img>
				<p>Via ces contenus, nous permettons aux marques d’avoir une voix dans cette conversation.</p>
			</div>
		</div>
		<div class="sm-col sm-col-4 px2">	
			<div class="cell">
				<amp-img layout="fixed" width="56" height="56" src="/assets/facebook_black.svg"></amp-img>
				<p>Nous mettons notre expertise du storytelling visuel au service de nos partenaires pour générer de l’engagement au meilleur coût.</p>
			</div>
		</div>
	</div>
  </section>
  
  <section class="work">
	<h2>Comment travailler ensemble ?</h2>
	<div class="clearfix table">
		<div class="lg-col lg-col-6">	
			<div class="cell-header">
				<p class="center">Média</p>
			</div>
			<div class="cell">
				<ul>
					<li>Nous créons et produisons des contenus originaux que nous distribuons à nos communautés.</li>
					<li>Nous déclinons ces contenus pour les adapter aux formats et aux codes des différents réseaux sociaux.</li>
					<li>Et nous optimisons la distribution de ces contenus.</li>
				</ul>
			</div>
		</div>
		<div class="lg-col lg-col-6">	
			<div class="cell-header">
				<p class="center">Marque Blanche</p>
			</div>
			<div class="cell">
				<ul>
					<li>Bénéficiez de notre expertise des médias sociaux pour servir vos objectifs de communication interne ou externe.</li>
					<li>Le savoir-faire d’un média, la flexibilité d’une agence.</li>
				</ul>
			</div>
		</div>
	</div>
	<h4 class="center">Nos clients</h4>
	<ul class="customers">
		<li><amp-img layout="fixed" width="56" height="56" src="/assets/facebook_green.svg"></amp-img></li>
		<li><amp-img layout="fixed" width="56" height="56" src="/assets/facebook_green.svg"></amp-img></li>
		<li><amp-img layout="fixed" width="56" height="56" src="/assets/facebook_green.svg"></amp-img></li>
	</ul>
	<div class="center">
		<a href="#" class="btn">Nous contacter</a>
	</div>
  </section>  

  <section class="team">
	<amp-img class="cover xs-hide sm-hide" layout="fill" src="/assets/banner1.jpg"></amp-img>
	<div class="white">
		<h2>Team</h2>
		<div class="clearfix mxn2 ">
		  <div class="col col-6 sm-col sm-col-3 px2 photo">
			<amp-img src="/assets/johan.png" width="540" height="670" layout="responsive"></amp-img>
			<h4>Johan Hufnagel</h4>
			<p>Directeur de la rédaction</p>
		  </div>
		  <div class="col col-6 sm-col sm-col-3 px2 photo">
			<amp-img src="/assets/daphnee.png" width="540" height="670" layout="responsive"></amp-img>
			<h4>Daphnée Denis</h4>
			<p>Rédactrice en chef</p>
		  </div>
		  <div class="col col-6 sm-col sm-col-3 px2 photo">
			<amp-img src="/assets/giuseppe.png" width="540" height="670" layout="responsive"></amp-img>
			<h4>Giuseppe de Martino</h4>
			<p>CEO</p>
		  </div>
		  <div class="col col-6 sm-col sm-col-3 px2 photo">
			<amp-img src="/assets/arnaud.png" width="540" height="670" layout="responsive"></amp-img>
			<h4>Arnaud Maillard</h4>
			<p>COO</p>
		  </div>
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
