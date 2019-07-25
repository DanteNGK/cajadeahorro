<?php

namespace App\Http\Controllers;

use App\User;

class ProfileController extends Controller
{
    public function index()
    {
    	$user = User::where('clave', auth()->user()->getKey())->first();


        return view('profile', ['user' => $user]);
    }

    public function update(Request $request) {
        dd($request->all());
    }
}
