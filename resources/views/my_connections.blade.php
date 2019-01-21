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
                <div id="people" class="tab-pane fade in active show">
                    <ul id="ember1014" class="js-mn-discovery-entity-list__pymk mn-discovery-entity-list ember-view"> 
                        @foreach($my_connections as $mc)      
                        <li class="mn-discovery-entity-card mn-discovery-entity-card--33%-width ember-view">  
                        <div class="ember-view">
                            <section id="ember1017" style="height: auto;" class="mn-discovery-person-card mn-discovery-person-card--center-align artdeco-card ember-view">
                            <div class="text-align-center flex-1">
                                <div class="text-align-center">
                                <a data-control-name="pymk_profile" href="#" id="ember1018" class="mn-discovery-person-card__image ember-view">          
                                    <img class="lazy-image EntityPhoto-circle-7 loaded" src="{{ $mc->profile_pict }}">
                                </a>
                                <a data-control-name="pymk_profile" href="#" id="ember1019" class="mn-discovery-person-card__link mn-discovery-person-card__link--center-align ember-view">          
                                    <span class="visually-hidden">Member’s name</span>
                                    <span class="mn-discovery-person-card__name t-14 t-black t-bold">{{ $mc->full_name }}</span>
                                    <span class="visually-hidden">Member’s education</span>
                                    <span class="mn-discovery-person-card__occupation t-12 t-black--light t-normal">{{ $mc->university }} • {{ $mc->field_of_study }}</span>
                                </a>      
                                </div>
                            </div>
                            </section>
                        </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
        </section>
    </div>
    
    {{-- RENDER ADD TO YOUR FEEDS --}}
    @include('layout.add-feeds-aside')
    {{-- END RENDER ADD TO YOUR FEEDS --}}
  </div>
</section>
@endsection