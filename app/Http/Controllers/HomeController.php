<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function activityView(Request $request)
    {
        return view('pages.home.activity');
    }
}
