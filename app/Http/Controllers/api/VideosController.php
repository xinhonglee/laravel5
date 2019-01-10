<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Requests\Video\CreateRequest;
use App\Http\Requests\Video\UpdateRequest;
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

    public function create(CreateRequest $request)
    {
        $video = new Video();
        $video->title = $request->input("title");
        $video->description = $request->input("description");
        $video->video_id = $request->input("video_id");
        $video->video_url = $request->input("video_url");
        $video->cover_id = $request->input("cover_id");
        $video->cover_url = $request->input("cover_url");
        $video->date = new \DateTime($request->input("date"));
        $video->slug = str_slug($video->title, "-");

        $result = $video->save();

        return response(200, [
            'payload' => $result,
        ]);
    }

    public function update(UpdateRequest $request)
    {
        $video = Video::where('id', $request->input("id"))->firstOrFail();

        $result = $video->update([
            "title" => $request->input("title"),
            "description" => $request->input("description"),
            "video_id" => $request->input("video_id"),
            "video_url" => $request->input("video_url"),
            "cover_id" => $request->input("cover_id"),
            "cover_url" => $request->input("cover_url"),
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
