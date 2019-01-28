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
  margin: 80px 170px 80px 170px;
  font-family: 'rationalextra_bold';
  font-size: 110px;
  line-height: 90px;
  display: block;
  border-bottom: solid 20px #262626;
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

.ampstart-headerbar {
  z-index: 200;
  background: linear-gradient(to bottom, rgba(0,0,0,0.5) 0%,rgba(0,0,0,0) 100%); /* W3C */
  height: 250px;
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
  border-top: solid 30px #262626;
  border-bottom: solid 30px #262626;
}
main header.xs-hide article.slide:first-of-type {
  border-left: solid 30px #262626;
}
main header.xs-hide article.slide:last-of-type {
  border-right: solid 30px #262626;
}
main header.xs-hide article.slide {
  width: 819px;
  height: 819px;
  border: solid 12px #262626;
}
main header.sm-hide article.slide, main header.md-hide article.slide, main header.lg-hide article.slide {
  width: 80%;
  height: 497px;
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
  border: solid 11px #262626;
  background-color: #000;
}
@media (min-width:40.04rem) {
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
		bottom: 100px;
	}
	.video .btn {
		z-index: 100;
		position: absolute;
		bottom: 40px;
		left: 55px;
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
		background: url('assets/play_up.svg') no-repeat center;
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
  .video {
    border-left: 0;
    border-right: 0;
  }
}
.slide .caption, .video .caption {
  bottom: 40px;
  padding-left: 55px;
  padding-right: 20px;
  position: absolute;
  width: 80%;
  white-space: normal;
  z-index: 100;
}
@media (max-width:40rem) {
  .slide .caption, .video .caption {
    padding-left: 20px;
  }
}
.slide .caption h2, .video .caption h2 {
  color: #e4e5e6;
  font-family: 'rationalbook_bold';
  font-size: 52px;
  line-height: 54px;
  margin-top: 16px;
}
.video .caption h2 {
  font-size: 42px;
  line-height: 44px;
}
.video .caption h2.small {
  font-size: 24px;
  line-height: 30px;
}
@media (max-width:40rem) {
  .slide .caption h2, .video .caption h2 {
    font-size: 30px;
    line-height: 34px;
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
}
@media (max-width:40rem) {
  .amp-carousel-button {
    display: none;
  }
}
.amp-carousel-button-next {
  background-color: transparent;
  background-size: 75px 75px;
  background-image: url('../assets/next.svg');
  right: 55px;
  z-index: 100;
}
.amp-carousel-button-prev {
  background-color: transparent;
  background-size: 75px 75px;
  background-image: url('../assets/prev.svg');
  left: 55px;
  z-index: 100;
}
#menu {
  width: 100%;
  background-color: #5feb98;
  color: #262626;
}
#menu .close {
  cursor:pointer;
}
@media (max-width:60rem) {
  #menu .close {
    font-family: 'rationalbook_bold';
    font-size: 18px;
    position: absolute;
    top: 30px;
    right: 30px;
  }
}
@media (min-width:60.06rem) {
  #menu .close {
    background-color: #262626;
    width: 100px;
    height: 100px;
    position: absolute;
    top: 55px;
    right: 55px;
  }
  #menu .close:hover {
    opacity: 1;
  }
  #menu .close:before, .close:after {
    position: absolute;
    left: 50px;
    top: 40px;
    content: ' ';
    height: 20px;
    width: 2px;
    background-color: #5feb98;
  }
  #menu .close:before {
    transform: rotate(45deg);
  }
  #menu .close:after {
    transform: rotate(-45deg);
  }
}
@media (min-width:60.06rem) {
  #menu {
    height: 220px;
  }
}
#menu nav ul {
  list-style-type: none;
  font-family: 'rationalextra_bold';
}
#menu nav ul li a, #menu nav ul li a:visited, #menu nav ul li a:hover {
  text-decoration: none;
}
@media (max-width:60rem) {
  #menu nav ul {
    margin-top: 135px;
    padding-left: 30px;
    padding-right: 30px;
  }
  #menu nav ul li {
    width: 100%;
    border-bottom: solid 10px #262626;
    font-size: 44px;
    line-height: 50px;
    margin-bottom: 30px;
  }
}
@media (min-width:60.06rem) {
  #menu nav ul {
    margin-top: 70px;
    padding-left: 70px;
    padding-right: 70px;
  }
  #menu nav ul li {
    display:inline;
    border-bottom: solid 10px #262626;
    font-size: 52px;
    line-height: 48px;
    margin-right: 80px;
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
  width: 100%;
  padding: 20px;
  font-family: 'rationalextra_bold';
  font-size: 32px;
  line-height: 90px;
  -o-transition:.5s;
  -ms-transition:.5s;
  -moz-transition:.5s;
  -webkit-transition:.5s;
  transition:.5s;
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
    font-size: 26px;
    padding: 0;
  }
}
.social {
  text-align: center;
  padding-top: 250px;
  padding-bottom: 250px;
}
.social h2 {
  font-family: 'rationalextra_bold';
  font-size: 110px;
  line-height: 130px;
}
.social ul {
  padding: 0;
  margin-top: 165px;
}
.social ul li {
  display:inline;
  list-style-type: none;
  margin-left: 50px;
  margin-right: 50px;
}
@media (max-width:40rem) {
  .social {
    background-color: #262626;
    padding-top: 25px;
    padding-bottom: 10px;
  }
  .social ul {
    margin-top: 0;
    padding: 0;
  }
  .social ul li {
    display: inline-block;
    width: 15%;
    margin: 0;
    padding: 0;
  }
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
#menu .menu-social {
  position: absolute;
  bottom: 40px;
  width: 100%;
  text-align: center;
}
#menu .menu-social ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
#menu .menu-social ul li {
  display: inline-block;
  width: 15%;
  margin: 0;
  padding: 0;
}
