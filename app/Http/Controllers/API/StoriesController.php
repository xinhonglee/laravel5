<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Story;
use Validator;

class StoriesController extends BaseController
{

    /**
     * Stories List
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function list()
    {
        try {
            $stories = Story::with(['user:id,name'])->get();
            return $this->sendResponse($stories);
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }

    /**
     * Get Story by Id
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getStoryById(Request $request)
    {
        try {
            $story_id = $request->route('id');

            $result = Story::find($story_id)
                ->load(['user:id,name']);

            return $this->sendResponse($result);
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }

    /**
     * Create Story
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

        $user = Auth::user();
        try {
            $input = $request->all();
            $insert = [
                'name' => $input["name"],
                'user_id' => $user->id,
                'start_publication_date' => new \DateTime(),
                'end_publication_date' => new \DateTime(),
                'data' => json_encode($input["data"])
            ];
            $story = Story::create($insert);

            return $this->sendResponse($story);
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }

    /**
     * Update Story
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
            $story = Story::where('id', $input["id"])
                ->where('user_id', Auth::user()->id)
                ->firstOrFail();

            $story->update([
                "name" => $input["name"],
                "data" => json_encode($input["data"]),
            ]);

            return $this->sendResponse($story);
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }

    /**
     * Delete Story
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
            $story = Story::where('id', $input["id"])
                ->where('user_id', Auth::user()->id)
                ->firstOrFail();

            $result = $story->delete();
            return $this->sendResponse($result);
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }

}
