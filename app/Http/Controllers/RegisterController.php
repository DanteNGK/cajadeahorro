<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
	public function index()
	{
		return view('register');
	}

	public function store(Request $request)
	{
		$user = auth()->user();


		UserInfo::forceCreate([
			'name' => $request->name,
			'last_name' => $request->last_name,
			'middle_name' => $request->middle_name,
			'street' => $request->street,
			'neighborhood' => $request->neighborhood,
			'postal_code' => $request->postal_code,
			'municipality' => $request->municipality,
			'id' => $request->id,
			'cellphone' => $request->cellphone,
			'user_id' => $user->getKey(),
		]);

		return redirect(route('profile'));
	}
}
