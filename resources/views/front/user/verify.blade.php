@extends('front.layouts.master')
@section('content')


    <!-- Banner Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('front_assets/img/breadcrumb-bg.jpg') }}" style="background-image: url(&quot;front-assets/img/breadcrumb-bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-text">
                        <h2>Verify OTP</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Login Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>OTP Code</h3>  
                   <form action="{{ route('verify.code') }}" method="post">
                        @csrf
                        <div class="input__item">
                            <input type="verify_code" placeholder="verify_code" name="verify_code">
                            <span class="fa fa-lock"></span>
                        </div>
                        @error('verify_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <button type="submit" class="site-btn">Verify Password</button>
                    </form>
                       <!-- <a href="#" class="forget_pass">Forgot Your Password?</a>-->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Dont’t Have An Account?</h3>
                        <a href="{{ url('user/register') }}" class="primary-btn">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login End -->
@endsection