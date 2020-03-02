@extends('layouts.app')

@section('content')
    {{ Form::open(['route' => 'register', 'method' => 'post', 'data-toggle' => 'validator'])  }}
    <div class="card card-login card-white">
        <div class="card-header">
            <h3 class="card-title text-primary font-weight-bold text-gray page-title">{{ __('Register') }}</h3>
        </div>

        <div class="card-body">

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="tim-icons icon-single-02"></i>
                    </div>
                </div>
                {{ Form::text('name', old('name'),['class' => 'form-control', 'placeholder' => __('Name'), 'required', 'autofocus' ]) }}
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="tim-icons icon-email-85"></i>
                    </div>
                </div>
                {{ Form::email('email', old('email'),['class' => 'form-control', 'placeholder' =>  __('Mail'), 'required']) }}
            </div>

            <div class="input-group  mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="tim-icons icon-lock-circle"></i>
                    </div>
                </div>
                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' ]) }}
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="tim-icons icon-lock-circle"></i>
                    </div>
                </div>
                {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password', 'required' ]) }}
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-primary btn-lg btn-block mb-3" type="submit"><i class="fas fa-sign-out-alt"></i> {{ __('Register') }}</button>
            <div class="pull-left">
                <h6>
                    <a href="{{ route('login') }}" class="link footer-link font-weight-bold">Already have account ?</a>
                </h6>
            </div>

        </div>
    </div>

    {{ Form::close() }}
@endsection
