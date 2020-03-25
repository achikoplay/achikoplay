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
          <div class="banner__game backgroundCoverCenter" style="background-image: url(<?php echo url('asset/static/banner-dota.jpg');?>)">
            <div class="banner__game--container relative">
              <div class="banner__game--container--image relative">
                <img class="img-fluid invisible" src="<?php echo url('asset/static/banner-dota.jpg')?>" alt="dota" />
                <div class="banner__game--container--overlay">&nbsp;</div>
              </div>
            </div>
          </div>
          <div class="maincontent__widget maincontent__widget--upgradient">
            <div class="container maincontent__widget--tournament relative mb-5">
              <div class="row">
                <div class="col-md-12">
                  <div class="clearfix">
                    <h5 class="float-left"><i class="fas fa-trophy text-warning"></i> Tournament</h5>
                    <a href="tournament.php" class="maincontent__widget--link float-right text-white">more</a>
                  </div>
                  <div class="row">
                    <?php for ($k=1; $k < 5 ; $k++) { ?>
                      <div class="col-md-3 col-md-3 col-6 mb-30px">
                        <a href="tournamentoverview.php" class="d-block">
                          <div class="maincontent__widget--tournament--card">
                            <div class="maincontent__widget--tournament--card--image backgroundCoverCenter relative" style="background-image: url(<?php echo url('asset/static/tournament/'.$k.'.png')?>);">
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
                    <?php }?>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix d-md-block d-none">&nbsp;</div>

            <div class="container maincontent__widget--news relative">
              <div class="row">
                <div class="col-md-8">
                  <div class="row mb-30px">
                    <div class="col-md-12">
                      <div class="clearfix">
                        <h5 class="float-left"><i class="fas fa-clock text-warning"></i> News Post</h5>
                        <a href="new_posts.php" class="maincontent__widget--link float-right text-white">more</a>
                      </div>
                      <div class="row">
                        <?php for ($l=1; $l < 5 ; $l++) { ?>
                          <div class="col-6 mb-30px">
                            <a href="article_overview.php" class="d-block">
                              <div class="maincontent__widget--news--card">
                                <div class="row">
                                  <div class="col-md-6 col-12 pdr-md-0">
                                      <div class="maincontent__widget--news--card--image backgroundCoverCenter relative" style="background-image: url(<?php echo url('asset/static/news/'.$l.'.jpg')?>);">
                                        <img src="<?php echo url('asset/static/news/'.$l.'.jpg')?>" class="img-fluid invisible" alt="image-news"/>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                    <div class="maincontent__widget--news--card--desc text-white">
                                      <h6 class="mb-5px">News Title</h6>
                                      <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporens</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                        <?php }?>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-30px">
                    <div class="col-md-12">
                      <div class="clearfix">
                        <h5 class="float-left"><i class="fas fa-crown text-warning"></i> Trending</h5>
                        <a href="trending.php" class="maincontent__widget--link float-right text-white">more</a>
                      </div>
                      <div class="row">
                        <?php for ($l=1; $l < 5 ; $l++) { ?>
                          <div class="col-6 mb-30px">
                            <a href="article_overview.php" class="d-block">
                              <div class="maincontent__widget--news--card">
                                <div class="row">
                                  <div class="col-md-6 col-12 pdr-md-0">
                                      <div class="maincontent__widget--news--card--image backgroundCoverCenter relative" style="background-image: url(<?php echo url('asset/static/news/'.$l.'.jpg')?>);">
                                        <img src="<?php echo url('asset/static/news/'.$l.'.jpg')?>" class="img-fluid invisible" alt="image-news"/>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                    <div class="maincontent__widget--news--card--desc text-white">
                                      <h6 class="mb-5px">News Title</h6>
                                      <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporens</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                        <?php }?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-30px">
                  <div class="w-100 relative backgroundCoverTop maincontent__widget--news--rightbanner" style="background-image: url('<?php echo url('asset/static/dota-right.jpg')?>')">
                    <a href="#" class="d-block text-white">
                      <img src="<?php echo url('asset/static/dota-right.jpg')?>" class="img-fluid invisible" alt="img"/>
                      <div class="maincontent__widget--news--right--text">
                        <h6 class="mb-5px">News Title</h6>
                        <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporens</p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 mb-5 mt-5">
              <div class="ads97990">
                <!-- masukan ads disini-->
                  <div class="d-table h-100 w-100">
                    <div class="d-table-cell align-middle bg-gray text-center text-dark">
                      Google ads 970 x 90
                    </div>
                  </div>
                <!-- end masukan ads disini-->
              </div>
            </div>
            <div class="clearfix d-md-block d-none">&nbsp;</div>

            <div class="container maincontent__widget--past relative mt-3 mb-3">
              <div class="row">
                <div class="col-md-12">
                  <div class="clearfix mb-2px">
                    <h5 class="float-left"><i class="fas fa-play text-warning"></i> Live Streaming</h5>
                    <a href="#" class="maincontent__widget--link float-right text-white">more</a>
                  </div>
                  <div class="row">
                    <div class="d-lg-none d-md-block d-sm-block d-block col-12">
                      <div class="maincontent__widget--wrap--select relative">
                        <select class="custom-select form-control noradius maincontent__widget--past--select mb-5px">
                          <?php for ($p=1; $p < 11 ; $p++) {?>
                            <option value="#v-pills-<?= $p;?>" <?= $p == 2 ? 'selected':''; ?>>Tournament Lurus aja terus</option>
                          <?php }?>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 pdr-md-0">
                      <div class="tab-content maincontent__widget--past--content h-100 w-100" id="v-pills-tabContent">
                        <?php for ($n=1; $n < 11 ; $n++) {?>
                          <div class="tab-pane fade backgroundCoverCenter relative <?= $n == 2 ? 'show active':''; ?>" id="v-pills-<?= $n;?>" role="tabpanel" aria-labelledby="v-pills-<?= $n;?>-tab">
                            <div class="maincontent__widget--past--content__thumb backgroundCoverCenter playvideo" style="background-image: url('<?php echo url('asset/static/thumbyoutube.jpg')?>')" data-play="<?php echo (int)$n-1;?>">
                              <div class="d-table w-100 h-100">
                                <div class="d-table-cell align-middle">
                                  <i class="fas fa-play"></i>
                                </div>
                              </div>
                            </div>
                            <div class="embed-responsive embed-responsive-16by9">
                              <div id="player<?= $n; ?>" class="player embed-responsive embed-responsive-item youtube-iframe" ytid="Wpby5ucntBc"></div>
                          </div>
                          </div>
                        <?php }?>
                      </div>
                    </div>
                    <div class="col-3 pdl-md-0 d-lg-block d-md-none d-sm-none d-none">
                      <div class="nav flex-column nav-pills bg-grey-light" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <?php for ($m=1; $m < 11 ; $m++) {?>
                          <a class="nav-link noradius <?= $m == 2 ? 'active text-dark' : 'text-secondary';?>" id="v-pills-<?= $m;?>-tab" data-toggle="pill" href="#v-pills-<?= $m;?>" role="tab" aria-controls="v-pills-<?= $m;?>" aria-selected="true">Tournament Lurus aja terus</a>
                        <?php }?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix d-md-block d-none">&nbsp;</div>

            <div class="container maincontent__widget--games relative mt-3">
              <div class="row">
                <div class="col-md-12">
                  <div class="clearfix mb-2px">
                    <h5 class="float-left"><i class="fas fa-gamepad text-warning"></i> Games Tips</h5>
                    <a href="gaming_tips.php" class="maincontent__widget--link float-right text-white">more</a>
                  </div>
                  <div class="row">
                    <?php for ($o=1; $o < 4 ; $o++) {?>
                      <div class="col-lg-4 col-md-4 col-12 mb-30px">
                        <div class="maincontent__widget--games--image">
                          <a href="article_overview.php" class="relative d-block backgroundCoverCenter" style="background-image: url('<?php echo url('asset/static/gametips/image.jpg');?>')">
                            <img src="<?php echo url('asset/static/gametips/image.jpg');?>" alt="image-gametips" class="img-fluid invisible"/>
                            <div class="maincontent__widget--games--icon backgroundCoverCenter" style="background-image: url('<?php echo url('asset/static/gametips/'.$o.'.png');?>')">&nbsp;</div>
                            <div class="maincontent__widget--games--text text-dark bg-light">
                              Cheat PUBG Wallheak
                            </div>
                          </a>
                        </div>
                      </div>
                    <?php }?>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix d-md-block d-none">&nbsp;</div>

          </div>
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
        //youtube
        var tag = document.createElement('script');
        tag.src = "//www.youtube.com/player_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var playerInfoList = document.querySelectorAll(".player");
        var playerplayvideo = document.querySelectorAll(".playvideo");

        function onYouTubeIframeAPIReady() {
            if (typeof playerInfoList === 'undefined') return;

            for (var i = 0; i < playerInfoList.length; i++) {
                var curplayer = createPlayer(playerInfoList[i]);
                players[i] = curplayer;
            }
        }

        var players = new Array();

        function createPlayer(playerInfo) {
            let $videoId = $("#"+playerInfo.id).attr('ytid');
            return new YT.Player(playerInfo.id, {
                videoId: $videoId,
                playerVars: { 'rel':0, 'controls': 0, 'showinfo':0, 'autohide':1,'wmode':'opaque','origin':'http://localhost' }
            });
        }

      $(document).ready(function(){
        initializeTicker();
        $('.playvideo').on('click', function(){
          let dataPlay = $(this).attr('data-play');
          $(this).addClass('d-none');
          players[dataPlay].playVideo();
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
