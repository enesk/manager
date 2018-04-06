@extends('layouts.salt')
@section('body-class') auth-wrapper @stop
@section('content')
    <div class="all-wrapper menu-side with-pattern">
        <div class="auth-box-w">
            <div class="logo-w">
                <a href="/"><img alt="" src="/assets/img/logo-big.png"></a>
            </div>
            <h4 class="auth-header">
                Anmelden
            </h4>
            <form  method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="">E-Mail-Adresse</label>
                    <input name="email" class="form-control" placeholder="E-Mail-Adresse eingeben" type="text"
                           value="{{ old('email') }}">
                    <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="">Passwort</label>
                    <input name="password" class="form-control" placeholder="Passwort eingeben" type="password">
                    <div class="pre-icon os-icon os-icon-fingerprint"></div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="buttons-w">
                    <button class="btn btn-primary">Anmelden</button>
                    <div class="form-check-inline">
                        <label class="form-check-label"><input class="form-check-input" type="checkbox">Remember
                            Me</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop