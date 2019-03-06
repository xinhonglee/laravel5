<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\VideoCategory;
use App\Models\Story;
use Illuminate\Support\Facades\Redis;

class FrontController extends Controller
{
    var $wallSize = 19;
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
    public function getVideosPerPage($page) {
        return $this->getVideos(null, $page, "videos");
    }
    public function getVideosPerCategory($category) {
        return $this->getVideos($category, 0, "videos");
    }
    public function getVideosPerCategoryAndPage($category, $page) {
        return $this->getVideos($category, $page, "videos");
    }

    public function getCategory($category) {
        return $this->getVideos($category, 0, "category");
    }

    public function getVideos($categorySlug = null, $page = 0, $template = "videos") {
		if ($template == "videos") {
			$this->wallSize = 14; // no carousel on video template
		}
        $skip = ($page > 0) ? $this->wallSize+($page-1)*$this->wallSize : 0;
        if (is_null($categorySlug)) {
            $videos = Video::orderBy('date', 'desc')->skip($skip)->limit($this->wallSize)->get();
            $totalVideoCount = Video::count();
        } else {
            // get category name and slug
            $category = VideoCategory::where('slug', $categorySlug)->first();
            if ($category) {
              // get videos within category
              $videos = Video::orderBy('date', 'desc')
                ->where('video_category_id','=',$category->id)
                ->skip($skip)
                ->limit($this->wallSize)
                ->get();
              $totalVideoCount = Video::orderBy('date', 'desc')
                ->where('video_category_id','=',$category->id)
                ->count();
            } else {
              abort(404);
            }
        }
        $hasMorePages = ($totalVideoCount > ($skip+$this->wallSize));
		$nbPages = ceil($totalVideoCount / $this->wallSize);
        $css= "index";
        if (isset($category)) {
            return view($template, compact('videos', 'category', 'css', 'page', 'hasMorePages', 'nbPages'));
        } else {
            return view($template, compact('videos', 'css', 'page', 'hasMorePages', 'nbPages'));
        }
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
    public function getStoryBySlug(Request $request, $slug) {
      $dbStory = Story::where('slug', $slug)->first();
      if (is_null($dbStory)) {
        abort(404);
      }
      $story = [
         "title" => $dbStory["title"],
         "slug" => $dbStory["slug"]
      ];
      $story = array_merge($story, json_decode(json_encode($dbStory["data"]), true));
      return view('story', compact('story'));
    }
    public function getStoryById(Request $request, $id) {
      try {

          $dbStory = json_decode(Redis::get('story:id:' . $id), true);
          if (is_null($dbStory)) {
            abort(404);
          }
          $story = [
             "title" => $dbStory["title"],
             "slug" => $dbStory["slug"]
          ];
          $story = array_merge($story, json_decode(json_encode($dbStory["data"]), true));
          return view('story', compact('story'));
      } catch (\Exception $exception) {
          abort(404);
      }
    }
    public function getStoryPage(Request $request, $story_id, $page_id) {
      try {
          $dbStory = json_decode(Redis::get('story:id:' . $story_id), true);
          if (is_null($dbStory)) {
            abort(404);
          }
          $story = [
             "title" => $dbStory["title"],
             "slug" => $dbStory["slug"]
          ];
          $story = array_merge($story, json_decode(json_encode($dbStory["data"]), true));
          return view('story', compact('story', 'page_id'));
      } catch (\Exception $exception) {
          //abort(404);
          var_dump($exception);
          exit;
      }
    }
}
