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

@media (min-width:52.06rem) {
	.flex-stretch-responsive-grid {
		display: flex;
		-webkit-box-align: stretch;
		-webkit-align-items: stretch;
		-ms-flex-align: stretch;
		align-items: stretch;
	}
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

amp-img.contain img {
  object-fit: contain;
}
amp-img.cover img {
  object-fit: cover;
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

.banner {
  position: relative;
  width: 100%;
  height: 1024px;
  background-color: #262626;
  text-align: center;
}

.banner .cover {
  opacity: 0.5;
}

.banner .submenu {
  position: absolute;
  top: 40px;
  left: 200px; 
  right: 200px; 
  margin-left: auto; 
  margin-right: auto; 
  z-index: 500;  
}

.banner .submenu ul {
	padding: 0;
	margin: 0;
}

.banner .submenu ul li {
	list-style-type: none;
	display: inline-block;
	padding-left: 20px;
	padding-right: 20px;
	color: #5feb98;
	font-family: 'rationalsemi_bold';
	font-size: 22px;
	line-height: 36px;
}
.banner .submenu ul li a:hover{
	color: #fff;
}

.banner .title {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 0; 
  right: 0; 
  margin-left: auto; 
  margin-right: auto; 
}

.banner .title h1 {
  font-family: 'rationalextra_bold';
  font-size: 3.57vw;
  line-height: 1.13;
  color: #fff;
}

@media (max-width:52rem) {
  .banner {
    height: 600px;
  }

  .banner .title h1 {
	font-size: 30px;
	margin-left: 20px;
	margin-right: 20px;
  }
}

.banner .title .social {
  list-style-type: none;
  margin-top: 40px;
  padding: 0;
}
.banner .title .social li {
  display: inline-block;
  text-align: center;
  padding: 0 6vw 0 6vw;
}
.banner .title  li a:hover {
  filter: brightness(0) invert(1);
}
@media (max-width:52rem) {
	.banner .title .social li {
	  padding: 0 5vw 0 5vw;
	}
}

section {
  padding: 85px 17.26vw 85px 17.26vw;
}

@media (max-width:52rem) {
  section {
    padding: 35px 30px 35px 30px;
  }
}

section.chiffres {
  padding: 0;
}

section.chiffres .content {
  padding: 85px 17.26vw 260px 17.26vw;
}

@media (max-width:52rem) {
  section.chiffres .content {
    padding: 35px 30px 130px 30px;
  }
}

section h2 {
  font-family: 'rationalextra_bold';
  font-size: 4.76vw;
  line-height: 5.56vw;
  border-bottom: solid 20px #5feb98;
  margin-top: 100px;
  margin-bottom: 100px;
}

section h3 {
  font-family: 'rationalextra_bold';
  font-size: 3.57vw;
  line-height: 3.8vw;
  margin-top: 8vw;
  margin-bottom: 1.2vw;
}

section h4 {
  font-family: 'rationalextra_bold';
  font-size: 2.38vw;
  line-height: 1.79vw;
  margin-top: 50px;
  margin-bottom: 20px;
}

section p {
  font-family: 'rationalsemi_bold';
  font-size: 1.79vw;
  line-height: 2.5vw;
}

section p.subtitle {
  font-family: 'rationalmedium';
  font-size: 2.5vw;
  line-height: 3.33vw;
  text-align: center;
  margin-bottom: 80px;
}

@media (max-width:52rem) {
  section h2 {
    font-size: 36px;
    line-height: 40px;
    border-bottom: solid 10px #5feb98;
	margin-top: 40px;
	margin-bottom: 30px;
  }

  section h3 {
    font-size: 30px;
    line-height: 34px;
	margin-top: 8vw;
    margin-bottom: 20px;
  }

  section h4 {
    font-size: 30px;
    line-height: 34px;
    margin-top: 20px;
    margin-bottom: 5px;
  }

  section p {
    font-size: 20px;
    line-height: 26px;
  }
  
  section p.subtitle {
	  font-size: 22px;
	  line-height: 32px;
	  margin-bottom: 20px;
	}
}

.contact {
  background-color: #262626;
}

.intro {
	background-color: rgb(83, 217, 152);
}

.chiffres {
  background: #262626;
  color: #fff;
  position: relative;
}

.chiffres .border {
	border-color: #4c4c4c;
}

.chiffres .number {
  font-size: 7.74vw;
  line-height: 1;
  color: #5feb98;
  font-family: 'rationalextra_bold';
  text-align: center;
  padding-top: 6vw;
}

.chiffres .unit {
  color: #5feb98;
  font-size: 1.79vw;
  line-height: 0.4;
  font-family: 'rationalsemi_bold';
  text-align: center;
  padding-bottom: 6vw;
  border-bottom: solid 2px #4c4c4c;
}

.chiffres .comment {
  color: #e4e5e6;
  font-size: 22px;
  font-family: 'rationalsemi_bold';
  text-align: center;
  padding-top: 3vw;
  padding-bottom: 3vw;
}

.chiffres .footer-img {
	width: 100%;
	position: absolute;
	bottom: 0;
	opacity: .15;
	background: #262626;
	mix-blend-mode: luminosity;
}
.chiffres .footer-img .gradient {
  position: absolute;
  top: 0;
  z-index: 5;
  width: 100%;
  height: 360px;
  background-image: linear-gradient(to bottom, #262626, rgba(38, 38, 38, 0));
}

.chiffres .tagline-green {
  font-size: 4.76vw;
  line-height: 5vw;
  font-family: 'rationalextra_bold';
  margin-top: 250px;
}

.chiffres .tagline {
  color: #5feb98;
  font-size: 4.76vw;
  line-height: 5vw;
  font-family: 'rationalsemi_bold';
  margin-bottom: 20px;
}

@media (max-width:52rem) {

  .chiffres .number {
    font-size: 100px;
	padding-top: 30px;
  }
  
  .chiffres .unit {
    font-size: 26px;
	border-bottom: 0;
	padding-bottom: 0px;
  }
  
  .chiffres .comment {
	padding-top: 20px;
    font-size: 19px;
	padding-bottom: 30px;
  }
  
  .chiffres .tagline-green {
    font-size: 44px;
    line-height: 52px;
    margin-top: 90px;
  }
  
  .chiffres .tagline {
    font-size: 44px;
    line-height: 52px;
    margin-bottom: 25px;
  }

}

.contents h3 {
	margin-bottom: 90px;
}
.contents .cell {
	border: solid 5px #262626;
	padding: 3.45vw 2.98vw 3.45vw 2.98vw;
	text-align: center;
	height: 100%;
}
.contents .cell p {
	margin-top: 25px;
    font-size: 22px;
    line-height: 30px;
    font-family: 'rationalsemi_bold';
	text-align: center;
}

@media (max-width:52rem) {
	.contents h3 {
		margin-bottom: 40px;
	}
	.contents .cell {
		height: 100%;
		margin-bottom: 30px;
	}
	.contents .cell p {
		font-size: 19px;
		line-height: 24px;
	}
}



.work {
	background-color: #262626;
	color: #cdcdcd;
}
@media (min-width:60.03rem) {
	.work .table {
		border: solid 3px #4c4c4c;
	}
}
.work .cell-header {
	color: #5feb98;
	border: solid 3px #4c4c4c;
}
.work .cell-header p {
	line-height: 90px;
}
.work .cell {
	border: solid 3px #4c4c4c;
	padding: 40px;
	height: calc(100% - 90px);
}
.work .cell ul {
	padding: 0;
}
.work .cell ul li {
  margin-bottom: 10px;
  padding-left: 45px;
  list-style-type: none;
  font-size: 22px;
  line-height: 32px;
  font-family: 'rationalsemi_bold';
  background: url('/assets/arrow_green.svg') no-repeat;
  background-position: left 10px;
  background-size: 32px 10px;
}

@media (max-width:52rem) {
	.work .cell-header p {
		font-size: 26px;
		line-height: 90px;
	}
	.work .cell {
		margin-bottom: 35px;
		border-top: 0;
		padding: 20px;
		height: auto;
	}
	.work .cell ul li {
		font-size: 19px;
		line-height: 24px;
		background-position: left 5px;
	}
}

.work ul.customers {
	padding: 0;
	text-align: center;
}

.work ul.customers  li {
  list-style-type: none;
  display: inline-block;
  padding: 20px;
}

.work a.btn,.slide .work a.btn:hover, .work a.btn:visited {
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
.work a.btn:hover {
	color: #262626;
	background-color: #5feb98;
}
@media (max-width:52rem) {
  .work a.btn,.slide .work a.btn:hover,.work a.btn:focus,.work a.btn:visited {
    border: solid 3px #5feb98;
    padding: 17px 35px 17px 35px;
	font-size: 17px;
  }
}

@media (min-width:52.02rem) {
	.team {
		padding-top: 200px;
		padding-bottom: 200px;
		position: relative;
	}
	.team .white {
		background-color: #fff;
		padding: 50px;
		color: #262626;
	}
	.team h2 {
		margin: 0;
	}
	.team h4 {
		font-size: 1.66vw;
		line-height: 1.90vw;
		margin-top: 2vw;
		margin-bottom: 1.19vw;
	}
	.team p {
		font-size: 1.31vw;
		line-height: 1.79vw;
	}
	.team .cover {
		z-index: -1;
		position: absolute;
		background-blend-mode: color;
		opacity: .1;
	}
}

@media (max-width:52rem) {
	.team h2 {
		border-bottom: solid 10px #262626;
	}
	.team .photo {
		min-height: 300px;
	}
	.team h4 {
		font-size: 18px;
		line-height: 24px;
	}
	.team p {
		font-size: 18px;
		line-height: 24px;
	}
}

.team .photo {
  margin-top: 65px;
}

@media (max-width:52rem) {
  .team .photo {
    margin-top: 30px;
  }
}


.newsletter {
  background-color: #262626;
  color: #fff;
}

.newsletter h2 {
  margin-bottom: 10px;
}


.newsletter .newsletter-form {
	position: relative;
}

.newsletter .newsletter-form #mce-EMAIL {
  border: 0;
  color: #fff;
  background-color: transparent;
  width: 100%;
  margin-top: 10px;
  padding: 36px 0px 30px 0px;
  font-size: 1.79vw;
  font-family: 'rationalsemi_bold';
  border-bottom: solid 5px #5feb98;
}

.newsletter .newsletter-form #mce-EMAIL:focus {
  outline: none;
}

.newsletter .newsletter-form #submit {
  position: absolute;
  right: 0;
  top: 0;
  margin: 0;
  margin-top: 10px;
  padding: 40px 0px 30px 0px;
  border: 0;
  background: transparent;
  cursor: pointer;
}

@media (max-width:52rem) {
  .newsletter h2 {
    border-bottom: solid 10px #5feb98;
  }

  .newsletter .newsletter-form {
    margin-top: 20px;
  }

  .newsletter .newsletter-form #mce-EMAIL {
    margin-top: 5px;
    padding: 10px 0px 10px 0px;
    font-size: 17px;
    border-bottom: solid 3px #5feb98;
  }
  .newsletter .newsletter-form #submit {
	  margin-top: 5px;
	  padding: 10px 0px 10px 0px;
	}
}

.contact h2, .chiffres h2, .work h2 {
  color: #fff;
}

.contact ul {
  padding: 0;
  margin-top: 50px;
}

.contact ul li {
  margin-top: 10px;
  padding: 36px 20px 30px 20px;
  list-style-type: none;
  font-size: 1.79vw;
  font-family: 'rationalsemi_bold';
  background: #5feb98 url('/assets/arrow_black.svg') no-repeat right 20px center;
}

@media (max-width:52rem) {
  .contact ul {
    padding: 0;
    margin-top: 20px;
  }

  .contact ul li {
    margin-top: 5px;
    padding: 10px 60px 10px 20px;
    font-size: 17px;
	background-size: 38px 12px;
  }
}
