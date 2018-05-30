<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserProfile;
class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        return view('platform.pages.userprofile.edit');
    }

    public function password(Request $request)
    {
        $data = $request->all();
        $validatedData = $request->validate([
            'current_password' => 'required|string|min:6',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::find(\Auth::user()->id);

        $currentStoredPassword = $user->password;
        $currentPostPassword   = $data['current_password'];

        if (\Hash::check($currentPostPassword, $currentStoredPassword))
        {
            $user->password = \Hash::make($data['password']);
            $user->save();

            return redirect()->route('platform.edit.profile')->with('success_password', 'Your password updated successfully.');
        }else{
            return back()->with('incorrect_password', 'Your current password is incorrect.');
        }

    }

    public function information(Request $request){
        $data = $request->all();
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'website'   => 'required'
        ]);

        $profile = \Auth::user()->profile;
        $profile->first_name = $data['first_name'];
        $profile->last_name = $data['last_name'];
        $profile->website = $data['website'];
        $profile->save();
        return redirect()->route('platform.edit.profile')->with('success_information', 'Your information updated successfully.');
    }

    public function avatar(Request $request){
        $filename = $request->file('file')->getClientOriginalName();
        $fileSize = $request->file('file')->getSize();
        $relativePath = '/uploads/avatars';
        $directory    = public_path() . $relativePath;
        $uploadFileName = time().'.'.$request->file('file')->getClientOriginalExtension();
        $request->file('file')->move($directory, $uploadFileName);
        $profile = \Auth::user()->profile;
        $profile->avatar = $relativePath.'/'.$uploadFileName;
        $profile->save();

        return redirect()->route('platform.edit.profile');
    }
}
