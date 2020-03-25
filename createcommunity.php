<?php include_once 'metahead.php'; ?>
<?php include_once 'headerlogout.php';?>
    <main>
      <!-- Main Article-->
      <article>
        <div class="maincontent">
          <div class="maincontent__widget">
            <div class="maincontent__widget--communitytournament">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="maincontent__widget--form--content">
                      <h2 class="text-center nunitoLight">Create Community</h2>
                      <br/>
                      <form action="">
                        <div class="row">
                          <div class="col-12">
                            <div class="maincontent__widget--form--content__wrap">
                              <div class="clearfix relative d-inline-block w-100 mb-4">
                                <input type="text" name="community_name" class="form-control input-form-grey input-radius" placeholder="Type your community Name"/>
                                <label class="label-input">Community Name</label>
                                <span class="small noteinfo float-right">*) Max 20 Character</span>
                              </div>
                              <div class="relative d-inline-block w-100 mb-4">
                                <select name="community_category" class="form-control selectsort">
                                  <option value="dota2">Dota 2</option>
                                  <option value="Mobile Legend">Mobile Legend</option>
                                  <option value="CS:GO">CS:GO</option>
                                  <option value="PUBG">PUBG</option>
                                </select>
                                <label class="label-input">Community Category</label>
                              </div>
                              <div class="relative d-inline-block w-100 mb-4">
                                <textarea name="community_description" class="form-control input-form-grey input-radius" rows="5" placeholder="Type community description"></textarea>
                                <label class="label-input">Description</label>
                              </div>
                              <div class="maincontent__widget--form--content__field relative clearfix">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="maincontent__widget--form--identity--wrap__placeholder relative">
                                      <a href="javascript:void(0)" id="addktp" class="addktp">&nbsp;</a>
                                      <a href="javascript:void(0)" id="deletektp" class="deletektp d-none">
                                      <i class="fas fa-times"></i></a>
                                      <div class="maincontent__widget--form--identity__placeholder">
                                        <div class="d-table h-100 w-100">
                                          <div class="d-table-cell align-middle">
                                            <div class="maincontent__widget--form--preview--info__placeholder text-center">
                                              <div><i class="fas fa-upload"></i></div>
                                              <div>Upload</div>
                                              <div>Selfi with ID/KTP/SIM/Pasport</div>
                                            </div>
                                            <div id="maincontent__widget--form--preview__placeholder" class="maincontent__widget--form--preview__placeholder backgroundCoverTop">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <input type="file" accept="image/*" name="community_idktp" id="community_idktp" class="maincontent__widget--form--identity__file" value=""/>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="maincontent__widget--form--identity--wrap__placeholder relative">
                                      <a href="javascript:void(0)" id="addktp" class="addktp">&nbsp;</a>
                                      <a href="javascript:void(0)" id="deletektp" class="deletektp d-none">
                                      <i class="fas fa-times"></i></a>
                                      <div class="maincontent__widget--form--identity__placeholder">
                                        <div class="d-table h-100 w-100">
                                          <div class="d-table-cell align-middle">
                                            <div class="maincontent__widget--form--preview--info__placeholder text-center">
                                              <div><i class="fas fa-upload"></i></div>
                                              <div>Upload</div>
                                              <div>ID/KTP/SIM/Pasport</div>
                                            </div>
                                            <div id="maincontent__widget--form--preview__placeholder" class="maincontent__widget--form--preview__placeholder backgroundCoverTop">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <input type="file" accept="image/*" name="community_idktp" id="community_idktp" class="maincontent__widget--form--identity__file" value=""/>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="maincontent__widget--form--content__field relative clearfix">
                                <div class="checkbox relative mb-10px">
                                  <label for="agree">
                                    <input id="agree" type="checkbox" value="1" name=""/>
                                    I Agree to The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog
                                  </label>
                                </div>
                                <div class="checkbox relative">
                                  <label for="agree1">
                                    <input id="agree1" type="checkbox" value="1" name=""/>
                                    I Agree to The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog
                                  </label>
                                </div>
                              </div>

                              <div class="maincontent__widget--form--content__field relative clearfix text-center">
                                <button type="submit" class="btn btn-warning btn-submit">submit</button>
                                <div class="text-center text-grey mt-1">
                                  *Validation 1 x 24 hr
                                </div>
                              </div>

                            </div>
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
      </article>
      <!-- End article-->
    </main>
    <?php include_once 'footer.php';?>
    <?php include_once 'loadscript.php';?>
    <script src="<?php echo url('asset/js/jquery-3.4.1.min.js');?>"></script>
    <script src="<?php echo url('asset/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?php echo url('asset/js/select2.full.min.js');?>"></script>
    <script>
      $(document).ready(function(){
        function readURL(input, element) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              $(element).attr('style', 'background-image: url('+e.target.result+')');
            }

            reader.readAsDataURL(input.files[0]);
          }
        }
        $(document).on('click', '.addktp', function(){
          $(this).parent().find('input[type="file"]').click();
        });
        $(document).on('click', '.deletektp', function(){
          $(this).parent().find('.addktp').removeClass('d-none');
          $(this).parent().find('.deletektp').addClass('d-none');
          $(this).parent().find('.maincontent__widget--form--preview__placeholder').attr('style', '');
          $(this).parent().find('input[type="file"]').val('');
        });

        $('input[type="file"]').on('change',function() {
          $(this).parent().find('.deletektp').removeClass('d-none');
          $(this).parent().find('.addktp').addClass('d-none');
          readURL(this, $(this).parent().find('.maincontent__widget--form--preview__placeholder'));
        });

        $('.selectsort').select2({
          placeholder: 'Please Select',
          minimumResultsForSearch: 10
        });
      });
    </script>
<?php include_once 'footerhtml.php';?>
