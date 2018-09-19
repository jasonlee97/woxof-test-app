@extends('layouts.app')

@section('content')
<div class="login-container">
    <div class="login-body">
        <div class="login-form">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input id="email" type="email" placeholder="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                <input id="password" type="password" placeholder="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            
                <button id="login" type="submit">
                    {{ __('Login') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
