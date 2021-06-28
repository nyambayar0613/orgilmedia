@extends('layouts.app')

@section('content')
<div class="padding">
    <div class="navbar">
        <div class="pull-center">
            <!-- brand -->
            <a href="{{ route('login') }}" class="navbar-brand">
                <div data-ui-include="'images/logo.svg'"></div>
                <img src="/img/logo-light.png" class="img-fluid" alt="." >
            </a>
            <!-- / brand -->
        </div>
    </div>
</div>
<div class="b-t">
    <div class="center-block w-xxl w-auto-xs p-y-md text-center">
        <div class="p-a-md">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="m-b-md">
                    <label class="md-check">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><i class="primary"></i> Keep me signed in
                    </label>
                </div>

                <button type="submit" class="btn active btn-lg black p-x-lg">{{ __('Login') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
