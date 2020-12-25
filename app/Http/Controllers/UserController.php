<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Returns user profile view
     */
    public function showProfile()
    {
        return view('settings.profile');
    }

    public function updateProfile(UpdateProfileRequest $request)
    {
        // upload image
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                // getting image details
                $image = $request->file('image');
                // getting original extension in image
                $extension = $image->getClientOriginalExtension();
                // create a filename for image
                $filename = date('Y_m_d_h_i_s') . "." . $extension;
                Storage::disk('public')->put('img/users/'.$filename, file_get_contents($image));
            }
            // remove current image if exists
            if (Storage::disk('public')->exists('img/users/'.Auth::user()->image)) {
                try {
                    Storage::disk('public')->delete('img/users/'.Auth::user()->image);
                } catch (\Exception $exception) {
                    return null;
                }
            }
        }

        // update users data
        User::where('id', Auth::id())->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'image' => isset($filename) ? $filename : Auth::user()->image,
            'bio' => $request->input('bio'),
        ]);

        return back()->with('success', 'User Profile Updated Successfully!');
    }
}
