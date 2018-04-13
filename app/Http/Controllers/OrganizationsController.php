<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrganizationRequest;
use App\Models\Organization;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;

class OrganizationsController extends Controller
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

    public function save(StoreOrganizationRequest $request)
    {
        $data = $request->validated();
        $organization = Organization::create($data);
        $organization->user_id = Auth::user()->id;
        $organization->save();
        $user = Auth::user();
        $user->organization_id = $organization->id;
        $user->save();

        return redirect()->back();
    }

    public function update()
    {

    }
}
