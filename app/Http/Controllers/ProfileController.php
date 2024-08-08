<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.profile.profile', [
            'user' => $request->user()
        ]);
    }

    public function viewEdit(Request $request)
    {
        return view('pages.profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        $request->user()->save();

        return Redirect::route('view-edit-profile')->with('status', 'profile-updated');
    }
}
