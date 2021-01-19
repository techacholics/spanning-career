@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-7">
            <div class="card">
                <div class="card-header border-0">
                    <div class="text-center mb-1">
                        <img src="app-assets/images/logo/cbitss.png" alt="branding logo">
                    </div>
                    <div class="font-large-1 text-center">
                        {{ __('Register') }}
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="form-horizontal px-2 px-md-3">
                        @csrf
                        <!-- Name -->
                        <fieldset class="form-group position-relative has-icon-left">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror round" placeholder="Username" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <div class="form-control-position">
                                <i class="far fa-user"></i>
                            </div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </fieldset>
                        <!-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> -->
                        <!-- Name Ends -->

                        <!-- Email -->
                        <fieldset class="form-group position-relative has-icon-left">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror round" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                            <div class="form-control-position">
                                <i class="fas fa-envelope"></i>
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </fieldset>
                        <!-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> -->
                        <!-- Email Ends -->

                        <!-- User Type -->
                        <div class="form-group position-relative has-icon-left">
                            <div class="form-control-position">
                                <i class="fas fa-user-tag"></i>
                            </div>
                            <select style="padding-left: 3rem;" class="custom-select round @error('type') is-invalid @enderror" name="type" id="type">
                                <option value="">Select User Type</option>
                                <option value="employee">Employee</option>
                                <option value="employer">Employer</option>
                            </select>
                            @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <!-- 
                                <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">What you are ?</label>

                            <div class="col-md-6">
                                <select class="form-control @error('type') is-invalid @enderror" name="type" id="type">
                                    <option value="">What you are ?.</option>
                                    <option value="employee">Employee</option>
                                    <option value="employer">Employer</option>
                                </select>
                                @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> 
                        -->
                        </div>
                        <!-- User Type Ends -->
                        <!-- Create Password -->
                        <fieldset class="form-group position-relative has-icon-left">
                            <input id="password" type="password" class="form-control round @error('password') is-invalid @enderror" placeholder="Create Password" name="password" required autocomplete="new-password">
                            <i class="fas fa-eye hs" id="togvisi" onclick="togpassvisi()"></i>
                            <div class="form-control-position">
                                <i class="fas fa-lock"></i>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <!-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> -->
                        </fieldset>
                        <!-- Create Password Ends -->

                        <!-- Confirm Password -->
                        <fieldset class="form-group position-relative has-icon-left">
                            <input id="password-confirm" type="password" class="round form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            <div class="form-control-position">
                                <i class="fas fa-key"></i>
                            </div>
                            <!-- <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> -->
                        </fieldset>
                        <!-- Confirm Password Ends -->

                        <div class="form-group text-center row justify-content-center">
                            <div class="col-sm-6">
                                <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Register</button>
                            </div>

                        </div>
                    </form>
                    <p class="card-subtitle text-muted text-right font-small-3 mx-2 my-2">

                        <span>Already a member ?
                            <a href="{{ route('login') }}" class="card-link">Sign In</a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection