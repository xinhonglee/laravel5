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

footer {
  padding: 55px;
  background-color: #262626;
  color: #e4e5e6;
  font-size: 20px;
  font-family: 'rationalsemi_bold';
}
@media (max-width:40rem) {
  footer {
    padding: 30px;
    font-size: 14px;
  }
}

.banner {
  position: relative;
  width: 100%;
  height: 560px;
}

.banner .title {
  position: absolute;
  left: 290px;
  right: 290px;
  top: 245px;
  border-bottom: solid 20px #5feb98;
}

.banner .title h1 {
  font-family: 'rationalextra_bold';
  font-size: 110px;
  line-height: 120px;
  color: #ffffff;
}

@media (max-width:60rem) {
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
  }

}

.content {
  margin: 85px 290px 85px 290px;
}

.content h4 {
  font-family: 'rationalbook_bold';
  font-size: 28px;
  margin-top: 30px;
  line-height: 40px;
}

.content p {
  font-family: 'rationalsemi_bold';
  font-size: 28px;
  line-height: 40px;
}

.content a {
  text-decoration: underline
}

@media (max-width:60rem) {
  .content {
    margin: 45px 30px 45px 30px;
  }

  .content h4 {
    font-size: 28px;
    margin-top: 20px;
    line-height: 34px;
  }

  .content p {
    font-size: 28px;
    line-height: 34px;
  }
}
