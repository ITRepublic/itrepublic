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
                  Friends & Connections
                </h1>	
                <p class="text-white link-nav"><a href="{{ route('social_media') }}">Feeds</a>  
                <span class="lnr lnr-arrow-right"></span>  
                <a href="#" class="text-white"> Friends & Connections</a>
                </p>
            </div>											
        </div>
    </div>
</section>
<!-- End banner Area -->	

<!-- Start Social Area -->
<section class="post-area section-gap-social-media">
  <div class="container social-media-container">
    
    {{-- RENDER CONNECTION & GROUP ASIDE --}}
    @include('layout.connection-group-aside')
    {{-- END RENDER CONNECTION & GROUP ASIDE --}}

    <div class="core-rail" role="main">
      <section id="ember1003" class="mn-invitations-preview mb4 artdeco-card ember-view">
        <header class="artdeco-card__header mn-invitations-preview__header">
          <h3 class="flex-1 t-18 t-black t-normal">
              No pending invitations
          </h3>
          <a data-control-name="manage_all_invites" href="/mynetwork/invitation-manager/" id="ember1004" class="mn-invitations-preview__manage-all t-16 t-black--light t-bold ember-view">          
            <span aria-label="Manage all invitations">
              Manage all
            </span>
          </a>      
        </header>
      </section>
      <div data-launchpad-scroll-anchor="pymk">
        <section id="ember1005" class="artdeco-card ember-view">
          <header class="mn-discovery__header artdeco-card__header">
            <h3 class="t-18 t-black t-normal">
              Recommended for you
            </h3>
          </header> 
          <section id="ember1006" class="mn-discovery-tabs ember-view">
            <div class="artdeco-scrolling-container">
              <ul class="nav nav-tabs">
                <li><a data-toggle="tab" class="active show" href="#people">People</a></li>
                <li><a data-toggle="tab" href="#groups">Groups</a></li>
              </ul>
            </div>
            <div class="tab-content">
              <div id="people" class="tab-pane fade in active show">
                <ul id="ember1014" class="js-mn-discovery-entity-list__pymk mn-discovery-entity-list ember-view"> 
                  @foreach($users as $user)      
                  <li class="mn-discovery-entity-card mn-discovery-entity-card--33%-width ember-view">  
                    <div class="ember-view">
                      <section id="ember1017" class="mn-discovery-person-card mn-discovery-person-card--center-align artdeco-card ember-view">
                        <div class="text-align-center flex-1">
                          <div class="text-align-center">
                            <a data-control-name="pymk_profile" href="#" id="ember1018" class="mn-discovery-person-card__image ember-view">          
                              <img class="lazy-image EntityPhoto-circle-7 loaded" src="{{ $user->profile_pict }}">
                            </a>
                            <a data-control-name="pymk_profile" href="#" id="ember1019" class="mn-discovery-person-card__link mn-discovery-person-card__link--center-align ember-view">          
                              <span class="visually-hidden">Member’s name</span>
                              <span class="mn-discovery-person-card__name t-14 t-black t-bold">{{ $user->full_name }}</span>
                              <span class="visually-hidden">Member’s education</span>
                              <span class="mn-discovery-person-card__occupation t-12 t-black--light t-normal">{{ $user->university }} • {{ $user->field_of_study }}</span>
                            </a>      
                          </div>
                        </div>
                        <footer class="mt2 mhA text-align-center">
                          @if($is_followed[$user->finder_id] == null)
                          <button style="background-color: #fff; color: #333; border: 1px solid #333; padding: 10px; font-size: 14px;" class="js-mn-discovery-person-card__action-btn mn-discovery-person-card__action-btn--extra-padding artdeco-button artdeco-button--1 artdeco-button--secondary ember-view">
                            <span class="artdeco-button__text">Follow</span>
                          </button>
                          @else
                          <button style="background-color: #fff; color: #ccc; padding: 10px; font-size: 14px;" class="js-mn-discovery-person-card__action-btn mn-discovery-person-card__action-btn--extra-padding artdeco-button artdeco-button--1 artdeco-button--secondary ember-view">
                            <span class="artdeco-button__text">Followed</span>
                          </button>
                          @endif
                        </footer>
                      </section>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
              <div id="groups" class="tab-pane fade">
                <ul class="js-mn-discovery-entity-list__group mn-discovery-entity-list ember-view">   
                  @foreach($groups_list as $list)         
                  <li class="mn-discovery-entity-card mn-discovery-entity-card--33%-width ember-view">
                    <div  class="ember-view">
                      <section class="mn-discovery-group-card mn-discovery-group-card--center-align artdeco-card ember-view">
                        <div class="text-align-center flex-1">
                          <div class="text-align-center">
                            <a data-control-name="group_content" href="#" class="mn-discovery-group-card__image-link ember-view">          
                              <img class="lazy-image mn-discovery-group-card__image Elevation-0dp EntityPhoto-square-7 loaded" src="{{ $list->group_image }}">
                            <a data-control-name="group_content" href="#" class="mn-discovery-group-card__link mn-discovery-group-card__link--center-align ember-view">          <span class="visually-hidden">Group name</span>
                              <span class="mn-discovery-group-card__name t-14 t-black t-bold ">{{ $list->group_name }}</span>
                              <span class="mn-discovery-group-card__members t-12 t-black--light t-normal ">{{ number_format($total_member[$list->group_friends_id]) }} Members</span>
                            </a>      
                          </div>
                          <div class="member-insights member-insights--discovery-card-center-align">
                            <div class="t-12 t-black--light t-normal">
                              <span class="member-insights__icon svg-icon-wrap">
                                <li-icon aria-hidden="true" type="in-common-icon" size="small">
                                  <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                                    <path d="M11,3C9.9,3,8.9,3.4,8,4C5.8,2.3,2.7,2.8,1,5s-1.2,5.3,1,7c0.9,0.6,1.9,1,3,1s2.1-0.4,3-1c2.2,1.7,5.3,1.2,7-1s1.2-5.3-1-7C13.1,3.4,12.1,3,11,3z M1.9,8c0-1.7,1.4-3.1,3.1-3.1c0.6,0,1.2,0.2,1.7,0.5c-1,1.6-1,3.6,0,5.2c-1.4,1-3.4,0.6-4.3-0.8C2.1,9.2,1.9,8.6,1.9,8z M11,11.1c-0.6,0-1.2-0.2-1.7-0.5c1-1.6,1-3.6,0-5.2c1.4-1,3.4-0.6,4.3,0.9s0.6,3.4-0.9,4.3C12.2,10.9,11.6,11.1,11,11.1z" class="small-icon" style="fill-opacity: 1">
                                    </path>
                                  </svg>
                                </li-icon>
                              </span>
                              <span class="member-insights__count">{{ number_format($connections_join[$list->group_friends_id]) }} connection has joined</span>
                            </div>
                          </div>
                        </div>
                        <footer class="mt2 mhA text-align-center" style="margin-bottom: 20px;">
                          @if($is_join[$list->group_friends_id] == null)
                          <button style="background-color: #fff; color: #333; border: 1px solid #333; font-size: 14px; padding: 5px 15px;" class="js-mn-discovery-group-card__action-btn mn-discovery-group-card__action-btn--extra-padding artdeco-button artdeco-button--1 artdeco-button--secondary ember-view">
                            <span class="artdeco-button__text">Join</span>
                          </button>
                          @else
                          <button style="background-color: #fff; color: #ccc; font-size: 14px; padding: 5px 15px;" class="js-mn-discovery-group-card__action-btn mn-discovery-group-card__action-btn--extra-padding artdeco-button artdeco-button--1 artdeco-button--secondary ember-view">
                            <span class="artdeco-button__text">Joined</span>
                          </button>
                          @endif
                        </footer>
                      </section>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </section>
        </section>      
      </div>
    </div>
    
    {{-- RENDER ADD TO YOUR FEEDS --}}
    @include('layout.add-feeds-aside')
    {{-- END RENDER ADD TO YOUR FEEDS --}}
  </div>
</section>
@endsection