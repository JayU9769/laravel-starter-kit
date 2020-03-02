@extends('layouts.app')

@section('content')
    @php $loginRoute = isset($admin) && $admin === true ? 'admin.login' : 'login'; @endphp

    {{ Form::open(['route' => $loginRoute, 'method' => 'post', 'data-toggle' => 'validator'])  }}
        <div class="card card-login card-white">
        <div class="card-header">
            <h3 class="card-title text-primary font-weight-bold text-gray page-title">{{ __('Login') }}</h3>
        </div>

        <div class="card-body">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="tim-icons icon-email-85"></i>
                    </div>
                </div>
                {{ Form::email('email', old('email'),['class' => 'form-control', 'placeholder' => 'Email', 'required', 'autocomplete' => 'email',  'autofocus' ]) }}
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="tim-icons icon-lock-circle"></i>
                    </div>
                </div>
                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password' ]) }}
            </div>

            <div class="input-group">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span class="form-check-sign"></span>
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-primary btn-lg btn-block mb-3" type="submit"><i class="fas fa-sign-in-alt"></i> {{ __('Login') }}</button>
            <div class="pull-left">
                <h6>
                    <a href="{{ route('register') }}" class="link footer-link font-weight-bold">Create Account</a>
                </h6>
            </div>
            @if (Route::has('password.request'))
                <div class="pull-right">
                    <h6>
                        <a href="{{ route('password.request') }}" class="link footer-link font-weight-bold">{{ __('Forgot Your Password?') }}</a>
                    </h6>
                </div>
            @endif

        </div>
    </div>

    {{ Form::close() }}
@endsection
