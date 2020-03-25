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
          <div class="container maincontent__notification mt-5 mb-5">
              <div class="row">
                <div class="col-md-12">
                  <h3 class="nunitoLight pl-3 mb-3">Your Notification</h3>
                  <?php  for ($i=1; $i < 13 ; $i++) {?>
                    <div class="notification__item">
                      <div class="row">
                        <div class="col-lg-8 col-md-8 col-12">
                          <div class="d-flex align-items-center">
                            <div class="notification__item--img">
                              <img src="<?php echo url('asset/static/tournament-details/'.$i.'.jpg')?>" alt="icon-img-notif" width="80" height="80" class="rounded-circle"/>
                            </div>
                            <?php if($i%3 == 0){ ?>
                              <div class="notification__item--text ml-4">
                                <h5 class="nunitoSemiBold mb-0"><em>New Follower</em></h5>
                                <h6 class="nunitoLight mb-0">Ter Stegen</h6>
                                <h6 class="nunitoLightItalic mb-0"><span class="small">3 hours ago</span></h6>
                              </div>
                            <?php }else{ ?>
                              <div class="notification__item--text ml-4">
                                <h5 class="nunitoSemiBold mb-0"><em>New Party Request</em></h5>
                                <h6 class="nunitoLight mb-0">BOOM ID</h6>
                                <h6 class="nunitoLightItalic mb-0"><span class="small">2 days ago</span></h6>
                              </div>
                            <?php }?>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                          <div class="d-flex align-items-center justify-content-end h-100">
                            <div class="notification__item--button ">
                              <?php if($i%3 == 0){ ?>
                                <a href="#" class="text-muted notification__item--button--link">View Profile</a>
                              <?php }else{ ?>
                                <a href="#" class="btn btn-warning btn-sm">Accept</a>
                                <a href="#" class="btn btn-secondary btn-sm ml-2">Decline</a>
                              <?php }?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php }?>
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
      });
    </script>
<?php include_once 'footerhtml.php';?>
