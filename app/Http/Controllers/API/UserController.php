<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Validator;

class UserController extends Controller
{
    public $successCode = 200;
    public $errorCode = 500;
    public $validationCode = 401;
    public $unAuthorizedCode = 403;
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
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], $this->validationCode);
        }

        try {
            if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
                $user = Auth::user();
                $success['token'] = $user->createToken($this->appKey)->accessToken;

                return response()->json(['success' => $success], $this->successCode);
            } else {
                return response()->json(['error' => 'Unauthorised'], $this->unAuthorizedCode);
            }
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], $this->errorCode);
        }
    }

    /**
     * User Register
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
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
            return response()->json(['error' => $validator->errors()], $this->validationCode);
        }

        try {
            $input = $request->all();
            $input['password'] = bcrypt($input['password']);
            $user = User::create($input);

            $role = Role::where('name', '=', 'author')->get()->first();
            $user->attachRole($role);

            $success['token'] = $user->createToken($this->appKey)->accessToken;
            $success['name'] = $user->name;

            return response()->json(['success' => $success], $this->successCode);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], $this->errorCode);
        }
    }

    /**
     * User Details
     *
     * @return \Illuminate\Http\Response
     */
    public function details()
    {
        try {
            $user = Auth::user();

            return response()->json(['success' => $user], $this->successCode);
        } catch (\Exception $exception) {

            return response()->json(['error' => $exception->getMessage()], $this->errorCode);
        }
    }
}
