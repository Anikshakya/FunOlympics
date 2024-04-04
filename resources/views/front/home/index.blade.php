@extends('front.layouts.master')
@section('content')
@php

$liveVideos=App\Models\Video::where('status',1)->get();
$Videos=App\Models\Video::all();
@endphp

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 80vh;">
    <div class="carousel-inner">
    <div class="carousel-item active" style="height: 80vh;">
        <img class="d-block w-100" src="https://www.luxe-apartmentsrentals.com/wp-content/uploads/2020/04/OLYMPIC-FRANCE-2024-scaled.jpg" alt="First slide" style="height: 100%; object-fit: cover;">
    </div>
    <div class="carousel-item" style="height: 80vh; position: relative;">
        <div style="position: relative;">
            <img class="d-block w-100" src="https://img.olympics.com/images/image/private/t_s_pog_overview_hero_xl/f_auto/primary/wganxha7is1rwzqw9qs7" alt="Second slide" style="height: 100%; object-fit: cover;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.4);"></div>
            <div class="carousel-caption d-none d-md-block" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1; text-align: center; font-family: 'Roboto', sans-serif;">
                <i><h5 style="color: #fff; font-size: 40px; font-weight: 400;">OLYMPICS GAMES</h5></i><br>
                <p style="color: #fff; font-size: 20px; font-weight: 300;">The Olympic Games are the world's only truly global, multi-sport, celebratory athletics competition. With more than 200 countries participating in over 400 events across the Summer and Winter Games, the Olympics are where the world comes to compete, feel inspired, and be together.</p>
            </div>
        </div>
    </div>
    <div class="carousel-item" style="height: 80vh; position: relative;">
        <div style="position: relative;">
            <img class="d-block w-100" src="https://images.pexels.com/photos/34514/spot-runs-start-la.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Third slide" style="height: 100%; object-fit: cover;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.4);"></div>
            <div class="carousel-caption d-none d-md-block" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1; text-align: center; font-family: 'Roboto', sans-serif;">
                <i><h5 style="color: #fff; font-size: 40px; font-weight: 400;">Let’s Keep Moving!</h5></i>
                <p style="color: #fff; font-size: 20px; font-weight: 300;">We inspired over 15 million people from all corners of the world to move on Olympic Day!<br><br>This is just the beginning. Let’s Move is not one moment in time; it is our ongoing invitation to everyone, everywhere, every day to embrace the joy of movement and an active lifestyle.</p>
            </div>
        </div>
    </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- </section> -->
<!-- Hero Section End -->

<!-- Soccer Section Begin -->
<section class="soccer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="section-title">
                    <h3>Streaming <span>Now</span></h3>
                    <a href="{{ url('/watch_live') }}" class="view-more">View All →</a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($liveVideos as $liveVideo)
            <div class="col-lg-3 col-sm-6 p-0 soccer-column">
                <a href="{{ route('videoDetail',$liveVideo->id) }}" style="text-decoration: none;">
                    <div class="soccer-item set-bg" style="position: relative; border-radius: 4px; overflow: hidden;" data-setbg="{{ url('/') }}/public/storage/posts/{{  $liveVideo->thumbnail  }}">
                        <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.25);"></div>
                        <div class="si-tag">{{ $liveVideo->category }}</div>
                        <div class="si-text" style="position: absolute; bottom: 10px; left: 10px;">
                            <h4 style="margin: 0; font-weight: 500; color: #fff; font-family: Arial;">{{ $liveVideo->title }}</h4>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Soccer Section End -->

<!-- Video Section Begin -->
<section class="video-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3> <span>Videos</span></h3>
                    <a href="{{ url('/video') }}" class="view-more">View All →</a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($Videos as $Video)
            <div class="col-lg-2 mb-4 video-column" style="margin-right: 100px">
                <div class="video-item set-bg" style="position: relative; overflow: hidden; border-radius: 4px;" data-setbg="{{ url('/') }}/public/storage/posts/{{  $Video->thumbnail  }}">
                    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.25);"></div>
                    <div class="vi-title">
                        <h4 style="margin: 0; font-weight: 400; color: #fff; font-family: Arial;">{{ $Video->title }}</h4>
                    </div>
                    <a href="{{ route('videoDetail',$Video->id) }}" class="play-btn" style="z-index: 1;"><img src="{{ asset('front_assets/img/play.png') }}" alt=""></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Video Section End -->


@endsection