@extends('layouts.guest')
    @section('main')
    <div>
        <div class="mt-5">
            @include('components/application-logo')
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mt-2 text-center" :errors="$errors" />

        <form class="card mx-auto mt-2 p-3" style="width: 25rem;" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            
            <div class="mt-4">
                <label for="email">Email</label>

                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus/>
            </div>

            <!-- Password -->
            
            <div class="mt-4">
                <label for="password">Password</label>

                <input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="form-check mt-4">
                <label for="remember_me" class="form-check-label">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    {{ __('Remember me') }}
                </label>
            </div>

            <div class="text-end mt-2">
                @if (Route::has('password.request'))
                    <a class="pr-2 text-decoration-none" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button class="btn btn-primary">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div>
    @endsection
