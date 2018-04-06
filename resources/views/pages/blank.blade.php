@extends('layouts.app')
@section('body-class') menu-position-top full-screen with-content-panel @stop
@section('content')
    <div class="all-wrapper with-side-panel solid-bg-all">

        <div class="layout-w">
            @include('partials.navigation-mobile')
            @include('partials.navigation')
            <div class="content-w">
                <div class="top-bar color-scheme-transparent">
                </div>
                <div class="content-panel-toggler">
                    <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
                </div>
                <div class="content-i">
                    <div class="content-box">

                    </div>
                </div>
            </div>
        </div>
        <div class="display-type"></div>
    </div>
@stop