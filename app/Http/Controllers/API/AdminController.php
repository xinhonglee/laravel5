<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Validator;

class AdminController extends Controller
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
    public function listUsers(Request $request)
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
    public function updateUser(Request $request)
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
    public function deleteUser(Request $request)
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

    /**
     * Role List
     *
     * @return \Illuminate\Http\Response
     */
    public function listRoles(Request $request)
    {
        try {
            $roles = Role::all();

            return response()->json(
                ['payload' => [
                    'roles' => $roles,
                ]], $this->successCode);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], $this->errorCode);
        }
    }
}
