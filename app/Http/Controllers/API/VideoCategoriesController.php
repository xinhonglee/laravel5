<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use App\Models\VideoCategory;

class VideoCategoriesController extends BaseController
{

    /**
     * Role List
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function list(Request $request)
    {
        try {
            $categories = VideoCategory::all();

            return $this->sendResponse(['payload' => $categories]);
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }
}
