<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function __construct()
    {
        $this->middleware('test');
    }
    public function index(Request $request)
    {

        dd($request);
        return "Estoy en index de test";
    }
}
