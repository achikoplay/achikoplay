<?php include_once 'metahead.php'; ?>
<?php include_once 'header.php';?>
    <main>
      <div class="ticker">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-3 col-4 bg-warning">&nbsp;</div>
            <div class="col-sm-9 col-8 nunitoSemiBold">&nbsp;</div>
          </div>
        </div>
        <div class="ticker__section">
          <div class="container ticker__container">
            <div class="row">
              <div class="col-sm-3 col-4 bg-warning ">
                <div class="text-right nunitoBold">
                  Whats hot
                </div>
              </div>
              <div class="col-sm-9 col-8 nunitoSemiBold">
                <div class="ticker__container--viewport">
                    <ul class="ticker__container--list" data-ticker="list">
                        <li class="ticker__container--item" data-ticker="item"><a class="d-inline-block text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a></li>
                        <li class="ticker__container--item" data-ticker="item"><a class="d-inline-block text-dark">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</a> </li>
                        <li class="ticker__container--item" data-ticker="item"> <a class="d-inline-block text-dark">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</a> </li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Article-->
      <article>
        <div class="maincontent">
          
          <div class="maincontent__article--banner">
            <img src="asset/static/image_profile.png" class="img-fluid" />
          </div>
          
          <div class="container">
          <div class="maincontent__profile--wrapper">
            <div class="row">
              <div class="col-md-6 col-12 mb-3">
                <div class="d-flex">
                  <div class="profile__icon">
                    <img src="<?php echo url('asset/static/foto-profilesetting.png'); ?>" class="rounded-circle" />
                  </div>
                  <div class="d-flex">
                  <div class="profile__name">
                    <h4>Mr. Brownstone</h4>
                    <span class="profile__position">CONTRIBUTOR</span>
                  </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6 d-flex">
                  <div class="flex-fill margin-auto text-center profile__follow">
                    <h4>5.3 K</h4>
                    <div class="font-weight-light"><small>Followers</small></div>
                  </div>
                  <div class="flex-fill margin-auto text-center profile__follow">
                    <h4>500</h4>
                    <div class="font-weight-light"><small>Following</small></div>
                  </div>
              </div>
              <div class="col-md-3 col-6 d-flex">
                <div class="mv-auto">
                  <a href="#" class="btn btn-default bg-grey pl-5 pr-5">Unfollow</a>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-12 font-weight-bold">About Me:</div>
              <div class="col-md-9 font-weight-light">
                I like to receive and deal with challenging tasks. I am a very enthusiastic student and I think this is a strong point of mine. My friends say that I am a very funny and an interesting girl with a good sense of humor. As soon as I meet new people who are happy to meet me, I feel extremely comfortable with them.
              </div>
              <div class="col-md-3">
              <div>Follow me @</div>
              <div class="profile__social">
                <a href="#" class="profile__social--facebook"></a>
                <a href="#" class="profile__social--twitter"></a>
                <a href="#" class="profile__social--youtube"></a>
                <a href="#" class="profile__social--twitch"></a>
              </div>
              </div>
            </div>
          </div>
          </div>
          
          <div class="maincontent__profile mt-5">

            <div class="container maincontent__widget--community__wrapbox relative mt-3">
              <div class="row">
                <div class="col-md-12">
                  <div class="clearfix mb-2px">
                    <h5 class="float-left">My Community</h5>
                    <a href="createcommunity.php" class="btn btn-warning btn-sm float-right">Create Community</a>
                  </div>
                  <div class="row mt-3">
                    <?php for ($ij=1; $ij < 7 ; $ij++) { ?>
                      <div class="col-lg-4 col-md-6 col-12 mb-30px">
                        <div class="maincontent__widget--community--box w-100 h-100">
                          <div class="d-flex">
                            <div class="maincontent__widget--community--box__image circle backgroundCoverCenter" style="background-image: url('<?php echo url('asset/static/community/'.$ij.'.jpg')?>')"></div>
                            <div class="maincontent__widget--community--box__text">
                              <div class="d-flex mb-5px">
                                <div>
                                  <div class="checkeds circle text-warning"></div>
                                </div>&nbsp;&nbsp;
                                <div>
                                  <a href="community_overview.php" class="text-white">Community WSAD</a>
                                </div>
                              </div>
                              <div class="small">1256 Members</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php }?>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix d-md-block d-none">&nbsp;</div>

            <div class="container maincontent__widget--community__wrapbox relative mt-3">
              <div class="row">
                <div class="col-md-12">
                  <div class="clearfix mb-2px">
                    <h5 class="">Community Owner</h5>
                  </div>
                  <div class="row mt-3">
                    <?php for ($ij=1; $ij < 3 ; $ij++) { ?>
                      <div class="col-lg-4 col-md-6 col-12 mb-30px">
                        <div class="maincontent__widget--community--box w-100 h-100">
                          <div class="d-flex">
                            <div class="maincontent__widget--community--box__image circle backgroundCoverCenter" style="background-image: url('<?php echo url('asset/static/community/'.$ij.'.jpg')?>')"></div>
                            <div class="maincontent__widget--community--box__text">
                              <div class="d-flex mb-5px">
                                <div>
                                  <div class="checkeds circle text-warning"></div>
                                </div>&nbsp;&nbsp;
                                <div>
                                  <a href="community_overview.php" class="text-white">Community WSAD</a>
                                </div>
                              </div>
                              <div class="small">1256 Members</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php }?>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix d-md-block d-none">&nbsp;</div>

            <div class="container text-center">
              <a href="createtournament.php" class="btn btn-warning btn-create-tournament">CREATE TOURNAMENT</a>
            </div>
            <br/>
            
            <?php include_once 'myteam_widget.php'; ?>
            <?php include_once 'myparty_widget.php'; ?>

            <div class="container maincontent__recent--activity relative mt-5">
            <div class="row">
            <div class="col-md-12">
                <h5 class="font-weight-light">Recent Activity</h5>
            </div>
            </div>

            <div class="recent__activity--wrapper">

                <div class="timeline__wrapper row active">
                  <div class="col-2 timeline__date">
                    2 days ago
                  </div>
                  <div class="col-10 timeline__content">
                    <div class="timeline__content--item">
                     <div class="row">
                      <div class="col-9">
                        <h4 class="font-weight-light color-grey">Tournament Jakarta Open</h4>
                        <p class="color-grey">Closed Qualification</p>
                      </div>
                      <div class="col-3 text-right">
                        <p class="color-grey">15:09</p>
                      </div>
                     </div>
                     <div class="d-flex pt-2 pb-2">
                        <div>
                          <img src="asset/static/team_icon_1.png" height="50" />
                        </div>
                        <div class="align-self-center ml-3">
                          Pacman pro
                        </div>
                        <div class="align-self-center ml-3">
                          10
                        </div>
                     </div>
                     <div class="d-flex pt-2 pb-2">
                        <div>
                          <img src="asset/static/team_icon_2.png" height="50" />
                        </div>
                        <div class="align-self-center ml-3">
                          Element One
                        </div>
                        <div class="align-self-center ml-3">
                          8
                        </div>
                     </div>

                     <hr style="border-color: #464646;"/>

                     <div class="row">
                      <div class="col-9">
                        <p class="color-grey">Create Team</p>
                      </div>
                      <div class="col-3 text-right color-grey">
                      <p class="color-grey">13:12</p>
                      </div>
                     </div>
                     <div class="d-flex pt-2 pb-2">
                        <div>
                          <img src="asset/static/team_icon_2.png" height="50" />
                        </div>
                        <div class="align-self-center ml-3">
                          Element One
                        </div>
                        <div class="align-self-center ml-3">
                          8
                        </div>
                     </div>

                     <hr style="border-color: #464646;"/>

                    </div>
                  </div>
                </div><!-- / Timeline Wrapper -->

                <div class="timeline__wrapper row">
                  <div class="col-2 timeline__date color-grey">
                    <h4 class="mb-0">29</h4> 
                    <div>Februari</div>
                  </div>
                  <div class="col-10 timeline__content">
                    
                    <div class="timeline__content--item">
                     <div class="row">
                      <div class="col-9">
                        <h6 class="font-weight-light color-grey mb-0">Comment on "Cheat GTA V"</h6>
                        <p class="">"Mantaps gan..."</p>
                      </div>
                      <div class="col-3 text-right color-grey">
                        13:12
                      </div>
                     </div>
                     
                    </div>

                     <hr style="border-color: #464646;"/>
                </div>
                </div><!-- / Timeline Wrapper -->

               <div class="timeline__wrapper row">
                  <div class="col-2 timeline__date color-grey">
                    <h4 class="mb-0">14</h4> 
                    <div>Februari</div>
                  </div>
                  <div class="col-10 timeline__content">
                     <div class="row">
                       <div class="col-9">
                         <h6 class="font-weight-light color-grey mb-0">Create Party</h6>
                         <p class="">SaosSambel_team</p>
                        </div>
                        <div class="col-3 text-right color-grey">
                          13:12
                        </div>
                      </div>
                      
                      <hr style="border-color: #464646;"/>

                      <div class="row">
                      <div class="col-9">
                        <p class="color-grey">Create Team</p>
                      </div>
                      <div class="col-3 text-right color-grey">
                      <p class="color-grey">13:12</p>
                      </div>
                     </div>

                     <div class="d-flex pt-2 pb-2">
                        <div>
                          <img src="asset/static/team_icon_2.png" height="50" />
                        </div>
                        <div class="align-self-center ml-3">
                          Element One
                        </div>
                        <div class="align-self-center ml-3">
                          8
                        </div>
                     </div>

                     <hr style="border-color: #464646;"/>

                  </div>
                </div><!-- / Timeline Wrapper -->

                <div class="timeline__wrapper row">
                  <div class="col-2 timeline__date color-grey">
                    <h4 class="mb-0">10</h4> 
                    <div>Februari</div>
                  </div>
                  <div class="col-10 timeline__content">
                     <div class="row">
                       <div class="col-9">
                         <h6 class="font-weight-light color-grey mb-0">You are change your password</h6>
                        </div>
                        <div class="col-3 text-right color-grey">
                          11:12
                        </div>
                      </div>

                     <hr style="border-color: #464646;"/>
                     <div class="row">
                       <div class="col-9">
                         <h6 class="font-weight-light color-grey mb-0">You are change your Email</h6>
                        </div>
                        <div class="col-3 text-right color-grey">
                          10:12
                        </div>
                      </div>

                     <hr style="border-color: #464646;"/>
                     <div class="row">
                       <div class="col-9">
                         <h6 class="font-weight-light color-grey mb-0">You are change your Community Name</h6>
                        </div>
                        <div class="col-3 text-right color-grey">
                          09:12
                        </div>
                      </div>

                     <hr style="border-color: #464646;"/>
                     <div class="row">
                       <div class="col-9">
                         <h6 class="font-weight-light color-grey mb-0">You Kick "Thomas" from "de_dust Mania" </h6>
                        </div>
                        <div class="col-3 text-right color-grey">
                          08:12
                        </div>
                      </div>

                     <hr style="border-color: #464646;"/>

                     

                  </div>
                </div><!-- / Timeline Wrapper -->
                  
                </div><!-- / Recent Activity Wrapper -->
            </div><!-- / Maincontent Recent Activity -->
            
          </div><!-- / Maincontent Profile -->
          <div class="clearfix d-md-block d-none">&nbsp;</div>

        </div>
      </article>
      <!-- End article-->
    </main>
    <?php include_once 'footer.php';?>
    <?php include_once 'loadscript.php';?>
    <script src="<?php echo url('asset/js/jquery-3.4.1.min.js');?>"></script>
    <script src="<?php echo url('asset/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?php echo url('asset/slick/slick.min.js')?>"></script>
    <script src="<?php echo url('asset/js/select2.full.min.js');?>"></script>
    <script>
      $('.custom-select').select2({
        placeholder: 'Please Select',
        minimumResultsForSearch: 10
      });
      var $ticker = $('[data-ticker="list"]'),
          tickerItem = '[data-ticker="item"]'
          itemCount = $(tickerItem).length,
          viewportWidth = 0;

        function setupViewport(){
          $ticker.find(tickerItem).clone().prependTo('[data-ticker="list"]');

          for (i = 0; i < itemCount; i ++){
              var itemWidth = $(tickerItem).eq(i).outerWidth();
              viewportWidth = viewportWidth + itemWidth;
          }

          $ticker.css('width', viewportWidth);
        }

        function animateTicker(){
          $ticker.animate({
              marginLeft: -viewportWidth
            }, 30000, "linear", function() {
              $ticker.css('margin-left', '0');
              animateTicker();
            });
        }

        function initializeTicker(){
          setupViewport();
          animateTicker();
          $ticker.on('mouseenter', function(){
              $(this).stop(true);
          }).on('mouseout', function(){
              animateTicker();
          });
        }
      $(document).ready(function(){
        initializeTicker();
        $('.mainbanner__slider').slick({
          arrows: false,
          dots: true,
          speed:1000,
          autoplay: true,
          autoplaySpeed: 3000
        });
        let ytb = $('.youtube-iframe');
        if(ytb.length){
          for (var i=0; i<ytb.length; i++) {
            if(ytb[i].getAttribute('data-src')) {
              ytb[i].setAttribute('src',ytb[i].getAttribute('data-src'));
            }
          }
        }

        $('.maincontent__widget--past--select').on('change', function(){
          let contentv = $(this).val();
          console.log(contentv);
          $('.maincontent__widget--past--content > .tab-pane').removeClass('show active');
          $(contentv).addClass('show active')
        });

      });
    </script>
<?php include_once 'footerhtml.php';?>
