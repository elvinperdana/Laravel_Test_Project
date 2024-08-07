<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.profile.profile');
    }

    public function viewEdit(Request $request)
    {
        return view('pages.profile.edit');
    }
}
