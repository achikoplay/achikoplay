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
          <div class="container maincontent__communityvideos mt-5">
              <div class="row">
                <div class="col-md-12">
                  <div class="clearfix text-center">
                    <h2 class="font-weight-light"><i class="far fa-play-circle text-warning"></i> Community Videos</h2>
                  </div>
                  <div class="clearfix">&nbsp;<br/>&nbsp;</div>
                  <div class="row">
                    <?php for ($o=1; $o <= 12 ; $o++) {?>
                      <div class="col-md-4 col-md-4 col-12 mb-30px">
                        <div class="maincontent__widget--video--card">
                        <a href="community_video.php" class="d-block relative">
                          <div class="maincontent__widget--video--card__tube backgroundCoverTop" style="background-image: url('<?php echo url('asset/static/thumbyoutube.jpg')?>');">
                              <div class="d-table h-100 w-100">
                                <div class="d-table-cell align-middle text-white text-center">
                                  <i class="fas fa-play fa-2x"></i>
                                </div>
                              </div>
                          </div>
                          <div class="maincontent__widget--video--card__desc bg-white">
                            <p class="mb-0 text-dark nunitoSemiBold">alias voluptatem nihil corrupti quas explicabo ipsum</p>
                            <div class="posts--meta--view mt-4 text-right text-dark">
                              10.500 View
                            </div>
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
