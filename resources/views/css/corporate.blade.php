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
  height: 1024px;
}

.banner .title {
  position: absolute;
  left: 290px;
  right: 290px;
  top: 388px;
}

.banner .title h1 span {
  font-family: 'rationalextra_bold';
  font-size: 110px;
  line-height: 160px;
  color: #ffffff;
  border-bottom: solid 20px #5feb98;
}

@media (max-width:60rem) {
  .banner {
    height: 360px;
  }

  .banner .title {
    left: 30px;
    right: 30px;
    top: 135px;
  }

  .banner .title h1 span {
    font-size: 40px;
    line-height: 50px;
    border-bottom: solid 10px #5feb98;
  }

}

section {
  padding: 85px 290px 85px 290px;
}

@media (max-width:60rem) {
  section {
    padding: 35px 30px 35px 30px;
  }
}

section h2 {
  font-family: 'rationalextra_bold';
  font-size: 110px;
  line-height: 110px;
  border-bottom: solid 20px #5feb98;
}

section h3 {
  font-family: 'rationalextra_bold';
  font-size: 76px;
  line-height: 80px;
}

section h4 {
  font-family: 'rationalextra_bold';
  font-size: 40px;
  line-height: 30px;
  margin-top: 50px;
  margin-bottom: 20px;
}

section p {
  font-family: 'rationalbook_bold';
  font-size: 30px;
  line-height: 42px;
}

@media (max-width:60rem) {
  section h2 {
    font-size: 44px;
    line-height: 50px;
    border-bottom: solid 10px #5feb98;
  }

  section h3 {
    font-size: 38px;
    line-height: 38px;
    margin-bottom: 20px;
  }

  section h4 {
    font-size: 30px;
    line-height: 34px;
    margin-top: 20px;
    margin-bottom: 5px;
  }

  section p {
    font-size: 28px;
    line-height: 30px;
  }
}

.social {
  list-style-type: none;
  margin-top: 20px;
  padding: 0;
}
.social li {
  display: inline-block;
  background-color: #262626;
  width: 60px;
  height: 60px;
  padding: 18px 0 0 0;
  text-align: center;
}
@media (max-width:60rem) {
  .social {
    text-align: center;
  }
  .social li {
    width: 48px;
    height: 48px;
    padding: 12px 0 0 0;
  }
}

.contact {
  background-color: #262626;
}

.chiffres {
  background: #262626 url('/assets/banner2.jpg') no-repeat center center;
  background-size: cover;
  padding-bottom: 700px;
}

.chiffres ul {
  padding: 0;
  margin-top: 50px;
}

.chiffres ul li {
  list-style-type: none;
  color: #e4e5e6;
  font-size: 42px;
  font-family: 'rationalbook_bold';
}

.chiffres ul li .number {
  font-size: 110px;
  color: #5feb98;
}

.chiffres ul li .unit {
  color: #5feb98;
}

@media (max-width:60rem) {
  .chiffres {
    padding-bottom: 300px;
  }

  .chiffres ul {
    padding: 0;
    margin-top: 30px;
  }

  .chiffres ul li {
    font-size: 28px;
    line-height: 32px;
    font-family: 'rationalbook_bold';
    margin-bottom: 20px;
  }

  .chiffres ul li .number {
    font-size: 44px;
  }

}

.team {
  margin-top: -700px;
}

.team .photo {
  margin-top: 65px;
}

@media (max-width:60rem) {
  .team {
    margin-top: -300px;
  }

  .team .photo {
    margin-top: 30px;
  }
}

.newsletter h2 {
  border-bottom: solid 20px #262626;
}

.newsletter ul {
  padding: 0;
  margin-top: 50px;
}

.newsletter ul li {
  margin-top: 10px;
  padding: 36px 0px 30px 0px;
  list-style-type: none;
  font-size: 30px;
  font-family: 'rationalbook_bold';
  border-bottom: solid 5px #262626;
  background: url('/assets/arrow.png') no-repeat right center;
}

@media (max-width:60rem) {
  .newsletter h2 {
    border-bottom: solid 10px #262626;
  }

  .newsletter ul {
    margin-top: 20px;
  }

  .newsletter ul li {
    margin-top: 5px;
    padding: 10px 0px 10px 0px;
    font-size: 20px;
    border-bottom: solid 3px #262626;
    text-align: center;
    background: none;
  }
}

.contact h2, .chiffres h2, .team h2 {
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
  font-size: 30px;
  font-family: 'rationalbook_bold';
  background: #5feb98 url('/assets/arrow.png') no-repeat right 20px center;
}

@media (max-width:60rem) {
  .contact ul {
    padding: 0;
    margin-top: 20px;
  }

  .contact ul li {
    margin-top: 5px;
    padding: 10px 0px 10px 0px;
    font-size: 20px;
    text-align: center;
    background: #5feb98;
  }
}
