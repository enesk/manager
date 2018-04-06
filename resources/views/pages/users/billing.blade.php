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
                            <form action="{{ route('users.billing.update') }}" method="post">
                                {{ csrf_field() }}
                                <h5 class="form-header">
                                    Zahlungsdetails
                                </h5>
                                <div class="form-desc">
                                    Hier kannst du deine Zahlungsdaten ändern.
                                </div>

                                <div class="form-group">
                                    <label for="">Firma *</label>
                                    <input class="form-control" name="company" placeholder="Firma *" type="text" value="{{ $user->billingDetails->company }}">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Vorname</label>
                                                <input class="form-control" name="firstname" placeholder="Vorname" type="text" value="{{ $user->billingDetails->firstname }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Nachname</label>
                                                <input class="form-control" name="lastname" placeholder="Nachname" type="text" value="{{ $user->billingDetails->lastname }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">IBAN</label>
                                                <input class="form-control" name="iban" placeholder="IBAN" type="text" value="{{ $user->billingDetails->iban }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">BIC</label>
                                                <input class="form-control" name="bic" placeholder="BIC" type="text" value="{{ $user->billingDetails->bic }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" name="terms_accepted" @if($user->billingDetails->terms_accepted == 1) checked @endif type="checkbox" value="{{ $user->billingDetails->terms_accepted }}">I agree to terms and conditions</label>
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