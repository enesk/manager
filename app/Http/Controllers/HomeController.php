<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $plans = Plan::all();
        $data = [
            'user' => $user,
            'plans' => $plans
        ];
        return view('pages.home', $data);
    }

    public function home()
    {

    }
}
