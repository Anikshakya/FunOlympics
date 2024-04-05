@extends('front.layouts.master')
@section('content')
  <!-- Banner Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('front_assets/img/breadcrumb-bg.jpg') }}" style="background-image: url(&quot;front-assets/img/breadcrumb-bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-text">
                        <h2>Contact Us</h2>
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
                        <h3>Your Message</h3>
                        <form  action="{{ url('/create') }}" method="post">
                        @csrf

                            <div class="input__item">
                                <input type="text" placeholder="Full Name" name="name">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="input__item">
                                <input type="email" placeholder="Email Address" name="email">
                                <span class="fa fa-envelope"></span>
                            </div>
                            <div class="input__item">
                                <input type="text"  name="subject" placeholder="Subject">
                                <span class="fa fa-book"></span>
                            </div>
                            <div class="input__item textarea-item">
                                <textarea name="message" id="" rows="5" placeholder="Message..." class="form-control"></textarea>
                            </div>
                            <button type="submit" class="site-btn">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact__info">
                        <h3>Contact Info</h3>
                        <p>
                        Have a question or comment? We'd love to hear from you! Simply fill out the form, and we'll get back to you as soon as possible. Your feedback is valuable to us!. "Need to get in touch? Feel free to reach out to us via email or contact given below. Our team is here to assist you!
                        </p>
                        <ul>
                            <li><i class="fa fa-envelope mr-3"></i> info@funolympics.com </li>
                            <li><i class="fa fa-phone mr-3"></i> +(12) 345 6789 </li>
                            <li><i class="fa fa-map-marker mr-3"></i> 01 Tinkune Kathmandu City, Nepal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login End -->


@endsection