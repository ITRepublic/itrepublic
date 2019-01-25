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
              <button type="button" data-target="#sidebar-follow-{{ $user->finder_id }}" data-toggle="modal" data-control-name="sidebar_follow_actor_follow_toggle" aria-pressed="false" aria-label="Follow" class="feed-follows-module-recommendation__follow-btn button-secondary-small-muted ml2 follow ember-view">
                <span aria-hidden="true" style="font-size: 14px; padding-top: -10px;">Follow</span>
              </button>
            </li>
            @endif

            <!-- Modal -->
            <form action="{{ route('follow_connection', $user->finder_id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal fade" id="sidebar-follow-{{ $user->finder_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title">Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                          Are you sure want to follow '{{ $user->full_name }}' ?
                        </div>
                        <div class="modal-footer">
                          <button type="button" data-dismiss="modal" class="btn btn-primary" style="background-color: #fff; color: #333; border: 1px solid #333; font-size: 14px; padding: 5px 15px;">No</button>
                          <button type="submit" class="btn btn-primary" style="background-color: #333; color: #fff; border: 1px solid #333; font-size: 14px; padding: 5px 15px;">Yes</button>
                        </div>
                    </div>
                    </div>
                </div>
              </form>
            @endforeach
          </ul>
          <a data-control-name="sidebar_follow_view_recommendations" href="{{ route('friends_connect') }}" id="ember2506" class="feed-follows-module__view-all link-without-hover-visited ember-view">      
            View all recommendation
          </a>  
        </div>
      </div>
    </div>
  </aside>