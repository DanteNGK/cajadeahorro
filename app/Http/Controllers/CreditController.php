<?php

namespace App\Http\Controllers;

use App\Group;
use App\Credit;
use Illuminate\Support\Facades\Auth;

class CreditController extends Controller
{
    public function store(Group $group)
    {
        $credit = Credit::forceCreate([
            'interest_rate' => 10.0,
            'user_clave' => Auth::user()->getKey(),
            'group_id' => $group->id,
        ]);

        return view('requested', compact('credit'));
    }
}
