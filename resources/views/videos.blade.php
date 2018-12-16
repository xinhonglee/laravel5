@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px;">
  @include('common.errors')
  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">New Video</h3>
  </div>
  <div class="panel-body">
     <form action="{{ url('backoffice/video') }}" method="POST" class="form-horizontal">
         @csrf
         @if(session()->has('status'))
             <div class="alert alert-info" role="alert">
                 {{session()->get('status')}}
             </div>
         @endif
         <div class="form-group">
             <label for="title" class="col-sm-3 control-label">Title</label>
             <div class="col-sm-6">
                 <input type="text" name="title" id="title" class="form-control">
             </div>
         </div>
         <div class="form-group">
             <label for="description" class="col-sm-3 control-label">Description</label>
             <div class="col-sm-6">
                 <textarea name="description" rows="5" id="description" class="form-control"></textarea>
             </div>
         </div>
         <div class="form-group">
             <label for="date" class="col-sm-3 control-label">Date</label>
             <div class="col-sm-6">
                 <input type="textarea" name="date" id="date" class="form-control date">
             </div>
         </div>
         <!--
         <div class="form-group">
            <label for="cover" class="col-sm-3 control-label">Cover (png, jpg)</label>
            <div class="col-sm-6">
              <input type="hidden" name="coverId" id="coverId" value="">
              <input type="hidden" name="coverUrl" id="coverUrl" value="">
              <img src="" style="visibility:hidden" id="coverVignette" value="">
              <button type="button" class="btn btn-default" id="upload_cover">Upload</button>
              <button type="button" class="btn btn-default" id="select_cover">Select</button>
              <button type="button" class="btn btn-default hidden" id="delete_cover">Delete</button>
            </div>
         </div>
         -->
         <div class="form-group">
            <label for="video" class="col-sm-3 control-label">Video (mp4)</label>
            <div class="col-sm-6">
             <input type="hidden" name="videoId" id="videoId" value="">
             <input type="hidden" name="videoUrl" id="videoUrl" value="">
             <img src="" style="visibility:hidden; height:100px;" id="videoVignette" value="">
             <button type="button" class="btn btn-default" id="upload_video">Open Media Library</button>
             <!--
             <button type="button" class="btn btn-default" id="select_video">Select</button>
             <button type="button" class="btn btn-default hidden" id="delete_video">Delete</button>
              -->
            </div>
         </div>
         <div class="form-group pull-right">
             <div class="col-sm-6">
                 <button type="submit" class="btn btn-success">
                     <i class="fa fa-plus"></i> Add Video
                 </button>
             </div>
         </div>
     </form>
  </div>
  </div>
  <div class="row" id="displayImages">
  @if($videos)
      @foreach($videos as $video)
          <div class="col-md-3">
              <span>{{$video->title}} - {{$video->date}}</span>
              <video
                id="{{$video->cid}}"
                data-cld-source='{ "publicId": "{{$video->videoId}}", "transformation": { "crop": "limit", "height": 200 }, "info": { "title": "{{$video->title}}", "description": "{{$video->description}}" } }'
                controls
                class="cld-video-player">
              </video>
              <form action="{{ url('/backoffice/video/'.$video->id) }}" method="POST">
            @csrf
            {{ method_field('DELETE') }}

            <button type="submit" id="delete-video-{{ $video->id }}" class="btn btn-danger">
                <i class="fa fa-btn fa-trash"></i>Delete
            </button>
        </form>
          </div>
      @endforeach
  @endif
  </div>
</div>
<script>
  var cld = cloudinary.Cloudinary.new({ cloud_name: "{{ env('CLOUDINARY_CLOUD_NAME') }}", secure: true});
  var players = cld.videoPlayers('.cld-video-player');
  window.ml = cloudinary.createMediaLibrary(
    {
      cloud_name: '{{ env('CLOUDINARY_CLOUD_NAME') }}',
      api_key: '{{ env('CLOUDINARY_API_KEY') }}',
      username: '{{ env('CLOUDINARY_USER_NAME') }}',
      timestamp: '{{ $timestamp }}',
      signature: '{{ $signature }}',
      button_class: 'btn btn-default',
      button_caption: 'Open Media Library',
      multiple: false
    },
    {
     insertHandler: function (data) {
       var result = data.assets[0];
       document.getElementById("videoId").value = result.public_id;
       document.getElementById("videoUrl").value = result.secure_url;
       var coverUrl = result.secure_url.substr(0, result.secure_url.lastIndexOf(".")) + ".jpg";
       document.getElementById("videoVignette").setAttribute('src',coverUrl);
       document.getElementById("videoVignette").style.visibility = 'visible';
       document.getElementById("videoVignette").style['padding-right'] = '20px';

     }
    },
    document.getElementById("upload_video")
  );
</script>
<script type="text/javascript">
    $(function () {
        $('.date').datetimepicker();
    });
</script>
@endsection
