@extends('layout.master-sosmed')

@section('title')
    {{ $title }}
@endsection

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                 {{ $title }}
                </h1>	
                <p class="text-white link-nav"><a href="{{ route('social_media') }}">Feeds</a>  
                <span class="lnr lnr-arrow-right"></span>  
                <a href="#" class="text-white"> {{ $title }}</a>
                </p>
            </div>											
        </div>
    </div>
</section>
<!-- End banner Area -->	

<!-- Start Social Area -->
@include('error.template')

<section class="post-area section-gap-social-media">
  <div class="container social-media-container">
    
    {{-- RENDER CONNECTION & GROUP ASIDE --}}
    @include('layout.connection-group-aside')
    {{-- END RENDER CONNECTION & GROUP ASIDE --}}

    <div class="core-rail" role="main">
        <section class="mn-invitations-preview mb4 artdeco-card ember-view">
            <form action="" method="POST" enctype="multipart/form-data" style="padding: 20px;">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Group's Name</label>
                    <input type="text" name="group_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Upload your group's image</label>
                    <input type="file" name="group_image" class="form-control">
                </div>
                <button type="submit" style="border: 1px solid #333; color: #fff; background-color: #333; padding: 8px;">Create Group</button>
            </form>
        </section>
    </div>
    
    {{-- RENDER ADD TO YOUR FEEDS --}}
    @include('layout.add-feeds-aside')
    {{-- END RENDER ADD TO YOUR FEEDS --}}
  </div>
</section>
@endsection