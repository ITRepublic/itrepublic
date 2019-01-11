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

            <a data-control-name="identity_profile_photo" href="/in/geofrey-vincent-802b53165/" id="ember409" class="ember-view">    <img class="lazy-image feed-identity-module__member-photo profile-rail-card__member-photo EntityPhoto-circle-5 loaded" alt="Geofrey Vincent" height="64" width="64" src="https://media.licdn.com/dms/image/C5603AQGFy7VJ0ZLXDw/profile-displayphoto-shrink_100_100/0?e=1550102400&amp;v=beta&amp;t=XP3odA3F3b9GPxku9TYNHwEh-rin7__1S1UgIdbPzaw">
            </a><br>
            <a data-control-name="identity_welcome_message" href="/in/geofrey-vincent-802b53165/" id="ember410" class="tap-target profile-rail-card__actor-link block link-without-hover-visited ember-view">    <span class="t-16 t-black t-bold">
                  Geofrey Vincent
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
              <p class="t-12 t-black--light t-normal">View Friends & Connections</p>
            </a>
          </div>
        </div>
      </div>
        
    </aside>
    <div class="core-rail" role="main">
      <div class="share-box Elevation-2dp">
        <div class="display-flex">
          <button class="share-box__open share-box__trigger p4 hoverable-link-text t-16 t-black--light t-bold" data-toggle="modal" data-target="#post-feed-modal" data-ember-action="" data-ember-action-54="54">
            <li-icon aria-hidden="true" type="compose-icon" class="svg-icon-wrap mr2" size="medium"><svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
              <path d="M17,13.75l2-2V20a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V6A1,1,0,0,1,4,5h8.25l-2,2H5V19H17V13.75Zm5-8a1,1,0,0,1-.29.74L13.15,15,7,17l2-6.15,8.55-8.55a1,1,0,0,1,1.41,0L21.71,5A1,1,0,0,1,22,5.71ZM17.93,7.58l-1.5-1.5-6.06,6.06,1.5,1.5Zm1.84-1.84-1.5-1.5L17.09,5.41l1.5,1.5Z" class="large-icon" style="fill: currentColor"></path></svg></li-icon>
              Start a post
          </button>
          <div id="ember55" class="share-box__trigger button share-media-button tap-target ember-view">
            <button class="share-box__open share-box__trigger p4 hoverable-link-text t-16 t-black--light t-bold" data-toggle="modal" data-target="#post-feed-modal" data-ember-action="" data-ember-action-54="54">
            <label for="ember55-upload-IMAGE" class="share-media-button__label mvA share-media-button__label--square">
              <li-icon aria-hidden="true" type="camera-icon" size="large">
                <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                  <path d="M21,6H18L16.5,3h-9L6,6H3A1,1,0,0,0,2,7V19a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V7A1,1,0,0,0,21,6ZM7.36,8l1.5-3h6.28l1.5,3H20v2H16.58a5,5,0,0,0-9.16,0H4V8H7.36Zm7.76,4A3.13,3.13,0,1,1,12,8.88,3.13,3.13,0,0,1,15.13,12ZM4,18V11H7.1a5,5,0,1,0,9.8,0H20v7H4Z" class="large-icon" style="fill: currentColor">
                  </path>
                </svg>
              </li-icon>
              <span class="share-media-button__a11y-text visually-hidden">Upload images</span>
            </label>
            </button>
          </div>
          <div id="ember57" class="share-box__trigger share-box__media-trigger button share-media-button tap-target ember-view">
            <button class="share-box__open share-box__trigger p4 hoverable-link-text t-16 t-black--light t-bold" data-toggle="modal" data-target="#post-feed-modal" data-ember-action="" data-ember-action-54="54">
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
            </button>
          </div>
          <div class="modal fade" id="post-feed-modal" tabindex="-1" role="dialog" aria-labelledby="post-feed-modal-Label" aria-hidden="true">
            <div class="modal-dialog upload-feed-modal" role="document">
              <div class="modal-content">
                <form action="{{ route('post_feeds_submit') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                  <div class="modal-header share-box__header">
                    {{-- <img class="lazy-image share-box__member-image EntityPhoto-circle-3-ghost-person loaded" alt="Geofrey Vincent" src="https://media.licdn.com/dms/image/C5603AQGFy7VJ0ZLXDw/profile-displayphoto-shrink_800_800/0?e=1552521600&amp;v=beta&amp;t=rocOMNxIM6_PyocTc7YxxptUUyXB71U5aii010u3TwU"> --}}
                    <button data-control-name="share.close" data-dismiss="modal" aria-label="Close" id="ember1148" class="share-box__close artdeco-button artdeco-button--circle artdeco-button--2 artdeco-button--tertiary ember-view">  
                      <li-icon aria-hidden="true" type="cancel-icon" class="artdeco-button__icon">
                        <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                          <path d="M20,5.32L13.32,12,20,18.68,18.66,20,12,13.33,5.34,20,4,18.68,10.68,12,4,5.32,5.32,4,12,10.69,18.68,4Z" class="large-icon" style="fill: currentColor"></path>
                        </svg>
                      </li-icon>
                      <span class="artdeco-button__text">Cancel share</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="share-box__content--scrollable flex-grow-1">
                      <div class="pv4 share-box__text-editor-container">
                        <div data-control-name="share.add_commentary" id="ember1149" class="share-box__text-editor pv3 mentions-texteditor ember-view">
                          <textarea rows="5" style="border: none" name="post_feeds" class="form-control" placeholder="What do you want to post">{{ old('post_feeds') }}</textarea>
                          {{-- <img id="upload_picture_view" src="#" alt="your post image" /> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="share-box__footer pv3 pl3 pr5">
                    <div class="share-box-media-upload display-flex align-items-center flex-1">
                      <div id="ember670" class="mr2 button share-media-button tap-target ember-view">
                        <input data-control-name="share.select_photo" filecountlimit="9" multiple="" name="upload_post_image" camera="camera" accept="image/*" id="ember670-upload-IMAGE" class="share-media-button__input visually-hidden ember-text-field ember-view" type="file">
                        <label for="ember670-upload-IMAGE" class="share-media-button__label mvA artdeco-button--circle artdeco-button--tertiary artdeco-button--muted artdeco-button artdeco-button--2">
                          <li-icon aria-hidden="true" type="camera-icon" size="large">
                            <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                              <path d="M21,6H18L16.5,3h-9L6,6H3A1,1,0,0,0,2,7V19a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V7A1,1,0,0,0,21,6ZM7.36,8l1.5-3h6.28l1.5,3H20v2H16.58a5,5,0,0,0-9.16,0H4V8H7.36Zm7.76,4A3.13,3.13,0,1,1,12,8.88,3.13,3.13,0,0,1,15.13,12ZM4,18V11H7.1a5,5,0,1,0,9.8,0H20v7H4Z" class="large-icon" style="fill: currentColor">                                
                              </path>
                            </svg>
                          </li-icon>
                          <span class="share-media-button__a11y-text visually-hidden">Upload images</span>
                        </label>
                      </div>
                      <div id="ember672" class="mr2 button share-media-button tap-target ember-view">
                        <input data-control-name="share.select_video" name="file" camera="camera" accept="video/*,video/mp4,video/avi,video/webm,video/x-ms-wmv,video/x-flv,video/mpeg,video/quicktime" id="ember672-upload-VIDEO" class="share-media-button__input visually-hidden ember-text-field ember-view" type="file">
                        <label for="ember672-upload-VIDEO" class="share-media-button__label mvA artdeco-button--circle artdeco-button--tertiary artdeco-button--muted artdeco-button artdeco-button--2">
                          <li-icon aria-hidden="true" type="video-camera-icon" size="large">
                            <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                              <path d="M21,5.92a1,1,0,0,0-.57.18L17,8.5V7a1,1,0,0,0-1-1H3A1,1,0,0,0,2,7V17a1,1,0,0,0,1,1H16a1,1,0,0,0,1-1V15.5l3.43,2.4a1,1,0,0,0,.57.18,1,1,0,0,0,1-1V6.92A1,1,0,0,0,21,5.92ZM15,16H4V8H15v8Zm2-5.21,3-2.1v6.62l-3-2.1V10.79Z" class="large-icon" style="fill: currentColor">
                              </path>
                            </svg>
                          </li-icon>
                          <span class="share-media-button__a11y-text visually-hidden">Upload video</span>
                        </label>
                      </div>
                    </div>
                    <div id="ember676" class="share-box__actions share-actions mlA ember-view">
                    <button type="submit" data-control-name="share.next" id="ember650" class="share-actions__primary-action artdeco-button artdeco-button--2 artdeco-button--primary ember-view">
                      <span class="artdeco-button__text" style="font-size: 18px; padding: 0 20px; font-weight: normal;">Post</span>
                    </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="share-box__article-cta t-14 t-black--light t-normal">
          <a href="https://www.itrepublic.id" data-control-name="share.publish_post" target="_blank" class="link-without-visited-state hoverable-link-text">Write an article</a> 
            on IT Republic
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

            {{-- POST CONTENT --}}
            <div id="ember482" class="feed-shared-update-v2__description feed-shared-inline-show-more-text ember-view">
              <div dir="ltr" id="ember483" class="feed-shared-update-v2__commentary feed-shared-text ember-view">  
                <div id="ember484" class="feed-shared-text__text-view feed-shared-text-view white-space-pre-wrap break-words ember-view">
                  <span aria-hidden="false">
                    <span id="ember487" class="ember-view"><span>Capgemini is hiring for Social Analysts and Data Integrators across Indonesia, Vietnam and Thailand! For the detailed job descriptions, kindly refer to the following links Indonesia-</span></span><a rel="noopener noreferrer" target="_blank" href="https://lnkd.in/fNUPU2P" id="ember491" class="ember-view">https://lnkd.in/fNUPU2P</a>.<span id="ember511" class="ember-view"><span> Please apply via the job postings above or send your updated CV directly to </span></span><a rel="noopener noreferrer" target="_blank" href="mailto:shireen.wen-hui@capgemini.com" id="ember515" class="ember-view">shireen.wen-hui@capgemini.com</a>
                  </span>
                </div>
              </div>    
            </div>

            {{-- END POST CONTENT --}}

            {{-- POST IMAGE --}}
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
            {{-- END POST IMAGE --}}

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
    </aside>
  </div>
</section>
   
<script>
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#upload_picture_view').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#ember670-upload-IMAGE").change(function(){
      readURL(this);
    });
</script>
<!-- End post Area -->
@endsection
