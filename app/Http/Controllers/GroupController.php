<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function search(Request $request)
    {
        $groups = Group::where('payment_frequency_id', $request->frequency)->get();

        return view('groups', compact('groups'));
    }
}
