@extends('layout.master')

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
    <aside class="left-rail" role="presentation">
      <div id="ember731" class="sticky stuck ember-view" style="height: 778px; width: 216px; margin: 0px auto;">          
        <div class="left-rail-container">
          <div id="ember732" class="mn-connections-summary container-with-shadow ember-view">
            <div class="pt4">
              <div id="ember733" class="mn-origami-rail-card--fade-in ember-view">
                <section id="ember734" class="mn-origami-rail-card artdeco-card ember-view">
                  <div class="mn-origami-rail-card__summary">
                    <a data-control-name="connections" href="#" id="ember903" class="js-mn-origami-rail-card__connection-count link-without-hover-state ember-view">            
                      <h3 class="mn-origami-rail-card__count t-20 t-black t-normal" aria-label="See all connections">{{ number_format($connections) }}</h3>
                    </a>
                    <h3 class="t-16 t-black t-normal" aria-hidden="true">
                      Connections
                    </h3>

                    @if($connections > 0)
                    <a data-control-name="connections" href="#" id="ember904" class="link-without-hover-state text-align-center ember-view">              
                      <div id="ember905" class="mn-origami-rail-card__social-proof mt1 ember-view">
                        <div class="mn-social-proof">
                          <div class="mn-social-proof__facepiles">
                            @foreach($connections_profile as $profile)
                            <img class="lazy-image mn-social-proof__profile-image EntityPhoto-circle-2 loaded" alt="{{ $profile->full_name }}" height="40" width="40" src="{{ $profile->profile_pict }}">
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </a>
                    @endif
                   </div>


                  <hr class="artdeco-divider mv0">
                  <div class="mn-origami-rail-card__summary">
                      
                    @if($groups == 0)
                      <h3 class="t-16 t-black t-normal">No groups</h3>
                      <p class="t-14 t-black--light t-normal text-align-center">
                        Once you join groups you will see them here
                      </p>
                    @else
                      <a data-control-name="connections" href="#" id="ember903" class="js-mn-origami-rail-card__connection-count link-without-hover-state ember-view">            
                        <h3 class="mn-origami-rail-card__count t-20 t-black t-normal" aria-label="See all connections">{{ number_format($groups) }}</h3>
                      </a>
                      <h3 class="t-16 t-black t-normal" aria-hidden="true">
                        Groups
                      </h3>
                      <a data-control-name="connections" href="#" id="ember904" class="link-without-hover-state text-align-center ember-view">              
                        <div id="ember905" class="mn-origami-rail-card__social-proof mt1 ember-view">
                          <div class="mn-social-proof">
                            <div class="mn-social-proof__facepiles">
                              @foreach($groups_image as $group)
                              <img class="lazy-image mn-social-proof__profile-image EntityPhoto-circle-2 loaded" alt="{{ $group->group_name }}" height="40" width="40" src="{{ $group->group_image }}">
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </a>
                    @endif
                  </div>


                  <hr class="artdeco-divider mv0">
                  <div class="mn-origami-rail-card__summary">
                      
                    @if($owned_groups == 0)
                      <h3 class="t-16 t-black t-normal">No owned groups</h3>
                      <p class="t-14 t-black--light t-normal text-align-center">
                        Once you have create groups you will see them here
                      </p>
                    @else
                      <a data-control-name="connections" href="#" id="ember903" class="js-mn-origami-rail-card__connection-count link-without-hover-state ember-view">            
                        <h3 class="mn-origami-rail-card__count t-20 t-black t-normal" aria-label="See all connections">{{ number_format($owned_groups) }}</h3>
                      </a>
                      <h3 class="t-16 t-black t-normal" aria-hidden="true">
                        Owned Groups
                      </h3>
                      <a data-control-name="connections" href="#" id="ember904" class="link-without-hover-state text-align-center ember-view">              
                        <div id="ember905" class="mn-origami-rail-card__social-proof mt1 ember-view">
                          <div class="mn-social-proof">
                            <div class="mn-social-proof__facepiles">
                              @foreach($owned_groups_image as $ow_group)
                              <img class="lazy-image mn-social-proof__profile-image EntityPhoto-circle-2 loaded" alt="{{ $ow_group->group_name }}" height="40" width="40" src="{{ $ow_group->group_image }}">
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </a>
                    @endif
                  </div>

                  <hr class="artdeco-divider mv0">
                  <div class="mn-origami-rail-card__summary">
                    <button type="button" style="border: 1px solid #333; color: #fff; background-color: #333; padding: 5px 10px;">Create Groups</button>
                  </div>

                </section>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </aside>
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
    <aside class="feed-right-rail right-rail" role="presentation">
      <div class="feed-right-rail__top-module">
        <div id="ember2483" class="ember-view">  
          <div class="feed-follows-module mv4 mh0">
            <div class="feed-follows-module__title display-flex">
              <h2 class="t-16 t-black t-normal">Add to your feed</h2>
  
            </div>
            <ul class="feed-follows-module__list">
              @foreach($users as $key => $user)
              {{-- take 5 data only --}}
              @if($key < 5 && $is_followed[$user->finder_id] == null)
              <li id="ember2485" class="feed-follows-module-recommendation company ember-view">
                <a data-control-name="sidebar_follow_actor_picture" href="#" id="ember2486" class="feed-follows-module-recommendation__profile-link--avatar mr2 ember-view">    
                  <div id="ember2487" class="feed-shared-avatar-image b0 company ember-view">  
                    <img src="{{ $user->profile_pict }}" class="avatar company EntityPhoto-square-3" alt="">
                  </div>
                </a>
                <div class="feed-follows-module-recommendation__description">
                  <a data-control-name="sidebar_follow_actor" href="/company/16640/" id="ember2488" class="feed-follows-module-recommendation__profile-link--description ember-view">    
                    <p>
                      <span class="feed-follows-module-recommendation__name t-14 t-black t-bold">{{ $user->full_name }}</span>
                    </p>
                    <div class="feed-follows-module-recommendation__subtext">
                      <p id="ember2488" class="t-12 t-black--light t-normal lt-line-clamp lt-line-clamp--multi-line ember-view" style="-webkit-line-clamp: 3">
                        {{ $user->university }} • {{ $user->field_of_study }}
                      </p>
                    </div>
                  </a>
                </div>  
                <button data-control-name="sidebar_follow_actor_follow_toggle" aria-pressed="false" aria-label="Follow" id="ember2491" class="feed-follows-module-recommendation__follow-btn button-secondary-small-muted ml2 follow ember-view">
                  <span aria-hidden="true" style="font-size: 14px; padding-top: -10px;">Follow</span>
                </button>
              </li>
              @endif
              @endforeach
            </ul>
            <a data-control-name="sidebar_follow_view_recommendations" href="/feed/follow/" id="ember2506" class="feed-follows-module__view-all link-without-hover-visited ember-view">      
              View all recommendation
            </a>  
          </div>
        </div>
      </div>
    </aside>
  </div>
</section>
@endsection