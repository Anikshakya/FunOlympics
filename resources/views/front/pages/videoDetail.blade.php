@extends('front.layouts.master')
@section('content')
   <!-- Banner Begin -->
    <!-- <section class="breadcrumb-section set-bg" data-setbg="{{ asset('front_assets/img/breadcrumb-bg.jpg') }}" style="background-image: url('{{ asset('front_assets/img/breadcrumb-bg.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-text">
                        <h2 style="font-family: 'Roboto', sans-serif; font-weight: 700; color: #fff; text-align: center; letter-spacing: 2px; text-transform: uppercase;">{{ $video->title }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Banner End -->

    <section class="watch-live">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="video-wrapper">
                        <div style="display: flex; justify-content: space-between; width: 100%;">
                            <video style="width: 68%; height: 100%; object-fit: contain; margin-top: 26px; margin-right: 60px;" controls>
                                <source src="{{ url('/') }}/public/storage/posts/{{ $video->video }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div style="width: 30%; margin-top: 2px;">
                                <div style="display: flex; flex-direction: column;">
                                    <div style="width: 100%; margin-top: 5px;">
                                        <a href="https://www.youtube.com/watch?v=yRm_c_WbYa0" style="text-decoration: none; color: #333; display: block;">
                                            <img src="https://i.ytimg.com/vi/8bespK8rkuM/sddefault.jpg" alt="Recommended Image 2" style="width: 100%; height: 200px; border-radius: 4px; opacity: 1;">
                                            <p style="font-size: 14px; margin-top: 6px; color: #606060; font-weight: bold; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; max-height: 3.6em;">Tears of joy for Bruno Fratus. He was at the 2012 and 2016 Olympics 50m free finals, narrowingly missed the podium as he got 4th in 2012 and 6th in 2016 Olympics.</p>
                                        </a>
                                    </div>
                                    <div style="width: 100%;">
                                        <a href="https://www.youtube.com/watch?v=T65W6xMoXl0&t=215s" style="text-decoration: none; color: #333; display: block;">
                                            <img src="https://loopnewslive.blob.core.windows.net/liveimage/sites/default/files/2023-07/paris_2024_230ffe6c574e1064254c95921b63e7a9.jpg" alt="Recommended Image 1" style="width: 100%; height: 200px; border-radius: 4px; opacity: 1;">
                                            <p style="font-size: 14px; margin-top: 6px; color: #606060; font-weight: bold; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; max-height: 3.6em;">The Olympic Games are the world's only truly global, multi-sport, celebratory athletics competition.</p>
                                        </a>
                                    </div>
                                    
                                    <!-- Add more recommended items as needed -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="video-info-wrapper">
                   <h3 class="title">{{ $video->title }}</h3>
                        <span class="category badge badge-info" style = "text-transform: uppercase;">{{ $video->category }}</span>
                        <h6 class="date">{{ $video->created_at }}</h6>
                    </div>

                </div>
 
                <div class="col-lg-8 col-md-10 col-12">
                <div id="disqus_thread" style = "margin-top: 20px;"></div>

                    <!-- chat -->
                   <!-- <div class="comment-wrapper">
                        <h3 class="heading">Comment</h3>

                        <form>
                            <div class="form-group">
                                <textarea class="form-control status-box" rows="3" placeholder="Enter your comment here..."></textarea>
                            </div>
                        </form>
                        <div class="button-group pull-right">
                            <p class="counter">250</p>
                            <a href="#" class="btn btn-comment">Post</a>
                        </div>
                        <ul class="posts">
                        </ul>
                    </div>-->
                    <!-- chat end -->
                </div>
            </div>
        </div>
    </section>

    <!-- Moer Video Begin -->
    <section class="soccer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="section-title">
                        <h3>More <span>Videos</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                $videos = App\Models\Video::all();
                @endphp
                @foreach($videos as $video)
                <div class="col-lg-3 mb-4 video-column">
                    <div class="video-item set-bg" style="position: relative; border-radius: 4px; overflow: hidden;" data-setbg="{{ url('/') }}/public/storage/posts/{{ $video->thumbnail }}">
                        <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.2);"></div>
                        <div class="vi-title" style="position: absolute; bottom: 20px; color: #fff; font-family: Arial; font-size: 18px; z-index: 1; text-align: left; padding-right: 20px;">
                            <h5 style="margin: 0;">{{ $video->title }}</h5>
                        </div>
                        <a href="{{ route('videoDetail',$video->id) }}" class="play-btn" style="z-index: 1;"><img src="{{ asset('front_assets/img/play.png') }}" alt=""></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Soccer Section End -->




<script>
        var main = function() {
            $('.btn-comment').click(function() {
                var post = $('.status-box').val();
                $('<li>').text(post).prependTo('.posts');
                $('<span>').text('Username comes here').prependTo('.posts li')
                $('.status-box').val('');
                $('.counter').text('250');
                $('.btn').addClass('disabled');
            });
            $('.status-box').keyup(function() {
                var postLength = $(this).val().length;
                var charactersLeft = 250 - postLength;
                $('.counter').text(charactersLeft);
                if (charactersLeft < 0) {
                    $('.btn').addClass('disabled');
                } else if (charactersLeft === 250) {
                    $('.btn').addClass('disabled');
                } else {
                    $('.btn').removeClass('disabled');
                }
            });
        }
        $('.btn').addClass('disabled');
        $(document).ready(main)
    </script>
    <script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://localhost-0r8lfhr2ky.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>s
@endsection