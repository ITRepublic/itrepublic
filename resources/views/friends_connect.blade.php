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
      <div id="ember731" class="sticky stuck ember-view" style="height: 778px; width: 216px; margin: 0px auto;">          
        <div class="left-rail-container">
          <div id="ember732" class="mn-connections-summary container-with-shadow ember-view">
            <div class="pt4">
              <div id="ember733" class="mn-origami-rail-card--fade-in ember-view">
                <section id="ember734" class="mn-origami-rail-card artdeco-card ember-view">
                  <div class="mn-origami-rail-card__summary">
                    <a data-control-name="connections" href="/mynetwork/invite-connect/connections/" id="ember903" class="js-mn-origami-rail-card__connection-count link-without-hover-state ember-view">            
                      <h3 class="mn-origami-rail-card__count t-20 t-black t-normal" aria-label="See all 35 connections">35</h3>
                    </a>
                    <h3 class="t-16 t-black t-normal" aria-hidden="true">
                      Connections
                    </h3>
                    <a data-control-name="connections" href="/mynetwork/invite-connect/connections/" id="ember904" class="link-without-hover-state text-align-center ember-view">              
                      <div id="ember905" class="mn-origami-rail-card__social-proof mt1 ember-view">
                        <div class="mn-social-proof">
                          <div class="mn-social-proof__facepiles">
                            <img class="lazy-image mn-social-proof__profile-image EntityPhoto-circle-2 loaded" alt="Marhamni" height="40" width="40" src="https://media.licdn.com/dms/image/C4E03AQEpGlL9ZfcQaQ/profile-displayphoto-shrink_100_100/0?e=1550707200&amp;v=beta&amp;t=PjMV0ezOt0w_YVtes0YzwsX4Mbj4BQa9XEWvQhtlkrY">
                            <img class="lazy-image mn-social-proof__profile-image EntityPhoto-circle-2 loaded" alt="Joshua" height="40" width="40" src="https://media.licdn.com/dms/image/C5103AQEujpi2euhuYg/profile-displayphoto-shrink_100_100/0?e=1550707200&amp;v=beta&amp;t=xSKlYKD80SF1LJlI9mXj3H6fbfDjjWXXkM5tlZ-9B98">
                            <img class="lazy-image mn-social-proof__profile-image EntityPhoto-circle-2 loaded" alt="Shirley" height="40" width="40" src="https://media.licdn.com/dms/image/C4D03AQEWYoVENNMmrQ/profile-displayphoto-shrink_100_100/0?e=1550707200&amp;v=beta&amp;t=xK2kBCfRRoSWZtGd4ia7p6o8zvG6eHkmbXOgxJBiT-c">
                          </div>
                        </div>
                      </div>
                    </a>      
                   </div>


                  <hr class="artdeco-divider mv0">
                  <div class="mn-origami-rail-card__summary">
                      <div class="mn-origami-rail-card__illustration-group illustration-56 mb1">
                      </div>
                      <h3 class="t-16 t-black t-normal">No groups</h3>
                      <p class="t-14 t-black--light t-normal text-align-center">
                        Once you join groups you will see them here
                      </p>
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
              <button data-direction="previous" aria-hidden="true" tabindex="-1" class="artdeco-transport artdeco-transport-hidden" style="height: 39px; display: none;">
                <li-icon aria-hidden="true" type="chevron-left-icon" size="small">
                  <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                    <path d="M7,8l4,5.9L9.5,15,5.3,8.8a1.22,1.22,0,0,1,0-1.6L9.5,1,11,2.1Z" class="small-icon" style="fill-opacity: 1">
                    </path>
                  </svg>
                </li-icon>
              </button>
              <button data-direction="next" aria-hidden="true" tabindex="-1" class="artdeco-transport artdeco-transport-hidden" style="height: 39px; display: none;">
                <li-icon aria-hidden="true" type="chevron-right-icon" size="small">
                  <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                    <path d="M9,8L5,2.07,6.54,1l4.2,6.15a1.5,1.5,0,0,1,0,1.69L6.54,15,5,13.93Z" class="small-icon" style="fill-opacity: 1">
                    </path>
                  </svg>
                </li-icon>
              </button>
              <ul class="nav nav-tabs">
                <li><a data-toggle="tab" class="active show" href="#people">People</a></li>
                <li><a data-toggle="tab" href="#groups">Groups</a></li>
              </ul>
            </div>
            <div class="tab-content">
              <div id="people" class="tab-pane fade in active show">
                <ul id="ember1014" class="js-mn-discovery-entity-list__pymk mn-discovery-entity-list ember-view">        
                  <li id="ember1015" class="mn-discovery-entity-card mn-discovery-entity-card--33%-width ember-view">  
                    <div id="ember1016" class="ember-view">
                      <section id="ember1017" class="mn-discovery-person-card mn-discovery-person-card--center-align artdeco-card ember-view">
                        <div class="text-align-center flex-1">
                          <div class="text-align-center">
                            <a data-control-name="pymk_profile" href="/in/malika-rahma-29b97475/" id="ember1018" class="mn-discovery-person-card__image ember-view">          
                              <img class="lazy-image EntityPhoto-circle-7 loaded" alt="Malika Rahma’s picture" src="https://media.licdn.com/dms/image/C4E03AQHfsq2Ie3qXNA/profile-displayphoto-shrink_800_800/0?e=1550707200&amp;v=beta&amp;t=8qwcdHaS5zjWR1LyBFQ6afNhGplvZu0LW84UvA0Ap1o">
                            </a>
                            <a data-control-name="pymk_profile" href="/in/malika-rahma-29b97475/" id="ember1019" class="mn-discovery-person-card__link mn-discovery-person-card__link--center-align ember-view">          
                              <span class="visually-hidden">Member’s name</span>
                              <span class="mn-discovery-person-card__name t-14 t-black t-bold">Malika Rahma</span>
                              <span class="visually-hidden">Member’s occupation</span>
                              <span class="mn-discovery-person-card__occupation t-12 t-black--light t-normal">HR Generalist at Link Integrasi, We are HIRING!</span>
                            </a>      
                          </div>
                          <div class="member-insights member-insights--discovery-card-center-align">
                            <button class="member-insights__btn t-12 t-black--light t-normal" data-ember-action="" data-ember-action-1021="1021">
                                <span class="member-insights__icon svg-icon-wrap">
                                  <li-icon aria-hidden="true" type="in-common-icon" size="small">
                                    <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                                      <path d="M11,3C9.9,3,8.9,3.4,8,4C5.8,2.3,2.7,2.8,1,5s-1.2,5.3,1,7c0.9,0.6,1.9,1,3,1s2.1-0.4,3-1c2.2,1.7,5.3,1.2,7-1s1.2-5.3-1-7C13.1,3.4,12.1,3,11,3z M1.9,8c0-1.7,1.4-3.1,3.1-3.1c0.6,0,1.2,0.2,1.7,0.5c-1,1.6-1,3.6,0,5.2c-1.4,1-3.4,0.6-4.3-0.8C2.1,9.2,1.9,8.6,1.9,8z M11,11.1c-0.6,0-1.2-0.2-1.7-0.5c1-1.6,1-3.6,0-5.2c1.4-1,3.4-0.6,4.3,0.9s0.6,3.4-0.9,4.3C12.2,10.9,11.6,11.1,11,11.1z" class="small-icon" style="fill-opacity: 1">
                                      </path>
                                    </svg>
                                  </li-icon>
                                </span>
                                <span class="member-insights__count">3 mutual connections</span>
                            </button>
                          </div>
                        </div>
                        <footer class="mt2 mhA text-align-center">
                          <button data-control-name="invite" aria-label="Invite Malika Rahma to connect" id="ember1022" class="js-mn-discovery-person-card__action-btn mn-discovery-person-card__action-btn--extra-padding artdeco-button artdeco-button--1 artdeco-button--secondary ember-view">
                            <span class="artdeco-button__text">Connect</span>
                          </button>
                        </footer>
                      </section>
                    </div>
                  </li>
                  <li id="ember1025" class="mn-discovery-entity-card mn-discovery-entity-card--33%-width ember-view">  
                    <div id="ember1026" class="ember-view">
                      <section id="ember1027" class="mn-discovery-person-card mn-discovery-person-card--center-align artdeco-card ember-view">
                        <div class="text-align-center flex-1">
                          <div class="text-align-center">
                            <a data-control-name="pymk_profile" href="/in/dennis-filemon-a7a27a116/" id="ember1028" class="mn-discovery-person-card__image ember-view">          
                              <img class="lazy-image EntityPhoto-circle-7 loaded" alt="Dennis Filemon’s picture" src="https://media.licdn.com/dms/image/C5103AQGW7JGokALAgw/profile-displayphoto-shrink_800_800/0?e=1550707200&amp;v=beta&amp;t=QMnQPBKSYHQ9vk3QOyY4GvemRZ7aizN96X_g8eprPGg">
                            </a>
                            <a data-control-name="pymk_profile" href="/in/dennis-filemon-a7a27a116/" id="ember1029" class="mn-discovery-person-card__link mn-discovery-person-card__link--center-align ember-view">          
                              <span class="visually-hidden">Member’s name</span>
                              <span class="mn-discovery-person-card__name t-14 t-black t-bold">Dennis Filemon</span>
                              <span class="visually-hidden">Member’s occupation</span>
                              <span class="mn-discovery-person-card__occupation t-12 t-black--light t-normal">Experienced Software Engineer, Front End Developer, Web Designer</span>
                            </a>      
                          </div>
                          <div class="member-insights member-insights--discovery-card-center-align">
                            <div class="t-12 t-black--light t-normal">
                              <span class="member-insights__icon svg-icon-wrap">
                                <li-icon aria-hidden="true" type="school-icon" size="small">
                                  <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                                    <path d="M15,8V5.05a1.25,1.25,0,0,0-.72-1.13L8,1,1.72,3.92A1.25,1.25,0,0,0,1,5.05V8H3v2H2a1,1,0,0,0-1,1v4H15V11a1,1,0,0,0-1-1H13V8h2Zm-2,5H3V12H13v1ZM5,10V8H7v2H5Zm4,0V8h2v2H9ZM3,6V5.39L8,3.07l5,2.33V6H3Z" class="small-icon" style="fill-opacity: 1">
                                    </path>
                                  </svg>
                                </li-icon>
                              </span>
                              <span class="member-insights__info">Universitas Bina Nusantara (Binus)</span>
                            </div>
                          </div>
                        </div>
                        <footer class="mt2 mhA text-align-center">
                          <button data-control-name="invite" aria-label="Invite Dennis Filemon to connect" id="ember1031" class="js-mn-discovery-person-card__action-btn mn-discovery-person-card__action-btn--extra-padding artdeco-button artdeco-button--1 artdeco-button--secondary ember-view">
                            <span class="artdeco-button__text">Connect</span>
                          </button>
                        </footer>
                      </section>
                    </div>
                  </li>
                  <li id="ember1034" class="mn-discovery-entity-card mn-discovery-entity-card--33%-width ember-view">  
                    <div id="ember1035" class="ember-view">
                      <section id="ember1036" class="mn-discovery-person-card mn-discovery-person-card--center-align artdeco-card ember-view">
                        <div class="text-align-center flex-1">
                          <div class="text-align-center">
                            <a data-control-name="pymk_profile" href="/in/steviany-santoso-0816ab82/" id="ember1037" class="mn-discovery-person-card__image ember-view">          
                              <img class="lazy-image EntityPhoto-circle-7 loaded" alt="steviany santoso’s picture" src="https://media.licdn.com/dms/image/C4E03AQHVcnpj1lAE0g/profile-displayphoto-shrink_800_800/0?e=1550707200&amp;v=beta&amp;t=hNIBnhfR4h5oQzjarCOzdvJ970NHJeW5EKJKLQyeZ3c">
                            </a>
                            <a data-control-name="pymk_profile" href="/in/steviany-santoso-0816ab82/" id="ember1038" class="mn-discovery-person-card__link mn-discovery-person-card__link--center-align ember-view">          
                              <span class="visually-hidden">Member’s name</span>
                              <span class="mn-discovery-person-card__name t-14 t-black t-bold">steviany santoso</span>
                              <span class="visually-hidden">Member’s occupation</span>
                              <span class="mn-discovery-person-card__occupation t-12 t-black--light t-normal">Mahasiswi di Universitas Bina Nusantara (Binus)</span>
                            </a>      
                          </div>
                          <div class="member-insights member-insights--discovery-card-center-align">
                            <div class="t-12 t-black--light t-normal">
                              <span class="member-insights__icon svg-icon-wrap">
                                <li-icon aria-hidden="true" type="school-icon" size="small">
                                  <svg viewBox="0 0 24 24" width="24px" height="24px" x="0" y="0" preserveAspectRatio="xMinYMin meet" class="artdeco-icon" focusable="false">
                                    <path d="M15,8V5.05a1.25,1.25,0,0,0-.72-1.13L8,1,1.72,3.92A1.25,1.25,0,0,0,1,5.05V8H3v2H2a1,1,0,0,0-1,1v4H15V11a1,1,0,0,0-1-1H13V8h2Zm-2,5H3V12H13v1ZM5,10V8H7v2H5Zm4,0V8h2v2H9ZM3,6V5.39L8,3.07l5,2.33V6H3Z" class="small-icon" style="fill-opacity: 1">
                                    </path>
                                  </svg>
                                </li-icon>
                              </span>
                              <span class="member-insights__info">Universitas Bina Nusantara (Binus)</span>
                            </div>
                          </div>
                        </div>
                        <footer class="mt2 mhA text-align-center">
                          <button data-control-name="invite" aria-label="Invite steviany santoso to connect" id="ember1040" class="js-mn-discovery-person-card__action-btn mn-discovery-person-card__action-btn--extra-padding artdeco-button artdeco-button--1 artdeco-button--secondary ember-view">
                            <span class="artdeco-button__text">Connect</span>
                          </button>
                        </footer>
                      </section>
                      <div id="ember1041" class="ember-view"><div id="ember1042" class="ember-view">
                      </div>
                    </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div id="groups" class="tab-pane fade">
                <ul id="ember1044" class="js-mn-discovery-entity-list__group mn-discovery-entity-list ember-view">            
                  <li id="ember1437" class="mn-discovery-entity-card mn-discovery-entity-card--33%-width ember-view">
                    <div id="ember1438" class="ember-view">
                      <section id="ember1439" class="mn-discovery-group-card mn-discovery-group-card--center-align artdeco-card ember-view">
                        <div class="text-align-center flex-1">
                          <div class="text-align-center">
                            <a data-control-name="group_content" href="/groups/2115120/" id="ember1440" class="mn-discovery-group-card__image-link ember-view">          
                              <img class="lazy-image mn-discovery-group-card__image Elevation-0dp EntityPhoto-square-7 loaded" alt="Human Resources | Recruiting for Startups picture" src="https://media.licdn.com/dms/image/C4D07AQHSFRg0JfSlVA/group-logo_image-shrink_92x92/0?e=1545141600&amp;v=beta&amp;t=78ZhOvUmyQmLyx2KPkkriV8HmX5EvQ-03gpR-hO2RTw">
                            </a>
                            <a data-control-name="group_content" href="/groups/2115120/" id="ember1441" class="mn-discovery-group-card__link mn-discovery-group-card__link--center-align ember-view">          <span class="visually-hidden">Group name</span>
                              <span class="mn-discovery-group-card__name t-14 t-black t-bold ">Human Resources | Recruiting for Startups</span>
                              <span class="mn-discovery-group-card__members t-12 t-black--light t-normal ">123,704 Members</span>
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
                              <span class="member-insights__count">1 connection has joined</span>
                            </div>
                          </div>
                        </div>
                        <footer class="mt2 mhA text-align-center">
                          <button data-control-name="join" aria-label="Join group Human Resources | Recruiting for Startups" id="ember1443" class="js-mn-discovery-group-card__action-btn mn-discovery-group-card__action-btn--extra-padding artdeco-button artdeco-button--1 artdeco-button--secondary ember-view">
                            <span class="artdeco-button__text">Join</span>
                          </button>
                        </footer>
                      </section>
                    </div>
                  </li>
                  <li id="ember1445" class="mn-discovery-entity-card mn-discovery-entity-card--33%-width ember-view">
                    <div id="ember1446" class="ember-view">
                      <section id="ember1447" class="mn-discovery-group-card mn-discovery-group-card--center-align artdeco-card ember-view">
                        <div class="text-align-center flex-1">
                          <div class="text-align-center">
                            <a data-control-name="group_content" href="/groups/1880187/" id="ember1448" class="mn-discovery-group-card__image-link ember-view">          
                              <img class="lazy-image mn-discovery-group-card__image Elevation-0dp EntityPhoto-square-7 loaded" alt="Jobs in the game industry / Careers in Video Games picture" src="https://media.licdn.com/dms/image/C5607AQG45AqAPOnLRA/group-logo_image-shrink_92x92/0?e=1545141600&amp;v=beta&amp;t=SuYGV1KvMb8Kh7Kf1eXzCTyHf7zct973IlyDDGmvwHY">
                            </a>
                            <a data-control-name="group_content" href="/groups/1880187/" id="ember1449" class="mn-discovery-group-card__link mn-discovery-group-card__link--center-align ember-view">          
                              <span class="visually-hidden">Group name</span>
                              <span class="mn-discovery-group-card__name t-14 t-black t-bold ">Jobs in the game industry / Careers in Video Games</span>
                              <span class="mn-discovery-group-card__members t-12 t-black--light t-normal ">15,465 Members</span>
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
                              <span class="member-insights__count">1 connection has joined</span>
                            </div>
                          </div>
                        </div>
                        <footer class="mt2 mhA text-align-center">
                          <button data-control-name="join" aria-label="Join group Jobs in the game industry / Careers in Video Games" id="ember1451" class="js-mn-discovery-group-card__action-btn mn-discovery-group-card__action-btn--extra-padding artdeco-button artdeco-button--1 artdeco-button--secondary ember-view">
                            <span class="artdeco-button__text">Join</span>
                          </button>
                        </footer>
                      </section>
                    </div>
                  </li>
                  <li id="ember1437" class="mn-discovery-entity-card mn-discovery-entity-card--33%-width ember-view">
                    <div id="ember1438" class="ember-view">
                      <section id="ember1439" class="mn-discovery-group-card mn-discovery-group-card--center-align artdeco-card ember-view">
                        <div class="text-align-center flex-1">
                          <div class="text-align-center">
                            <a data-control-name="group_content" href="/groups/2115120/" id="ember1440" class="mn-discovery-group-card__image-link ember-view">          
                              <img class="lazy-image mn-discovery-group-card__image Elevation-0dp EntityPhoto-square-7 loaded" alt="Human Resources | Recruiting for Startups picture" src="https://media.licdn.com/dms/image/C4D07AQHSFRg0JfSlVA/group-logo_image-shrink_92x92/0?e=1545141600&amp;v=beta&amp;t=78ZhOvUmyQmLyx2KPkkriV8HmX5EvQ-03gpR-hO2RTw">
                            </a>
                            <a data-control-name="group_content" href="/groups/2115120/" id="ember1441" class="mn-discovery-group-card__link mn-discovery-group-card__link--center-align ember-view">          <span class="visually-hidden">Group name</span>
                              <span class="mn-discovery-group-card__name t-14 t-black t-bold ">Human Resources | Recruiting for Startups</span>
                              <span class="mn-discovery-group-card__members t-12 t-black--light t-normal ">123,704 Members</span>
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
                              <span class="member-insights__count">1 connection has joined</span>
                            </div>
                          </div>
                        </div>
                        <footer class="mt2 mhA text-align-center">
                          <button data-control-name="join" aria-label="Join group Human Resources | Recruiting for Startups" id="ember1443" class="js-mn-discovery-group-card__action-btn mn-discovery-group-card__action-btn--extra-padding artdeco-button artdeco-button--1 artdeco-button--secondary ember-view">
                            <span class="artdeco-button__text">Join</span>
                          </button>
                        </footer>
                      </section>
                    </div>
                  </li>
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