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
          <div class="container maincontent__followlist mt-5 mb-5">
              <div class="row">
                <div class="col-md-12">
                  <h3 class="nunitoLight pl-3 mb-3 text-center">You are following</h3>
                  <div class="row mt-5">
                    <div class="col-md-4">
                      <div class="relative d-inline-block w-100 mb-3">
                        <select name="community_category" class="form-control selectsort">
                          <option value="Latest">Latest</option>
                          <option value="Date following : Latest">Date following : Latest</option>
                          <option value="Date following : Earliest">Date following : Earliest</option>
                        </select>
                        <label class="label-input black">Sort By</label>
                      </div>
                    </div>
                    <div class="col-md-4 d-lg-block d-md-block d-none">
                      &nbsp;
                    </div>
                    <div class="col-md-4">
                      <div class="wrapinputsearch">
                        <input id="input-search" type="text" name="search" class="form-control input-search bggrey" placeholder="Find your Friend here">
                        <i class="fal fa-search"></i>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <?php for ($i=1; $i < 9 ; $i++) { ?>
                      <div class="col-md-6">
                        <div class="followlist__item">
                          <div class="row">
                            <div class="col-12">
                              <div class="d-flex align-items-center">
                                <div class="followlist__item--img">
                                  <img src="<?php echo url('asset/static/community/'.$i.'.jpg')?>" class="rounded-circle" width="50" height="50" alt="img"/>
                                </div>
                                <div class="followlist__item--text ml-3">
                                  <h5 class="text-muted mb-0 nunitoLight">Janick Bins</h5>
                                  <span class="text-muted small">524.980 Following</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php }?>
                    <?php for ($i=1; $i < 9 ; $i++) { ?>
                      <div class="col-md-6">
                        <div class="followlist__item">
                          <div class="row">
                            <div class="col-12">
                              <div class="d-flex align-items-center">
                                <div class="followlist__item--img">
                                  <img src="<?php echo url('asset/static/community/'.$i.'.jpg')?>" class="rounded-circle" width="50" height="50" alt="img"/>
                                </div>
                                <div class="followlist__item--text ml-3">
                                  <h5 class="text-muted mb-0 nunitoLight">Janick Bins</h5>
                                  <span class="text-muted small">524.980 Following</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php }?>
                    <?php for ($i=1; $i < 9 ; $i++) { ?>
                      <div class="col-md-6">
                        <div class="followlist__item">
                          <div class="row">
                            <div class="col-12">
                              <div class="d-flex align-items-center">
                                <div class="followlist__item--img">
                                  <img src="<?php echo url('asset/static/community/'.$i.'.jpg')?>" class="rounded-circle" width="50" height="50" alt="img"/>
                                </div>
                                <div class="followlist__item--text ml-3">
                                  <h5 class="text-muted mb-0 nunitoLight">Janick Bins</h5>
                                  <span class="text-muted small">524.980 Following</span>
                                </div>
                              </div>
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
        $('.selectsort').select2({
          placeholder: 'Please Select',
          minimumResultsForSearch: 10
        });
      });
    </script>
<?php include_once 'footerhtml.php';?>
