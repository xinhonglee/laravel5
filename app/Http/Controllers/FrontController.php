<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class FrontController extends Controller

{

    public function index()
    {
        $db_videos = Video::orderBy('date', 'desc')->limit(20)->get();
        $videos = $this->completeVideoListByMockup($db_videos, 20);
        return view('index', compact('videos'));
    }

    public function player(Request $request, $slug) {
      $video = Video::where('slug', $slug)->first();
      if (is_null($video)) {
        $video = $this->getVideoMockup();
      }
      $db_videos = Video::where('slug', '<>', $slug)->orderBy('date', 'desc')->limit(6)->get();
      $suggestedVideos = $this->completeVideoListByMockup($db_videos, 6);
      return view('player', compact('video'), compact('suggestedVideos'));
    }

    public function completeVideoListByMockup($collection, $number) {
      $count = $collection->count();
      if ($count >= $number) return $collection;
      $c = collect();
      for ($i=0; $i<($number-$count); $i++) {
        $c->push($this->getVideoMockup());
      }
      return $collection->concat($c);
    }

    public function getVideoMockup() {
      $video = new Video();
      $video->title = "Lorem Ipsum";
      $video->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
      $video->videoUrl = "/video/big_buck_bunny.mp4";
      $video->coverUrl = "/assets/balloon.jpg";
      $video->date = "18:38";
      $video->videoId = "";
      $video->coverId = "";
      $video->slug = str_slug($video->title, "-");
      return $video;
    }

}
