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

    /**
     * Create Template
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'data' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendValidationError($validator->errors());
        }

        try {
            $input = $request->all();
            $insert = [
                'name' => $input["name"],
                'data' => json_encode($input["data"])
            ];
            $template = StoryPageTemplate::create($insert);

            return $this->sendResponse($template);
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }

    /**
     * Update Template
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'name' => 'required|max:255',
            'data' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendValidationError($validator->errors());
        }

        try {
            $input = $request->all();
            $template = StoryPageTemplate::where('id', $input["id"])
                ->firstOrFail();

            $template->update([
                "name" => $input["name"],
                "data" => json_encode($input["data"]),
            ]);

            return $this->sendResponse($template);
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }

    /**
     * Delete Template
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendValidationError($validator->errors());
        }
        try {
            $input = $request->all();
            $template = StoryPageTemplate::where('id', $input["id"])
                ->firstOrFail();

            $result = $template->delete();
            return $this->sendResponse($result);
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }
}
