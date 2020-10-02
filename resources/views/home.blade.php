@extends('layouts.app')

@section('content')
<div class="container">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    <div class="row">
           <div class="blog-post">
               <div class="blog-post_img">
                   <img src="images/photo.jpg" alt="">
               </div>
               <div class="blog-post_info">
                   <div class="blog-post_title">Shark Sighting</div>
                   <p class="blog-post_text">
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                   </p>
                   <a href="#" class="blog-post_cta">Read more</a>

               </div>
           </div>

            <div class="blog-post">
                <div class="blog-post_img">
                    <img src="images/photo.jpg" alt="">
                </div>
                <div class="blog-post_info">
                    <div class="blog-post_date">
                        <span>Sunday</span>
                        <span>Octomber 27 2019</span>
                    </div>
                    <div class="blog-post_title">Shark Sighting</div>
                    <p class="blog-post_text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam asperiores consectetur est eveniet illum impedit iure magnam maiores minima molestias, natus nemo nihil nulla possimus quasi quos sapiente sequi.
                    </p>
                    <a href="#" class="blog-post_cta">Read more</a>

                </div>
            </div>

            <div class="blog-post">
                <div class="blog-post_img">
                    <img src="images/photo.jpg" alt="">
                </div>
                <div class="blog-post_info">
                    <div class="blog-post_date">
                        <span>Sunday</span>
                        <span>Octomber 27 2019</span>
                    </div>
                    <div class="blog-post_title">Shark Sighting</div>
                    <p class="blog-post_text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam asperiores consectetur est eveniet illum impedit iure magnam maiores minima molestias, natus nemo nihil nulla possimus quasi quos sapiente sequi.
                    </p>
                    <a href="#" class="blog-post_cta">Read more</a>

                </div>
            </div>
    </div>
</div>
@endsection
