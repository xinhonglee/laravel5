<?php

namespace App\Http\Controllers;

class BackController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('backoffice');
    }
}
