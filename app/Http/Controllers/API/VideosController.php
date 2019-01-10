<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Video;
use Validator;

class VideosController extends Controller
{
    public $successCode = 200;
    public $errorCode = 500;
    public $validationCode = 401;

    public function list()
    {
        try {
            $videos = Video::all();
            list($timestamp, $signature) = $this->genCloudinaryAuthSignature();

            return response()->json(
                ['payload' => [
                    'videos' => $videos,
                    'timestamp' => $timestamp,
                    'signature' => $signature
                ]], $this->successCode);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], $this->errorCode);
        }
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date',
            'video_id' => 'required',
            'video_url' => 'required',
            'cover_id' => 'required',
            'cover_url' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        try {
            $video = new Video();
            $video->title = $request->input("title");
            $video->description = $request->input("description");
            $video->user_id = Auth::user()->id;
            $video->video_id = $request->input("video_id");
            $video->video_url = $request->input("video_url");
            $video->cover_id = $request->input("cover_id");
            $video->cover_url = $request->input("cover_url");
            $video->date = new \DateTime($request->input("date"));
            $video->slug = str_slug($video->title, "-");

            $result = $video->save();

            return response()->json(['payload' => $result], $this->successCode);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], $this->errorCode);
        }

    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date',
            'video_id' => 'required',
            'video_url' => 'required',
            'cover_id' => 'required',
            'cover_url' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        try {
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

            return response()->json(['payload' => $result], $this->successCode);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], $this->errorCode);
        }
    }

    public function delete(Request $request, Video $video)
    {
        try {
            $result = $video->delete();
            return response()->json(['payload' => $result], $this->successCode);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], $this->errorCode);
        }
    }

    public function genCloudinaryAuthSignature()
    {
        $timestamp = time();
        $string = "cloud_name=" . env('CLOUDINARY_CLOUD_NAME') . "&timestamp=" . time() . "&username=" . env('CLOUDINARY_USER_NAME') . env('CLOUDINARY_API_SECRET');
        return [$timestamp, hash('sha256', $string)];
    }
}
