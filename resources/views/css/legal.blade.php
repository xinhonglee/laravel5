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
  font-size: 1.7vw;
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
	  font-size: 1.7vw;
	}
	footer nav ul {
		margin: 0;
		padding: 0;
	}
	footer nav ul li {
	  list-style-type: none;
	  display: inline;
	  margin-left: 3.5vw;
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
  height: 560px;
}

.banner .title {
  position: absolute;
  left: 17.26vw;
  right: 17.26vw;
  top: 245px;
  border-bottom: solid 1.19vw #5feb98;
}

.banner .title h1 {
  font-family: 'rationalextra_bold';
  font-size: 3.57vw;
  line-height: 1.13;
  color: #ffffff;
}

@media (max-width:52rem) {
  .banner {
    height: 360px;
  }

  .banner .title {
    left: 30px;
    right: 30px;
    top: 185px;
    border-bottom: solid 10px #5feb98;
  }

  .banner .title h1 {
    font-size: 44px;
    line-height: 50px;
	z-index:
  }

}

.content {
  margin: 85px 17.26vw 85px 17.26vw;
}

.content h4 {
  font-family: 'rationalbook_bold';
  font-size: 1.67vw;
  margin-top: 30px;
  line-height: 2.38vw;
}

.content p {
  font-family: 'rationalsemi_bold';
  font-size: 1.67vw;
  line-height: 2.38vw;
}

.content a {
  text-decoration: underline
}

@media (max-width:52rem) {
  .content {
    margin: 45px 30px 45px 30px;
  }

  .content h4 {
    font-size: 22px;
    margin-top: 20px;
    line-height: 26px;
  }

  .content p {
    font-size: 22px;
    line-height: 26px;
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
  font-size: 2.5vw;
  line-height: 6.55vw;
  color: #fff;
}

@media (min-width:40.06rem) and (max-width:64rem) {
	.social h2 {
		 font-size: 4vw;
	}
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
  margin-top: 9vw;
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