<?php

namespace App\Http\Controllers;

use App\Group;
use App\Models\PaymentFrequency;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $paymentFrequencies = PaymentFrequency::all();

        $groups = Group::all();

        return view('search-groups', compact('paymentFrequencies', 'groups'));
    }
}
