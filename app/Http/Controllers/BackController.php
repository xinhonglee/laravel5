<?php

namespace App\Http\Controllers;

class BackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('backoffice');
    }
}
