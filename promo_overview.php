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
          <div class="container maincontent__promooverview mt-5">
              
              <div class="maincontent__promooverview--banner">
                <img src="asset/static/promo/banner_promo.png" class="img-fluid" />
              </div>
              
              <div class="maincontent__promooverview--content">
                <h2 class="font-weight-light mt-5">The quick, brown fox jumps over a lazy dog. DJs flock by when.</h2>
                <div class="promo--periode mt-5">
                    <h6 class="font-weight-light mb-0">PERIOD PROMO</h6>
                    <p>October 10, 2019 - October 11, 2019</p>
                </div>
                <div class="promo--description mt-5">
                    <h6 class="font-weight-light mb-0">DESCRIPTION</h6>
                    <p>Kupon Cashback hingga Rp2.000.000 untuk transaksi di Tokopedia <br/>menggunakan Ceria dengan minimal transaksi Rp500.000 Pengguna...</p>
                </div>
                <div class="promo--terms mt-5">
                    <h6 class="font-weight-light mb-0">SYARAT DAN KETENTUAN</h6>
                    <p>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flax jodhpurs! "Now fax quiz Jack!" my brave ghost pled. Five quacking zephyrs jolt.</p>
                </div>

                <div class="meta--share mt-5">
                  <a class="meta--share--link share--facebook" href="#"></a>
                  <a class="meta--share--link share--twitter" href="#"></a>
                  <a class="meta--share--link share--instagram" href="#"></a>
                </div>
                
              </div>

              <div class="promo--related mt-5">
                <h3 class="font-weight-light text-center">Others Promo</h3>
                <div class="row mt-5">
                  <?php for ($o=1; $o < 4 ; $o++) {?>
                    <div class="col-lg-4 col-md-4 col-12 mb-30px">
                      <div class="maincontent__widget--promo--image">
                        <img src="<?php echo url('asset/static/promo/other_'.$o.'.png');?>" alt="image-promo" class="img-fluid"/>
                      </div>
                      <div class="maincontent__widget--promo--desc bg-white text-dark">
                        <h6>Promo title long long way</h6>
                        <div class="small">
                          <i class="fas fa-stopwatch"></i> 10 - 15 oct
                        </div>
                        <a href="#" class="btn btn-sm btn-danger d-block text-center mt-15px">
                          Details
                        </a>
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
