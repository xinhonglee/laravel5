<?php

namespace App\Http\Controllers\API\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use App\Models\User;
use App\Models\Role;
use Validator;

class AuthController extends BaseController
{
    public $appKey;

    /**
     * User Controller Constructor
     */
    public function __construct()
    {

    }

    /**
     * User Login
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendValidationError($validator->errors());
        }

        try {
            if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
                $user = Auth::user();
                $result['token'] = $user->createToken($this->appKey)->accessToken;
                $result['admin'] = $user->hasRole('admin');

                return $this->sendResponse(['payload' => $result]);
            } else {
                return $this->sendUnauthorizedError();
            }
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }

    /**
     * User Register
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return $this->sendValidationError($validator->errors());
        }

        try {
            $input = $request->all();
            $input['password'] = bcrypt($input['password']);
            $user = User::create($input);

            $role = Role::where('name', '=', 'author')->get()->first();
            $user->attachRole($role);

            $result['token'] = $user->createToken($this->appKey)->accessToken;
            $result['name'] = $user->name;

            return $this->sendResponse(['payload' => $result]);
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }

    /**
     * User Details
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function details()
    {
        try {
            $result = Auth::user();
            $result['admin'] = $result->hasRole('admin');

            return $this->sendResponse(['payload' => $result]);
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }

    /**
     * User Logout
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        try {
            $accessToken = Auth::user()->token();
            DB::table('oauth_refresh_tokens')
                ->where('access_token_id', $accessToken->id)
                ->update([
                    'revoked' => true
                ]);

            $accessToken->revoke();

            return $this->sendResponse([], "logout success");
        } catch (\Exception $exception) {
            return $this->sendInternalError($exception->getMessage());
        }
    }
}
