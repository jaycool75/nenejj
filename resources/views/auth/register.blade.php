@extends('layouts.customer_secondary')

@section('content')
   <!--Hero Section-->
   <div class="hero-section hero-background">
    <h1 class="page-title">Create an Account</h1>
</div>

<!--Navigation section-->
<div class="container">
    <nav class="biolife-nav">
        <ul>
            <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
            <li class="nav-item"><span class="perma-link">Authentication</span></li>
            <li class="nav-item"><span class="current-page">Register</span></li>
        </ul>
    </nav>
</div>

<div class="page-contain login-page">

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="container">

            <div class="row">

                <!--Form Sign In-->
                <form action="{{ route('register') }}" name="frm-login" method="post">
                    @csrf
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="signin-container">
                            <p class="form-row">
                                <label for="first-name">First Name:<span class="requite">*</span></label>
                                <input id="first-name" type="text" @error('first-name') is-invalid @enderror" name="first-name" value="{{ old('first-name') }}" required autocomplete="first-name" autofocus class="txt-input">
                                @error('first-name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                            <p class="form-row">
                                <label for="middle-name">Middle Name:<span class="requite"></span></label>
                                <input id="middle-name" type="text" @error('middle-name') is-invalid @enderror" name="middle-name" value="{{ old('middle-name') }}" autocomplete="middle-name" autofocus class="txt-input">
                                @error('middle-name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                            <p class="form-row">
                                <label for="last-name">Last Name:<span class="requite">*</span></label>
                                <input id="last-name" type="text" @error('last-name') is-invalid @enderror" name="last-name" value="{{ old('last-name') }}" required autocomplete="last-name" autofocus class="txt-input">
                                @error('last-name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                            
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="signin-container">
                                <p class="form-row">
                                    <label for="mobile">Mobile No:<span class="requite">*</span></label>
                                    <input id="mobile" type="text" @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus class="txt-input">
                                    @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>
                             
                                <p class="form-row">
                                    <label for="fid-pass">Password:<span class="requite">*</span></label>
                                    <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" class="txt-input">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>
                                <p class="form-row">
                                    <label for="fid-pass">Confirm Password:<span class="requite">*</span></label>
                                    <input id="password-confirm" type="password" @error('password-confirm') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password-confirm" class="txt-input">
                                    @error('password-confirm')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>
                            </div>
                        </div>
                        <br/>
                        <div class="col-lg-12 col-md-2 col-sm-12 col-xs-12">
                            <div class="signin-container register-in-container">
                                <center>
                                <p class="form-row wrap-btn">
                                    <button class="btn btn-submit btn-bold" type="submit">Register</button><br/><br/>
                                    <a href="/login" class="link-to-help">Already have an account? Click here to Login.</a>
                                </p>
                                </center>
                            </div>
                        </div>
                </form>

            </div>

        </div>

    </div>

</div>
@endsection