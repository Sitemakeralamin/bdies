<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend')}}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <img src="{{asset('backend')}}/dist/img/finalbeis.png" alt="" height="150" width="150">
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}" required autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

               </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('backend')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend')}}/dist/js/adminlte.min.js"></script>
</body>
</html>




{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Session Status -->--}}
{{--        <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <!-- Email Address -->--}}
{{--            <div>--}}
{{--                <x-input-label for="email" :value="__('Email')" />--}}

{{--                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}

{{--                <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-input-label for="password" :value="__('Password')" />--}}

{{--                <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="current-password" />--}}

{{--                <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--            </div>--}}

{{--            <!-- Remember Me -->--}}
{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="inline-flex items-center">--}}
{{--                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-primary-button class="ml-3">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-primary-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}
