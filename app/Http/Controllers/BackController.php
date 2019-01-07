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
        return view('videos', compact('videos', 'timestamp', 'signature'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date',
            'videoId' => 'required',
            'coverId' => 'required'
        ]);

        $this->saveVideo($request);

        return redirect()->back()->with('status', 'Video Uploaded Successfully');

    }


    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date',
            'videoId' => 'required',
            'coverId' => 'required'
        ]);

        $video = Video::where('id', $request->input("id"))->firstOrFail();
        $video->update([
            "title" => $request->input("title"),
            "description" => $request->input("description"),
            "videoId" => $request->input("videoId"),
            "videoUrl" => $request->input("videoUrl"),
            "coverId" => $request->input("coverId"),
            "coverUrl" => $request->input("coverUrl"),
            "date" => new \DateTime($request->input("date")),
            "slug" => str_slug($video->title, "-")
        ]);
    }

    public function saveVideo(Request $request)
    {
        $video = new Video();
        $video->title = $request->input("title");
        $video->description = $request->input("description");
        $video->videoId = $request->input("videoId");
        $video->videoUrl = $request->input("videoUrl");
        $video->coverId = $request->input("coverId");
        $video->coverUrl = $request->input("coverUrl");
        $video->date = new \DateTime($request->input("date"));
        $video->slug = str_slug($video->title, "-");
        $video->save();
    }

    public function delete(Request $request, Video $video)
    {
        $video->delete();
        return redirect('/backoffice')->with('status', 'Video Deleted Successfully');
    }

    public function genCloudinaryAuthSignature()
    {
        $timestamp = time();
        $string = "cloud_name=" . env('CLOUDINARY_CLOUD_NAME') . "&timestamp=" . time() . "&username=" . env('CLOUDINARY_USER_NAME') . env('CLOUDINARY_API_SECRET');
        return [$timestamp, hash('sha256', $string)];
    }
}
