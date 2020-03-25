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
          
          
          
          <div class="container maincontent__article">

              <div class="mt-5">
                <iframe width="100%" class="community__video--frame" src="https://www.youtube.com/embed/Wpby5ucntBc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
                
              <div class="row mt-3">
                <div class="col-md-12">
                    <h1 class="maincontent__video--title font-weight-light mt-3">Komunitas Sayur Bayem Menggebrak Pasar</h1>
                    
                    <div class="maincontent__video--meta">
                      <div class="row">
                        <div class="col-md-6">
                          <i class="far fa-thumbs-up"></i> 1.250.000 Like
                        </div>
                        <div class="col-md-6 text-right">
                        1.250.000 View
                        </div>
                      </div>
                    </div>

                    <div class="maincontent__articleview--body mt-4">

                    <p>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flax jodhpurs! "Now fax quiz Jack!" my brave ghost pled. Five quacking zephyrs jolt my wax bed.</p>

                    </div>
                </div>
                
              </div>

              <div class="maincontent__video--related--container mt-4">
                <div class="container">
                  <div class="maincontent__video--related">
                    <?php for ($l=1; $l < 6 ; $l++) { ?>
                      <div class="maincontent__video--related--item mb-30px">
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
                              <p class="mb-0 text-dark nunitoSemiBold">Komunitas sayur bayem menggebrak pasar</p>
                            </div>
                          </a>
                        </div>
                      </div>
                    <?php }?>
                  </div>
                </div>
              </div>

                <div class="row content__article--comments mt-5">
                    <div class="offset-md-2 col-md-8">
                        <h4 class="text-center font-weight-light">Comments</h4>

                        <div class="mt-4 bg-dark-list pd-20">
                            <div class="row">
                              <div class="col-1">
                                <img src="https://i.pravatar.cc/272?img=4" class="rounded-circle" width="45" height="45" />
                              </div>
                              <div class="col-11">
                                <textarea class="form-control input--response" placeholder="Write a response..."></textarea>
                              </div>
                            </div>
                        </div>

                        <div class="mt-4 bg-dark-list pd-20">
                          <div class="row">
                            <div class="col-4">
                              <div class="row">
                                <div class="col-4">
                                  <img src="https://i.pravatar.cc/272?img=1" class="rounded-circle" width="45" height="45" />
                                </div>
                                <div class="col-8 pl-0">
                                    <div><strong>Surti Suketi</strong></div>
                                    <div><small>Des 22</small></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-8 text-right">
                              <a href="#" class="text-dark link--reply"><i class="fas fa-reply"></i> Reply</a>
                            </div>
                          </div>
                          <p class="mt-3">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the.</p>
                        </div>

                        <div class="mt-2 bg-dark-list pd-20">
                          <div class="row">
                            <div class="col-4">
                              <div class="row">
                                <div class="col-4">
                                  <img src="https://i.pravatar.cc/272?img=2" class="rounded-circle" width="45" height="45" />
                                </div>
                                <div class="col-8 pl-0">
                                    <div><strong>Surti Suketi</strong></div>
                                    <div><small>Des 22</small></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-8 text-right">
                              <a href="#" class="text-dark link--reply"><i class="fas fa-reply"></i> Reply</a>
                            </div>
                          </div>
                          <p class="mt-3">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the.</p>
                        </div>
                        <div class="bg-dark-list pd-20" style="padding-left:50px;">
                          <div class="row">
                            <div class="col-4">
                              <div class="row">
                                <div class="col-4">
                                  <img src="https://i.pravatar.cc/272?img=1" class="rounded-circle" width="45" height="45" />
                                </div>
                                <div class="col-8 pl-0">
                                    <div><strong>Surti Suketi</strong></div>
                                    <div><small>Des 22</small></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <p class="mt-3">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the.</p>
                        </div>

                        <div class="mt-2 bg-dark-list pd-20">
                          <div class="row">
                            <div class="col-4">
                              <div class="row">
                                <div class="col-4">
                                  <img src="https://i.pravatar.cc/272?img=3" class="rounded-circle" width="45" height="45" />
                                </div>
                                <div class="col-8 pl-0">
                                    <div><strong>Surti Suketi</strong></div>
                                    <div><small>Des 22</small></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-8 text-right">
                              <a href="#" class="text-dark link--reply"><i class="fas fa-reply"></i> Reply</a>
                            </div>
                          </div>
                          <p class="mt-3">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the.</p>
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
        $('.maincontent__video--related').slick({
          arrows: true,
          dots: false,
          autoplay: false,
          mobileFirst:true,
          slidesToShow: 3,
          slidesToScroll: 1,
          prevArrow: '<a class="slick-prev"><i class="fas fa-chevron-left"></i></a>',
          nextArrow: '<a class="slick-next"><i class="fas fa-chevron-right"></i></a>',
          responsive: [
          {
            breakpoint: 1000,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 300,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          ]
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
