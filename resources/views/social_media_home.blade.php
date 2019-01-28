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
                          <textarea rows="5" name="post_feeds" class="form-control" placeholder="What do you want to post">{{ old('post_feeds') }}</textarea>
                          <img id="upload_picture_view" src="#" alt="your post image" style="display:none;" />
                          <video width="320" id="upload_video_view" height="240" style="display:none;" controls>
                            <source src="#" type="video/mp4">
                          </video>
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
                        <input data-control-name="share.select_video" name="upload_post_video" camera="camera" accept="video/*,video/mp4,video/avi,video/webm,video/x-ms-wmv,video/x-flv,video/mpeg,video/quicktime" id="ember672-upload-VIDEO" class="share-media-button__input visually-hidden ember-text-field ember-view" type="file">
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
      @foreach ($post_feeds_shared as $feed)
      <div data-id="urn:li:activity:6476696541204701184" id="ember104" class="relative ember-view" style="margin-bottom: 8px;">                      
        <div id="ember106" class="occludable-update ember-view">  
          <div id="ember452" class="feed-shared-update-v2 mh0 Elevation-2dp relative full-height feed-shared-update-v2--e2e ember-view">            
            <div id="ember453" class="display-flex feed-shared-actor display-flex feed-shared-actor--with-control-menu ember-view">
              <a data-control-id="FVizytfnTvu+mZYwIQgMIQ==" data-control-name="actor_picture" target="_self" href="#" id="ember454" class="feed-shared-actor__image app-aware-link ember-view">    
                <span class="js-feed-shared-actor__avatar" data-entity-hovercard-id="urn:li:fs_miniCompany:157240">
                  <div id="ember455" class="feed-shared-actor__avatar ivm-image-view-model ember-view">  
                    <div id="ember456" class="display-flex ivm-view-attr__img-wrapper--use-img-tag ember-view">      
                      <img class="lazy-image ivm-view-attr__img--centered feed-shared-actor__avatar-image EntityPhoto-square-3 loaded" src="{{ $feed->profile_pict }}">
                    </div>
                  </div>
                </span>
              </a>
              <div class="feed-shared-actor__meta">
                <a data-control-id="FVizytfnTvu+mZYwIQgMIQ==" data-control-name="actor" target="_self" href="#" id="ember457" class="feed-shared-actor__meta-link app-aware-link ember-view">    
                  <h3 class="feed-shared-actor__title t-12 t-black--light t-normal">
                    <span class="feed-shared-actor__name t-14 t-black t-bold hoverable-link-text" data-entity-hovercard-id="urn:li:fs_miniCompany:157240"><span dir="ltr">{{ $feed->full_name }}</span></span>
                  </h3>
                  {{-- <span class="feed-shared-actor__description t-12 t-black--light t-normal"><div id="ember458" class="truncate feed-shared-text-view white-space-pre-wrap break-words ember-view"><span aria-hidden="false">1,473,903 followers</span></div></span>
                  <span class="feed-shared-actor__sub-description t-12 t-black--light t-normal"><div id="ember461" class="feed-shared-text-view white-space-pre-wrap break-words ember-view"><span aria-hidden="false"><span id="ember464" class="ember-view"><span>Promoted</span></span></span></div></span> --}}
                </a>
              </div>
            </div>

            {{-- POST CONTENT --}}
            <div id="ember482" class="feed-shared-update-v2__description feed-shared-inline-show-more-text ember-view">
              <div dir="ltr" id="ember483" class="feed-shared-update-v2__commentary feed-shared-text ember-view">  
                <div id="ember484" class="feed-shared-text__text-view feed-shared-text-view white-space-pre-wrap break-words ember-view">
                  <span aria-hidden="false">
                    <span id="ember487" class="ember-view">
                      <span>{{ $feed->post_text }}</span>
                    </span>
                    {{-- <a rel="noopener noreferrer" target="_blank" href="https://lnkd.in/fNUPU2P" id="ember491" class="ember-view">https://lnkd.in/fNUPU2P</a>.<span id="ember511" class="ember-view"><span> Please apply via the job postings above or send your updated CV directly to </span></span><a rel="noopener noreferrer" target="_blank" href="mailto:shireen.wen-hui@capgemini.com" id="ember515" class="ember-view">shireen.wen-hui@capgemini.com</a> --}}
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
                        @if ( $feed->post_picture_src != '')
                          <img class="lazy-image ivm-view-attr__img--centered feed-shared-image__image feed-shared-image__image--constrained loaded" alt="No alt text provided for this image" src="{{ $feed->post_picture_src }}">
                        @else
                          <video class="lazy-image ivm-view-attr__img--centered feed-shared-image__image feed-shared-image__image--constrained loaded" id="upload_video_view" controls>
                            <source src="{{ $feed->post_videos_src }}" type="video/mp4">
                          </video>
                        @endif
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
                  <span aria-hidden="true">
                  @if ($feed->total_likes != "")
                    {{ $feed->total_likes }}
                  @else
                    0
                  @endif 
                  Likes</span><span class="visually-hidden">47 Likes on {:actorName} post</span>
                </button>
              </li>
              <li class="feed-shared-social-counts__item">
                <button class="feed-shared-social-counts__num-comments feed-shared-social-counts__count-value t-12 t-black--light t-normal hoverable-link-text" data-control-name="comments_count" data-ember-action="" data-ember-action-525="525">
                  <span aria-hidden="true">
                  @if ($feed->total_comment != "")
                    {{ $feed->total_comment }}
                  @else
                    0
                  @endif Comments</span>
                  <span class="visually-hidden">1 Comment on {:actorName} post</span>
                </button>
              </li>
            </ul>
            <div id="ember526" class="ember-view"><div id="ember527" class="ember-view">
            </div>
          </div>
          <div id="ember528" class="feed-shared-social-actions feed-shared-social-action-bar ember-view">            
            <button id="img{{ $feed->post_id }}" name="img_like" class="like-button button like feed-shared-social-action-bar__action-btn ember-view"> 
            <?php $count = 0 ?> 
              @if ($feed->user_likes_id != null) 
                @foreach(explode('~', $feed->user_likes_id) as $user_id) 
                  @if ($user_id == session('user_id'))
                   <?php $count = 1 ?> 
                  @endif
                @endforeach
              @endif
              @if ($count == 1 )          
                <img class="like-button-empty" 
                  alt="No alt text provided for this image" id="like_img{{ $feed->post_id }}" src="{{ asset('public/LIKEFILL.png') }}">
              @else
                <img class="like-button-empty" 
                  alt="No alt text provided for this image" id="like_img{{ $feed->post_id }}" src="{{ asset('public/LIKEEMPTY.png') }}">
              @endif
              <span>Like</span>            
            </button>
            <button name="addComment" id="list{{ $feed->post_id }}" class="button comment feed-shared-social-action-bar__action-btn social-action-btn ember-view">
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
            <form action="{{ route('share_post') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input id="post_id" name="post_id" type="hidden" value="{{ $feed->post_id }}">
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
            </form>
          </div>            
          <div class="feed-shared-update-v2__comments-container display-flex flex-column-reverse">
            <div class="table-responsive" >
              <table class="table table-bordered comment-table" id="comment_list{{ $feed->post_id }}" style="display:none">
                <tr class="skill-row" >
                  <td>
                    <input type="text" name="comment" id="comment_text{{ $feed->post_id }}" value="" class="form-control">
                  </td>
                  <td>
                    <button id="comment_button{{ $feed->post_id }}" class="button-post-comment btn btn-sm btn-info">Post</button>
                  </td>
                </tr>

                @if ($feed->user_comment_id != "")
                  @foreach(explode('~', $feed->user_comment_id) as $user_comment) 
                    <tr>
                      <td colspan="2">
                        <p>
                          <?php list($profile_pict, $comment) = explode(':', $user_comment); ?>
                            <img class="lazy-image ivm-view-attr__img--centered feed-shared-actor__avatar-image EntityPhoto-square-3 loaded" src="{{ $profile_pict }}">
                          <?php echo $comment; ?>  
                        </p>
                      </td>
                    </tr>
                  @endforeach
                @endif                

              </table>
          </div>
          </div>
        </div>
      </div>
      </div>
      @endforeach
    </div>

    {{-- RENDER ADD TO YOUR FEEDS --}}
    @include('layout.add-feeds-aside')
    {{-- END RENDER ADD TO YOUR FEEDS --}}
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
$("button[name=img_like]").click(function(){
  var key_src = "LIKEEMPTY";
  var id_img = $(this).prop('id');
  if ( $("#like_" + id_img).attr("src").toLowerCase().indexOf(key_src.toLowerCase()) != -1) {
    $("#like_" + id_img).attr('src','{{ asset("public/LIKEFILL.png") }}');
    var post_id = id_img.replace("img", "");
    var jf_user_id = {{ @session('user_id') }};
    $.post('{{ route("confirm_like") }}', {"post_id": post_id, "jf_user_id": jf_user_id})
    .then(function(response){
            if(response.message == 'OK') {
                window.location.reload();
            }
            else {
            }
        });
  }else{
    $("#like_" + id_img).attr('src','{{ asset("public/LIKEEMPTY.png") }}');
    var post_id = id_img.replace("img", "");
    var jf_user_id = {{ @session('user_id') }};
    $.post('{{ route("confirm_unlike") }}', {"post_id": post_id, "jf_user_id": jf_user_id})
    .then(function(response){
            if(response.message == 'OK') {
                window.location.reload();
            }
            else {
                alert(response.message);
            }
        });
  }

})

$("button[name=addComment]").on("click", function() {
    var id_com = $(this).prop('id');
    var post_id = id_com.replace("list", "");
    
    var jf_user_id = {{ @session('user_id') }};
    
    if($('#comment_list'+post_id).css('display') == 'none'){ 
        $('#comment_list'+post_id).css('display', "");
        $("#comment_button"+post_id).on("click", function() {
          var comment_text = $('#comment_text'+post_id).val();

          $.post('{{ route("add_comment") }}', {"post_id": post_id, "jf_user_id": jf_user_id, "comment_text": comment_text})
          .then(function(response){
            if(response.message == 'OK') {
                window.location.reload();
            }
            else {
                alert(response.message);
            }
          });
        })
      } else { 
        $('#comment_list'+post_id).css('display', "none");
        
      }
    
  });


</script>
<!-- End post Area -->
@endsection
