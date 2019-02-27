<?php

namespace App\Http\Controllers\API\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use App\Models\StoryPageTemplate;
use Validator;

class StoryPageTemplatesController extends BaseController
{
    /**
     * Create Template
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'image_url' => 'required',
            'data' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendValidationError($validator->errors());
        }

        try {
            $input = $request->all();
            $insert = [
                'title' => $input["title"],
                'image_url' => $input["image_url"],
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
            'title' => 'required|max:255',
            'image_url' => 'required',
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
                "title" => $input["title"],
                'image_url' => $input["image_url"],
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
