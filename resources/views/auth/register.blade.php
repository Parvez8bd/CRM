@extends('layouts.guest')
@section('main')
    <div>

        {{-- <form class="card mx-auto mt-5 p-3" style="width: 25rem;" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <label for="name">Name</label>

                <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email">Email</label>

                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password">Password</label>

                <input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>
            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation">Confirm Password</label>
               

                <input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="text-end mt-2">
                <a class="pr-2 text-decoration-none" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button class="btn btn-outline-success">
                    {{ __('Register') }}
                </button>
            </div>
        </form> --}}

        <div class="login-homepage">
            <div class="container">
                <div class="row">
                    <!--Start login area-->
                    <div class="col-lg-3">
                          
                    </div>
                    <div class="col-lg-6">
                        <div class="login-content">
                            <div class="main_logo">
                                @include('components/application-logo')
                            </div>
                    
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4 text-center " :errors="$errors" />
                            
                            

                            <h1>Sign up here</h1>
                            <p>Don't have an account? then...</p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <input class="fast-name" type="text" placeholder="First Name" name="first_name">

                                <input class="last-name" type="text" placeholder="Last Name" name="last_name"> <br>

                                <input class="singup-password" type="email" placeholder="Email" name="email" required> <br>

                                <input class="singup-password" type="text" placeholder="Mobile" name="mobile"> <br>

                                <input class="singup-password" type="password" placeholder="Password" name="password"
                                required autocomplete="new-password"> <br>

                                <input class="singup-password" type="password" placeholder="Conform Password" name="password_confirmation" required>

                                <!-- <input type="checkbox">
                                <label for="vehicle1">Remember</label>
                                <span class="space1"></span>
                                <a class="forgot-password" href="">Forgotten password?</a> <br> -->

                                {{-- <a class="singup-btn" href="">Sing Up</a> --}}
                                <input type="submit" class="singup-btn" value="Sign Up">

                                <p class="singup-content">Alrady have an Account? 
                                    <a class="login" href="{{ route('login') }}"> Log In</a>
                                </p>
                                
                            </form>
                        </div>
                        
                    </div>
                    <div class="col-lg-3">
                          
                    </div>

                </div>
            </div>
        </div>

    </div>
    @endsection
