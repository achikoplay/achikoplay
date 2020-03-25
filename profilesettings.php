<?php include_once 'metahead.php'; ?>
<?php include_once 'header.php';?>
<style>
.select2-dropdown{
  border-color: #2A2929
}
</style>
    <main>
      <!-- Main Article-->
      <article>
        <div class="maincontent">
          <div class="profile__settings">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="profile__settings--wrap">
                    <div class="profile__settings--title">
                      <h2 class="text-center nunitoLight">PROFILE SETTING</h2>
                      <br/>
                    </div>
                    <div class="profile__settings--banner backgroundCoverCenter relative" style="background-image: url('<?php echo url('asset/static/bg-profilesetting.png')?>')">
                      <img src="<?php echo url('asset/static/bg-profilesetting.png')?>" alt="banner" class="img-fluid invisible"/>
                      <a href="javascript:void(0);" data-toggle="modal" data-target="#modalcanvas" class="btn-edit-circle profile__settings--canvas--edit"><i class="fas fa-pen"></i></a>
                    </div>
                    <div class="profile__settings--foto">
                      <div class="d-inline-block relative">
                        <img src="<?php echo url('asset/static/foto-profilesetting.png')?>" alt="" class="rounded-circle" width="100" height="100"/>
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#modal" class="btn-edit-circle profile__settings--foto--edit"><i class="fas fa-pen"></i></a>
                      </div>
                    </div>

                    <div class="profile__settings--content">
                      <div class="row">
                        <div class="col-md-4 border-md-right-grey">
                          <div class="nav flex-column text-right text-uppercase" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link relative active" id="v-pills-account-tab" data-toggle="pill" href="#v-pills-account" role="tab" aria-controls="v-pills-account" aria-selected="true"><i class="fas fa-user-circle"></i> Account <i class="fas fa-caret-right arrow"></i></a>
                            <a class="nav-link relative " id="v-pills-email-tab" data-toggle="pill" href="#v-pills-email" role="tab" aria-controls="v-pills-email" aria-selected="false"><i class="fas fa-at"></i> Email <i class="fas fa-caret-right arrow"></i></a>
                            <a class="nav-link relative " id="v-pills-password-tab" data-toggle="pill" href="#v-pills-password" role="tab" aria-controls="v-pills-password" aria-selected="false"><i class="fas fa-lock"></i> Password <i class="fas fa-caret-right arrow"></i></a>
                            <a class="nav-link relative " id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-info-circle"></i> Profile Information <i class="fas fa-caret-right arrow"></i></a>
                            <a class="nav-link relative " id="v-pills-sosmed-tab" data-toggle="pill" href="#v-pills-sosmed" role="tab" aria-controls="v-pills-sosmed" aria-selected="false"><i class="fas fa-hashtag"></i> Social Media <i class="fas fa-caret-right arrow"></i></a>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab">
                              <form action="">
                                <div class="relative d-inline-block w-100 mb-4">
                                  <input type="text" name="username" class="form-control input-form-grey input-radius" placeholder="Type your username"/>
                                  <label class="label-input">Username</label>
                                </div>
                                <div class="relative d-inline-block w-100 mb-4">
                                  <input type="text" name="phone" class="form-control input-form-grey input-radius" placeholder="Type your phone number"/>
                                  <label class="label-input">Phone Number</label>
                                </div>
                                <br/>
                                <div class="relative d-inline-block w-100 mb-4">
                                  <input id="date-birthday" type="text" name="birthday" class="form-control input-form-grey input-radius" placeholder="Type your birthday date"/>
                                  <label class="label-input">Birthday</label>
                                </div>
                                <div class="d-block w-100 text-center">
                                  <div class="d-inline profile__settings--submit--cancel">
                                    <button class="btn btn-warning btn-submit">Save</button> &nbsp;&nbsp; <button class="btn btn-secondary">Discord</button>
                                  </div>
                                </div>
                              </form>
                              <br/>
                              <div class="mb-1 mt-3">Bind your account</div>
                              <a href="#" class="btn btn-light d-block w-100 maincontent__widget--signin--right__social--login clearfix"><div class="float-left"><i class="fab fa-google text-danger"></i> &nbsp;Bind with Google</div><div class="float-right text-muted small mt-1">Not Connected</div></a>
                              <br/>
                              <a href="#" class="btn btn-light d-block w-100 maincontent__widget--signin--right__social--login clearfix"><div class="float-left"><i class="fab fa-facebook text-primary"></i> &nbsp;Bind with Facebook</div><div class="float-right text-dark small mt-1">Jaja Miharja</div></a>
                              <br/>
                              <a href="#" class="btn btn-light d-block w-100 maincontent__widget--signin--right__social--login clearfix"><div class="float-left"><i class="fab fa-steam-symbol text-dark"></i> &nbsp;Bind with Steam</div><div class="float-right text-muted small mt-1">Not Connected</div></a>
                            </div>
                            <div class="tab-pane fade" id="v-pills-email" role="tabpanel" aria-labelledby="v-pills-email-tab">
                              <form action="">
                                <div class="relative d-inline-block w-100 mb-4">
                                  <input type="email" name="email" class="form-control input-form-grey input-radius" placeholder="Type your email"/>
                                  <label class="label-input">New Email</label>
                                </div>
                                <div class="relative d-inline-block w-100 mb-4">
                                  <input type="email" name="email" class="form-control input-form-grey input-radius" placeholder="Retype your email"/>
                                  <label class="label-input">Retype New Email</label>
                                </div>
                                <br/>
                                <div class="d-block w-100 text-center">
                                  <div class="d-inline profile__settings--submit--cancel">
                                    <button class="btn btn-warning btn-submit">Save</button> &nbsp;&nbsp; <button class="btn btn-secondary">Discord</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <div class="tab-pane fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-password-tab">
                              <form action="">
                                <div class="relative d-inline-block w-100 mb-4">
                                  <input type="password" name="password" class="form-control input-form-grey input-radius" placeholder="Type your old password"/>
                                  <label class="label-input">Old Password</label>
                                </div>
                                <div class="relative d-inline-block w-100 mb-4">
                                  <input type="password" name="password" class="form-control input-form-grey input-radius" placeholder="Type your new password"/>
                                  <label class="label-input">New Password</label>
                                </div>
                                <div class="relative d-inline-block w-100 mb-4">
                                  <input type="password" name="confirm_password" class="form-control input-form-grey input-radius" placeholder="Type confirm password"/>
                                  <label class="label-input">Confirm Password</label>
                                </div>
                                <br/>
                                <div class="d-block w-100 text-center">
                                  <div class="d-inline profile__settings--submit--cancel">
                                    <button class="btn btn-warning btn-submit">Save</button> &nbsp;&nbsp; <button class="btn btn-secondary">Discord</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                              <form action="">
                                <div class="relative d-inline-block w-100 mb-4">
                                  <input type="text" name="username" class="form-control input-form-grey input-radius" placeholder="Type your fullname"/>
                                  <label class="label-input">Fullname</label>
                                </div>
                                <div class="relative d-inline-block w-100 mb-4">
                                  <select name="gender" class="form-control selectsort">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                  </select>
                                  <label class="label-input">Gender</label>
                                </div>
                                <div class="relative d-inline-block w-100 mb-4">
                                  <select name="city" class="form-control selectsort">
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="jawa">Jawa Timur</option>
                                  </select>
                                  <label class="label-input">City</label>
                                </div>
                                <div class="relative d-inline-block w-100 mb-4">
                                  <select name="city" class="form-control selectsort">
                                    <option value="(GMT +7:00) Bangkok, Hanoi, Jakarta">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                                  </select>
                                  <label class="label-input">Timezone</label>
                                </div>
                                <div class="relative d-inline-block w-100 mb-4">
                                  <textarea name="about" class="form-control input-form-grey input-radius" rows="5" placeholder="Type about you"></textarea>
                                  <label class="label-input">About Me</label>
                                </div>
                                <div class="d-block w-100 text-center">
                                  <div class="d-inline profile__settings--submit--cancel">
                                    <button class="btn btn-warning btn-submit">Save</button> &nbsp;&nbsp; <button class="btn btn-secondary">Discord</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <div class="tab-pane fade" id="v-pills-sosmed" role="tabpanel" aria-labelledby="v-pills-sosmed-tab">
                              <form action="">
                                <div class="relative d-inline-block w-100 mb-4">
                                  <div class="d-flex justify-content-center">
                                    <div class="profile__settings--icon fb">
                                      <i class="fab fa-facebook-f"></i>
                                    </div>
                                    <div class="w-100">
                                      <input type="text" name="facebook_url" class="form-control input-form-grey input-radius" placeholder="Type your facebook url here" />
                                    </div>
                                  </div>
                                  <br/>
                                  <div class="d-flex justify-content-center">
                                    <div class="profile__settings--icon twi">
                                      <i class="fab fa-twitch"></i>
                                    </div>
                                    <div class="w-100">
                                      <input type="text" name="twitch_url" class="form-control input-form-grey input-radius" placeholder="Type your twitch url here" />
                                    </div>
                                  </div>
                                  <br/>
                                  <div class="d-flex justify-content-center">
                                    <div class="profile__settings--icon tw">
                                      <i class="fab fa-twitter"></i>
                                    </div>
                                    <div class="w-100">
                                      <input type="text" name="twitter_url" class="form-control input-form-grey input-radius" placeholder="Type your twitter url here" />
                                    </div>
                                  </div>
                                  <br/>
                                  <div class="d-flex justify-content-center">
                                    <div class="profile__settings--icon yt">
                                      <i class="fab fa-youtube"></i>
                                    </div>
                                    <div class="w-100">
                                      <input type="text" name="youtube_url" class="form-control input-form-grey input-radius" placeholder="Type your youtube url here" />
                                    </div>
                                  </div>
                                </div>
                                <br/>
                                <div class="d-block w-100 text-center">
                                  <div class="d-inline profile__settings--submit--cancel">
                                    <button class="btn btn-warning btn-submit">Save</button> &nbsp;&nbsp; <button class="btn btn-secondary">Discord</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
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
    </main>
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body bg-light text-dark pb-3 pt-3">
            <div class="profile__settings--change--image__wrap">
              <h5 class="text-center">Change profile picture</h5>
              <div id="droparea" class="profile__settings--change--image__uploadbg">
                <input type="file" class="dropinput dropzonefoto" name="foto"/>
                <div class="profile__settings--change--image__upload--preview">
                  <div class="relative previewimg text-center">
                  </div>
                </div>
                  <div class="profile__settings--change--image__upload relative" style="background-image: url('<?php echo url('asset/static/icon/uploadbg.png')?>')">
                    <div class="profile__settings--change--image--loop"></div>
                  </div>
              </div>
              </div>
              <div class="profile__settings--change--upload__button">
                <div class="text-center">Drag and drop your images here</div>
                <div class="text-center">or</div>
                <br/>
                <div class="text-center mb-3">
                  <a href="javascript:void(0);" class="btn btn-light-light text-muted uploadapicture">Upload a picture</a>
                </div>
              </div>
              <div class="d-block w-100 text-center">
                <div class="d-inline profile__settings--submit--cancel">
                  <button class="btn btn-warning btn-submit">Save</button> &nbsp;&nbsp; <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Discord</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modalcanvas" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body bg-light text-dark pb-3 pt-3">
              <div class="profile__settings--change--image__wrap">
                <h5 class="text-center">Change profile picture</h5>
                <div id="dropareas" class="profile__settings--change--image__uploadbg canvas">
                  <input type="file" class="dropinput dropzonecanvas" name="foto"/>
                  <div class="profile__settings--change--image__upload--preview">
                    <div class="relative previewimg text-center">
                    </div>
                  </div>
                    <div class="profile__settings--change--image__upload relative" style="background-image: url('<?php echo url('asset/static/icon/uploadbg.png')?>')">
                      <div class="profile__settings--change--image--loop"></div>
                    </div>
                </div>
                </div>
                <div class="profile__settings--change--upload__button">
                  <div class="text-center">Drag and drop your images here</div>
                  <div class="text-center">or</div>
                  <br/>
                  <div class="text-center mb-3">
                    <a href="javascript:void(0);" class="btn btn-light-light text-muted uploadacanvas">Upload a picture</a>
                  </div>
                </div>
                <div class="d-block w-100 text-center">
                  <div class="d-inline profile__settings--submit--cancel">
                    <button class="btn btn-warning btn-submit">Save</button> &nbsp;&nbsp; <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Discord</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <?php include_once 'footer.php';?>
    <?php include_once 'loadscript.php';?>
    <script src="<?php echo url('asset/js/jquery-3.4.1.min.js');?>"></script>
    <script src="<?php echo url('asset/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?php echo url('asset/js/select2.full.min.js');?>"></script>
    <script src="<?php echo url('asset/gijgo/js/gijgo.min.js');?>"></script>
    <script src="<?php echo url('asset/croppie/croppie.min.js');?>"></script>
    <script>
      function readURL(input, element, callback) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            var htmlPreview = '<img alt="img" src="' + e.target.result + '" class="img-fluid imgcroppie"/>';
            $(element).append(htmlPreview);
            if(callback){
              callback();
            }
            //$(element).attr('style', 'background-image: url('+e.target.result+')');
          }

          reader.readAsDataURL(input.files[0]);
        }
      }


      $(document).ready(function(){
        $('#date-birthday').datepicker({ format: 'dd mmmm yyyy' });
        $('#date-birthdays').datepicker({ format: 'dd mmmm yyyy' });
        $('.selectsort').select2({
          placeholder: 'Please Select',
          minimumResultsForSearch: 10
        });

        $('#droparea').on('dragover', function(e) {
           e.preventDefault();
           e.stopPropagation();
           $(this).addClass('dragover');
        });

        $('.uploadapicture').on('click', function(){
          $('.dropzonefoto').click();
        });
        $('.uploadacanvas').on('click', function(){
          $('.dropzonecanvas').click();
        });
        $(document).on('change', '.dropzonefoto', function(){
          $('.profile__settings--change--image__upload--preview').addClass('preview');
          readURL(this, $(this).parent().find('.profile__settings--change--image__upload--preview .previewimg'), function(){
            $('.profile__settings--change--image__upload').addClass('invisible');
            $('.profile__settings--change--upload__button').addClass('d-none');
            $('.profile__settings--change--image__wrap').addClass('haspicture');
            $('.imgcroppie').croppie({
              viewport: {
        				width: 150,
        				height: 150,
        				type: 'circle'
        			},
            });
          });
        });
        $(document).on('change', '.dropzonecanvas', function(){
          $('.profile__settings--change--image__upload--preview').addClass('preview');
          readURL(this, $(this).parent().find('.profile__settings--change--image__upload--preview .previewimg'), function(){
            $('.profile__settings--change--image__upload').addClass('invisible');
            $('.profile__settings--change--upload__button').addClass('d-none');
            $('.profile__settings--change--image__wrap').addClass('haspicture');
            $('.imgcroppie').croppie({
              viewport: {
                width: 500,
        				height: 160,
        				type: 'square'
        			},
            });
          });
        });
        $('#modal').on('hidden.bs.modal', function () {
          $('.dropzonefoto').val('');
          $('.profile__settings--change--image__upload--preview').removeClass('preview');
          $('.profile__settings--change--image__upload--preview .previewimg').html('');
          $('.profile__settings--change--image__upload').removeClass('invisible');
          $('.profile__settings--change--image__uploadbg').removeClass('dragover');
          $('.profile__settings--change--upload__button').removeClass('d-none');
          $('.profile__settings--change--image__wrap').removeClass('haspicture');
        });
        $('#modalcanvas').on('hidden.bs.modal', function () {
          $('.dropzonefoto').val('');
          $('.profile__settings--change--image__upload--preview').removeClass('preview');
          $('.profile__settings--change--image__upload--preview .previewimg').html('');
          $('.profile__settings--change--image__upload').removeClass('invisible');
          $('.profile__settings--change--image__uploadbg').removeClass('dragover');
          $('.profile__settings--change--upload__button').removeClass('d-none');
          $('.profile__settings--change--image__wrap').removeClass('haspicture');
        });
      });
    </script>
<?php include_once 'footerhtml.php';?>
