<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class BackController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        $videos = Video::all();
        list($timestamp, $signature) = $this->genCloudinaryAuthSignature();
        return view('videos', compact('videos', 'timestamp','signature'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
         'title' => 'required|max:255',
         'description' => 'required',
         'date' => 'required|date',
         'videoId' => 'required'
        ]);

        $this->saveVideo($request);

        return redirect()->back()->with('status', 'Video Uploaded Successfully');

    }

    public function saveVideo(Request $request)
    {
        $video = new Video();
        $video->title = $request->input("title");
        $video->description = $request->input("description");
        $video->videoId =  $request->input("videoId");
        $video->videoUrl =  $request->input("videoUrl");
        $video->coverId = $request->input("coverId");
        if (!is_null($request->input("coverId"))) {
          $coverUrl = "https://res.cloudinary.com/".env('CLOUDINARY_CLOUD_NAME')."/image/upload/".$request->input("videoId");
        } else {
          $coverUrl = "https://res.cloudinary.com/".env('CLOUDINARY_CLOUD_NAME')."/video/upload/".$request->input("videoId").".jpg";
        }
        $video->coverUrl = $coverUrl;
        $video->date = new \DateTime($request->input("date"));
        $video->slug = str_slug($video->title, "-");
        $video->save();
    }

    public function delete(Request $request, Video $video)
    {
        $video->delete();
        return redirect('/backoffice')->with('status', 'Video Deleted Successfully');
    }

    public function genCloudinaryAuthSignature() {
      $timestamp = time();
      $string = "cloud_name=".env('CLOUDINARY_CLOUD_NAME')."&timestamp=".time()."&username=".env('CLOUDINARY_USER_NAME').env('CLOUDINARY_API_SECRET');
      return [$timestamp, hash('sha256', $string)];
    }
}
