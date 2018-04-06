<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user = Auth::user();
        $data = [
            'user' => $user
        ];
        return view('pages.users.profile', $data);
    }

    public function updateProfile()
    {
        $userID = Auth::user()->id;
        $user = User::with('profile')->find($userID);
        $user->profile->fill(Input::all());
        $user->push();

        return redirect()->back()->with('success', 'Vielen Dank! Deine Daten wurden gespeichert.');
    }

    public function billing()
    {
        $user = Auth::user();
        $data = [
            'user' => $user
        ];
        return view('pages.users.billing', $data);
    }


    public function updateBilling()
    {
        $data = Input::all();
        if(empty($data['terms_accepted']) OR $data['terms_accepted'] == 0)
            return redirect()->back()->with('error', 'Bitte akzeptiere die Allgemeine Geschäftsbedingungen!');

        $userID = Auth::user()->id;
        $user = User::with('billingDetails')->find($userID);
        $user->billingDetails->fill($data);
        $user->push();

        return redirect()->back()->with('success', 'Vielen Dank! Deine Zahlungsdaten wurden gespeichert.');
    }
}