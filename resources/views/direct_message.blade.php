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

    <div class="core-rail" role="main" style="margin-bottom: 100px;">
        <section class="mn-invitations-preview mb4 artdeco-card ember-view">
            <div style="padding: 10px 20px;">
                <div style="text-align: center">
                    <img width="100" src="{{ $user->profile_pict }}" alt="{{ $user->full_name }}" style="margin-bottom: 10px;">
                    <h3>{{ $user->full_name }}</h3>
                    <p>{{ $user->field_of_study }} at {{ $user->university }}</p>
                </div>

                <h3>Messages</h3>
                @if(count($messages))
                @foreach($messages as $message)
                    <div class="media" style="padding: 15px 0; border-bottom: 1px solid #ccc;">
                        <img class="mr-3" width="80" src="{{ $message->author_photo }}">
                        <div class="media-body">
                            <h5 class="mt-0">{{ $message->author }}</h5>
                            <p>{{ $message->created_at->diffForHumans() }}</p>
                            {{ strip_tags($message->message) }}
                        </div>
                    </div>
                @endforeach
                @else
                <p>No direct message found. Start new direct message now.</p>
                @endif
            </div>
        </section>
    </div>
    
    {{-- RENDER ADD TO YOUR FEEDS --}}
    @include('layout.add-feeds-aside')
    {{-- END RENDER ADD TO YOUR FEEDS --}}
  </div>

  <form action="{{ route('send_direct_message', $request->connection_id) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <nav class="navbar navbar-light bg-light fixed-bottom">
            <div class="col-md-11 col-sm-11 col-xs-11">
                <textarea name="message" class="form-control" cols="30" rows="3" placeholder="Write your message here..." style="resize: none;" required></textarea>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1">
                <button type="submit" class="btn btn-success">Send</button>
            </div>
        </nav>
    </form>
</section>
@endsection