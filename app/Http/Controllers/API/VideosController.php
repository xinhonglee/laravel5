<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController;
use App\Models\Video;
use Validator;

class VideosController extends BaseController
{
    /**
     * Videos List
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function list()
    {
        try {
            $videos = Video::all();
            list($timestamp, $signature) = $this->genCloudinaryAuthSignature();
            $result = [
                'videos' => $videos,
                'timestamp' => $timestamp,
                'signature' => $signature];

            return $this->sendResponse(['payload' => $result]);
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }

    /**
     * Create Video
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
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
            return $this->sendValidationError($validator->errors());
        }

        try {
            $input = $request->all();
            $video = Video::create([
                'title' => $input["title"],
                'description' => $input["description"],
                'user_id' => Auth::user()->id,
                'video_id' => $input["video_id"],
                'video_url' => $input["video_url"],
                'cover_id' => $input["cover_id"],
                'cover_url ' => $input["cover_url"],
                'date' => new \DateTime($input["date"]),
                'slug' => str_slug($input["title"], "-"),
            ]);

            return $this->sendResponse(['payload' => $video]);
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }

    }

    /**
     * Update Video
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
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
            return $this->sendValidationError($validator->errors());
        }

        try {
            $input = $request->all();
            $video = Video::where('id', $input["id"])
                ->where('user_id', Auth::user()->id)
                ->firstOrFail();

            $result = $video->update([
                "title" => $input["title"],
                "description" => $input["description"],
                "video_id" => $input["video_id"],
                "video_url" => $input["video_url"],
                "cover_id" => $input["cover_id"],
                "cover_url" => $input["cover_url"],
                "date" => new \DateTime($input["date"]),
                "slug" => str_slug($video->title, "-")
            ]);

            return $this->sendResponse(['payload' => $result]);
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }

    /**
     * Delete Video
     *
     * @param Request $request
     * @param Video $video
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request, Video $video)
    {
        try {
            $result = $video->delete();
            return $this->sendResponse(['payload' => $result]);
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }

    /**
     * Create Video
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function genCloudinaryAuthSignature()
    {
        $timestamp = time();
        $string = "cloud_name=" . env('CLOUDINARY_CLOUD_NAME') . "&timestamp=" . time() . "&username=" . env('CLOUDINARY_USER_NAME') . env('CLOUDINARY_API_SECRET');
        return [$timestamp, hash('sha256', $string)];
    }
}
