<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
    	$user = User::where('clave', auth()->user()->getKey())->first();


        return view('profile', ['user' => $user]);
    }

    public function update(Request $request) {
        $request->user()->info()->update($request->info);

        $request->user()->address()->update($request->address);

        return redirect()->route('profile')->with(['user' => $request->user()]);
    }
}
