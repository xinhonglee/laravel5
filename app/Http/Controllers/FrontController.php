<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\VideoCategory;

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

    public function getVideos($slug = null, $page = 0) {
        $page = (int) $page;
        $skip = ($page > 0) ? $this->wallSize+($page-1)*$this->wallSize : 0;
        if (is_null($slug)) {
            $videos = Video::orderBy('date', 'desc')->skip($skip)->limit($this->wallSize)->get();
            $totalVideoCount = Video::count();
        } else {
            // get category name and slug
            $category = VideoCategory::where('slug', $slug)->first();
            // get videos within category
            $videos = Video::orderBy('date', 'desc')
              ->where('video_category_id','=',$category->id)
              ->skip($skip)
              ->limit($this->wallSize)
              ->get();
            $totalVideoCount = Video::orderBy('date', 'desc')
              ->where('video_category_id','=',$category->id)
              ->count();
        }
        $hasMorePages = ($totalVideoCount > ($skip+$this->wallSize));
        $css= "index";
        return view('videos', compact('videos', 'css', 'page', 'hasMorePages'));
    }

    public function getByCategory($slug = null, $page = 0) {
        // get category name and slug
        $category = VideoCategory::where('slug', $slug)->first();
        // handle pagination
        $page = (int) $page;
        $skip = ($page > 0) ? $this->wallSize+($page-1)*$this->wallSize : 0;
        // all videos
        if (is_null($category)) {
            $videos = Video::orderBy('date', 'desc')->skip($skip)->limit($this->wallSize)->get();
            $totalVideoCount = Video::count();
        // all videos within category
        } else {
            $videos = Video::orderBy('date', 'desc')
              ->where('video_category_id','=',$category->id)
              ->skip($skip)
              ->limit($this->wallSize)
              ->get();
            $totalVideoCount = Video::orderBy('date', 'desc')
              ->where('video_category_id','=',$category->id)
              ->count();
        }
        $hasMorePages = ($totalVideoCount > ($skip+$this->wallSize));
        $css= "index";
        return view('category', compact('videos', 'category', 'css', 'page', 'hasMorePages'));
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
      $suggestedVideos = Video::where('slug', '<>', $slug)->orderBy('date', 'desc')->limit(6)->get();
      return view('player', compact('video', 'suggestedVideos'));
    }

}
