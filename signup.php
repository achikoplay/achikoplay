<?php include_once 'metahead.php'; ?>
<?php include_once 'headerlogout.php';?>
    <main>
      <!-- Main Article-->
      <article>
        <div class="maincontent">
          <div class="maincontent__widget">
            <div class="maincontent__widget--signin">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="maincontent__widget--signin--content">
                      <h2 class="text-center nunitoLight">Sign Up</h2>
                      <br/>
                      <div class="row">
                        <div class="col-md-6 border-md-right">
                          <form action="index.php">
                            <div class="maincontent__widget--signin--left">
                              <div class="maincontent__widget--signin--left__loginpassword nunitoLight">
                                <div class="maincontent__widget--signin--left__username relative">
                                  <input autocomplete="off" type="text" name="identity" class="form-control maincontent__widget--inputform" value="" placeholder="Type your mabar ID">
                                  <label>User ID</label>
                                </div>
                                <div class="maincontent__widget--signin--left__username relative">
                                  <input type="email" name="email" class="form-control maincontent__widget--inputform" value="" placeholder="Type your email">
                                  <label>Email</label>
                                </div>
                                <div class="maincontent__widget--signin--left__username relative">
                                  <input type="text" name="phone" class="form-control maincontent__widget--inputform" value="" placeholder="Type your phone">
                                  <label>Phone Number</label>
                                </div>
                                <div class="maincontent__widget--signin--left__username relative">
                                  <input autocomplete="off" type="password" toggle="" name="password" class="form-control maincontent__widget--inputform mb-15" value="" placeholder="Type your Password">
                                  <label>Password</label>
                                </div>
                                <div class="maincontent__widget--signin--left__password relative">
                                  <input autocomplete="off" type="password" toggle="" name="password" class="form-control maincontent__widget--inputform mb-15" value="" placeholder="Type your Password">
                                  <label>Consfirm Password</label>
                                </div>
                                <div class="row">
                                  <div class="col-12 mb-5px">
                                    <button type="submit" class="btn btn-lg btn-warning text-center d-block w-100 mb-10px">Sign Up</button>
                                    <div class="small">
                                      By continuing, you agree to mabar.gg <a href="#" class="text-white">Terms of Service</a>, <a href="#"  class="text-white">Privacy Policy</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="col-md-6">
                          <div class="maincontent__widget--signin--right">
                            <div class="maincontent__widget--signin--separator__or relative">
                              <div class="separator__or">
                              </div>
                              <div class="separator__or--text--center">
                                Or
                              </div>
                            </div>
                            <div class="maincontent__widget--signin--right__social">
                              <a href="#" class="btn btn-light d-block w-100 maincontent__widget--signin--right__social--login"><i class="fab fa-google text-danger"></i> &nbsp;Continue with Google</a>
                              <br/>
                              <a href="#" class="btn btn-light d-block w-100 maincontent__widget--signin--right__social--login"><i class="fab fa-facebook-f text-primary"></i> &nbsp;Continue with Facebook</a>
                              <br/>
                              <a href="#" class="btn btn-light d-block w-100 maincontent__widget--signin--right__social--login"><i class="fab fa-steam-symbol text-dark"></i> &nbsp;Continue with Steam</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix mt-3">&nbsp;</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
      <!-- End article-->
    </main>
    <?php include_once 'footer.php';?>
    <?php include_once 'loadscript.php';?>
    <script src="<?php echo url('asset/js/jquery-3.4.1.min.js');?>"></script>
    <script src="<?php echo url('asset/js/bootstrap.bundle.min.js');?>"></script>
    <script>
      $(document).ready(function(){$('.togglepassword').on('click',function(){
          $(this).find('i').toggleClass("fa-eye fa-eye-slash");
          let inputPassword = $($(this).parent().find("[toggle]"));
          if (inputPassword.attr("type") == "password") {
            inputPassword.attr("type", "text");
            inputPassword.focus();
          } else {
            inputPassword.attr("type", "password");
            inputPassword.focus();
          }
        });
      });
    </script>
<?php include_once 'footerhtml.php';?>
