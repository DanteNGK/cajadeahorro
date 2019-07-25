<?php

namespace App\Http\Controllers;

use App\Address;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use function Sodium\crypto_pwhash_scryptsalsa208sha256;

class RegisterController extends Controller
{
	public function index()
	{
		return view('register');
	}

	public function store(Request $request)
	{
        $request->user()->address()->forceCreate([
            'street' => $request->street,
            'postcode' => $request->postcode,
            'municipality' => $request->municipality,
            'neighborhood' => $request->neighborhood,
            'clave' => $request->user()->getKey(),
        ]);

        $request->user()->info()->update([
            'first_name' => $request->first_name,
            'first_surname' => $request->first_surname,
            'second_surname' => $request->second_surname,
            'id' => $request->id,
            'phone' => $request->phone,
        ]);

		return redirect(route('profile'));
	}
}
