@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px;">
  @include('common.errors')
  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">New Video</h3>
  </div>
  <div class="panel-body">
     <form action="{{ url('backoffice/video') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
         {{ csrf_field() }}
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
            <label for="cover" class="col-sm-3 control-label">Cover (png, jpg)</label>
            <div class="col-sm-6">
             <input type="file" name="cover" class="form-control" id="cover" value="">
            </div>
         </div>
         <div class="form-group">
            <label for="video" class="col-sm-3 control-label">Video (mp4)</label>
            <div class="col-sm-6">
             <input type="file" name="video" class="form-control" id="video" value="">
            </div>
         </div>
         <div class="form-group">
             <div class="col-sm-offset-3 col-sm-6">
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
                data-cld-poster-options= '{ "public_id": "{{$video->coverId}}" }'
                controls
                autoplay
                class="cld-video-player">
              </video>
              <form action="{{ url('/backoffice/video/'.$video->id) }}" method="POST">
            {{ csrf_field() }}
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
var cld = cloudinary.Cloudinary.new({ cloud_name: "dfanchon", secure: true});
var players = cld.videoPlayers('.cld-video-player');
</script>
<script type="text/javascript">
    $(function () {
        $('.date').datetimepicker();
    });
</script>
@endsection
