<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    /**
     * @param UpdateProfileRequest $request
     * @return \Illuminate\Http\RedirectResponse|null
     * Update User's Profile
     */
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

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * Update Password
     */
    public function updatePassword(UpdatePasswordRequest $request)
    {
        // check if the hash passwords are match
        if (Hash::check($request->current_password, Auth::user()->password)) {
            // hashing the new password
            $hashed_password = Hash::make($request->password_confirmation);
            // update password
            User::where('id', Auth::id())->update([
                'password' => $hashed_password,
            ]);
            // return redirect to back with success message
            return back()->with('success', 'Your Password has been updated!');
        } else {
            return back()->withErrors(['current_password' => 'Your current password is not valid. Please enter your valid password.']);
        }
    }
}
