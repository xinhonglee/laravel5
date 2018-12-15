<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class FrontController extends Controller

{

    public function index(Request $request, $page = 0)
    {
        $page = (int) $page;
        $totalVideoCount = Video::count();
        $wallSize = 17;
        if ($page > 0) {
            $skip = $wallSize+($page-1)*$wallSize;
            $videos = Video::orderBy('date', 'desc')->skip($skip)->take($wallSize)->get();
            $hasMorePages = ($totalVideoCount > ($skip+$wallSize));
        } else {
            $videos = Video::orderBy('date', 'desc')->limit($wallSize)->get();
            $hasMorePages = ($totalVideoCount > $wallSize);
        }
        $css= "index";
        return view('index', compact('videos', 'css', 'page', 'hasMorePages'));
    }

    public function getVideoWall(Request $request)
    {
      $db_videos = Video::orderBy('date', 'desc')->limit(20)->get();
      $videos = $this->completeVideoListByMockup($db_videos, 20);
      $videos = json_encode($videos, JSON_FORCE_OBJECT);
      $result["items"] = [json_decode($videos)];
      $result["hasMorePages"] = true;
      return response($result)->header('AMP-Access-Control-Allow-Source-Origin', $request->getSchemeAndHttpHost());
    }

    public function player(Request $request, $slug) {
      $video = Video::where('slug', $slug)->first();
      if (is_null($video)) {
        $video = $this->getVideoMockup();
      }
      $db_videos = Video::where('slug', '<>', $slug)->orderBy('date', 'desc')->limit(6)->get();
      $suggestedVideos = $this->completeVideoListByMockup($db_videos, 6);
      return view('player', compact('video', 'suggestedVideos'));
    }

}
