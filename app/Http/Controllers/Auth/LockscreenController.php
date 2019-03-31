<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LockscreenController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function lockScreen()
    {
        return view('auth.lockscreen');
    }

    public function openScreen(Request $request)
    {
        request()->validate([
            'username'    => 'required'
        ]);

        if ($request->input('username') == Auth::user()->username) {
            return redirect()->route('profile.index')
            ->with('success', 'Welcome back');
        } else {
            return redirect()->route('lock')
            ->with('error', 'Wrong Input. Please Input Another Username');
        }
    }
}
