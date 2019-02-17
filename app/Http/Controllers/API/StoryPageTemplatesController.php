<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use App\Models\StoryPageTemplate;
use Validator;

class StoryPageTemplatesController extends BaseController
{
    /**
     * Template List
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function list()
    {
        try {
            $templates = StoryPageTemplate::all();
            return $this->sendResponse($templates);
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }

    /**
     * Get Template by Id
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getStoryPageTemplateById(Request $request)
    {
        try {
            $template_id = $request->route('id');

            $result = StoryPageTemplate::find($template_id);

            return $this->sendResponse($result);
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }
}
