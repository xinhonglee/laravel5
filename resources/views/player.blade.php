<!doctype html>

<html ⚡="">

<head>
	<meta charset="utf-8">
	<title>LOOPSIDER | {{$video->title}}</title>
	<meta name="description" content="{{$video->description}}">

	<meta name="robots" content="noindex, nofollow">

	<link rel="canonical" href="{{ url()->full() }}">

	<link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">

	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

	<script async="" src="https://cdn.ampproject.org/v0.js"></script>

	<script custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js" async=""></script>
	<script custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js" async=""></script>
	<script async custom-element="amp-user-notification" src="https://cdn.ampproject.org/v0/amp-user-notification-0.1.js"></script>
	<script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
	<script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
	<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
	<script async custom-element="amp-timeago" src="https://cdn.ampproject.org/v0/amp-timeago-0.1.js"></script>

	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "VideoObject",
	  "name": "{{$video->title}}",
	  "description": "{{$video->description}}",
	  "thumbnailUrl": "{{$video->cover}}",
	  "uploadDate": "{{$video->ISODate}}",
	  "publisher": {
		"@type": "Organization",
		"name": "Loopsider",
		"logo": {
		  "@type": "ImageObject",
		  "url": "{{ URL::to('/') }}/assets/logo.png",
		  "width": 210,
		  "height": 210
		}
	  },
	  "contentUrl": "{{$video->video_url}}"
	}
	</script>

	<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>

	<style amp-boilerplate="">body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate="">body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

	<style amp-custom="">/*! Bassplate | MIT License | http://github.com/basscss/bassplate */

/*! Bassplate | MIT License | http://github.com/basscss/bassplate */

/*! normalize.css v5.0.0 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,footer,header,nav,section{display:block}h1{font-size:2em;margin:.67em 0}figcaption,figure,main{display:block}figure{margin:1em 40px}hr{box-sizing:content-box;height:0;overflow:visible}pre{font-family:monospace,monospace;font-size:1em}a{background-color:transparent;-webkit-text-decoration-skip:objects}a:active,a:hover{outline-width:0}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:inherit;font-weight:bolder}code,kbd,samp{font-family:monospace,monospace;font-size:1em}dfn{font-style:italic}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}audio,video{display:inline-block}audio:not([controls]){display:none;height:0}img{border-style:none}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0}button,input{overflow:visible}button,select{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:1px dotted ButtonText}fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{display:inline-block;vertical-align:baseline}textarea{overflow:auto}[type=checkbox],[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}details,menu{display:block}summary{display:list-item}canvas{display:inline-block}[hidden],template{display:none}.h00{font-size:4rem}.h0,.h1{font-size:3rem}.h2{font-size:2rem}.h3{font-size:1.5rem}.h4{font-size:1.125rem}.h5{font-size:.875rem}.h6{font-size:.75rem}.font-family-inherit{font-family:inherit}.font-size-inherit{font-size:inherit}.text-decoration-none{text-decoration:none}.bold{font-weight:700}.regular{font-weight:400}.italic{font-style:italic}.caps{text-transform:uppercase;letter-spacing:.2em}.left-align{text-align:left}.center{text-align:center}.right-align{text-align:right}.justify{text-align:justify}.nowrap{white-space:nowrap}.break-word{word-wrap:break-word}.line-height-1{line-height:1rem}.line-height-2{line-height:1.125rem}.line-height-3{line-height:1.5rem}.line-height-4{line-height:2rem}.list-style-none{list-style:none}.underline{text-decoration:underline}.truncate{max-width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.list-reset{list-style:none;padding-left:0}.inline{display:inline}.block{display:block}.inline-block{display:inline-block}.table{display:table}.table-cell{display:table-cell}.overflow-hidden{overflow:hidden}.overflow-scroll{overflow:scroll}.overflow-auto{overflow:auto}.clearfix:after,.clearfix:before{content:" ";display:table}.clearfix:after{clear:both}.left{float:left}.right{float:right}.fit{max-width:100%}.max-width-1{max-width:24rem}.max-width-2{max-width:32rem}.max-width-3{max-width:48rem}.max-width-4{max-width:64rem}.border-box{box-sizing:border-box}.align-baseline{vertical-align:baseline}.align-top{vertical-align:top}.align-middle{vertical-align:middle}.align-bottom{vertical-align:bottom}.m0{margin:0}.mt0{margin-top:0}.mr0{margin-right:0}.mb0{margin-bottom:0}.ml0,.mx0{margin-left:0}.mx0{margin-right:0}.my0{margin-top:0;margin-bottom:0}.m1{margin:.5rem}.mt1{margin-top:.5rem}.mr1{margin-right:.5rem}.mb1{margin-bottom:.5rem}.ml1,.mx1{margin-left:.5rem}.mx1{margin-right:.5rem}.my1{margin-top:.5rem;margin-bottom:.5rem}.m2{margin:1rem}.mt2{margin-top:1rem}.mr2{margin-right:1rem}.mb2{margin-bottom:1rem}.ml2,.mx2{margin-left:1rem}.mx2{margin-right:1rem}.my2{margin-top:1rem;margin-bottom:1rem}.m3{margin:1.5rem}.mt3{margin-top:1.5rem}.mr3{margin-right:1.5rem}.mb3{margin-bottom:1.5rem}.ml3,.mx3{margin-left:1.5rem}.mx3{margin-right:1.5rem}.my3{margin-top:1.5rem;margin-bottom:1.5rem}.m4{margin:2rem}.mt4{margin-top:2rem}.mr4{margin-right:2rem}.mb4{margin-bottom:2rem}.ml4,.mx4{margin-left:2rem}.mx4{margin-right:2rem}.my4{margin-top:2rem;margin-bottom:2rem}.mxn1{margin-left:calc(.5rem * -1);margin-right:calc(.5rem * -1)}.mxn2{margin-left:calc(1rem * -1);margin-right:calc(1rem * -1)}.mxn3{margin-left:calc(1.5rem * -1);margin-right:calc(1.5rem * -1)}.mxn4{margin-left:calc(2rem * -1);margin-right:calc(2rem * -1)}.m-auto{margin:auto}.mt-auto{margin-top:auto}.mr-auto{margin-right:auto}.mb-auto{margin-bottom:auto}.ml-auto,.mx-auto{margin-left:auto}.mx-auto{margin-right:auto}.my-auto{margin-top:auto;margin-bottom:auto}.p0{padding:0}.pt0{padding-top:0}.pr0{padding-right:0}.pb0{padding-bottom:0}.pl0,.px0{padding-left:0}.px0{padding-right:0}.py0{padding-top:0;padding-bottom:0}.p1{padding:.5rem}.pt1{padding-top:.5rem}.pr1{padding-right:.5rem}.pb1{padding-bottom:.5rem}.pl1{padding-left:.5rem}.py1{padding-top:.5rem;padding-bottom:.5rem}.px1{padding-left:.5rem;padding-right:.5rem}.p2{padding:1rem}.pt2{padding-top:1rem}.pr2{padding-right:1rem}.pb2{padding-bottom:1rem}.pl2{padding-left:1rem}.py2{padding-top:1rem;padding-bottom:1rem}.px2{padding-left:1rem;padding-right:1rem}.p3{padding:1.5rem}.pt3{padding-top:1.5rem}.pr3{padding-right:1.5rem}.pb3{padding-bottom:1.5rem}.pl3{padding-left:1.5rem}.py3{padding-top:1.5rem;padding-bottom:1.5rem}.px3{padding-left:1.5rem;padding-right:1.5rem}.p4{padding:2rem}.pt4{padding-top:2rem}.pr4{padding-right:2rem}.pb4{padding-bottom:2rem}.pl4{padding-left:2rem}.py4{padding-top:2rem;padding-bottom:2rem}.px4{padding-left:2rem;padding-right:2rem}.col{float:left}.col,.col-right{box-sizing:border-box}.col-right{float:right}.col-1{width:8.33333%}.col-2{width:16.66667%}.col-3{width:25%}.col-4{width:33.33333%}.col-5{width:41.66667%}.col-6{width:50%}.col-7{width:58.33333%}.col-8{width:66.66667%}.col-9{width:75%}.col-10{width:83.33333%}.col-11{width:91.66667%}.col-12{width:100%}@media (min-width:40.06rem){.sm-col{float:left;box-sizing:border-box}.sm-col-right{float:right;box-sizing:border-box}.sm-col-1{width:8.33333%}.sm-col-2{width:16.66667%}.sm-col-3{width:25%}.sm-col-4{width:33.33333%}.sm-col-5{width:41.66667%}.sm-col-6{width:50%}.sm-col-7{width:58.33333%}.sm-col-8{width:66.66667%}.sm-col-9{width:75%}.sm-col-10{width:83.33333%}.sm-col-11{width:91.66667%}.sm-col-12{width:100%}}@media (min-width:52.06rem){.md-col{float:left;box-sizing:border-box}.md-col-right{float:right;box-sizing:border-box}.md-col-1{width:8.33333%}.md-col-2{width:16.66667%}.md-col-3{width:25%}.md-col-4{width:33.33333%}.md-col-5{width:41.66667%}.md-col-6{width:50%}.md-col-7{width:58.33333%}.md-col-8{width:66.66667%}.md-col-9{width:75%}.md-col-10{width:83.33333%}.md-col-11{width:91.66667%}.md-col-12{width:100%}}@media (min-width:64.06rem){.lg-col{float:left;box-sizing:border-box}.lg-col-right{float:right;box-sizing:border-box}.lg-col-1{width:8.33333%}.lg-col-2{width:16.66667%}.lg-col-3{width:25%}.lg-col-4{width:33.33333%}.lg-col-5{width:41.66667%}.lg-col-6{width:50%}.lg-col-7{width:58.33333%}.lg-col-8{width:66.66667%}.lg-col-9{width:75%}.lg-col-10{width:83.33333%}.lg-col-11{width:91.66667%}.lg-col-12{width:100%}}.flex{display:-ms-flexbox;display:flex}@media (min-width:40.06rem){.sm-flex{display:-ms-flexbox;display:flex}}@media (min-width:52.06rem){.md-flex{display:-ms-flexbox;display:flex}}@media (min-width:64.06rem){.lg-flex{display:-ms-flexbox;display:flex}}.flex-column{-ms-flex-direction:column;flex-direction:column}.flex-wrap{-ms-flex-wrap:wrap;flex-wrap:wrap}.items-start{-ms-flex-align:start;align-items:flex-start}.items-end{-ms-flex-align:end;align-items:flex-end}.items-center{-ms-flex-align:center;align-items:center}.items-baseline{-ms-flex-align:baseline;align-items:baseline}.items-stretch{-ms-flex-align:stretch;align-items:stretch}.self-start{-ms-flex-item-align:start;align-self:flex-start}.self-end{-ms-flex-item-align:end;align-self:flex-end}.self-center{-ms-flex-item-align:center;-ms-grid-row-align:center;align-self:center}.self-baseline{-ms-flex-item-align:baseline;align-self:baseline}.self-stretch{-ms-flex-item-align:stretch;-ms-grid-row-align:stretch;align-self:stretch}.justify-start{-ms-flex-pack:start;justify-content:flex-start}.justify-end{-ms-flex-pack:end;justify-content:flex-end}.justify-center{-ms-flex-pack:center;justify-content:center}.justify-between{-ms-flex-pack:justify;justify-content:space-between}.justify-around{-ms-flex-pack:distribute;justify-content:space-around}.justify-evenly{-ms-flex-pack:space-evenly;justify-content:space-evenly}.content-start{-ms-flex-line-pack:start;align-content:flex-start}.content-end{-ms-flex-line-pack:end;align-content:flex-end}.content-center{-ms-flex-line-pack:center;align-content:center}.content-between{-ms-flex-line-pack:justify;align-content:space-between}.content-around{-ms-flex-line-pack:distribute;align-content:space-around}.content-stretch{-ms-flex-line-pack:stretch;align-content:stretch}.flex-auto{-ms-flex:1 1 auto;flex:1 1 auto;min-width:0;min-height:0}.flex-none{-ms-flex:none;flex:none}.order-0{-ms-flex-order:0;order:0}.order-1{-ms-flex-order:1;order:1}.order-2{-ms-flex-order:2;order:2}.order-3{-ms-flex-order:3;order:3}.order-last{-ms-flex-order:99999;order:99999}.relative{position:relative}.absolute{position:absolute}.fixed{position:fixed}.top-0{top:0}.right-0{right:0}.bottom-0{bottom:0}.left-0{left:0}.z1{z-index:1}.z2{z-index:2}.z3{z-index:3}.z4{z-index:4}.border{border-style:solid;border-width:1px}.border-top{border-top-style:solid;border-top-width:1px}.border-right{border-right-style:solid;border-right-width:1px}.border-bottom{border-bottom-style:solid;border-bottom-width:1px}.border-left{border-left-style:solid;border-left-width:1px}.border-none{border:0}.rounded{border-radius:3px}.circle{border-radius:50%}.rounded-top{border-radius:3px 3px 0 0}.rounded-right{border-radius:0 3px 3px 0}.rounded-bottom{border-radius:0 0 3px 3px}.rounded-left{border-radius:3px 0 0 3px}.not-rounded{border-radius:0}.hide{position:absolute;height:1px;width:1px;overflow:hidden;clip:rect(1px,1px,1px,1px)}@media (max-width:40rem){.xs-hide{display:none}}@media (min-width:40.06rem) and (max-width:52rem){.sm-hide{display:none}}@media (min-width:52.06rem) and (max-width:64rem){.md-hide{display:none}}@media (min-width:64.06rem){.lg-hide{display:none}}.display-none{display:none}*{box-sizing:border-box}body{background:#fff;color:#4a4a4a;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,Arial,sans-serif;min-width:315px;overflow-x:hidden;font-smooth:always;-webkit-font-smoothing:antialiased}main{max-width:700px;margin:0 auto}p{padding:0;margin:0}.ampstart-accent{color:#003f93}#content:target{margin-top:calc(0px - 3.5rem);padding-top:3.5rem}.ampstart-title-lg{font-size:3rem;line-height:3.5rem;letter-spacing:.06rem}.ampstart-title-md{font-size:2rem;line-height:2.5rem;letter-spacing:.06rem}.ampstart-title-sm{font-size:1.5rem;line-height:2rem;letter-spacing:.06rem}.ampstart-subtitle,body{line-height:1.5rem;letter-spacing:normal}.ampstart-subtitle{color:#003f93;font-size:1rem}.ampstart-byline,.ampstart-caption,.ampstart-hint,.ampstart-label{font-size:.875rem;color:#4f4f4f;line-height:1.125rem;letter-spacing:.06rem}.ampstart-label{text-transform:uppercase}.ampstart-footer,.ampstart-small-text{font-size:.75rem;line-height:1rem;letter-spacing:.06rem}.ampstart-card{box-shadow:0 1px 1px 0 rgba(0,0,0,.14),0 1px 1px -1px rgba(0,0,0,.14),0 1px 5px 0 rgba(0,0,0,.12)}.h1,h1{font-size:3rem;line-height:3.5rem}.h2,h2{font-size:2rem;line-height:2.5rem}.h3,h3{font-size:1.5rem;line-height:2rem}.h4,h4{font-size:1.125rem;line-height:1.5rem}.h5,h5{font-size:.875rem;line-height:1.125rem}.h6,h6{font-size:.75rem;line-height:1rem}h1,h2,h3,h4,h5,h6{margin:0;padding:0;font-weight:400;letter-spacing:.06rem}a,a:active,a:visited{color:inherit}.ampstart-btn{font-family:inherit;font-weight:inherit;font-size:1rem;line-height:1.125rem;padding:.7em .8em;text-decoration:none;white-space:nowrap;word-wrap:normal;vertical-align:middle;cursor:pointer;background-color:#3f4ae6;border:1px solid #fff}.ampstart-btn:visited{color:#fff}.ampstart-btn-secondary{background-color:#ff5774;color:#000;border:1px solid #000}.ampstart-btn-secondary:visited{color:#000}.ampstart-btn:active .ampstart-btn:focus{opacity:.8}.ampstart-btn[disabled],.ampstart-btn[disabled]:active,.ampstart-btn[disabled]:focus,.ampstart-btn[disabled]:hover{opacity:.5;outline:0;cursor:default}.ampstart-dropcap:first-letter{color:#000;font-size:3rem;font-weight:700;float:left;overflow:hidden;line-height:3rem;margin-left:0;margin-right:.5rem}.ampstart-initialcap{padding-top:1rem;margin-top:1.5rem}.ampstart-initialcap:first-letter{color:#000;font-size:3rem;font-weight:700;margin-left:-2px}.ampstart-pullquote{border:none;border-left:4px solid #3f4ae6;font-size:1.5rem;padding-left:1.5rem}body{color:#000;font-family:Poppins,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,sans-serif;line-height:1.6}.gallery-base-content{background:#fff;overflow-x:hidden}.gallery-base-container{position:relative;width:calc(.46 * 100vw + 9.375 * 1.025rem);max-width:50rem}.gallery-base-invert{color:#fff;mix-blend-mode:difference;-webkit-font-smoothing:antialiased}.ampstart-headerbar{z-index:1}.gallery-base-callout{margin:0 0 3.5rem;font-size:1.25rem;color:#3f4ae6;font-weight:500}.gallery-base-section:not(:last-child){margin-bottom:8rem}.gallery-base-rich-text h2{font-size:2rem}.gallery-base-rich-text address,.gallery-base-rich-text h2{font-family:Oswald,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,sans-serif;letter-spacing:.05rem}.gallery-base-rich-text address{font-size:1.125rem;font-style:normal}.gallery-base-rich-text p{line-height:1.8}.gallery-base-rich-text blockquote{margin:0 0 3.5rem;font-size:1.5rem;color:#3f4ae6;font-weight:600}.gallery-base-section{font-size:1.12rem}.gallery-inner-offset-img{margin-left:0}@media (min-width:40.06rem){.gallery-inner-offset-img{margin-left:-6.25rem}}.gallery-inner-background-1{position:absolute;width:calc(20vmin + 12.5 * 1rem);left:calc(20vw - 10 * 1rem);top:140vh;overflow:hidden}.gallery-inner-background-2{position:absolute;width:calc(100vmin + 25 * 1rem);left:40vw;top:10vh;overflow:hidden}.gallery-inner-perspective{perspective:2500px;transform-style:preserve-3d}.gallery-inner-3d-row{margin-bottom:24rem;padding-bottom:120%;position:relative}@media (min-width:52.06rem){.gallery-inner-3d-row{margin-bottom:0;padding-bottom:40%}}.gallery-inner-3d-row-img-center,.gallery-inner-3d-row-img-left,.gallery-inner-3d-row-img-right{position:absolute;transition:transform .5s}.gallery-inner-3d-row-img-center amp-img,.gallery-inner-3d-row-img-left amp-img,.gallery-inner-3d-row-img-right amp-img{transition:box-shadow .5s;box-shadow:0 30px 60px rgba(6,7,22,.15)}.gallery-inner-3d-row-img-left{width:80%;left:-10%;top:-10%;transform:rotateX(-12deg) rotateY(20deg) rotate(2deg)}.gallery-inner-3d-row-img-center{width:90%;left:3%;top:88%;z-index:1;transform:translateZ(120px) rotateX(-6deg) rotateY(-1deg)}.gallery-inner-3d-row-img-right{width:65%;right:-10%;top:35%;transform:translateZ(60px) rotateY(-40deg)}@media (min-width:52.06rem){.gallery-inner-3d-row-img-left{width:40%;left:-20%;top:-18%}.gallery-inner-3d-row-img-center{width:40%;left:5%;top:10%}.gallery-inner-3d-row-img-right{width:30%;right:3%;top:-25%}}.gallery-inner-3d-row-img-center:hover,.gallery-inner-3d-row-img-left:hover,.gallery-inner-3d-row-img-right:hover{transition:transform .25s,box-shadow .25s}.gallery-inner-3d-row-img-center:hover,.gallery-inner-3d-row-img-left:hover,.gallery-inner-3d-row-img-right:hover{transform:translateZ(200px)}.gallery-inner-3d-row-img-center:hover amp-img,.gallery-inner-3d-row-img-left:hover amp-img,.gallery-inner-3d-row-img-right:hover amp-img{transition:box-shadow .25s;box-shadow:0 30px 80px rgba(6,7,22,.15)}@media (min-width:52.06rem){.gallery-inner-img-right{margin-left:-5.625rem}}.gallery-inner-img-right-small{margin-top:-3.75rem;float:right}@media (min-width:40.06rem){.gallery-inner-img-right-small{margin-top:0}}.gallery-recommended-image img{-o-object-fit:cover;object-fit:cover}.gallery-related-section-items li:first-child .gallery-recommended-image{transform:matrix3d(1.534047,.12295,0,.001049,.081503,1.335949,0,.000489,0,0,1,0,-49.863192,-29.415962,0,1);box-shadow:1vh 6vh 5vh rgba(6,7,22,.15)}.gallery-related-section-items li:nth-child(2) .gallery-recommended-image{transform:matrix3d(1.104404,-.050629,0,.000115,.223984,1.35379,0,.000809,0,0,1,0,-24.574335,-22.172093,0,1);transform-origin:0 0;box-shadow:.5vh 3vh 4vh rgba(6,7,22,.15)}.gallery-related-section-items li:nth-child(3) .gallery-recommended-image{transform:matrix3d(.819634,-.109733,0,-.000154,-.11382,.81154,0,-.000399,0,0,1,0,33.10833,33.633254,0,1);transform-origin:0 0;box-shadow:1.5vh 4vh 5vh rgba(6,7,22,.15)}.gallery-recommended-image{background:#eee;transform-origin:0 0;margin-bottom:1.5rem;transition:box-shadow .2s ease-in-out}.ampstart-image-with-caption{cursor:pointer;transition:all .2s ease-in-out}.gallery-related-section-items li:hover .ampstart-image-with-caption{transform:translateY(-.5vh) scale(1.05)}.gallery-related-section-items li:hover .gallery-recommended-image{box-shadow:1.5vh 7vh 6vh rgba(6,7,22,.15)}@media (max-height:40rem){.v-xs-hide{display:none}}@media (min-height:40.06rem) and (max-height:52rem){.v-sm-hide{display:none}}@media (min-height:52.06rem) and (max-height:64rem){.v-md-hide{display:none}}@media (min-height:64.06rem){.v-lg-hide{display:none}}@media (-ms-high-contrast:active),(-ms-high-contrast:none){.gallery-base-invert{color:inherit;mix-blend-mode:normal}}.ampstart-btn{display:-ms-inline-flexbox;display:inline-flex;height:3.6rem;padding:1.875rem;font-size:1.1rem;letter-spacing:.02em;font-weight:600;border:1px solid #3f4ae6;color:#fff;transition:transform .1s,box-shadow .1s;box-shadow:0 .3rem 1rem rgba(6,7,22,.1)}button.ampstart-btn{line-height:0}.ampstart-btn:hover{transition:transform .25s,box-shadow .25s;transform:translate3d(0,-.25rem,0) scale(1.05);box-shadow:0 1rem 2rem rgba(6,7,22,.2)}.ampstart-btn:active{transition:transform .1s,box-shadow .1s;transform:translate3d(0,-.125rem,0) scale(1.025);box-shadow:0 .5rem 1rem rgba(6,7,22,.2)}.gallery-component-hero{margin-bottom:3.75rem}.gallery-component-hero-carousel,.gallery-component-hero-content{margin-top:calc(.055 * 100vmin + 7.9375 * 1rem)}@media (min-width:64.06rem) and (min-height:64.06rem){.gallery-component-hero-carousel,.gallery-component-hero-content{margin-top:calc(.055 * 64 * 1rem + 7.9375 * 1rem)}}.gallery-component-hero-content{height:0}.gallery-component-hero-heading{line-height:1.2;margin:-3.42rem 0 0;font-size:4.75rem;letter-spacing:-.05rem}.gallery-component-hero-heading,.gallery-component-hero-subheading{font-family:Oswald,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,sans-serif;font-weight:400}.gallery-component-hero-subheading{margin:.5rem 0 0;font-size:1.375rem}.gallery-component-hero-action{margin-top:13rem}.gallery-component-hero-carousel{margin-bottom:6.25rem}.gallery-component-hero-carousel .amp-scrollable-carousel-slide img{-o-object-fit:cover;object-fit:cover}.gallery-component-hero-carousel .amp-carousel-button{background-color:#fff;box-shadow:-10px 0 20px rgba(0,0,0,.12);border-radius:0;width:50px;height:89px;cursor:pointer;-webkit-tap-highlight-color:rgba(0,0,0,0)}.gallery-component-hero-carousel .amp-carousel-button:hover{background-color:#ff0}.gallery-component-hero-carousel .amp-carousel-button:focus{outline:none}.gallery-component-hero-carousel .amp-carousel-button-next{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' viewBox='0 0 18 18'%3E%3Cpath d='M9 3L7.94 4.06l4.19 4.19H3v1.5h9.13l-4.19 4.19L9 15l6-6z'/%3E%3C/svg%3E");right:0}.gallery-component-hero-carousel .amp-carousel-button-prev{left:0;background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' viewBox='0 0 18 18'%3E%3Cpath d='M15 8.25H5.87l4.19-4.19L9 3 3 9l6 6 1.06-1.06-4.19-4.19H15v-1.5z'/%3E%3C/svg%3E")}@media (max-width:40rem){.gallery-component-hero-carousel .amp-carousel-button{width:40px;height:55px}}.gallery-component-hero-carousel .amp-scrollable-carousel-slide{margin-left:1.5rem}.gallery-component-hero-carousel .amp-scrollable-carousel-slide:first-child{margin-left:1.2rem}.gallery-component-hero-carousel .amp-scrollable-carousel-slide:last-child{margin-right:2rem}.gallery-component-hero-carousel .amp-scrollable-carousel-slide:first-child{background:#d8aec3}.gallery-component-hero-carousel .amp-scrollable-carousel-slide:nth-child(2){background:#bfdae4}.gallery-component-hero-carousel .amp-scrollable-carousel-slide:nth-child(3){background:#fefa4a}.gallery-component-hero-carousel .amp-scrollable-carousel-slide:nth-child(4){background:#c9e6f9}.gallery-component-hero-carousel .amp-scrollable-carousel-slide:nth-child(5){background:#e6e8e7}.gallery-component-hero-carousel .amp-scrollable-carousel-slide:nth-child(6){background:#f6baca}.gallery-component-map .gallery-component-map-details{margin-bottom:-11.5rem;position:relative;z-index:1}.gallery-component-map .gallery-component-map-heading{width:15rem;margin-bottom:3rem}.gallery-component-map .gallery-component-button{margin-left:calc(3.5vw + 1rem)}@media (min-width:64.06rem){.gallery-component-map-button{margin-left:2.5rem}}.gallery-component-map-frame{margin-top:7.5rem;-webkit-mask-image:linear-gradient(180deg,transparent 10%,#000 8.75rem);mask-image:linear-gradient(180deg,transparent 10%,#000 8.75rem);position:relative;z-index:0}.gallery-sidebar{padding-top:0;width:23.4375rem;padding-right:0;box-sizing:content-box}.gallery-sidebar-close-button,.gallery-sidebar a{-webkit-tap-highlight-color:rgba(0,0,0,0);text-decoration:none;padding-left:2.5rem}.gallery-sidebar[side]{background:#fff;transition:transform .3s cubic-bezier(0,0,.21,1),box-shadow .3s}.gallery-sidebar[open]{box-shadow:0 0 2rem rgba(6,7,22,.15)}@media (min-width:40.06rem) and (min-height:40.06rem){.gallery-sidebar-content{padding:1.875rem;padding-right:0}}.ampstart-sidebar-header{font-weight:300;margin:2rem 0 calc(1.25rem * .925)}.ampstart-navbar-trigger{-ms-flex:none;flex:none;cursor:pointer;line-height:1}.ampstart-headerbar .ampstart-navbar-trigger{padding:0;margin-top:20px}.gallery-sidebar .ampstart-navbar-trigger{height:2.35rem;line-height:calc(2.35rem * 1.066666667);overflow:hidden;padding:0 .625rem;margin-top:calc(2.35rem / -2 + 1.25rem / 2)}.ampstart-navbar-trigger:active,.ampstart-navbar-trigger:focus,.gallery-sidebar .ampstart-navbar-trigger{background:#ccc;color:#fff;outline:none}.gallery-sidebar-close-button:hover{background-color:#eee}.gallery-sidebar .ampstart-navbar-trigger:active,.gallery-sidebar .ampstart-navbar-trigger:focus{outline:none;background-color:#ccc}.gallery-sidebar-close-button svg{display:block;width:1.125rem;height:1.125rem}.ampstart-sidebar-nav-title{position:absolute;top:2rem;margin-left:2.875rem;text-transform:none;color:#000;font-weight:100}.ampstart-sidebar-nav-title,.gallery-sidebar-heading{font-size:.84375rem;line-height:1.25rem;letter-spacing:.05em}.gallery-sidebar-heading{margin:0 0 0 1rem}.gallery-sidebar-heading a{text-decoration:none;color:inherit}@media (min-width:40.06rem) and (min-height:40.06rem){.gallery-sidebar-heading{margin:0 0 0 1.875rem}}.ampstart-sidebar-nav{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;counter-reset:a -1;margin:1rem 0;background:#fff}.ampstart-nav-link{-ms-flex:none;flex:none;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;font-size:1.375rem;font-weight:600;text-transform:none;-webkit-font-smoothing:antialiased;line-height:1.2;letter-spacing:-.03em;text-decoration:none;padding:1.1rem 0;white-space:nowrap;position:relative}.ampstart-nav-item{margin-left:-2.5rem}.ampstart-nav-link:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;transform:scaleX(0) translateZ(0);transform-origin:left center;transition:transform .24s ease-in-out}.ampstart-nav-link:hover:after{display:block;content:"";transform:scaleX(1) translateZ(0)}.ampstart-nav-item:nth-child(7n+1){color:#e4bf0b}.ampstart-nav-item:nth-child(7n+1) .ampstart-nav-link:after{background-color:rgba(228,191,11,.1)}.ampstart-nav-item:nth-child(7n+3){color:#fe95a6}.ampstart-nav-item:nth-child(7n+3) .ampstart-nav-link:after{background-color:rgba(254,149,166,.1)}.ampstart-nav-item:nth-child(7n+4){color:#aeb197}.ampstart-nav-item:nth-child(7n+4) .ampstart-nav-link:after{background-color:hsla(67,14%,64%,.1)}.ampstart-nav-item:nth-child(7n+5){color:#127eb1}.ampstart-nav-item:nth-child(7n+5) .ampstart-nav-link:after{background-color:rgba(18,126,177,.1)}.ampstart-nav-item:nth-child(7n+6){color:#5870ed}.ampstart-nav-item:nth-child(7n+6) .ampstart-nav-link:after{background-color:rgba(88,112,237,.1)}.ampstart-nav-item:nth-child(7n+7){color:#774a4e}.ampstart-nav-item:nth-child(7n+7) .ampstart-nav-link:after{background-color:rgba(119,74,78,.1)}.ampstart-nav-item:nth-child(2) .ampstart-nav-link{border-top:1px solid #aaa;border-bottom:1px solid rgba(0,0,0,.3)}.ampstart-nav-item:nth-child(2) .ampstart-nav-link:after{background-color:#000;top:-1px;bottom:-1px}@media (-webkit-min-device-pixel-ratio:1.5),(min-resolution:144dpi){.ampstart-nav-item:nth-child(2) .ampstart-nav-link{border:none;background:linear-gradient(180deg,#000,#000 50%,#fff 0) 0 0/100% 1px no-repeat,linear-gradient(180deg,#000,#000 50%,#fff 0) 0 100%/100% 1px no-repeat}.ampstart-nav-item:nth-child(2) .ampstart-nav-link:after{top:0;bottom:0}}.ampstart-nav-item .ampstart-nav-link:before{width:1.125rem;margin-right:1rem;text-align:center;-ms-flex-item-align:start;align-self:flex-start;color:#000;font-size:.9375rem;font-weight:200;-webkit-font-smoothing:antialiased;line-height:1.71875rem;counter-increment:a;content:counter(a);-ms-flex:none;flex:none}.ampstart-nav-item:nth-child(2) .ampstart-nav-link:before,.ampstart-nav-item:nth-child(2) .gallery-sidebar-nav-item-icon,.ampstart-nav-item:nth-child(2) .gallery-sidebar-nav-item-text{color:#fff;z-index:1;mix-blend-mode:difference;-webkit-font-smoothing:antialiased}@media (-ms-high-contrast:active),(-ms-high-contrast:none){.ampstart-nav-item:nth-child(2) .gallery-sidebar-nav-item-text{color:#000;mix-blend-mode:normal}}.gallery-sidebar-nav-item-text{-ms-flex:auto;flex:auto;margin-right:1rem}.gallery-sidebar-nav-item-icon,.gallery-sidebar-nav-item-text,.gallery-sidebar-nav-item:before{z-index:1}@media (min-width:40.06rem) and (min-height:40.06rem){.ampstart-nav-item .ampstart-nav-link:before,.gallery-sidebar-nav-item-text{margin-right:1.875rem}}.gallery-sidebar-nav-item-image{-ms-flex:none;flex:none;width:3.125rem;height:3.125rem;margin:-1rem 0;border-radius:50%;z-index:1;transition:transform .1s,box-shadow .1s;box-shadow:0 0 0 rgba(6,7,22,.2)}.gallery-sidebar-nav-item-image,.gallery-sidebar-nav-item-image img{-o-object-fit:cover;object-fit:cover}.ampstart-nav-item:nth-child(3) .gallery-sidebar-nav-item-image{background:#fe95a6}.ampstart-nav-item:nth-child(4) .gallery-sidebar-nav-item-image{background:#aeb197}.ampstart-nav-item:nth-child(5) .gallery-sidebar-nav-item-image{background:#127eb1}.ampstart-nav-item:nth-child(6) .gallery-sidebar-nav-item-image{background:#5870ed}.ampstart-nav-item:nth-child(7) .gallery-sidebar-nav-item-image{background:#774a4e}.ampstart-nav-item:nth-child(8) .gallery-sidebar-nav-item-image{background:#e4bf0b}.gallery-sidebar-nav-item-icon{-ms-flex:none;flex:none;width:.82em;height:.82em;margin-left:.6rem;margin-right:.6rem;color:#000;margin-top:-2px}.gallery-sidebar-nav-item-icon svg *{stroke-width:4.1px}.gallery-component-tagline{left:calc(1rem + 36px + .65rem);pointer-events:none;position:absolute;top:20px;z-index:9}.gallery-component-tagline>div{font-size:.84375rem;line-height:36px}@media (min-width:40.06rem){.gallery-component-tagline{left:1rem;top:calc(20px + 36px + .65rem)}.gallery-component-tagline>div{transform:rotate(-90deg) translate(-100%);transform-origin:top left}}

.ampstart-headerbar .ampstart-navbar-trigger,.header h2,h2.section{font-family:rationalextra_bold}#cookie-notification button,#menu nav ul li a,#menu nav ul li a:hover,#menu nav ul li a:visited,a,a:hover,a:visited{text-decoration:none}@font-face{font-family:rationalextra_bold;src:url(/assets/rational-extrabold-webfont.woff2) format('woff2'),url(/assets/rational-extrabold-webfont.woff) format('woff');font-weight:400;font-style:normal}@font-face{font-family:rationalsemi_bold;src:url(/assets/rational-semibold-webfont.woff2) format('woff2'),url(/assets/rational-semibold-webfont.woff) format('woff');font-weight:400;font-style:normal}@font-face{font-family:rationalbook_bold;src:url(/assets/rational-bookbold-webfont.woff2) format('woff2'),url(/assets/rational-bookbold-webfont.woff) format('woff');font-weight:400;font-style:normal}@font-face{font-family:rationalmedium;src:url(/assets/rational-medium.woff2) format('woff2'),url(/assets/rational-medium.woff) format('woff');font-weight:400;font-style:normal}body{background-color:#5feb98;color:#262626}h1,h2,h3,h4,h5,h6{letter-spacing:normal}h2.section{margin:3.17vw 6.75vw;font-size:3.71vw;line-height:3.03vw;display:block;border-bottom:solid .67vw #262626}@media (max-width:40rem){h2.section{margin:40px 30px;font-size:44px;line-height:50px;display:block;border-bottom:solid 10px #262626}}.header{height:260px;background-color:#262626}.header h2{font-size:6.55vw;line-height:5.36vw;color:#fff;border-bottom:solid 10px #5feb98;display:inline-block;margin-top:110px;position:absolute;z-index:300;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%);white-space:nowrap}.header-img{width:100%;height:500px;position:absolute;top:-30px;opacity:.35;background:#262626}.header-img .gradient{position:absolute;bottom:0;z-index:5;width:100%;height:360px;background-image:linear-gradient(to top,#262626,rgba(38,38,38,0))}@media (max-width:40rem){.header{height:240px}.cat{height:300px}.header h2{font-size:36px;line-height:40px;margin-top:140px;z-index:150}.category h2{margin-top:170px}}.ampstart-headerbar{z-index:200;background:linear-gradient(to bottom,rgba(0,0,0,.5) 0,rgba(0,0,0,0) 100%);height:175px}.ampstart-headerbar .ampstart-navbar-trigger{color:#fff;font-size:22px;top:45px;right:55px;margin-top:10px;text-shadow:1px 1px 5px #262626;}.ampstart-headerbar .logo{top:55px;left:55px}.ampstart-navbar-trigger:active,.ampstart-navbar-trigger:focus,.gallery-sidebar .ampstart-navbar-trigger{background:0 0}.video .bg,.video-wall,main header.xs-hide{background-color:#262626}@media (max-width:40rem){.ampstart-headerbar{height:100px}.ampstart-headerbar .ampstart-navbar-trigger{font-size:18px;top:30px;right:32px}.ampstart-headerbar .logo{top:20px;left:20px}}

#menu{width:100%;background-color:#5feb98;color:#262626;padding:0;margin:0}#menu .close{cursor:pointer;font-family:rationalbook_bold;font-size:18px;position:absolute;top:30px;right:30px}#menu nav ul{list-style-type:none;font-family:rationalextra_bold}#menu .menu-social ul{list-style-type:none;margin:0;padding:0}#menu .menu-social ul li{display:inline-block;margin:0;padding:0}@media (max-width:52.06rem){#menu .close{color:#fff}#menu nav ul{padding-left:0;margin:0}#menu nav.dark ul{padding-top:45px;background-color:#262626;color:#fff;font-family:rationalmedium}#menu nav ul li{width:100%;border-bottom:solid 1px #515151;font-size:22px;line-height:60px;padding-left:30px}#menu nav.dark ul li{font-size:18px;line-height:50px}#menu h4{font-family:rationalsemi_bold;font-weight:15px;padding-left:30px;text-transform:uppercase;padding-top:40px;padding-bottom:10px}#menu .menu-social{margin-bottom:30px;width:100%;text-align:center;margin-top:50px}#menu .menu-social ul li{width:15%}}@media (min-width:52.06rem){#menu amp-img.cover img{object-fit:cover;opacity:.35}#menu .logo{top:55px;left:55px}#menu .close{top:45px;right:55px;font-size:22px;margin-top:10px;color:#e4e5e6;line-height:1}#menu{background-color:#262626;color:#fff}#menu nav.dark ul{position:absolute;bottom:45px;left:55px;padding:0;margin:0}#menu nav.dark ul a li{display:inline;font-family:rationalsemi_bold;font-size:1.19vw;line-height:42px;margin-right:20px;color:#e4e5e6}#menu nav.dark ul a:first-of-type {display:none}#menu nav.dark ul a:hover li{border-bottom:solid 2px #5feb98}#menu nav.category ul{position:absolute;top:35px;left:40vw}#menu nav.category ul li{font-family:rationalextra_bold;font-size:3vw;line-height:calc((100vh - 70px)/ 9)}#menu nav.category ul a:hover li span{border-bottom:solid 10px #5feb98}#menu .menu-social{position:absolute;bottom:52px;right:55px}#menu .menu-social ul li{margin-left:50px}#menu .menu-social ul a:hover li span{filter:brightness(0) invert(1)}}

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
			background-color: #262626;
		}
		a, a:visited, a:hover {
			text-decoration: none;
		}

		h1, h2, h3, h4, h5, h6 {
			letter-spacing: normal;
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
		.carousel {
			border-top: solid 3px transparent;
			border-bottom: solid 3px transparent;
			background-color:#000;
		}
		.slide-video {
			position: relative;
			width: 400px;
			height: 400px;
			margin: 0;
			filter: brightness(55%);
			border: solid 3px transparent;
		}
		.slide-video:first-of-type {
			border-left: solid 6px transparent;
		}
		.slide-video:last-of-type {
			border-right: solid 6px transparent;
		}
		.slide-video:hover {
			filter: brightness(100%);
		}
		.slide-video:hover:before {
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
		.slide-video .caption {
			bottom: 25px;
			padding-left: 25px;
			padding-right: 25px;
			position: absolute;
			width: 80%;
			text-shadow: 1px 1px 5px #262626;
			white-space: normal;
			z-index: 100;
			-o-transition:.5s;
			-ms-transition:.5s;
			-moz-transition:.5s;
			-webkit-transition:.5s;
			transition:.5s;
		}
		@media (max-width:40rem) {
			.slide-video .caption {
				padding-left: 20px;
			}
		}
		.slide-video .caption h2 {
			color: #e4e5e6;
			font-family: 'rationalbook_bold';
			font-size: 24px;
			line-height: 28px;
			margin-top: 5px;
		}
		@media (max-width:40rem) {
			.slide-video .caption h2 {
				font-size: 30px;
				line-height: 34px;
			}
		}
		.slide-video .caption .time {
			font-family: 'rationalsemi_bold';
			color: #5feb98;
			font-size: 20px;
			padding-bottom: 16px;
		}
		.slide-video .caption .time {
			font-size: 18px;
		}
		.slide-video .caption .time::first-letter {
			text-transform: uppercase;
		}
		.video .caption .time::first-letter {
			text-transform: uppercase;
		}
		.slide-video:hover .caption {
			bottom: 90px;
		}
		.slide-video .btn {
			z-index: 100;
			position: absolute;
			bottom: 25px;
			left: 25px;
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
			background: url('../assets/play_up.svg') no-repeat center;
			background-size: 12px 12px;
		}
		.slide-video:hover .btn {
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
		@media (max-width:40rem) {
			.slide-video .caption .time {
				font-size: 16px;
			}
		}
		.amp-carousel-button {
			height: 75px;
			width: 75px;
			cursor: pointer;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		.amp-carousel-button:focus {outline:0;}
		@media (max-width:40rem) {
			.amp-carousel-button {
				display: none;
			}
		}
		.amp-carousel-button-next {
			background-color: #262626;
			background-size: 55px 55px;
			background-image: url('../assets/next.svg');
			right: 55px;
		}
		.amp-carousel-button-prev {
			background-color: #262626;
			background-size: 55px 55px;
			background-image: url('../assets/prev.svg');
			left: 55px;
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

		@media (min-width:52.06rem) {
			.small-screen {
				display: none;
			}
		}
		@media (max-width:52rem){
			.medium-screen {
				display: none;
			}
		}
		@media (min-width:100.06rem) {
			.medium-screen {
				display: none;
			}
		}
		@media (max-width:100rem) {
			.large-screen {
				display: none;
			}
		}

		.player {
			position: relative;
			width: 100%;
		}

		/* Overlay fills the parent and sits on top of the video */
		.click-to-play-overlay {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
		}
		.play-icon {
			position: absolute;
			z-index: 2;

			width: 150px;
			height: 150px;

			background-image: url(/assets/click-to-play.png);
			background-repeat: no-repeat;
			background-size: 100% 100%;

			/* Align to the middle */
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);

			cursor: pointer;
			opacity: 0.9;
		}
		.play-icon:focus {
			outline:0;
		}
		#small-screen-overlay .play-icon {
			top: calc(50vw - 10px);
			width: 30vw;
			height: 30vw;
		}

		.play-icon:hover, .play-icon:focus {
			opacity: 1;
		}

		.player.medium-screen {
			height: 600px; /** player height ***/
		}
		.player.large-screen {
			height: 800px; /** player height ***/
		}
		.player amp-img.blur {
			filter: blur(32px) brightness(35%);
			position: absolute;
			z-index: -10;
			transform: scale(1.1);
		}
		.player .overlay {
			position: absolute;
			bottom: 140px;
			left: calc(30px + 400px + 50vw);
			z-index: 10;
			color: #e4e5e6;
			opacity: 0;
			-o-transition:1s;
			-ms-transition:1s;
			-moz-transition:1s;
			-webkit-transition:1s;
			transition:1s;
		}
		.player.medium-screen  .overlay {
			left: calc(30px + 300px + 50vw);
			width: calc(50vw - 300px - 80px);
		}
		.player.large-screen  .overlay {
			left: calc(30px + 400px + 50vw);
			width: calc(50vw - 400px - 80px);
		}
		.player .overlay h1 {
			font-family: 'rationalbook_bold';
			font-size: 28px;
			line-height: 36px;
			margin-bottom: 10px;
		}
		.player .overlay .description {
			font-family: 'rationalsemi_bold';
			font-size: 18px;
			line-height: 27px;
		}
		.player .share {
			position: absolute;
			bottom: 15px;
			right: 15px;
			z-index: 10;
			cursor: pointer;
			opacity: 1;
			-o-transition:1s;
			-ms-transition:1s;
			-moz-transition:1s;
			-webkit-transition:1s;
			transition:1s;
		}
		@media (min-width:52.06rem) {
			.player .share {
				right: 35px;
				opacity: 0;
			}
			.player.medium-screen .share {
				top: 480px;  /** player height - 120 px **/
			}
			.player.large-screen .share {
				top: 680px;  /** player height - 120 px **/
			}
		}
		.hoverzone:hover ~ .overlay, .hoverzone:hover ~ .share, .share:hover {
			opacity: 1;
		}
		.share:hover ~ .overlay {
			opacity: 1;
		}
		@media (max-width:64rem) {
			.player {
				height: auto;
			}
			.player .overlay {
				background-color: #262626;
				position: static;
				padding: 30px 30px 50px 30px;
				font-size: 18px;
				width: 100%;
				opacity: 1;
			}
			.player .overlay h1 {
				font-size: 20px;
				line-height: 24px;
				color: #5feb98;
			}
			.player .overlay .description {
				font-size: 16px;
				line-height: 18px;
			}
		}
		.back {
			font-family: 'rationalextra_bold';
			color: #e4e5e6;
			font-size: 18px;
			height: 50px;
			line-height: 50px;
			position: static;
			text-align: right;
			padding-right: 30px;
		}
		@media (min-width:52.06rem) {
			.back {
				display: none;
			}
		}
		@media (max-width:52rem) {
			.ampstart-headerbar {
				display: none;
			}
		}

		video::-webkit-media-controls-current-time-display, video::-webkit-media-controls-time-remaining-display {
			font-family: 'rationalsemi_bold';
			font-size: 15px;
		}

		video::-webkit-media-controls-current-time-display {
			color: #5feb98;
		}

		.video-wall {
			border-top: solid 2px #262626;
			border-bottom: solid 2px #262626;
		}
		.video {
			border: solid 4px #262626;
			border-left: 0;
			border-right: 0;
			position: relative;
		}
		.video .caption {
			bottom: 40px;
			padding-left: 55px;
			padding-right: 20px;
			position: absolute;
			width: 80%;
			white-space: normal;
			z-index: 100;
		}
		.video amp-img {
			filter: brightness(65%);
		}
		@media (max-width:40rem) {
			.video .caption {
				padding-left: 20px;
			}
		}
		.video .caption h2 {
			color: #e4e5e6;
			font-family: 'rationalbook_bold';
			font-size: 52px;
			line-height: 54px;
			margin-top: 5px;
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
			.video .caption h2 {
				font-size: 30px;
				line-height: 34px;
			}
		}
		.video .caption .time {
			font-family: 'rationalsemi_bold';
			color: #5feb98;
			font-size: 20px;
			padding-bottom: 16px;
		}
		.video .caption .time {
			font-size: 18px;
		}
		@media (max-width:40rem) {
			.video .caption .time {
				font-size: 16px;
			}
		}
		#share .box {
			width: 500px;
			height: 300px;
			background-color: #5feb98;
			color: #262626;
			margin-right: auto;
			margin-left: auto;
			margin-top: 200px;
			position: relative;
			padding: 65px;
		}
		#share .close {
			cursor:pointer;
			font-family: 'rationalbook_bold';
			font-size: 22px;
			position: absolute;
			top: 30px;
			right: 30px;
			z-index: 100;
		}
		#share h3 {
			font-family: 'rationalextra_bold';
			font-size: 32px;
			line-height: 48px;
			display: block;
			border-bottom: solid 10px #262626;
		}
		amp-social-share.rounded {
			border-radius: 50%;
			background-size: 60%;
		}
		@media (max-width:40rem) {
			#share .box {
				position: absolute;
				width: 100%;
				height: 270px;
				margin-top: 0;
				padding: 20px 28px 20px 28px;
				bottom: 0px;
			}
			#share .close {
				font-size: 16px;
				line-height: 60px;
				left: 0;
				right: 0;
				top: auto;
				bottom: 0px;
				background-color: #262626;
				color: #fff;
				text-align: center;
			}
		}
		#cookie-notification {
			padding: 20px;
			background-color: #262626;
		}
		#cookie-notification .message{
			float: left;
			font-family: 'rationalmedium';
			font-size: 16px;
			line-height: 20px;
			color: #fff;
		}
		#cookie-notification button {
			float: right;
			font-family: 'rationalextra_bold';
			color: #5feb98;
			padding: 10px 30px 10px 30px;
			border: solid 2px #5feb98;
			background-color: transparent;
			font-size: 16px;
			text-decoration: none;
			cursor: pointer;
			display: inline-block;
		}
		@media (max-width:60rem) {
		  #cookie-notification .message {
			float: none;
			text-align: center;
		  }
		  #cookie-notification button {
			float: none;
			margin-top: 10px;
		  }
		  #cookie-notification {
			text-align: center;
		  }
		}

	</style>
</head>

<body>

	<amp-analytics type="gtag" data-credentials="include">
		<script type="application/json">
		{
		  "vars" : {
			"gtag_id": "UA-131939849-1",
			"config" : {
			  "UA-131939849-1": { "groups": "default" }
			}
		  }
		}
		</script>
	</amp-analytics>

	<amp-user-notification id="cookie-notification"
	  layout="nodisplay">
	  <div class="message">
		  En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies pour réaliser des statistiques de visites.
		  <br />
		  Pour en savoir plus, vous pouvez consulter notre <a href="/mentions-legales">Politique de confidentialité</a>.
	  </div>
	  <button on="tap:cookie-notification.dismiss">J'accepte</button>
	</amp-user-notification>

	<!-- Start Navbar -->
	<header class="ampstart-headerbar fixed flex justify-start items-center top-0 right-0 left-0 pl2 pr2">
		<a href="/">
			<amp-img src="/assets/logo.svg" media="(min-width: 40.06rem)" width="100" height="100" layout="fixed" class="logo top-0 absolute"></amp-img>
			<amp-img src="/assets/logo.svg" media="(max-width: 40rem)" width="70" height="70" layout="fixed" class="logo top-0 absolute"></amp-img>
		</a>
		<div role="button" aria-label="open menu" on="tap:menu" tabindex="0" class="ampstart-navbar-trigger top-0 absolute">Menu</div>
	</header>
	
	<div class="back">
		<div role="button" aria-label="open menu" on="tap:menu" tabindex="0">Menu</div>
	</div>

	<!-- Start Sidebar -->
	<amp-lightbox id="menu" layout="nodisplay" scrollable>
		<amp-img class="cover xs-hide sm-hide " layout="fill" src="/assets/banner1.jpg"></amp-img>
		<a href="/"><amp-img src="/assets/logo.svg" media="(min-width: 52.06rem)" width="100" height="100" layout="fixed" class="logo top-0 absolute"></amp-img></a>
		<div role="button" aria-label="close menu" on="tap:menu.close" tabindex="0" class="close">
			<span>Fermer</span>
		</div>
		<nav class="dark">
			<ul class="">
				<a href="/" rel="nofollow"><li>Accueil</li></a>
				<a href="/corporate#apropos" rel="nofollow"><li>A propos</li></a>
				<a href="/corporate#services" rel="nofollow"><li>Annonceurs</li></a>
				<a href="/corporate#contact" rel="nofollow"><li>Contact</li></a>
				<a href="/mentions-legales" rel="nofollow"><li>Mentions légales</li></a>
			</ul>
		</nav>
		<nav class="category">
			<h4 class="md-hide lg-hide">Catégories</h4>
			<ul class="">
				<a href="/environment" rel="nofollow"><li><span>Environnement</span></li></a>
				<a href="/world" rel="nofollow"><li><span>Monde</span></li></a>
				<a href="/society" rel="nofollow"><li><span>Société</span></li></a>
				<a href="/identities" rel="nofollow"><li><span>Identités</span></li></a>
				<a href="/travel" rel="nofollow"><li><span>Voyage + Food</span></li></a>
				<a href="/culture" rel="nofollow"><li><span>Culture</span></li></a>
				<a href="/unusual" rel="nofollow"><li><span>Insolite</span></li></a>
				<a href="/voxpop" rel="nofollow"><li><span>VoxPop</span></li></a>
				<a href="/tribune" rel="nofollow"><li><span>Tribune</span></li></a>
			</ul>
		</nav>
		<div class="menu-social">
			<ul>
				<li>
					<a href="https://www.facebook.com/Loopsider/" target="_blank" rel="nofollow">
						<amp-img src="/assets/facebook_black.svg"  media="(max-width: 52rem)" width="13" height="25" layout="fixed"></amp-img>
						<amp-img src="/assets/facebook_green.svg"  media="(min-width: 52.06rem)" width="13" height="25" layout="fixed"></amp-img>
					</a>
				</li>
				<li>
					<a href="https://twitter.com/Loopsidernews" target="_blank" rel="nofollow">
						<amp-img src="/assets/twitter_black.svg"  media="(max-width: 52rem)" width="27" height="23" layout="fixed"></amp-img>
						<amp-img src="/assets/twitter_green.svg"  media="(min-width: 52.06rem)" width="27" height="23" layout="fixed"></amp-img>
					</a>
				</li>
				<li>
					<a href="https://www.youtube.com/channel/UC6bn_ABjeTwbJFGFMQbZFlw" target="_blank" rel="nofollow">
						<amp-img src="/assets/youtube_black.svg"  media="(max-width: 52rem)" width="34" height="25" layout="fixed"></amp-img>
						<amp-img src="/assets/youtube_green.svg"  media="(min-width: 52.06rem)" width="34" height="25" layout="fixed"></amp-img>
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/loopsider/" target="_blank" rel="nofollow">
						<amp-img src="/assets/instagram_black.svg"  media="(max-width: 52rem)" width="24" height="24" layout="fixed"></amp-img>
						<amp-img src="/assets/instagram_green.svg"  media="(min-width: 52.06rem)" width="24" height="24" layout="fixed"></amp-img>
					</a>
				</li>
				<li>
					<a href="https://www.snapchat.com/discover/Loopsider/1993111828" target="_blank" rel="nofollow">
						<amp-img src="/assets/snapchat_black.svg"  media="(max-width: 52rem)" width="27" height="26" layout="fixed"></amp-img>
						<amp-img src="/assets/snapchat_green.svg"  media="(min-width: 52.06rem)" width="27" height="26" layout="fixed"></amp-img>
					</a>
				</li>
			</ul>
		</div>
	</amp-lightbox>
	<!-- End Sidebar -->
	<!-- End Navbar -->
	
	<amp-lightbox id="share" layout="nodisplay">
		<div class="box">
			<div role="button" aria-label="close share box" on="tap:share.close" tabindex="0" class="close">
				<span class="">Fermer</span>
			</div>
			<h3>Partager</h3>
			<div class="center mt4 xs-hide">
				<amp-social-share class="rounded mr4"
				  type="facebook"
				  data-param-app_id="254325784911610"
				  width="80"
				  height="80"></amp-social-share>
				<amp-social-share class="rounded mr4"
				  type="twitter"
				  width="80"
				  height="80"></amp-social-share>
				<amp-social-share class="rounded"
				  type="email"
				  width="80"
				  height="80"></amp-social-share>
			</div>
			<div class="center mt4 sm-hide md-hide lg-hide ">
				<amp-social-share class="rounded mr2"
				  type="facebook"
				  data-param-app_id="254325784911610"
				  width="70"
				  height="70"></amp-social-share>
				<amp-social-share class="rounded mr2"
				  type="twitter"
				  width="70"
				  height="70"></amp-social-share>
				<amp-social-share class="rounded"
				  type="email"
				  width="70"
				  height="70"></amp-social-share>
			</div>
		</div>
	</amp-lightbox>
	<main>
		<section class="player large-screen">
			<amp-video id="large-screen-video" class="hoverzone" height="800"
				poster="{{$video->cover}}"
				layout="fixed-height"
				controls>
				<div fallback>
					<p>Your browser doesn't support HTML5 video.</p>
				</div>
				<!-- <source type="video/webm" src="{{$video->webm}}"> -->
				<!-- <source type="video/mp4" src="{{$video->mp4}}"> -->
				<source type="video/mp4" src="{{$video->video_url}}">
			</amp-video>
			<div id="large-screen-overlay" class="click-to-play-overlay">
				<div class="play-icon" role="button" tabindex="0" on="tap:large-screen-overlay.hide, large-screen-video.play"></div>
			</div>
			<div role="button" aria-label="open share box" on="tap:share" tabindex="0" class="share">
				<amp-img src="/assets/share.svg" layout="fixed" width="26" height="22"></amp-img>
			</div>
			<div class="overlay">
				<h1>{{$video->title}}</h1>
				<span class="description">{{$video->description}}</span>
			</div>
			<amp-img src="{{$video->cover}}" layout="fill" class="cover blur"></amp-img>
		</section>
		<section class="player medium-screen">
			<amp-video id="medium-screen-video" class="hoverzone" height="600"
				poster="{{$video->cover}}"
				layout="fixed-height"
				controls>
				<div fallback>
					<p>Your browser doesn't support HTML5 video.</p>
				</div>
				<!-- <source type="video/webm" src="{{$video->webm}}"> -->
				<!-- <source type="video/mp4" src="{{$video->mp4}}"> -->
				<source type="video/mp4" src="{{$video->video_url}}">
			</amp-video>
			<div id="medium-screen-overlay" class="click-to-play-overlay">
				<div class="play-icon" role="button" tabindex="0" on="tap:medium-screen-overlay.hide, medium-screen-video.play"></div>
			</div>
			<div role="button" aria-label="open share box" on="tap:share" tabindex="0" class="share">
				<amp-img src="/assets/share.svg" layout="fixed" width="26" height="22"></amp-img>
			</div>
			<div class="overlay">
				<h1>{{$video->title}}</h1>
				<span class="description">{{$video->description}}</span>
			</div>
			<amp-img src="{{$video->cover}}" layout="fill" class="cover blur"></amp-img>
		</section>
		<section class="player small-screen">
			<amp-video id="small-screen-video" height="800" width="800"
				poster="{{$video->cover}}"
				layout="responsive"
				controls>
				<!-- <source type="video/webm" src="{{$video->webm}}"> -->
				<!-- <source type="video/mp4" src="{{$video->mp4}}"> -->
				<source type="video/mp4" src="{{$video->video_url}}">
				<div fallback>
					<p>Your browser doesn't support HTML5 video.</p>
				</div>
				<source type="video/mp4" src="{{$video->video_url}}">
			</amp-video>
			<div id="small-screen-overlay" class="click-to-play-overlay">
				<div class="play-icon" role="button" tabindex="0" on="tap:small-screen-overlay.hide, small-screen-video.play"></div>
			</div>
			<div class="overlay">
				<h1>{{$video->title}}</h1>
				<span class="description">{{$video->description}}</span>
				<div role="button" aria-label="open share box" on="tap:share" tabindex="0" class="share">
					<amp-img src="/assets/share.svg" media="(max-width: 740px)" layout="fixed" width="18" height="15"></amp-img>
					<amp-img src="/assets/share.svg" media="(min-width: 741px)" layout="fixed" width="26" height="22"></amp-img>
				</div>
			</div>
		</section>
		<section class="carousel xs-hide sm-hide">
			<amp-carousel height="400" layout="fixed-height" type="carousel" autoplay="" loop="">
				@php ($i = 0)
				@for ($k = 0; $k < 5; $k++)
				@if ($suggestedVideos->count()>=($i+1))
				<a href="{{route('player', $suggestedVideos[$i]->slug)}}" class="slide-video">
					<article>
						<amp-img src="{{$suggestedVideos[$i]->cover}}" width="819" height="819" layout="fill" class="cover"></amp-img>
						<div class="caption">
							<amp-timeago layout="fixed" width="300" class="time"
								height="25"
								datetime="{{$suggestedVideos[$i]->ISODate}}"
								locale="fr">{{$suggestedVideos[$i]->ISODate}}</amp-timeago>
							<h2>{{$suggestedVideos[$i]->title}}</h2>
						</div>
						<div class="btn"></div>
					</article>
				</a>
				@endif
				@php ($i++)
				@endfor
			</amp-carousel>
		</section>
		<section class="video-wall md-hide lg-hide">
				<div class="clearfix">
					@php ($i = 0)
					@for ($k = 0; $k < 5; $k++)
					@if ($suggestedVideos->count()>=($i+1))
					<div class="lg-col lg-col-3 md-col md-col-6">
						<a href="{{route('player', $suggestedVideos[$i]->slug)}}">
							<article class="video">
								<amp-img src="{{$suggestedVideos[$i]->cover}}" width="819" height="819" layout="responsive" class="cover"></amp-img>
								<div class="caption">
									<amp-timeago layout="fixed" width="300" class="time"
										height="25"
										datetime="{{$suggestedVideos[$i]->ISODate}}"
										locale="fr">{{$suggestedVideos[$i]->ISODate}}</amp-timeago>
									<h2 class="small">{{$suggestedVideos[$i]->title}}</h2>
								</div>
							</article>
						</a>
					</div>
					@endif
					@php ($i++)
					@endfor
				</div>
			</div>
		</section>
	</main>
</body>
