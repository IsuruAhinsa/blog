<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Returns user profile view
     */
    public function showProfile()
    {
        return view('settings.profile');
    }

    public function updateProfile(Request $request)
    {
        dd($request->all());
    }
}
