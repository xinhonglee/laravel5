<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;

class VideosController extends Controller
{
    public function list()
    {
        $videos = Video::all();
        list($timestamp, $signature) = $this->genCloudinaryAuthSignature();

        return response(200, [
            'payload' => [
                'videos' => $videos,
                'timestamp' => $timestamp,
                'signature' => $signature
            ],
        ]);
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

        $video = new Video();
        $video->title = $request->input("title");
        $video->description = $request->input("description");
        $video->videoId = $request->input("videoId");
        $video->videoUrl = $request->input("videoUrl");
        $video->coverId = $request->input("coverId");
        $video->coverUrl = $request->input("coverUrl");
        $video->date = new \DateTime($request->input("date"));
        $video->slug = str_slug($video->title, "-");

        $result = $video->save();

        return response(200, [
            'payload' => $result,
        ]);
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

        $result = $video->update([
            "title" => $request->input("title"),
            "description" => $request->input("description"),
            "videoId" => $request->input("videoId"),
            "videoUrl" => $request->input("videoUrl"),
            "coverId" => $request->input("coverId"),
            "coverUrl" => $request->input("coverUrl"),
            "date" => new \DateTime($request->input("date")),
            "slug" => str_slug($video->title, "-")
        ]);

        return response(200, [
            'payload' => $result,
        ]);
    }

    public function delete(Request $request, Video $video)
    {
        $result = $video->delete();

        return response(200, [
            'payload' => $result,
        ]);
    }

    public function genCloudinaryAuthSignature()
    {
        $timestamp = time();
        $string = "cloud_name=" . env('CLOUDINARY_CLOUD_NAME') . "&timestamp=" . time() . "&username=" . env('CLOUDINARY_USER_NAME') . env('CLOUDINARY_API_SECRET');
        return [$timestamp, hash('sha256', $string)];
    }
}
