<aside class="left-rail" role="presentation">
    <div id="ember731" class="sticky stuck ember-view" style="height: 778px; width: 216px; margin: 0px auto;">          
      <div class="left-rail-container">
        <div id="ember732" class="mn-connections-summary container-with-shadow ember-view">
          <div class="pt4">
            <div id="ember733" class="mn-origami-rail-card--fade-in ember-view">
              <section id="ember734" class="mn-origami-rail-card artdeco-card ember-view">
                <div class="mn-origami-rail-card__summary">
                  <a data-control-name="connections" href="{{ route('my_connections') }}" id="ember903" class="js-mn-origami-rail-card__connection-count link-without-hover-state ember-view">            
                    <h3 class="mn-origami-rail-card__count t-20 t-black t-normal" aria-label="See all connections">{{ number_format($connections) }}</h3>
                  </a>
                  <h3 class="t-16 t-black t-normal" aria-hidden="true">
                    Connections
                  </h3>

                  @if($connections > 0)
                  <a data-control-name="connections" href="{{ route('my_connections') }}" id="ember904" class="link-without-hover-state text-align-center ember-view">              
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

                  <a href="{{ route('my_connections') }}" style="border: 1px solid #333; color: #333; padding: 8px; margin-top: 20px;">View Connections</a>
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
                    <a data-control-name="connections" href="{{ route('joined_groups') }}" id="ember903" class="js-mn-origami-rail-card__connection-count link-without-hover-state ember-view">            
                      <h3 class="mn-origami-rail-card__count t-20 t-black t-normal" aria-label="See all connections">{{ number_format($groups) }}</h3>
                    </a>
                    <h3 class="t-16 t-black t-normal" aria-hidden="true">
                      Groups
                    </h3>
                    <a data-control-name="connections" href="{{ route('joined_groups') }}" id="ember904" class="link-without-hover-state text-align-center ember-view">              
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
                    <a href="{{ route('joined_groups') }}" style="border: 1px solid #333; color: #333; padding: 8px; margin-top: 20px;">View Joined Groups</a>
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
                    <a data-control-name="connections" href="{{ route('my_groups') }}" id="ember903" class="js-mn-origami-rail-card__connection-count link-without-hover-state ember-view">            
                      <h3 class="mn-origami-rail-card__count t-20 t-black t-normal" aria-label="See all connections">{{ number_format($owned_groups) }}</h3>
                    </a>
                    <h3 class="t-16 t-black t-normal" aria-hidden="true">
                      Owned Groups
                    </h3>
                    <a data-control-name="connections" href="{{ route('my_groups') }}" id="ember904" class="link-without-hover-state text-align-center ember-view">              
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
                    <a href="{{ route('my_groups') }}" style="border: 1px solid #333; color: #333; padding: 8px; margin-top: 20px;">View My Groups</a>
                  @endif
                </div>

                <hr class="artdeco-divider mv0">
                <div class="mn-origami-rail-card__summary">
                  <a href="{{ route('create_group') }}" style="border: 1px solid #333; color: #fff; background-color: #333; padding: 5px 10px;">Create Groups</a>
                  <a href="{{ route('friends_connect') }}" style="border: 1px solid #333; color: #fff; background-color: #333; padding: 5px 10px; margin-top: 8px;">Friends & Connections</a>
                </div>

              </section>
            </div>
          </div>
        </div>          
      </div>
    </div>
  </aside>