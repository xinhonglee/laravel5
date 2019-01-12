<?php

namespace App\Http\Controllers\API\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;

class RolesController extends Controller
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
            $roles = Role::all();

            return response()->json(
                ['payload' =>
                    [
                        'roles' => $roles,
                    ]
                ],
                $this->successCode
            );
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], $this->errorCode);
        }
    }
}
