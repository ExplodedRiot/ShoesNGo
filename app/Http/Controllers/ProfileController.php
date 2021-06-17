<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
	public function __construnct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$user = User::where('id', Auth::user()->id)->first();

		return view('profile.index', compact('user'));
	}
}
