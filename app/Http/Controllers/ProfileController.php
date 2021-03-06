<?php

namespace App\Http\Controllers;
use Auth;
use Alert;
use Hash;
use Image;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();

        return view('profile.index', compact('user'));
    }

    public function update(Request $request)
    {
         $this->validate($request, [
            'password'  => 'confirmed',
        ]);

        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        if(!empty($request->password))
        {
            $user->password = Hash::make($request->password);
        }

        $user->update();

        Alert::success('User updated Successful ', 'Success');
        return redirect('profile');
    }

    public function update_avatar(Request $request){
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/images/avatar/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        $user->update();
        Alert::success('User updated Successful ', 'Success');
        return view('profile', array('user' => Auth::user() ));
    }

}

