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
            <div id="groups" class="tab-pane fade in active show">
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
                                <div class="member-insights member-insights--discovery-card-center-align"></div>
                            </div>
                            <footer class="mt2 mhA text-align-center" style="margin-bottom: 20px;">
                                <a href="#" data-toggle="modal" data-target="#edit_group_{{ $list->group_friends_id }}" style="background-color: #fff; color: #333; border: 1px solid #333; font-size: 14px; padding: 5px 15px;" class="js-mn-discovery-group-card__action-btn mn-discovery-group-card__action-btn--extra-padding artdeco-button artdeco-button--1 artdeco-button--secondary ember-view">
                                <span class="artdeco-button__text">Edit</span>
                                </a>
                            </footer>
                            <footer class="mt2 mhA text-align-center" style="margin-bottom: 20px;">
                                <a href="{{ route('group_discussion') }}?group_id={{ $list->group_friends_id }}" style="background-color: #fff; color: #333; border: 1px solid #333; font-size: 14px; padding: 5px 15px;" class="js-mn-discovery-group-card__action-btn mn-discovery-group-card__action-btn--extra-padding artdeco-button artdeco-button--1 artdeco-button--secondary ember-view">
                                  <span class="artdeco-button__text">View Discussion</span>
                                </a>
                            </footer>
                        </section>
                    </div>
                    </li>

                    <!-- Modal -->
                    <form action="{{ route('update_my_groups', $list->group_friends_id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal fade" id="edit_group_{{ $list->group_friends_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title">Edit Group</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center">
                                    <img src="{{ $list->group_image }}" class="img-fluid" width="200" alt="">
                                </div>
                                <div class="form-group">
                                    <label for="">Group's Name</label>
                                    <input type="text" name="group_name" class="form-control" value="{{ $list->group_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Change group's image <h6>fill if you want to change group's image</h6></label>
                                    <input type="file" name="group_image" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" style="background-color: #333; color: #fff; border: 1px solid #333; font-size: 14px; padding: 5px 15px;">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    </form>
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