<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\VideoCategory;

class VideoCategoriesController extends Controller
{

    public $successCode = 200;
    public $errorCode = 500;
    public $validationCode = 401;

    /**
     * Role List
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {
        try {
            $categories = VideoCategory::all();

            return response()->json(
                ['payload' =>
                    [
                        'categories' => $categories,
                    ]
                ],
                $this->successCode
            );
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], $this->errorCode);
        }
    }
}
