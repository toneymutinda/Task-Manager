<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Image;
use Auth;
use Session;

class UserController extends Controller
{
    public function profile()
    {
       return view('profile');
    }

    public function upload(Request $request)
    {
    	if($request->hasFile('avatar'))
        {
        	$image = $request->file('avatar');
        	$filename = time() . '.' . $image->getClientOriginalExtension();
        	Image::make($image)->resize(100, 100)->save(public_path('/images/avatars/' . $filename));

        	$user = Auth::user();
        	$user->avatar = $filename;
        	$user->save();
        }
        Session::flash('image-upload', 'Congratulations, your profile is now complete!');
        return redirect()->back();
    }
}
