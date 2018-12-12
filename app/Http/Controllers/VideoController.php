<?php

namespace App\Http\Controllers;

use JD\Cloudder\Facades\Cloudder;
use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function list()
    {
        $videos = Video::all();
        return view('videos', compact('videos'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
         'title' => 'required|max:255',
         'description' => 'required',
         'date' => 'required|date',
         'cover' => 'required|file|image',
         'video' => 'required|file|mimes:mp4'
        ]);

        $coverId = $this->uploadImage($request->file('cover')->getRealPath());
        $videoId = $this->uploadVideo($request->file('video')->getRealPath());

        $this->saveVideo($request, $coverId, $videoId);

        return redirect()->back()->with('status', 'Video Uploaded Successfully');

    }

    public function uploadImage($path) {
      Cloudder::upload($path, null);
      return Cloudder::getPublicId();
    }

    public function uploadVideo($path) {
      Cloudder::uploadVideo($path, null);
      return Cloudder::getPublicId();
    }

    public function getVideoUrlById($id)
    {
        return "https://res.cloudinary.com/".env('CLOUDINARY_CLOUD_NAME')."/video/upload/".$id;
    }

    public function getImageUrlById($id)
    {
        return "https://res.cloudinary.com/".env('CLOUDINARY_CLOUD_NAME')."/image/upload/".$id;
    }

    public function saveVideo(Request $request, $coverId, $videoId)
    {
        $video = new Video();
        $video->title = $request->input("title");
        $video->description = $request->input("description");
        $video->videoUrl = $this->getVideoUrlById($videoId);
        $video->coverUrl = $this->getImageUrlById($coverId);
        $video->date = new \DateTime($request->input("date"));
        $video->videoId = $videoId;
        $video->coverId = $coverId;
        $video->slug = str_slug($video->title, "-");
        $video->save();
    }

    public function delete(Request $request, Video $video)
    {
        $video->delete();
        return redirect('/backoffice')->with('status', 'Video Deleted Successfully');
    }
}
