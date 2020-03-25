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
          <div class="container maincontent__footer mt-5">
              <div class="row">
                <div class="col-md-12">
                  <div class="clearfix text-center">
                    <h2 class="font-weight-light"><i class="fas fa-user-shield"></i> <br/> Privacy Policy</h2>
                  </div>
                  <div class="clearfix">&nbsp;<br/>&nbsp;</div>
                  <div class="row">
                    <div class="col-12">
                    <div class="maincontent_footer--content">
                    <p>WHAT INFORMATION DO WE COLLECT?</p>

                    <p>We collect information from you when you register on our site. When ordering or registering on our site, as appropriate, you may be asked to enter your name and e-mail address. You may, however, visit our site anonymously without creating a user account.</p>

                    <p>COOKIE POLICY</p>

                    <p>You can read the cookie policy valid for Gamespark.net here.</p>

                    <p>WHAT DO WE USE YOUR INFORMATION FOR?</p>

                    <p>Any of the information we collect from you may be used in one of the following ways:</p>

                    <p>To personalize your experience (your information helps us to better respond to your individual needs)
                    To improve our website (we continually strive to improve our website offerings based on the information and feedback we receive from you)<br/>
                    To improve customer service (your information helps us to more effectively respond to your customer service requests and support needs)<br/>
                    To administer a contest, promotion, survey or other site feature<br/>
                    To send periodic emails (e.g. with company news, updates, related product or service information, etc.)</p>

                    

                    <p>HOW DO WE PROTECT YOUR INFORMATION?</p>

                    <p>We implement a variety of security measures to maintain the safety of your personal information when you enter, submit, or access your personal information.</p>
                    

                    <p>DO WE DISCLOSE ANY INFORMATION TO OUTSIDE PARTIES?</p>

                    <p>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</p>
                    
                    <p>ONLINE PRIVACY POLICY ONLY</p>

                    <p>This online privacy policy applies only to information collected through our website and not to information collected offline.</p>
                    

                    <p>TERMS AND CONDITIONS</p>

                    <p>Please also visit our Terms and Conditions section establishing the use, disclaimers, and limitations of liability governing the use of our website. YOUR CONSENT By using our site, you consent to our privacy policy.</p>
                    

                    <p>CHANGES TO OUR PRIVACY POLICY</p>

                    <p>Gamespark reserves the right to amend this Policy at any time, in the event that this becomes necessary after initial release, or in the event that it becomes necessary with respect to additional, deleted, modified or amended services provided by Gamespark.. Gamespark will not personally notify you of any amendments to this Policy. Users are urged to check this Policy frequently in order to determine whether any changes have been made. Users understand and agree that continued use of the Company web site assumes that they have read and accepted this Policy, as it may be amended from time to time.</p>

                    <p>CONTACTING US</p>

                    <p>If there are any questions regarding this privacy policy, please contact us via email to <a href="mailto:cs@gamespark.net">cs@gamespark.net</a></p>
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
