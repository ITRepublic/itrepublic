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
                  Feeds				
                </h1>	
                <p class="text-white link-nav"><a href="{{ route('user_home') }}">Home </a>  
                <span class="lnr lnr-arrow-right"></span>  
                <a href="{{ route('social_media') }}" class="text-white"> Feeds</a>
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
      <div class="left-rail-container-social Elevation-2dp mb2">
        <div id="ember408" class="feed-identity-module profile-rail-card container ember-view">
          <div class="feed-identity-module__actor-meta profile-rail-card__actor-meta break-words">
            <div class=" feed-identity-module__default-bg profile-rail-card__default-bg feed-identity-module__member-bg-image profile-rail-card__member-bg-image">  
            </div>

            <a data-control-name="identity_profile_photo" href="{{ route('profile') }}" id="ember409" class="ember-view">    
              <img class="lazy-image feed-identity-module__member-photo profile-rail-card__member-photo EntityPhoto-circle-5 loaded" alt="{{ $user_login->full_name }}" height="64" width="64" 
              src="{{ $user_login->profile_pict }}">
            </a><br>
            <a data-control-name="identity_welcome_message" href="{{ route('profile') }}" id="ember410" class="tap-target profile-rail-card__actor-link block link-without-hover-visited ember-view">    <span class="t-16 t-black t-bold">
                {{ $user_login->full_name }}
                </span>
            </a>
            {{-- <p class="identity-headline t-12 t-black--light t-normal mt1">If you never try, you’ll get nothing at all</p> --}}
          </div>

          <div class="feed-identity-module__widgets">
            <div id="ember411" class="feed-identity-module__entity-list--compact entity-list-wrapper ember-view">
              <ul class="entity-list row">
                <li class="entity-list-item">
                  <button class="full-width" data-control-name="identity_network" data-ember-action="" data-ember-action-414="414">
                    <div class="display-flex align-items-baseline">
                      <div class="text-align-left">
                        <div id="ember415" class="identity-widget-item__headline link-without-visited-state t-12 t-black--light t-bold attributed-text ember-view">
                          <span id="ember417" class="ember-view"><span>Connections</span></span>
                        </div>
                        <div id="ember419" class="link-without-visited-state t-12 t-black t-bold attributed-text ember-view">
                          <span id="ember421" class="ember-view"><span>Grow your network</span></span>
                        </div>
                      </div>
                      <div class="t-12 t-black t-bold flex-1 text-align-right" data-control-name="identity_network" data-ember-action="" data-ember-action-423="423">
                        <span class="feed-identity-module__stat link-without-visited-state">
                          35
                        </span>
                      </div>
                    </div>
                  </button>
                </li>
                {{-- <li class=" entity-list-item">
                  <button class="full-width" data-control-name="identity_wvmp" data-ember-action="" data-ember-action-426="426">
                    <div class="display-flex align-items-baseline">
                      <div class="text-align-left">
                        <div id="ember427" class="identity-widget-item__headline link-without-visited-state t-12 t-black--light t-bold attributed-text ember-view"><span id="ember429" class="ember-view">
                          <span>Who's viewed your profile</span></span>
                        </div>
                      </div>
                      <div class="t-12 t-black t-bold flex-1 text-align-right" data-control-name="identity_wvmp" data-ember-action="" data-ember-action-431="431">
                        <span class="feed-identity-module__stat link-without-visited-state">
                          26
                        </span>
                      </div>
                    </div>
                  </button>
                </li>
                <li class=" entity-list-item">
                  <button class="full-width" data-control-name="identity_saved_articles" data-ember-action="" data-ember-action-434="434">
                    <div class="display-flex align-items-baseline">
                      <div class="text-align-left">
                        <div id="ember435" class="identity-widget-item__headline link-without-visited-state t-12 t-black--light t-bold attributed-text ember-view"><span id="ember437" class="ember-view">
                          <span>Your saved articles</span></span>
                        </div>
                    </div>
                      <div class="t-12 t-black t-bold flex-1 text-align-right" data-control-name="identity_saved_articles" data-ember-action="" data-ember-action-439="439">
                        <span class="feed-identity-module__stat link-without-visited-state">
                          1
                        </span>
                      </div>
                    </div>
                  </button>
                </li> --}}
              </ul>
            </div>
          </div>
          <div id="ember440" class="premium-upsell-link ember-view">
            <a data-control-name="premium_homepage_identity_upsell_click" title="Friends & Connections" href="{{ route('friends_connect') }}" id="ember441" 
              class="link-without-visited-state feed-identity-module__anchored-widget feed-identity-module__anchored-widget--premium-upsell t-12 t-black t-bold link-without-hover-state feed-identity-module__anchored-widget--agora premium-upsell-link--long ember-view">          
              <p style="color:cadetblue; text-decoration:underline" class="t-12 t-black--light t-normal">View Friends & Connections</p>
            </a>
          </div>
        </div>
      </div>
        
    </aside>
    <div class="core-rail" role="main">
      <section class="nt-segment notif_container">
        <header id="ember1501" class="nt-segment-header display-flex justify-space-between pv2 ph3 ember-view">
          <h1 class="t-black--light t-bold">
            Notification
          </h1>
        </header>
        <hr class="m0">
        <div id="ember1578" class="nt-card__occlusion-wrapper ember-view">
          @foreach ($notification_model as $notifs)                
            <article id="ember1579" class="nt-card nt-card--in-segment ember-view">  
              <div class="nt-card__main display-flex flex-row">
                <div class="nt-card__left-rail">
                  <a href="#" aria-hidden="false" data-ember-action="" data-ember-action-1580="1580">
                    <div id="ember1581" class="nt-primary-entity ivm-image-view-model ember-view">  
                      <div id="ember1582" class="display-flex ivm-view-attr__img-wrapper ivm-view-attr__img-wrapper--use-img-tag ember-view">
                        <div id="ember1583" class="presence-entity presence-entity--size-4 ember-view">  
                          <img class="lazy-image ivm-view-attr__img--centered  EntityPhoto-circle-4 presence-entity__image EntityPhoto-circle-4 loaded" 
                          alt="{{ $notifs->full_name }}" src="{{ $notifs->profile_pict }}">
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="nt-card__core-rail mt1">
                  <button class="nt-card__headline nt-card__text--3-line nt-card__text--align-start nt-card__text--word-wrap t-14 t-black t-normal" data-ember-action="" data-ember-action-1585="1585">
                    <span aria-hidden="true">{{ $notifs->log_message}}</span>
                  </button>
                </div>
              </div>
            </article>
            <hr class="m0">
          @endforeach
        </div>
      </section>
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
   
<script>
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
            
    reader.onload = function (e) {
      $('#upload_video_view').attr('src', '#');
      $('#upload_video_view').css('display', "none");
      $('#upload_picture_view').attr('src', e.target.result);
      $('#upload_picture_view').css('display', "");
    }
            
    reader.readAsDataURL(input.files[0]);
  }
}
function readVideoURL(input) {

  if (input.files && input.files[0]) {

    var reader = new FileReader();
            
    reader.onload = function (e) {
      $('#upload_picture_view').attr('src', '#');
      $('#upload_picture_view').css('display', "none");
      $('#upload_video_view').attr('src', e.target.result);
      $('#upload_video_view').css('display', "");
      
    }
            
    reader.readAsDataURL(input.files[0]);
  }
}
$("#ember670-upload-IMAGE").change(function(){
  readURL(this);
})
$("#ember672-upload-VIDEO").change(function(){
  readVideoURL(this);
})

function toggle_button(input) {

  if (input.files && input.files[0]) {

    var reader = new FileReader();
            
    reader.onload = function (e) {
      $('#upload_picture_view').attr('src', '#');
      $('#upload_picture_view').css('display', "none");
      $('#upload_video_view').attr('src', e.target.result);
      $('#upload_video_view').css('display', "");
      
    }
            
    reader.readAsDataURL(input.files[0]);
  }
}
</script>
<!-- End post Area -->
@endsection
