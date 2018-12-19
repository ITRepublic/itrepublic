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
                    Social Media Home				
                </h1>	
                <p class="text-white link-nav"><a href="{{ route('user_home') }}">Home </a>  
                <span class="lnr lnr-arrow-right"></span>  
                <a href="{{ route('social_media') }}" class="text-white"> Social Media Home</a>
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

            <a data-control-name="identity_profile_photo" href="/in/geofrey-vincent-802b53165/" id="ember409" class="ember-view">    <img class="lazy-image feed-identity-module__member-photo profile-rail-card__member-photo EntityPhoto-circle-5 loaded" alt="Geofrey Vincent" height="64" width="64" src="https://media.licdn.com/dms/image/C5603AQGFy7VJ0ZLXDw/profile-displayphoto-shrink_100_100/0?e=1550102400&amp;v=beta&amp;t=XP3odA3F3b9GPxku9TYNHwEh-rin7__1S1UgIdbPzaw">
            </a><br>
            <a data-control-name="identity_welcome_message" href="/in/geofrey-vincent-802b53165/" id="ember410" class="tap-target profile-rail-card__actor-link block link-without-hover-visited ember-view">    <span class="t-16 t-black t-bold">
                  Geofrey Vincent
                </span>
            </a>
            <p class="identity-headline t-12 t-black--light t-normal mt1">If you never try, you’ll get nothing at all</p>
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
                <li class=" entity-list-item">
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
                </li>
              </ul>
            </div>
          </div>
          <div id="ember440" class="premium-upsell-link ember-view">
            <a data-control-name="premium_homepage_identity_upsell_click" title="Try Premium Free for 1 Month" href="/premium/products/?destRedirectURL=https%3A%2F%2Fwww.linkedin.com%2Ffeed%2F%3FshowPremiumWelcomeBanner%3Dtrue&amp;upsellOrderOrigin=premium_homepage_identity_upsell" id="ember441" 
              class="link-without-visited-state feed-identity-module__anchored-widget feed-identity-module__anchored-widget--premium-upsell t-12 t-black t-bold link-without-hover-state feed-identity-module__anchored-widget--agora premium-upsell-link--long ember-view">          
              <p class="t-12 t-black--light t-normal">Access exclusive tools &amp; insights</p>
                <li-icon aria-hidden="true" type="premium-app-icon" class="feed-identity-module__premium-icon">
                  <svg viewBox="0 0 24 24" width="24" height="24" style="" x="0" y="0" preserveAspectRatio="xMinYMin meet" focusable="false">
                    <g class="large-icon" style="fill: currentColor">
                      <defs>
                        <clipPath id="hg1">
                          <rect x="2" y="2" width="20" height="20" rx="2.5" ry="2.5" style="fill: none"></rect>
                        </clipPath>
                      </defs>
                      <g style="clip-path: url(#hg1)">
                        <polygon points="2 2 22 22 22 2 2 2" style="fill: #c8b476"></polygon>
                        <polygon points="22 22 2 2 2 22 22 22" style="fill: #b29a53"></polygon>
                      </g>
                    </g>
                  </svg>
                </li-icon>
                <span class="feed-identity-module__anchored-widget-text--premium-upsell">Try Premium Free for 1 Month</span>
            </a>
          </div>
        </div>
      </div>
        
    </aside>
    <div class="core-rail" role="main">
      <div class="share-box Elevation-2dp">
        <div class="display-flex">
          <button class="share-box__open share-box__trigger p4 hoverable-link-text t-16 t-black--light t-bold" data-control-name="share.sharebox_focus" data-ember-action="" data-ember-action-54="54">
            <li-icon aria-hidden="true" type="compose-icon" class="svg-icon-wrap mr2" size="medium"><svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
              <path d="M17,13.75l2-2V20a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V6A1,1,0,0,1,4,5h8.25l-2,2H5V19H17V13.75Zm5-8a1,1,0,0,1-.29.74L13.15,15,7,17l2-6.15,8.55-8.55a1,1,0,0,1,1.41,0L21.71,5A1,1,0,0,1,22,5.71ZM17.93,7.58l-1.5-1.5-6.06,6.06,1.5,1.5Zm1.84-1.84-1.5-1.5L17.09,5.41l1.5,1.5Z" class="large-icon" style="fill: currentColor"></path></svg></li-icon>
              Start a post
          </button>
          <div id="ember55" class="share-box__trigger button share-media-button tap-target ember-view">
            <input data-control-name="share.sharebox_camera" filecountlimit="9" multiple="" name="file" 
              camera="camera" accept="image/*" id="ember55-upload-IMAGE" class="share-media-button__input visually-hidden ember-text-field ember-view" type="file">
            <label for="ember55-upload-IMAGE" class="share-media-button__label mvA share-media-button__label--square">
              <li-icon aria-hidden="true" type="camera-icon" size="large">
                <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                  <path d="M21,6H18L16.5,3h-9L6,6H3A1,1,0,0,0,2,7V19a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V7A1,1,0,0,0,21,6ZM7.36,8l1.5-3h6.28l1.5,3H20v2H16.58a5,5,0,0,0-9.16,0H4V8H7.36Zm7.76,4A3.13,3.13,0,1,1,12,8.88,3.13,3.13,0,0,1,15.13,12ZM4,18V11H7.1a5,5,0,1,0,9.8,0H20v7H4Z" class="large-icon" style="fill: currentColor">
                  </path>
                </svg>
              </li-icon>
              <span class="share-media-button__a11y-text visually-hidden">Upload images</span>
            </label>
          </div>
          <div id="ember57" class="share-box__trigger share-box__media-trigger button share-media-button tap-target ember-view"><input data-control-name="share.sharebox_video" name="file" camera="camera" accept="video/*,video/mp4,video/avi,video/webm,video/x-ms-wmv,video/x-flv,video/mpeg,video/quicktime" id="ember57-upload-VIDEO" class="share-media-button__input visually-hidden ember-text-field ember-view" type="file">
            <label for="ember57-upload-VIDEO" class="share-media-button__label mvA share-media-button__label--square">
              <li-icon aria-hidden="true" type="video-camera-icon" size="large">
                <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" 
                class="artdeco-icon" focusable="false">
                  <path d="M21,5.92a1,1,0,0,0-.57.18L17,8.5V7a1,1,0,0,0-1-1H3A1,1,0,0,0,2,7V17a1,1,0,0,0,1,1H16a1,1,0,0,0,1-1V15.5l3.43,2.4a1,1,0,0,0,.57.18,1,1,0,0,0,1-1V6.92A1,1,0,0,0,21,5.92ZM15,16H4V8H15v8Zm2-5.21,3-2.1v6.62l-3-2.1V10.79Z" class="large-icon" style="fill: currentColor">             
                  </path>
                </svg>
              </li-icon>
              <span class="share-media-button__a11y-text visually-hidden">Upload video</span>
            </label>
          </div>
        </div>
        <div class="share-box__article-cta t-14 t-black--light t-normal">
          <a href="https://www.itrepublic.id" data-control-name="share.publish_post" target="_blank" class="link-without-visited-state hoverable-link-text">Write an article</a> 
            on ITRepublic.id
        </div>
      </div>
      <div data-id="urn:li:activity:6476696541204701184" id="ember104" class="relative ember-view">                      
        <div id="ember106" class="occludable-update ember-view">  
          <div id="ember452" class="feed-shared-update-v2 mh0 Elevation-2dp relative full-height feed-shared-update-v2--e2e ember-view">            
            <div id="ember453" class="display-flex feed-shared-actor display-flex feed-shared-actor--with-control-menu ember-view">
              <a data-control-id="FVizytfnTvu+mZYwIQgMIQ==" data-control-name="actor_picture" target="_self" href="https://www.linkedin.com/company/157240/?miniCompanyUrn=urn%3Ali%3Afs_miniCompany%3A157240" id="ember454" class="feed-shared-actor__image app-aware-link ember-view">    
                <span class="js-feed-shared-actor__avatar" data-entity-hovercard-id="urn:li:fs_miniCompany:157240">
                  <div id="ember455" class="feed-shared-actor__avatar ivm-image-view-model ember-view">  
                    <div id="ember456" class="display-flex ivm-view-attr__img-wrapper--use-img-tag ember-view">      
                      <img class="lazy-image ivm-view-attr__img--centered feed-shared-actor__avatar-image EntityPhoto-square-3 loaded" alt="Capgemini" src="https://media.licdn.com/dms/image/C4E0BAQHGdEBFMKrWAw/company-logo_400_400/0?e=1553126400&amp;v=beta&amp;t=evUtlIZmTYMg7C6X_k6L6QCNdQWO5K6ncm_p3ZQN2zY">
                    </div>
                  </div>
                </span>
              </a>
              <div class="feed-shared-actor__meta">
                <a data-control-id="FVizytfnTvu+mZYwIQgMIQ==" data-control-name="actor" target="_self" href="https://www.linkedin.com/company/157240/?miniCompanyUrn=urn%3Ali%3Afs_miniCompany%3A157240" id="ember457" class="feed-shared-actor__meta-link app-aware-link ember-view">    
                  <h3 class="feed-shared-actor__title t-12 t-black--light t-normal">
                    <span class="feed-shared-actor__name t-14 t-black t-bold hoverable-link-text" data-entity-hovercard-id="urn:li:fs_miniCompany:157240"><span dir="ltr">Capgemini</span></span>
                  </h3>
                  <span class="feed-shared-actor__description t-12 t-black--light t-normal"><div id="ember458" class="truncate feed-shared-text-view white-space-pre-wrap break-words ember-view"><span aria-hidden="false">1,473,903 followers</span></div></span>
                  <span class="feed-shared-actor__sub-description t-12 t-black--light t-normal"><div id="ember461" class="feed-shared-text-view white-space-pre-wrap break-words ember-view"><span aria-hidden="false"><span id="ember464" class="ember-view"><span>Promoted</span></span></span></div></span>
                </a>
              </div>
            </div>
            <div id="ember466" class="feed-shared-update-control-menu absolute text-align-right feed-shared-control-menu ember-view">
              <artdeco-dropdown id="ember467" class="ember-view">
                <artdeco-dropdown-trigger aria-expanded="false" role="button" placement="bottom" tabindex="0" id="ember468" class="feed-shared-control-menu-trigger ember-view">      
                  <li-icon type="ellipsis-horizontal-icon" role="img" aria-label="Open control menu">
                    <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                      <path d="M2,10H6v4H2V10Zm8,4h4V10H10v4Zm8-4v4h4V10H18Z" class="large-icon" style="fill: currentColor">                
                      </path>
                    </svg>
                  </li-icon>
                </artdeco-dropdown-trigger>
                <artdeco-dropdown-content arrow-dir="right" placement="bottom" data-dropdown="" tabindex="-1" aria-hidden="true" id="ember469" class="feed-shared-control-menu-content artdeco-dropdown-with-arrow ember-view">      
                  <ul>
                    <li class="option-share-via">
                      <artdeco-dropdown-item role="button" data-dropdown="" id="ember471" class="tap-target display-flex align-items-center ember-view" tabindex="0">                
                        <li-icon aria-hidden="true" type="link-icon" class="flex-shrink-zero mr2">
                          <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                            <path d="M17.29,3a3.7,3.7,0,0,0-2.62,1.09L12.09,6.67A3.7,3.7,0,0,0,11,9.29a3.65,3.65,0,0,0,.52,1.86l-0.37.37a3.66,3.66,0,0,0-4.48.56L4.09,14.67a3.71,3.71,0,1,0,5.24,5.24l2.59-2.59A3.7,3.7,0,0,0,13,14.71a3.65,3.65,0,0,0-.52-1.86l0.37-.37a3.66,3.66,0,0,0,4.48-.57l2.59-2.59A3.71,3.71,0,0,0,17.29,3ZM11.13,14.71a1.82,1.82,0,0,1-.54,1.3L8,18.59A1.83,1.83,0,0,1,5.41,16L8,13.41a1.79,1.79,0,0,1,1.74-.48L8.28,14.4A0.94,0.94,0,0,0,9.6,15.73l1.46-1.46A1.82,1.82,0,0,1,11.13,14.71ZM18.59,8L16,10.59a1.79,1.79,0,0,1-1.74.48L15.73,9.6A0.94,0.94,0,0,0,14.4,8.27L12.94,9.74A1.79,1.79,0,0,1,13.41,8L16,5.41A1.83,1.83,0,0,1,18.59,8Z" class="large-icon" style="fill: currentColor">                     
                            </path>
                          </svg>
                        </li-icon>
                        <div class="feed-text-description flex-grow-1 text-align-left">
                          <span class="feed-shared-control-menu__headline">Copy link to post</span>
                          <span class="feed-shared-control-menu__sub-headline"></span>
                        </div>
                      </artdeco-dropdown-item>          
                    </li>
                    <li class="option-embed">
                      <artdeco-dropdown-item role="button" data-dropdown="" id="ember473" class="tap-target display-flex align-items-center ember-view" tabindex="0">                
                        <li-icon aria-hidden="true" type="embed-icon" class="flex-shrink-zero mr2">
                          <svg viewBox="0 0 24 24" width="24" height="24" style="" x="0" y="0" preserveAspectRatio="xMinYMin meet" focusable="false">
                            <path d="M19.89,7l2.83,4.13a1.5,1.5,0,0,1,0,1.75L19.89,17l-1.44-1,2.75-4L18.45,8ZM5.55,8L2.8,12l2.75,4L4.11,17,1.28,12.87a1.5,1.5,0,0,1,0-1.75L4.11,7ZM15.82,3.73l-1.65-.58-6,17.14L9.8,20.87Z" class="large-icon" style="fill: currentColor">                        
                            </path>
                          </svg>
                        </li-icon>
                        <div class="feed-text-description flex-grow-1 text-align-left">
                          <span class="feed-shared-control-menu__headline">Embed this post</span>
                          <span class="feed-shared-control-menu__sub-headline">Copy and paste embed code on your site</span>
                        </div>
                      </artdeco-dropdown-item>          
                    </li>
                    <li class="option-hide-update">
                      <artdeco-dropdown-item role="button" data-dropdown="" id="ember475" class="tap-target display-flex align-items-center ember-view" tabindex="0">                
                        <li-icon aria-hidden="true" type="tag-icon" class="flex-shrink-zero mr2">
                          <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                            <path d="M16,10a2,2,0,1,0-2-2A2,2,0,0,0,16,10Zm0-3.12A1.13,1.13,0,1,1,14.88,8,1.13,1.13,0,0,1,16,6.88ZM20,3H12L2.29,12.71a1,1,0,0,0-.29.71,1,1,0,0,0,.29.71l7.58,7.58a1,1,0,0,0,.7.29,1,1,0,0,0,.71-0.29L21,12V4A1,1,0,0,0,20,3Zm-1,8.34-8.42,8.42L4.24,13.42,12.66,5H19v6.34Z" class="large-icon" style="fill: currentColor">                        
                            </path>
                          </svg>
                        </li-icon>
                        <div class="feed-text-description flex-grow-1 text-align-left">
                          <span class="feed-shared-control-menu__headline">Hide this post</span>
                          <span class="feed-shared-control-menu__sub-headline">I don't want to see this post in my feed</span>
                        </div>
                      </artdeco-dropdown-item>          
                    </li>
                    <li class="option-report">
                      <artdeco-dropdown-item role="button" data-dropdown="" id="ember477" class="tap-target display-flex align-items-center ember-view" tabindex="0">                
                        <li-icon aria-hidden="true" type="flag-icon" class="flex-shrink-zero mr2">
                          <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                            <path d="M13.82,5L14,4a1,1,0,0,0-1-1H5V2H3V22H5V15H9.18L9,16a1,1,0,0,0,1,1h8.87L21,5H13.82ZM5,13V5h6.94l-1.41,8H5Zm12.35,2h-6.3l1.42-8h6.29Z" class="large-icon" style="fill: currentColor">                        
                            </path>
                          </svg>
                        </li-icon>
                        <div class="feed-text-description flex-grow-1 text-align-left">
                          <span class="feed-shared-control-menu__headline">Report this ad</span>
                          <span class="feed-shared-control-menu__sub-headline"></span>
                        </div>
                      </artdeco-dropdown-item>          
                    </li>
                    <li class="option-improve-my-feed">
                      <artdeco-dropdown-item role="link" data-dropdown="" id="ember479" class="tap-target display-flex align-items-center ember-view" tabindex="0">                
                        <li-icon aria-hidden="true" type="filter-icon" class="flex-shrink-zero mr2">
                          <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                            <path d="M9.82,5A3,3,0,0,0,4.18,5H2V7H4.18A3,3,0,0,0,9.82,7H22V5H9.82ZM7,7.4A1.4,1.4,0,1,1,8.4,6,1.4,1.4,0,0,1,7,7.4ZM7,15a3,3,0,0,0-2.82,2H2v2H4.18a3,3,0,0,0,5.63,0H22V17H9.82A3,3,0,0,0,7,15Zm0,4.4A1.4,1.4,0,1,1,8.4,18,1.4,1.4,0,0,1,7,19.4ZM17,9a3,3,0,0,0-2.82,2H2v2H14.18a3,3,0,0,0,5.63,0H22V11H19.82A3,3,0,0,0,17,9Zm0,4.4A1.4,1.4,0,1,1,18.4,12,1.4,1.4,0,0,1,17,13.4Z" class="large-icon" style="fill: currentColor">                         
                            </path>
                          </svg>
                        </li-icon>
                        <div class="feed-text-description flex-grow-1 text-align-left">
                          <span class="feed-shared-control-menu__headline">Improve my feed</span>
                          <span class="feed-shared-control-menu__sub-headline">Get recommended sources to follow</span>
                        </div>
                      </artdeco-dropdown-item>          
                    </li>
                    <li class="option-ad_choice">
                      <artdeco-dropdown-item role="link" data-dropdown="" id="ember481" class="tap-target display-flex align-items-center ember-view" tabindex="0">                
                        <li-icon aria-hidden="true" type="adchoices-icon" class="flex-shrink-zero mr2">
                          <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="social-icon" focusable="false">
                            <svg data-name="Layer 1" width="24" height="24" viewBox="0 0 24 24" style="fill: currentColor" class="solid-icon">
                              <path d="M10,11.1A1.1,1.1,0,1,1,11.1,10,1.1,1.1,0,0,1,10,11.1Zm9.5,0-13.8-8A1.1,1.1,0,0,0,5.1,3,1.1,1.1,0,0,0,4,4.1V19.9A1.1,1.1,0,0,0,5.1,21a1.1,1.1,0,0,0,.57-0.2l1.9-1.1A0.9,0.9,0,0,0,8,19H8a0.9,0.9,0,0,0-1.3-.76l-0.1.08A0.4,0.4,0,0,1,6,18V6a0.4,0.4,0,0,1,.54-0.3l10.3,6.1a0.3,0.3,0,0,1,0,.52L11,15.7V12H9v5a1.1,1.1,0,0,0,1.7,1l8.8-5.1A1,1,0,0,0,19.5,11.1Z"></path>
                            </svg>
                          </svg>
                        </li-icon>
                        <div class="feed-text-description flex-grow-1 text-align-left">
                          <span class="feed-shared-control-menu__headline">Why am I seeing this ad?</span>
                          <span class="feed-shared-control-menu__sub-headline">Manage your ad preferences</span>
                        </div>
                      </artdeco-dropdown-item>          
                    </li>
                  </ul>
                </artdeco-dropdown-content>
              </artdeco-dropdown>
            </div>
            <div id="ember482" class="feed-shared-update-v2__description feed-shared-inline-show-more-text ember-view">
              <div dir="ltr" id="ember483" class="feed-shared-update-v2__commentary feed-shared-text ember-view">  
                <div id="ember484" class="feed-shared-text__text-view feed-shared-text-view white-space-pre-wrap break-words ember-view">
                  <span aria-hidden="false">
                    <span id="ember487" class="ember-view"><span>Capgemini is hiring for Social Analysts and Data Integrators across Indonesia, Vietnam and Thailand! For the detailed job descriptions, kindly refer to the following links Indonesia-</span></span><a rel="noopener noreferrer" target="_blank" href="https://lnkd.in/fNUPU2P" id="ember491" class="ember-view">https://lnkd.in/fNUPU2P</a>.<span id="ember511" class="ember-view"><span> Please apply via the job postings above or send your updated CV directly to </span></span><a rel="noopener noreferrer" target="_blank" href="mailto:shireen.wen-hui@capgemini.com" id="ember515" class="ember-view">shireen.wen-hui@capgemini.com</a>
                  </span>
                </div>
              </div>    
            </div>
            <div id="ember1036" class="mt2 feed-shared-image feed-shared-image--single-image ember-view">
              <div class="relative">
                <div class="feed-shared-image__container" style="padding-top: 52.36%;">
                  <a aria-describedby="feed-shared-image-ember1036" data-control-id="3WM6S5F0Qc37nQU4aQ05fw==" data-control-name="object" href="#" id="ember1037" class="feed-shared-image__image-link app-aware-link ember-view">        
                    <div id="ember1038" class="ivm-image-view-model ember-view">  
                      <div id="ember1039" class="display-flex ivm-view-attr__img-wrapper--expanded ivm-view-attr__img-wrapper--use-img-tag ember-view">
                        <img class="lazy-image ivm-view-attr__img--centered feed-shared-image__image feed-shared-image__image--constrained loaded" alt="No alt text provided for this image" src="https://media.licdn.com/media-proxy/ext?w=800&amp;h=800&amp;f=pj&amp;hash=B%2B7CoDJzBMotVYI4LGd4ZobRAHs%3D&amp;ora=1%2CaFBCTXdkRmpGL2lvQUFBPQ%2CxAVta5g-0R6jnhodx1Ey9KGTqAGj6E5DQJHUA3L0CHH05IbfPWjvfs7aKrKkoUAWKn9UjQBgf7u1SGK1QY64eYnoK9pziJS3d8L5agYUbhl4j3lK6w">
                      </div>
                    </div>
                  </a>  
                </div>
                <span class="visually-hidden" id="feed-shared-image-ember1036">
                    Activate link to view larger image.
                </span>
              </div>
              <div id="ember1040" class="ember-view">
              </div>
            </div>
            <ul id="ember523" class="social-details-social-counts--justified feed-shared-social-counts ember-view">
              <li class="feed-shared-social-counts__item mr1">
                <button class="feed-shared-social-counts__num-likes feed-shared-social-counts__count-value t-12 t-black--light t-normal hoverable-link-text" data-control-name="likes_count" data-ember-action="" data-ember-action-524="524">
                  <span aria-hidden="true">47 Likes</span><span class="visually-hidden">47 Likes on {:actorName} post</span>
                </button>
              </li>
              <li class="feed-shared-social-counts__item">
                <button class="feed-shared-social-counts__num-comments feed-shared-social-counts__count-value t-12 t-black--light t-normal hoverable-link-text" data-control-name="comments_count" data-ember-action="" data-ember-action-525="525">
                  <span aria-hidden="true">1 Comment</span>
                  <span class="visually-hidden">1 Comment on {:actorName} post</span>
                </button>
              </li>
            </ul>
            <div id="ember526" class="ember-view"><div id="ember527" class="ember-view">
            </div>
          </div>
          <div id="ember528" class="feed-shared-social-actions feed-shared-social-action-bar ember-view">            
            <button data-control-name="like_toggle" id="ember529" class="like-button button like feed-shared-social-action-bar__action-btn ember-view">  
              <span class="like-icon svg-icon-wrap">
                <li-icon aria-hidden="true" type="like-icon" size="small">
                  <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                    <path d="M11.6,7L9.7,3.8C9.4,3.3,9.2,2.7,9,2.1L8.8,1c0,0,0,0,0,0H7C5.9,1,5,1.9,5,3v0.4C5,4,5.1,4.7,5.3,5.3L5.5,6c0,0,0,0,0,0l-3,0C1.7,6,1,6.7,1,7.5c0,0.4,0.1,0.7,0.4,1c0,0,0,0,0,0C1.1,8.8,1,9.1,1,9.5c0,0.5,0.3,1,0.7,1.3c0,0,0,0,0,0c-0.1,0.2-0.2,0.5-0.2,0.7c0,0.8,0.6,1.4,1.3,1.5c0,0,0,0,0,0c-0.1,0.3-0.1,0.6,0,1c0.2,0.6,0.9,1,1.5,1H7c0.9,0,1.5-0.1,2.1-0.3l2.1-0.7c0,0,0,0,0,0H14c0,0,0,0,0,0V7c0,0,0,0,0,0L11.6,7C11.6,7,11.6,7,11.6,7zM3.4,10.1L3,9.6C2.9,9.4,2.8,9.2,2.9,8.9L3,8c0,0,0,0,0,0l5.1,0c0,0,0,0,0,0L7,4.7C6.9,4.3,6.9,3.8,6.9,3.4V3.1c0-0.2,0.2-0.4,0.4-0.4c0,0,0.1,0,0.1,0c0.1,0.7,0.4,1.5,0.7,2L10.7,9c0,0,0,0,0,0H12c0,0,0,0,0,0v3c0,0,0,0,0,0h-0.6c0,0,0,0,0,0l-2.5,0.8C8.5,12.9,8.1,13,7.7,13H4.9c-0.2,0-0.4-0.2-0.5-0.4l-0.1-0.5l-0.6-0.5c-0.2-0.2-0.4-0.5-0.3-0.8L3.4,10.1z" class="small-icon" style="fill-opacity: 1">
                    </path>
                  </svg>
                </li-icon>
              </span>
              <span class="unlike-icon svg-icon-wrap">
                <li-icon aria-hidden="true" type="like-filled-icon" size="small">
                  <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                    <path d="M11.64,7L9.71,3.77A6,6,0,0,1,9,2.13L8.75,1H8A2,2,0,0,0,6,3V3.15A7.81,7.81,0,0,0,6.43,5.3L6.66,6a0,0,0,0,1,0,0H2.5A1.49,1.49,0,0,0,1.38,8.49a0,0,0,0,1,0,0,1.49,1.49,0,0,0,.31,2.25,0,0,0,0,1,0,0A1.48,1.48,0,0,0,2.83,13a0,0,0,0,1,0,0,1.38,1.38,0,0,0,0,1,1.62,1.62,0,0,0,1.51,1H7a6.47,6.47,0,0,0,2.14-.31L11.25,14H14V7H11.64Z" class="small-icon" style="fill-opacity: 1">
                    </path>
                  </svg>
                </li-icon>
              </span>
              <span aria-hidden="true">Like</span>
              <span class="visually-hidden">Like</span>
            </button>
            <button data-control-name="comment" id="ember530" class="button comment feed-shared-social-action-bar__action-btn social-action-btn ember-view">
              <span class="svg-icon-wrap">
                <li-icon aria-hidden="true" type="speech-bubble-icon" size="small">
                  <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                    <path d="M14,3H2A1,1,0,0,0,1,4v7a1,1,0,0,0,1,1h9l4,3V4A1,1,0,0,0,14,3ZM3,10V5H13v6.11L11.52,10H3ZM5,7h6V8H5V7Z" class="small-icon" style="fill-opacity: 1">                    
                    </path>
                  </svg>
                </li-icon>
              </span>
              <span aria-hidden="true">
                Comment
              </span>
              <span class="visually-hidden">
                Comment
              </span>
            </button>
            <button data-control-name="reshare" id="ember531" class="feed-shared-social-action-bar__action-btn feed-shared-social-action-bar__reshare-button reshare-button button reshare social-action-btn ember-view">
              <span class="svg-icon-wrap">
                <span class="visually-hidden">Share</span>
                <li-icon aria-hidden="true" type="share-linkedin-icon" size="small">
                  <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                    <path d="M15.7,7.3L9,1v4H7c-3.9,0-7,3.1-7,7v3h1.4c0-2.2,1.9-4,4.1-4c0,0,0.1,0,0.1,0H9v4l0,0l6.7-6.3C16.1,8.4,16.1,7.7,15.7,7.3C15.7,7.3,15.7,7.3,15.7,7.3z M11,10.6V9H5.6c-1.2,0-2.4,0.4-3.4,1.1C3.1,8.2,4.9,7,7,7h4V5.4L13.7,8L11,10.6z" class="small-icon" style="fill-opacity: 1">
                    </path>
                  </svg>
                </li-icon>
              </span>
              <span aria-hidden="true">Share</span>
            </button>
          </div>            
          <div class="feed-shared-update-v2__comments-container display-flex flex-column-reverse">
          </div>
        </div>
      </div>
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
              <li id="ember2485" class="feed-follows-module-recommendation company ember-view">
                <a data-control-name="sidebar_follow_actor_picture" href="/company/16640/" id="ember2486" class="feed-follows-module-recommendation__profile-link--avatar mr2 ember-view">    
                  <div id="ember2487" class="feed-shared-avatar-image b0 company ember-view">  
                    <img src="https://media.licdn.com/dms/image/C560BAQHzxsCX2SG6Ig/company-logo_100_100/0?e=1553126400&amp;v=beta&amp;t=_Dp4tmZXJ9h1j4zPsENGaYVkg0NMCkKuW3WCycJo5W0" class="avatar company EntityPhoto-square-3" alt="">
                  </div>
                </a>
                <div class="feed-follows-module-recommendation__description">
                  <a data-control-name="sidebar_follow_actor" href="/company/16640/" id="ember2488" class="feed-follows-module-recommendation__profile-link--description ember-view">    
                    <p>
                      <span class="feed-follows-module-recommendation__name t-14 t-black t-bold">PT Bank Danamon Indonesia, Tbk.</span>
                    </p>
                    <div class="feed-follows-module-recommendation__subtext">
                      <p id="ember2490" class="t-12 t-black--light t-normal lt-line-clamp lt-line-clamp--multi-line ember-view" style="-webkit-line-clamp: 3">
                        Company • Banking
                      </p>
                    </div>
                  </a>
                </div>  
                <button data-control-name="sidebar_follow_actor_follow_toggle" aria-pressed="false" aria-label="Follow" id="ember2491" class="feed-follows-module-recommendation__follow-btn button-secondary-small-muted ml2 follow ember-view">    
                  <li-icon aria-hidden="true" type="plus-icon" class="button-icon" size="small">
                    <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                      <path d="M14,9H9v5H7V9H2V7H7V2H9V7h5V9Z" class="small-icon" style="fill-opacity: 1">
                      </path>
                    </svg>
                  </li-icon>
                  <span aria-hidden="true">Follow</span>
                </button>
              </li>
              <li id="ember2492" class="feed-follows-module-recommendation company ember-view">
                <a data-control-name="sidebar_follow_actor_picture" href="/company/2846044/" id="ember2493" class="feed-follows-module-recommendation__profile-link--avatar mr2 ember-view">    
                  <div id="ember2494" class="feed-shared-avatar-image b0 company ember-view">  
                    <img src="https://media.licdn.com/dms/image/C4E0BAQG8feKQfJz-eQ/company-logo_100_100/0?e=1553126400&amp;v=beta&amp;t=Wss-Phm2I8SdrZc8n9UUgQ6861sOzodHWmfV40Zwe3s" class="avatar company EntityPhoto-square-3" alt="">
                  </div>
                </a>
                <div class="feed-follows-module-recommendation__description">
                  <a data-control-name="sidebar_follow_actor" href="/company/2846044/" id="ember2495" class="feed-follows-module-recommendation__profile-link--description ember-view">    
                    <p>
                      <span class="feed-follows-module-recommendation__name t-14 t-black t-bold">Bukalapak</span>
                    </p>
                    <div class="feed-follows-module-recommendation__subtext">
                      <p id="ember2497" class="t-12 t-black--light t-normal lt-line-clamp lt-line-clamp--multi-line ember-view" style="-webkit-line-clamp: 3">  
                        Company • Internet
                      </p>
                    </div>
                  </a>
                </div>
                <button data-control-name="sidebar_follow_actor_follow_toggle" aria-pressed="false" aria-label="Follow" id="ember2498" class="feed-follows-module-recommendation__follow-btn button-secondary-small-muted ml2 follow ember-view">    
                  <li-icon aria-hidden="true" type="plus-icon" class="button-icon" size="small">
                    <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                      <path d="M14,9H9v5H7V9H2V7H7V2H9V7h5V9Z" class="small-icon" style="fill-opacity: 1">                        
                      </path>
                    </svg>
                  </li-icon>
                  <span aria-hidden="true">Follow</span>
                </button>
              </li>
              <li id="ember2499" class="feed-follows-module-recommendation company ember-view">
                <a data-control-name="sidebar_follow_actor_picture" href="/company/2778669/" id="ember2500" class="feed-follows-module-recommendation__profile-link--avatar mr2 ember-view">    
                  <div id="ember2501" class="feed-shared-avatar-image b0 company ember-view">  
                    <img src="https://media.licdn.com/dms/image/C4E0BAQHdyy-UHWGvkA/company-logo_100_100/0?e=1553126400&amp;v=beta&amp;t=1P1Fo1hMYC1rnKuQPXkZc_2_GOdXTXZj-QF9bhT1kMo" class="avatar company EntityPhoto-square-3" alt="">
                  </div>
                </a>
                <div class="feed-follows-module-recommendation__description">
                  <a data-control-name="sidebar_follow_actor" href="/company/2778669/" id="ember2502" class="feed-follows-module-recommendation__profile-link--description ember-view">    
                    <p>
                      <span class="feed-follows-module-recommendation__name t-14 t-black t-bold">Traveloka</span>
                    </p>
                    <div class="feed-follows-module-recommendation__subtext">
                      <p id="ember2504" class="t-12 t-black--light t-normal lt-line-clamp lt-line-clamp--multi-line ember-view" style="-webkit-line-clamp: 3">  
                        Company • Internet
                      </p>
                    </div>
                  </a>
                </div>
                <button data-control-name="sidebar_follow_actor_follow_toggle" aria-pressed="false" aria-label="Follow" id="ember2505" class="feed-follows-module-recommendation__follow-btn button-secondary-small-muted ml2 follow ember-view">    
                  <li-icon aria-hidden="true" type="plus-icon" class="button-icon" size="small">
                    <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                      <path d="M14,9H9v5H7V9H2V7H7V2H9V7h5V9Z" class="small-icon" style="fill-opacity: 1">
                      </path>
                    </svg>
                  </li-icon>
                  <span aria-hidden="true">Follow</span>
                </button>
              </li>
            </ul>
            <a data-control-name="sidebar_follow_view_recommendations" href="/feed/follow/" id="ember2506" class="feed-follows-module__view-all link-without-hover-visited ember-view">      
              View all recommendation
            </a>  
          </div>
        </div>
      </div>
      <div id="ember2507" class="sticky ember-view">          
        <div class="right-rail-container feed-right-rail__container">
          <!-- <section id="ember2508" class="feed-ad__side ad-banner-container ember-view">
            <iframe class="ad-banner" width="300" height="250" src="about:blank" scrolling="no" title="advertisement">              
            </iframe>
          </section> -->
          <footer id="ember2509" class="nav-footer nav-footer--compact ember-view">
            <div id="ember2510" class="ember-view">      
              <div role="contentinfo">
                <ul class="nav-footer-links nav-footer-links--compact">
                  <li class="nav-footer-links__item nav-footer-links__item--compact inline-block ml5">
                    <a data-control-name="compactfooter.about" rel="noopener noreferrer" target="_blank" href="https://about.linkedin.com" id="compactfooter-about" class="nav-footer__text-link t-12 t-black--light t-normal ember-view">                  
                      <span>About</span>
                    </a>
                  </li>
                  <li class="nav-footer-links__item nav-footer-links__item--compact inline-block ml5">
                    <a data-control-name="compactfooter.help" rel="noopener noreferrer" target="_blank" href="https://www.linkedin.com/help/linkedin?trk=footer_d_flagship3_feed" id="compactfooter-help" class="nav-footer__text-link t-12 t-black--light t-normal ember-view">                  
                      <span data-dyn-trk="">Help Center</span>
                    </a>            
                  </li>
                  <li class="nav-footer-links__item nav-footer-links__item--compact inline-block ml5">
                    <a data-control-name="compactfooter.privacy" rel="noopener noreferrer" target="_blank" href="https://www.linkedin.com/help/linkedin?trk=footer_d_flagship3_feed" id="compactfooter-privacy" class="nav-footer__text-link t-12 t-black--light t-normal ember-view">                  
                      <span data-dyn-trk="">Privacy &amp; Terms</span>
                    </a>            
                  </li>                  
                  <li class="nav-footer-links__item nav-footer-links__item--compact inline-block ml5">
                    <a data-control-name="compactfooter.advertising" rel="noopener noreferrer" target="_blank" href="https://www.linkedin.com/ad/start?trk=n_nav_ads_rr" id="compactfooter-advertising" class="nav-footer__text-link t-12 t-black--light t-normal ember-view">                  
                      <span>Advertising</span>
                    </a>            
                  </li>
                
                </ul>
                <div class="nav-footer__copyright t-12 t-black--light t-normal text-align-center clear-both" id="compactfooter-default_copyright">
                  IT Republic Corporation © 2018
                </div>
              </div>
              <div class="nav-footer__mask" data-ember-action="" data-ember-action-2563="2563">              
              </div>
            </div>
          </footer>
        </div>
      </div>    
    </aside>
    <div id="ember107" class="feed-shared-update-attachments ember-view"></div>
  </div>
</section>
   

<!-- End post Area -->
@endsection