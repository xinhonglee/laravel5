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
         <div class="form-group">
            <label for="video" class="col-sm-3 control-label">Video (mp4)</label>
            <div class="col-sm-6">
             <input type="hidden" name="videoId" id="videoId" value="">
             <input type="hidden" name="videoUrl" id="videoUrl" value="">
             <img src="" style="visibility:hidden; height:100px;" id="videoVignette" value="">
             <button type="button" class="btn btn-default" id="upload_video">Open Media Library</button>
            </div>
         </div>
         <div class="form-group">
            <label for="cover" class="col-sm-3 control-label">Cover (img)</label>
            <div class="col-sm-6">
             <input type="hidden" name="coverId" id="coverId" value="">
             <input type="hidden" name="coverUrl" id="coverUrl" value="">
             <img src="" style="visibility:hidden; height:100px;" id="coverVignette" value="">
             <button type="button" class="btn btn-default" id="upload_cover">Open Media Library</button>
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
              <img src="{{$video->coverUrl}}" class="img-responsive">
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
  window.ml2 = cloudinary.createMediaLibrary(
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
       document.getElementById("coverId").value = result.public_id;
       document.getElementById("coverUrl").value = result.secure_url;
       var coverUrl = result.secure_url.substr(0, result.secure_url.lastIndexOf(".")) + ".jpg";
       document.getElementById("coverVignette").setAttribute('src',coverUrl);
       document.getElementById("coverVignette").style.visibility = 'visible';
       document.getElementById("coverVignette").style['padding-right'] = '20px';

     }
    },
    document.getElementById("upload_cover")
  );
</script>
<script type="text/javascript">
    $(function () {
        $('.date').datetimepicker();
    });

</script>
@endsection
