<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function statistic()
    {
        return view('statistic');
    }

    public function generateIframe(Request $request)
    {
        dd($request->all());
        return view('iframe');
    }
}
