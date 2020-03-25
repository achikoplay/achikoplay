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

          <div class="maincontent__community--banner">
            <img src="asset/static/community/cohive_banner.png" class="img-fluid" />
            <div class="maincontent__community--info">
              <div class="container">
                <div class="row">
                  <div class="col-md-9">
                    <div class="row">
                      <div class="col-md-2">
                      <img src="asset/static/community/cohive_icon.png" class="img-fluid" />
                      </div>
                      <div class="col-md-10 text-white">
                        <h6><strong>CoHive</strong></h6>
                        <p>The quick, brown fox jumps over a lazy dog.</p>
                        <div class="mt-1"><small><i class="far fa-gem"></i> 210 &nbsp; <i class="fas fa-heart"></i> 1250</small></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 join-community-wrapper">
                    <div class="row">
                    <div class="col-4 offset-2 text-center">
                      <h5>80</h5>
                      <div>Members</div>
                    </div>
                    <div class="col-3 text-center">
                      <h5>360</h5>
                      <div>Posts</div>
                    </div>
                    </div>

                    <div class="btn-group btn-block mt-4">
                      <button type="button" class="btn btn-warning community__btnjoin">Join Community</button>
                      <button type="button" class="btn btn-warning dropdown-toggle-split community__btnshare" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-share-alt"></i>
                      </button>
                      <!-- <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="container maincontent__communityoverview mt-5">

              <div class="row">
                  <div class="col-md-3">
                      <ul class="maincontent__communityoverview--menu">
                        <li>
                          <a class="maincontent__communityoverview--link" href="javascript:void(0);">
                            <div class="row">
                              <div class="col-9 text-left">
                                Overview
                              </div>
                              <div class="col-3 relative">
                                <div class="maincontent__communityoverview--link__arrow w-100">
                                  <img src="<?php echo url('asset/static/icon/arrow.png');?>" alt="icon"/>
                                </div>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a class="maincontent__communityoverview--link active" href="javascript:void(0);">
                            <div class="row">
                              <div class="col-9 text-left">
                                Member
                              </div>
                              <div class="col-3 relative">
                                <div class="maincontent__communityoverview--link__arrow w-100">
                                  <img src="<?php echo url('asset/static/icon/arrow.png');?>" alt="icon"/>
                                </div>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a class="maincontent__communityoverview--link" href="javascript:void(0);">
                            <div class="row">
                              <div class="col-9 text-left">
                                Tournament
                              </div>
                              <div class="col-3 relative">
                                <div class="maincontent__communityoverview--link__arrow w-100">
                                  <img src="<?php echo url('asset/static/icon/arrow.png');?>" alt="icon"/>
                                </div>
                              </div>
                            </div>
                          </a>
                        </li>
                      </ul>

                      <div class="sidebar__community">
                        <h3>Community Admin</h3>
                        <div class="sidebar__community--wrapper">
                          <div class="clearfix mb-10px">
                            <div class="d-flex justify-content-start align-items-center">
                              <img src="https://i.pravatar.cc/272?img=1" class="rounded-circle mr-10px" width="40" height="40" />
                              <div>Kapak Merah</div>
                            </div>
                          </div>
                          <div class="clearfix">
                            <div class="d-flex justify-content-start align-items-center">
                              <img src="https://i.pravatar.cc/272?img=2" class="rounded-circle mr-10px" width="40" height="40" />
                              <div>Kacang Ijo</div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="sidebar__community">
                        <h3>Tournament</h3>
                        <div class="sidebar__community--wrapper">
                          <div class="clearfix mb-20px">
                            <div class="d-flex justify-content-start align-items-center">
                              <a href="#" class="d-block w-100">
                                <div class="maincontent__widget--tournament--card">
                                  <div class="maincontent__widget--tournament--card--image backgroundCoverCenter relative" style="background-image: url(<?php echo url('asset/static/tournament/1.png')?>);">
                                    <div class="bg-warning text-dark">5vs5</div>
                                  </div>
                                  <div class="maincontent__widget--tournament--card--info">
                                    <div class="maincontent__widget--tournament--card--info--title">
                                      Tournament Terserah
                                    </div>
                                    <div class="maincontent__widget--tournament--card--info--wrap clearfix relative">
                                      <div class="float-left small">
                                        <i class="fas fa-clock"></i> 1 jan 2020
                                      </div>
                                      <div class="float-right small">
                                        <i class="fas fa-medal"></i> 1.000.000
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>

                          <div class="clearfix mb-20px">
                            <div class="d-flex justify-content-start align-items-center">
                              <a href="#" class="d-block w-100">
                                <div class="maincontent__widget--tournament--card">
                                  <div class="maincontent__widget--tournament--card--image backgroundCoverCenter relative" style="background-image: url(<?php echo url('asset/static/tournament/1.png')?>);">
                                    <div class="bg-warning text-dark">5vs5</div>
                                  </div>
                                  <div class="maincontent__widget--tournament--card--info">
                                    <div class="maincontent__widget--tournament--card--info--title">
                                      Tournament Terserah
                                    </div>
                                    <div class="maincontent__widget--tournament--card--info--wrap clearfix relative">
                                      <div class="float-left small">
                                        <i class="fas fa-clock"></i> 1 jan 2020
                                      </div>
                                      <div class="float-right small">
                                        <i class="fas fa-medal"></i> 1.000.000
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>

                          <div class="clearfix">
                            <div class="d-flex justify-content-center align-items-center">
                              <a class="d-inline-block text-white" href="#">View More <i class="fas fa-angle-right"></i></a>
                            </div>
                          </div>

                        </div>
                      </div>
                  </div>

                  <div class="col-md-9">

                    <div class="community__memberlist">
                      <h4 class="font-weight-light">Board of Admin</h4>

                      <div class="community__memberlist--wrapper">

                        <div class="row">
                        <?php for($m=1;$m<7;$m++) { ?>
                        <div class="col-md-6 mt-4">
                        <div class="community__memberlist--item">
                          <div class="d-flex justify-content-start align-items-center">
                            <img src="https://i.pravatar.cc/272?img=<?php echo $m; ?>" class="img-fluid mr-10px" width="60" height="60" />
                            <div>Akem</div>
                          </div>
                        </div>
                        </div>
                        <?php } ?>
                        </div>
                        
                      </div>
                    </div>

                    <div class="community__memberlist mt-5">
                      <h4 class="font-weight-light">Members</h4>

                      <div class="community__memberlist--wrapper">

                        <div class="row">
                        <?php for($m=7;$m<21;$m++) { ?>
                        <div class="col-md-6 mt-4">
                        <div class="community__memberlist--item">
                          <div class="d-flex justify-content-start align-items-center">
                            <img src="https://i.pravatar.cc/272?img=<?php echo $m; ?>" class="img-fluid mr-10px" width="60" height="60" />
                            <div>Janick Bins</div>
                          </div>
                        </div>
                        </div>
                        <?php } ?>
                        </div>
                        
                      </div>
                    </div>

                  </div>

                </div>


            </div>
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
    <script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
    <script>
      autosize(document.getElementById("noteresize"));
      $('.maincontent__communityoverview--link').on('click', function(){
        $('.maincontent__communityoverview--link').removeClass('active');
        $(this).addClass('active');
      });
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
