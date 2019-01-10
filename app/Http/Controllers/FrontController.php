<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class FrontController extends Controller

{
    var $wallSize = 17;

    public function index(Request $request, $page = 0)
    {
        $page = (int) $page;
        $totalVideoCount = Video::count();
        if ($page > 0) {
            $skip = $this->wallSize+($page-1)*$this->wallSize;
            $videos = Video::orderBy('date', 'desc')->skip($skip)->take($this->wallSize)->get();
            $hasMorePages = ($totalVideoCount > ($skip+$this->wallSize));
        } else {
            $videos = Video::orderBy('date', 'desc')->limit($this->wallSize)->get();
            $hasMorePages = ($totalVideoCount > $this->wallSize);
        }
        $css= "index";
        return view('index', compact('videos', 'css', 'page', 'hasMorePages'));
    }

    public function getVideoWall(Request $request)
    {
      $videos = Video::orderBy('date', 'desc')->limit($this->wallSize)->get();
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
      $suggestedVideos = Video::where('slug', '<>', $slug)->orderBy('date', 'desc')->limit(6)->get();
      return view('player', compact('video', 'suggestedVideos'));
    }

}
