<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width">
   <title>POSS</title>
   <meta name="description" content="POSS: Publisher Open Source Stories">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
   <link href="https://unpkg.com/cloudinary-video-player/dist/cld-video-player.min.css" rel="stylesheet">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
   <script src="https://unpkg.com/cloudinary-core/cloudinary-core-shrinkwrap.min.js" type="text/javascript"></script>
   <script src="https://unpkg.com/cloudinary-video-player/dist/cld-video-player.min.js" type="text/javascript"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js" type="text/javascript"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
   <script src="https://media-library.cloudinary.com/global/all.js" type="text/javascript"></script>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
     <div class="container">
         <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="/backoffice">POSS Back-Office</a>
         </div>
     </div>
  </nav>
  <div id="app"></div>
  @yield('content')
  <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
