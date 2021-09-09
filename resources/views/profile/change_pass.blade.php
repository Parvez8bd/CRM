@extends('layouts.app')

@section('main')
    

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
                    
                    

                    <h1>Change Password Now</h1>
                    <p>have an account? then...</p>
                    <form method="POST" action="{{ route('changepass.store') }}">
                        @csrf

                        <input class="singup-password @error('current_password') is-invalid @enderror" type="password" placeholder="Current Pasword" name="current_password"
                        required> <br>
                        @error('current_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="singup-password" type="password" placeholder="Password" name="password"
                        required autocomplete="new_password"> <br>

                        <input class="singup-password" type="password" placeholder="Conform Password" name="password_confirmation" required>

                        
                        <input type="submit" class="singup-btn" value="Change Password">
                        
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