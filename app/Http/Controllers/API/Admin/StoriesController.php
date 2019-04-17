<?php

namespace App\Http\Controllers\API\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use App\Models\Style;
use Validator;

class StoriesController extends BaseController
{

    /**
     * Create Style
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createStyle(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'data' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendValidationError($validator->errors());
        }

        try {
            $input = $request->all();
            $style = Style::create(['data' => $input['data']]);

            return $this->sendResponse($style);
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }

    /**
     * Update Style
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateStyle(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'data' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendValidationError($validator->errors());
        }

        try {
            $input = $request->all();
            $style = Style::where('id', $input['id']);
            $result = $style->update([
                'data' => $input['data'],
            ]);

            return $this->sendResponse($result);
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }


}
