<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

use Validator;

class UsersController extends Controller
{

    public $successCode = 200;
    public $errorCode = 500;
    public $validationCode = 401;

    /**
     * Admin Controller Constructor
     */
    public function __construct()
    {

    }

    /**
     * User List
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {
        try {
            $users = User::with('role')->get();

            return response()->json(['payload' => $users], $this->successCode);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], $this->errorCode);
        }
    }

    /**
     * Update User
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'role_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], $this->validationCode);
        }

        try {
            $input = $request->all();

            $user = User::where('id', $input["user_id"])->firstOrFail();
            $result = $user->update([
                "name" => $input["name"],
                "email" => $input["email"],
            ]);

            $user->roles()->sync($input['role_id']);

            return response()->json(['payload' => $result], $this->successCode);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], $this->errorCode);
        }
    }

    /**
     * Delete User
     *
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], $this->validationCode);
        }

        try {
            $user = User::where('id', $request->input("user_id"))->firstOrFail();
            $result = $user->delete();
            return response()->json(['payload' => $result], $this->successCode);

        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], $this->errorCode);
        }
    }


}
