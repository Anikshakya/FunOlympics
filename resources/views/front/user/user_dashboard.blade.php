@extends('front.layouts.master')
@section('content')


   <!-- Banner Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('front_assets/img/breadcrumb-bg.jpg') }}" style="background-image: url(&quot;front-assets/img/breadcrumb-bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-text">
                        <h2>Profile</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Profile Begin -->
    <section class="profile">
        <div class="container">
            <div class="basic-information">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <img src="https://i.pinimg.com/736x/0d/64/98/0d64989794b1a4c9d89bff571d3d5842.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="profile-content">
                        <h2 style="font-family: 'Roboto', sans-serif; font-size: 28px; color: #333; font-weight: bold;">{{ Auth::user()->name }}</h2>
<ul class="information" style="list-style-type: none; padding: 0;">
    <li style="font-family: 'Roboto', sans-serif; font-size: 16px; color: #666;"><span style="font-weight: bold;">Name:</span> {{ Auth::user()->name }}</li>
    <li style="font-family: 'Roboto', sans-serif; font-size: 16px; color: #666;"><span style="font-weight: bold;">Email:</span> {{ Auth::user()->email }}</li>
    <!-- <li><span>Country:</span>{{ Auth::user()->country }}</li>
    <li><span>Phone No:</span>{{ Auth::user()->phone_code }}</li> -->
    <li style="font-family: 'Roboto', sans-serif; font-size: 16px; color: #666;"><span style="font-weight: bold;">User Type:</span> User</li>
</ul>

                        @php
                        $userId=Auth::user()->id;
                        @endphp
                        <div class="mt-4">
                            <a href="{{ route('userProfile',$userId) }}" class="btn" style="background-color: #3DBB65; color: #ffffff;">Edit</a>
                            <a href="{{ route('change.passwordPage') }}" class="btn" style="background-color: #3DBB65; color: #ffffff;">Change Password</a>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Profile End -->



@endsection