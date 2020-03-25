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
          <div class="maincontent__widget maincontent__community">
            <div class="container maincontent__widget--community mt-5">
              <div class="row">
                <div class="col-md-12">
                  <div class="clearfix text-center">
                    <h2 class="font-weight-light"><i class="fas fa-users text-warning"></i> Community</h2>
                  </div>
                  <div class="clearfix">&nbsp;<br/>&nbsp;</div>
                  <div class="row">
                    <div class="col-md-3 col-12">
                      <a href="createcommunity.php" class="btn btn-lg btn-warning text-center d-block w-100 mb-10px">Create Community</a>
                    </div>
                    <div class="col-md-3 offset-md-6 col-12">
                      <form action="">
                        <div class="maincontent__community wrapinputsearch">
                          <input id="input-search" type="text" name="search" class="maincontent__community--search form-control input-search noradius" placeholder="Search Community"/>
                          <i class="fal fa-search"></i>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="clearfix">&nbsp;</div>
                  <div class="row">
                    <?php for ($i=1; $i < 49 ; $i++) { ?>
                      <div class="col-md-2 col-4 text-center mt-4">
                        <a href="community_overview.php" class="text-white">
                        <div class="circle maincontent__widget--community--circle backgroundCoverCenter" style="background-image: url('https://i.pravatar.cc/272?img=<?php echo $i; ?>);">
                        </div>
                        <div class="maincontent__community-name">
                          <small class="nunitoRegular">Community<br/>Name of Community</small>
                        </div>
                        <div class="maincontent__community--users">
                          <div>
                            <i class="fas fa-user"></i> 128
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
