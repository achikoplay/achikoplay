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
                      <h2 class="text-center nunitoLight">Login</h2>
                      <br/>
                      <?php if($_GET['email'] != ''):?>
                        <div class="alert alert-success alert-dismissible fade show noradius" role="alert">
                          <strong>Revovery Password</strong> sent!
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                      <?php endif;?>
                      <div class="row">
                        <div class="col-md-6 border-md-right">
                          <form action="index.php">
                            <div class="maincontent__widget--signin--left">
                              <div class="maincontent__widget--signin--left__loginpassword nunitoLight">
                                <div class="maincontent__widget--signin--left__username relative">
                                  <input autocomplete="off" type="text" name="identity" class="form-control maincontent__widget--inputform" value="" placeholder="Type your mabar ID">
                                  <label>User ID</label>
                                </div>
                                <div class="maincontent__widget--signin--left__password relative">
                                  <input autocomplete="off" type="password" toggle="" name="password" class="form-control maincontent__widget--inputform mb-15" value="" placeholder="Type your Password">
                                  <label>Password</label>
                                  <a href="javascript:void(0);" tabindex="-1" class="showpassword togglepassword"><i class="fas fa-eye-slash"></i></a>
                                </div>
                                <div class="row">
                                  <div class="col-md-6 mb-10px">
                                    <div class="submitLogin">
                                      <div class="checkbox relative clearfix">
                                        <label for="rememberme" class="screenreader">
                                          <input id="rememberme" type="checkbox" name="rememberme" class="checkbox-input" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-10px">
                                    <a class="d-block text-md-right text-md-right text-left text-white" data-toggle="modal" data-target="#forgetpassword" href="javascript:void(0);">I've lost my password</a>
                                  </div>
                                  <div class="col-12 mb-5px">
                                    <button type="submit" class="btn btn-lg btn-warning text-center d-block w-100 mb-10px">Log In</button>
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
                      <div class="maincontent__widget--signin__tosignup d-block text-center">
                        <p class="mb-5px">Not on mabar yet?</p>
                        <a href="signup.php" class="btn--signup d-inline-block">
                          Sign Up Here
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
      <!-- End article-->

      <!-- Modal -->
      <div class="modal fade" id="forgetpassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <div class="clearfix">
                <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="maincontent__widget--signin--forget__content relative">
                <h5>Forgot your password?</h5>
                <p>Enter the email address you used to register and we'll email you the password reset instructions.</p>
                <form action="?status=success">
                  <div class="maincontent__widget--signin--forget relative">
                    <input type="email" name="email" class="form-control maincontent__widget--inputform" value="" placeholder="Type your email">
                    <label>Email</label>
                  </div>
                  <br/>
                  <button type="submit" class="btn btn-warning text-center d-block w-100 mb-10px">Send rest Instruction</button>
                  <div class="small">
                    For security reason, we do NOT have access to your password and we'll never send your password via email.
                  </div>
                  <br/>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
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
