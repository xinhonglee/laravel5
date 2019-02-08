@font-face {
  font-family: 'rationalextra_bold';
  src: url('/assets/rational-extrabold-webfont.woff2') format('woff2'),
     url('/assets/rational-extrabold-webfont.woff') format('woff');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'rationalsemi_bold';
  src: url('/assets/rational-semibold-webfont.woff2') format('woff2'),
     url('/assets/rational-semibold-webfont.woff') format('woff');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'rationalbook_bold';
  src: url('/assets/rational-bookbold-webfont.woff2') format('woff2'),
     url('/assets/rational-bookbold-webfont.woff') format('woff');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'rationalmedium';
  src: url('/assets/rational-medium.woff2') format('woff2'),
     url('/assets/rational-medium.woff') format('woff');
  font-weight: normal;
  font-style: normal;
}

body {
  background-color: #5feb98;
  color: #262626;
}

h1, h2, h3, h4, h5, h6 {
	letter-spacing: normal;
}
		
a, a:visited, a:hover {
  text-decoration: none;
}
h2.section {
  margin: 4.76vw 10.12vw 4.76vw 10.12vw;
  font-family: 'rationalextra_bold';
  font-size: 6.55vw;
  line-height: 5.36vw;
  display: block;
  border-bottom: solid 1.19vw #262626;
}
@media (max-width:40rem) {
  h2.section {
    margin: 40px 30px 40px 30px;
    font-size: 44px;
    line-height: 50px;
    display: block;
    border-bottom: solid 10px #262626;
  }
}

.header {
	height: 260px;
	background-color: #262626;
	text-align: center;
}
.header h2 {
	font-family: 'rationalextra_bold';
	font-size: 110px;
	line-height: 90px;
	color: #fff;
	border-bottom: solid 10px #5feb98;
	display: inline-block;
	margin-top: 110px;
	position: absolute;
	z-index: 300;
	left: 50%;
	-webkit-transform: translateX(-50%);
	transform: translateX(-50%);
	white-space: nowrap;
}
.header-img {
	width: 100%;
	height: 800px;
	position: absolute;
	top: 0;
	opacity: .35;
	background: #262626;
}
.header-img .gradient {
  position: absolute;
  bottom: 0;
  z-index: 5;
  width: 100%;
  height: 360px;
  background-image: linear-gradient(to top, #262626, rgba(38, 38, 38, 0));
}

@media (max-width:40rem) {
	.header {
		height: 240px;
	}
	.cat {
		height: 300px;
	}
	.header h2 {
		font-size: 36px;
		line-height: 40px;
		margin-top: 140px;
	}
	.category h2 {
		margin-top: 170px;
	}
}

.ampstart-headerbar {
  z-index: 200;
  background: linear-gradient(to bottom, rgba(0,0,0,0.5) 0%,rgba(0,0,0,0) 100%); /* W3C */
  height: 175px;
}

.ampstart-headerbar .ampstart-navbar-trigger {
  font-family: 'rationalextra_bold';
  color: #e4e5e6;
  font-size: 22px;
  top: 45px;
  right: 55px;
  margin-top: 10px;
}

.ampstart-headerbar .logo {
  top: 55px;
  left: 55px;
}

.ampstart-navbar-trigger:active, .ampstart-navbar-trigger:focus, .gallery-sidebar .ampstart-navbar-trigger {
  background: transparent;
}
@media (max-width:40rem) {
  .ampstart-headerbar {
    height: 100px;
  }
  .ampstart-headerbar .ampstart-navbar-trigger {
    font-size: 18px;
    top: 30px;
    right: 32px;
  }
  .ampstart-headerbar .logo {
    top: 20px;
    left: 20px;
  }
}
main {
  max-width: none;
}
.video {
  position: relative;
}

main header article.slide {
  margin: 0px;
  position: relative;
}
main header.xs-hide amp-carousel {
  border-top: solid 25px transparent;
  border-bottom: solid 30px transparent;
}
main header.xs-hide article.slide:first-of-type {
  border-left: solid 30px transparent;
}
main header.xs-hide article.slide:last-of-type {
  border-right: solid 30px transparent;
}
main header.xs-hide article.slide {
  width: 819px;
  height: 819px;
  border: solid 12px transparent;
}
main header.xs-hide {
	background-color: #262626;
}
main header.sm-hide, main header.md-hide, main header.lg-hide {
  border-top: solid 4px #000;
  border-bottom: solid 4px #000;
}
main header.sm-hide article.slide, main header.md-hide article.slide, main header.lg-hide article.slide {
  width: 80%;
  height: 497px;
  border-right: solid 4px #000;
}
amp-img.contain img {
  object-fit: contain;
}
amp-img.cover img {
  object-fit: cover;
}
.video-wall {
  border: solid 30px #262626;
  background-color: #262626;
}
.video {
  border: solid 11px transparent;
}
.video .bg {
  background-color: #262626;
}
@media (max-width:40rem) {
	.video .btn {
		z-index: 100;
		position: absolute;
		bottom: 20px;
		left: 20px;
		width: 80px;
		height: 40px;
		border: solid 3px #5feb98;
		background: url('/assets/play_up.svg') no-repeat center;
		background-size: 12px 12px;
	}
}
@media (min-width:40.06rem) {
	.video amp-img {
		opacity: 0.45;
		-o-transition:.5s;
		-ms-transition:.5s;
		-moz-transition:.5s;
		-webkit-transition:.5s;
		transition:.5s;
	}
	.video:hover amp-img {
		opacity: 1;
	}
	.video .caption {
		-o-transition:.5s;
		-ms-transition:.5s;
		-moz-transition:.5s;
		-webkit-transition:.5s;
		transition:.5s;
	}
	.video:hover .caption {
		bottom: 80px;
	}
	.video .btn {
		z-index: 100;
		position: absolute;
		bottom: 20px;
		left: 20px;
		width: 80px;
		height: 40px;
		border: solid 3px #5feb98;
		visibility: hidden;
		-o-transition:0s;
		-ms-transition:0s;
		-moz-transition:0s;
		-webkit-transition:0s;
		transition:0s;
		-o-transition-delay:0s;
		-ms-transition-delay:0s;
		-moz-transition-delay:0s;
		-webkit-transition-delay:0s;
		transition-delay:0s;
		background: url('/assets/play_up.svg') no-repeat center;
		background-size: 12px 12px;
	}
	.video:hover .btn {
		visibility: visible;
		-o-transition:.5s;
		-ms-transition:.5s;
		-moz-transition:.5s;
		-webkit-transition:.5s;
		transition:.5s;
		-o-transition-delay:.3s;
		-ms-transition-delay:.3s;
		-moz-transition-delay:.3s;
		-webkit-transition-delay:.3s;
		transition-delay:.3s;
	}
}
@media (max-width:40rem) {
  .video-wall {
	border-left: 0;
    border-right: 0;
	border-top: solid 4px #000;
	border-bottom: solid 4px #000;
	}
  .video {
    border-left: 0;
    border-right: 0;
	border-top: solid 4px #000;
	border-bottom: solid 4px #000;
  }
}
.slide .caption {
  bottom: 80px;
  padding-left: 55px;
  padding-right: 20px;
  position: absolute;
  width: 80%;
  white-space: normal;
  z-index: 100;
}
.video .caption {
  bottom: 20px;
  padding-left: 20px;
  padding-right: 20px;
  position: absolute;
  width: 80%;
  white-space: normal;
  z-index: 100;
}
@media (max-width:40rem) {
  .slide .caption, .video .caption {
    padding-left: 20px;
	bottom: 50px;
  }
}
.slide .caption h2, .video .caption h2 {
  color: #e4e5e6;
  font-family: 'rationalbook_bold';
  font-size: 52px;
  line-height: 54px;
  margin-top: 5px;
}
.video .caption h2 {
  font-size: 42px;
  line-height: 44px;
  margin-top: 6px;
}
.video .caption h2.small {
  font-size: 24px;
  line-height: 30px;
  margin-top: 0px;
}
@media (max-width:40rem) {
  .slide .caption h2, .video .caption h2, .video .caption h2.small {
    font-size: 25px;
    line-height: 32px;
	margin-bottom: 20px;
  }
}
.slide .caption .time, .video .caption .time {
  font-family: 'rationalsemi_bold';
  color: #5feb98;
  font-size: 20px;
  padding-bottom: 16px;
}
.video .caption .time {
  font-size: 18px;
}
.slide .caption .time::first-letter, .video .caption .time::first-letter {
	text-transform: uppercase;
}
@media (max-width:40rem) {
  .slide .caption .time, .video .caption .time {
    font-size: 16px;
  }
}
.slide .caption a.btn,.slide .caption a.btn:hover,.slide .caption a.btn:focus,.slide .caption a.btn:visited {
  font-family: 'rationalextra_bold';
  color: #5feb98;
  padding: 30px 80px 30px 80px;
  border: solid 5px #5feb98;
  font-size: 22px;
  text-decoration: none;
  display: inline-block;
  margin-bottom: 16px;
  margin-top: 16px;
  -o-transition:.5s;
  -ms-transition:.5s;
  -moz-transition:.5s;
  -webkit-transition:.5s;
  transition:.5s;
}
.slide .caption a.btn:hover {
	color: #262626;
	background-color: #5feb98;
}
.slide .caption a.btn .up {
	-o-transition:.5s;
	-ms-transition:.5s;
	-moz-transition:.5s;
	-webkit-transition:.5s;
	transition:.5s;
}
.slide .caption a.btn:hover .up {
	filter: grayscale(1) brightness(0.1);
}

@media (max-width:40rem) {
  .slide .caption a.btn,.slide .caption a.btn:hover,.slide .caption a.btn:focus,.slide .caption a.btn:visited {
    border: solid 3px #5feb98;
    padding: 0px 45px 0px 45px;
  }
}
.slide:before, .video:before {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  right: 0;
  bottom: -1px;
  left: 0;
  z-index: 9;
  background: -moz-linear-gradient(top,  rgba(0,0,0,0) 60%, rgba(0,0,0,0.60) 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(60%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.60))); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 60%,rgba(0,0,0,0.60) 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  rgba(0,0,0,0) 60%,rgba(0,0,0,0.60) 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  rgba(0,0,0,0) 60%,rgba(0,0,0,0.60) 100%); /* IE10+ */
  background: linear-gradient(to bottom,  rgba(0,0,0,0) 60%,rgba(0,0,0,0.60) 100%); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#000000',GradientType=0 ); /* IE6-9 */
}
.amp-carousel-button {
  height: 75px;
  width: 75px;
  cursor: pointer;
}
@media (max-width:40rem) {
  .amp-carousel-button {
    display: none;
  }
}
.amp-carousel-button-next {
  background-color: transparent;
  background-size: 75px 75px;
  background-image: url('/assets/next.svg');
  right: 55px;
  z-index: 100;
  
}
.amp-carousel-button-prev {
  background-color: transparent;
  background-size: 75px 75px;
  background-image: url('/assets/prev.svg');
  left: 55px;
  z-index: 100;
}
.amp-carousel-button-next:hover {
  right: 45px;
  -o-transition:.3s;
  -ms-transition:.3s;
  -moz-transition:.3s;
  -webkit-transition:.3s;
  transition:.3s;
}
.amp-carousel-button-prev:hover {
  left: 45px;
  -o-transition:.3s;
  -ms-transition:.3s;
  -moz-transition:.3s;
  -webkit-transition:.3s;
  transition:.3s;
}
#menu {
  width: 100%;
  background-color: #5feb98;
  color: #262626;
  padding: 0;
  margin: 0;
}
#menu .close {
  cursor:pointer;
    font-family: 'rationalbook_bold';
    font-size: 18px;
    position: absolute;
    top: 30px;
    right: 30px;
}
#menu nav ul {
  list-style-type: none;
  font-family: 'rationalextra_bold';
}
#menu nav ul li a, #menu nav ul li a:visited, #menu nav ul li a:hover {
  text-decoration: none;
}

#menu .menu-social ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
#menu .menu-social ul li {
  display: inline-block;
  margin: 0;
  padding: 0;
}

@media (max-width:52.02rem) {
  #menu .close {
	  color: #fff;
  }
  #menu nav ul {
	   padding-left: 0;
	   margin: 0;
  }
  #menu nav.dark ul {
	  padding-top: 45px;	 
	  background-color: #262626;
	  color: #fff;
	  font-family: 'rationalmedium';	  
  }
  #menu nav ul li {
    width: 100%;
    border-bottom: solid 1px #aaa;
    font-size: 25px;
    line-height: 72px;
	padding-left: 30px;
  }
  #menu nav ul.dark li {
	font-size: 21px;
	border-bottom: solid 1px #ccc;
  }
  #menu h4 {
	  font-family: 'rationalsemi_bold';
	  font-weight: 15px;
	  padding-left: 30px;
	  text-transform: uppercase;
	  padding-top: 40px;
	  padding-bottom: 10px;
  }
  #menu .menu-social {
	  margin-bottom: 30px;
	  width: 100%;
	  text-align: center;
	  margin-top: 50px;
	}
  #menu .menu-social ul li {
	  width: 15%;
  }
}
@media (min-width:52.02rem) {
  #menu amp-img.cover img {
	object-fit: cover;
	opacity: .35;
  }
  #menu .logo {
    top: 55px;
    left: 55px;
  }
  #menu .close {
	top: 45px;
	right: 55px;
	font-size: 22px;
	margin-top: 10px;
	color: #e4e5e6;
	line-height: 1;
  }
  #menu {
	background-color: #262626;
	color: #fff;
  }
  #menu nav.dark ul {
	position: absolute;
    bottom: 45px;
	left: 55px;
	padding: 0;
	margin: 0;
  }
  #menu nav.dark ul li {
    display:inline;
	font-family: 'rationalsemi_bold';
    font-size: 1.19vw; /* 20px */
	line-height: 42px;
    margin-right: 20px;
	color: #e4e5e6;
  }
  #menu nav.dark ul li a:hover{
      border-bottom: solid 2px #5feb98;
  }
  #menu nav.category ul {
	position: absolute;
    top: 35px;
	left: 40vw; 
  }
  #menu nav.category ul li {
	font-family: 'rationalextra_bold';
    font-size: 3vw;    /* 72px */
    line-height: calc((100vh - 70px) / 9);
  }
  #menu nav.category ul li a:hover{
	border-bottom: solid 10px #5feb98; 
  }
  #menu .menu-social {
	position: absolute;
    bottom: 52px;
	right: 55px;
  }
  #menu .menu-social ul li {
	margin-left: 50px;
  }
  #menu .menu-social ul li a:hover {
	filter: brightness(0) invert(1);
  }
}
.more {
  background-color: #262626;
  padding: 75px 175px 75px 175px;
  text-align: center;
}
.more a {
  border: solid 5px #5feb98;
  background-color: #5feb98;
  display: block;
  padding: 20px;
  font-family: 'rationalextra_bold';
  font-size: 32px;
  line-height: 90px;
  -o-transition:.5s;
  -ms-transition:.5s;
  -moz-transition:.5s;
  -webkit-transition:.5s;
  transition:.5s;
  width: 50%;
  margin-left: auto;
  margin-right: auto;
}
.more a:hover {
  background-color: #262626;
  color: #5feb98;
}

@media (max-width:40rem) {
  .more {
    padding: 0;
  }
  .more a {
    width: 100%;
    font-size: 26px;
    padding: 0;
  }
}
.social {
  padding-top: 360px;
  padding-bottom: 360px;
  background-color: #262626;
  width: 100%;
}
.social h2 {
  text-align: center;
  position: absolute;
  margin-left: auto;
  margin-right: auto;
  left: 0;
  right: 0;
  z-index: 10;
  font-family: 'rationalextra_bold';
  font-size: 42px;
  line-height: 110px;
  color: #fff;
}
.social ul {
  position: absolute;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  left: 0;
  right: 0;
  z-index: 10;
  padding: 0;
  margin-top: 165px;
}
.social ul li {
  display:inline;
  list-style-type: none;
  margin-left: 50px;
  margin-right: 50px;
}
.social ul li a:hover {
  filter: brightness(0) invert(1);
}
@media (max-width:40rem) {
  .social {
    padding-top: 25px;
    padding-bottom: 10px;
  }
  .social ul {
	position: relative;
    margin-top: 0;
    padding: 0;
  }
  .social ul li {
    display: inline-block;
    width: 18%;
    margin: 0;
    padding: 0;
  }
}
.footer-img {
	width: 100%;
	position: absolute;
	bottom: 0;
	opacity: .15;
	background: #262626;
	mix-blend-mode: luminosity;
}
.footer-img .gradient {
  position: absolute;
  top: 0;
  z-index: 5;
  width: 100%;
  height: 360px;
  background-image: linear-gradient(to bottom, #262626, rgba(38, 38, 38, 0));
}
footer {
  padding: 55px;
  background-color: #262626;
  color: #e4e5e6;
  font-size: 20px;
  font-family: 'rationalsemi_bold';
}
@media (max-width:40rem) {
  footer {
    padding: 0 30px 30px 30px;
    font-size: 14px;
  }
}
@media (min-width:40.06rem) {
	footer nav {
	  position: absolute;
	  right: 55px;
	  bottom: 55px;
	  color: #e4e5e6;
	  font-family: 'rationalsemi_bold';
	  font-size: 20px;
	}
	footer nav ul {
		margin: 0;
		padding: 0;
	}
	footer nav ul li {
	  list-style-type: none;
	  display: inline;
	  margin-left: 60px;
	}
	footer nav ul li a:hover {
		text-decoration: underline;
	}
}
@media (max-width:40rem) {
	footer nav {
	  border-top: solid 10px #5feb98;
	  color: #5feb98;
	  font-family: 'rationalsemi_bold';
	  font-size: 18px;
	  line-height: 36px;
	}
	footer nav ul {
	  list-style-type: none;
	  padding: 0;
	  margin: 20px 0 20px 0;
	}
}
.pagination {
	background-color: #262626;
	font-family: 'rationalsemi_bold';
	font-size: 20px;
	text-align: center;
}
.pagination .current {
	color: #5feb98;
	padding-left: 40px;
}
.pagination .total {
	color: #e4e5e6;
	padding-right: 40px;
}
.pagination .disabled {
	visibility: hidden;
	pointer-events: none;
    cursor: default;
}