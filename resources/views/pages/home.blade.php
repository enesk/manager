@extends('layouts.app')
@section('body-class') menu-position-top full-screen with-content-panel @stop
@section('content')
    <div class="content-w">
        <div class="content-i">
            <div class="content-box">
                @if(count($user->organization))
                    @include('pages.wizard.home', ['user' => $user])
                @else
                    @include('pages.wizard.organization', ['plans' => $plans])
                @endif
            </div>
        </div>
    </div>
@stop