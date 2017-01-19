<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use AUth;
use Mail;

class UserController extends Controller
{
	public function __construct() {
		$this->middleware('auth', ['only' => ['confirmView', 'sendConfirmEmail', 'confirmEmail']]);
	}

	public function confirmView() {
        $user = Auth::user();
        if (!$user->confirmed()) {
        	return view('auth.confirm.confirm');
	    }
        else {
            return redirect()->route('home');
        }
    }

    public function sendConfirmEmail($id) {
    	$user = User::find(decrypt($id));
    	// dd($user);

        if (!$user->confirmed()) {
        	Mail::send('auth.confirm.mail', ['user' => $user], function ($m) use ($user) {
            $m->from('simpleblog@app.com', 'SimpleBlog');

            $m->to($user->email, $user->name)->subject('Confirm Email Address');
            });

            $request->session()->flash('alert-success', 'Link successfully sent!');
            return back();
        }
        else {
            return redirect()->route('home');
        }
    }

    public function confirmEmail($id) {
    	$user = User::find(decrypt($id));

    	if (!$user->confirmed()) {
	    	$user->confirmed = true;
	    	$user->update();
	    }
	    else {
	    	return redirect()->route('home');
	    }

    	return view('auth.confirm.confirmed');
    }

    public function profile($username) {
        $user = User::where('username',$username)->first();

        return view('auth.user.profile')->with('user', $user);
    }
}
