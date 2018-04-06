@extends('layouts.app')
@section('body-class') menu-position-top full-screen with-content-panel @stop
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-lg-12">
                    <div class="element-wrapper">
                        <div class="element-box">
                            @include('partials.flash')
                            <form action="{{ route('users.profile.update') }}" method="post">
                                {{ csrf_field() }}
                                <h5 class="form-header">
                                    Einstellungen
                                </h5>
                                <div class="form-desc">
                                    Hier kannst du deine persönliche Daten ändern.
                                </div>

                                <div class="form-group">
                                    <label for="">Firma *</label>
                                    <input class="form-control" name="company" placeholder="Firma *" type="text" value="{{ $user->profile->company }}">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Vorname</label>
                                                <input class="form-control" name="firstname" placeholder="Vorname" type="text" value="{{ $user->profile->firstname }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Nachname</label>
                                                <input class="form-control" name="lastname" placeholder="Nachname" type="text" value="{{ $user->profile->lastname }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Straße</label>
                                                <input class="form-control" name="street" placeholder="Straße" type="text" value="{{ $user->profile->street }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Nr.</label>
                                                <input class="form-control" name="houseno" placeholder="Nachname" type="text" value="{{ $user->profile->houseno }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">PLZ.</label>
                                                <input class="form-control" name="zipcode" placeholder="PLZ" type="text" value="{{ $user->profile->zipcode }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Stadt</label>
                                                <input class="form-control" name="city" placeholder="Stadt" type="text" value="{{ $user->profile->city }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Tel</label>
                                    <input class="form-control" name="tel" placeholder="Tel" type="text" value="{{ $user->profile->tel }}">
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to terms and conditions</label>
                                </div>
                                <div class="form-buttons-w">
                                    <button class="btn btn-primary" type="submit">Speichern</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop