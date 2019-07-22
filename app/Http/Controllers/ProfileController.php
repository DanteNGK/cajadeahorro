<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
    	$user = UserInfo::where('clave', auth()->user()->getKey())->first();


        return view('profile', ['user' => $user]);
    }
}
