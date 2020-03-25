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
                    <div class="maincontent__widget--form--content bg-transparent createtournament">
                      <div class="create__tournament--wrapping">
                        <h2 class="text-center nunitoLight">Create New Tournament</h2>
                        <br/>
                        <form action="tournamentoverview.php">
                          <div class="create__tournament--create--community">
                            <h4 class="text-center mt-5">Choose Your Community</h4>
                            <div class="relative d-inline-block w-100">
                              <select name="city" class="form-control selectsort">
                                <option value="Sikat Miring Gaming">Sikat Miring Gaming</option>
                                <option value="Sikat Miring Gaming">Sikat Miring Gaming</option>
                                <option value="Sikat Miring Gaming">Sikat Miring Gaming</option>
                              </select>
                            </div>
                            <div class="text-center mt-2 mb-2">
                              Or
                            </div>
                            <div class="maincontent__widget--form--content__field relative text-capitalized clearfix text-center">
                              <button type="submit" class="btn btn-warning btn-submit">Create Community</button>
                            </div>
                          </div>
                          <div class="communitytournament__wrap--picklogo">
                            <h4 class="text-center mt-5">Pick up your Game</h4>
                            <div class="row mb-4">
                              <div class="col-md-4 col-6 text-center  mb-15px">
                                <div class="communitytournament__wrap--picklogo--item text-center">
                                  <a href="javascript:void(0);" class="d-block communitytournament__wrap--picklogo--link--image pickgame backgroundCoverCenter mb-10px" style="background-image: url('asset/static/tournament/hover-1.jpg')">
                                    <div class="communitytournament__wrap--picklogo--image">
                                      <div class="d-table h-100 w-100">
                                        <div class="d-table-cell align-middle text-center">
                                          <img src="<?php echo url('asset/static/tournament/logodota2@2x.png')?>" class="img-fluid" alt="dota"/>
                                        </div>
                                      </div>
                                    </div>
                                  </a>
                                  <a href="javascript:void(0);" class="d-block communitytournament__wrap--picklogo--text text-center text-white">
                                    Dota 2
                                  </a>
                                </div>
                              </div>
                              <div class="col-md-4  col-6 text-center  mb-15px">
                                <div class="communitytournament__wrap--picklogo--item text-center">
                                  <a href="javascript:void(0);" class="d-block communitytournament__wrap--picklogo--link--image pickgame backgroundCoverCenter mb-10px" style="background-image: url('asset/static/tournament/hover-3.jpg')">
                                    <div class="communitytournament__wrap--picklogo--image">
                                      <div class="d-table h-100 w-100">
                                        <div class="d-table-cell align-middle text-center">
                                          <img src="<?php echo url('asset/static/tournament/cs-go@2x.png')?>" class="img-fluid" alt="dota"/>
                                        </div>
                                      </div>
                                    </div>
                                  </a>
                                  <a href="javascript:void(0);" class="d-block communitytournament__wrap--picklogo--text text-center text-white">
                                    Counter Strike : GO
                                  </a>
                                </div>
                              </div>
                              <div class="col-md-4  col-12 text-center mb-15px">
                                <div class="communitytournament__wrap--picklogo--item text-center">
                                  <a href="javascript:void(0);" class="d-block communitytournament__wrap--picklogo--link--image pickgame backgroundCoverCenter mb-10px" style="background-image: url('asset/static/tournament/hover-2.jpg')">
                                    <div class="communitytournament__wrap--picklogo--image">
                                      <div class="d-table h-100 w-100">
                                        <div class="d-table-cell align-middle text-center">
                                          <img src="<?php echo url('asset/static/tournament/mobilel@2x.png')?>" class="img-fluid" alt="dota"/>
                                        </div>
                                      </div>
                                    </div>
                                  </a>
                                  <a href="javascript:void(0);" class="d-block communitytournament__wrap--picklogo--text text-center text-white">
                                    Mobile Legend
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <br/>
                          <div class="clearfix mb-3">
                            <h4 class="text-center">Tournament Name</h4>
                            <div class="relative d-inline-block w-100 mb-4">
                              <input type="text" name="username" class="form-control input-form-grey input-radius text-center" placeholder="Type your Tournament Name"/>
                            </div>
                          </div>
                          <br/>
                          <div class="clearfix mb-4 mt-3">
                            <h4 class="text-center">Tournament Format</h4>
                            <div class="relative clearfix create__tournament--format--wrap">
                              <div class="d-flex justify-content-center">
                                <div class="create__tournament--format">
                                  <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline1">Single Elimination</label>
                                  </div>
                                </div>
                                <div class="create__tournament--format">
                                  <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2">Double Elimination</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <br/>
                          <div class="create__tournament--mode mb-4">
                            <h4 class="text-center">Mode</h4>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="create__tournament--mode--box">
                                  <div class="create__tournament--mode--box__title">
                                    Captain Pick
                                  </div>
                                  <div class="create__tournament--mode--box__number">
                                    <div class="create__tournament--mode--box__number--wrap clearfix">
                                      <div>5</div>
                                      <div>5</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="create__tournament--mode--box">
                                  <div class="create__tournament--mode--box__title">
                                    All Pick
                                  </div>
                                  <div class="create__tournament--mode--box__number">
                                    <div class="create__tournament--mode--box__number--wrap clearfix">
                                      <div>5</div>
                                      <div>5</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="create__tournament--mode--box">
                                  <div class="create__tournament--mode--box__title">
                                    &nbsp;
                                  </div>
                                  <div class="create__tournament--mode--box__number">
                                    <div class="create__tournament--mode--box__number--wrap clearfix">
                                      <div>5</div>
                                      <div>5</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <br/>
                          <div class="create__tournament--dateplace mt-3">
                            <div class="row">
                              <div class="col-md-6">
                                <h4>Start Date:</h4>
                                <div class="relative d-inline-block w-100 mb-4">
                                  <input id="date-start" type="text" name="date_start" class="form-control input-form-grey input-radius" placeholder="Type your date start"/>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <h4>End Date:</h4>
                                <input id="date-end" type="text" name="date_end" class="form-control input-form-grey input-radius" placeholder="Type your date end"/>
                              </div>
                            </div>
                          </div>
                          <br/>
                          <br/>
                          <div class="clearfix mt-5 mb-5"></div>
                          <div class="maincontent__widget--form--content__field relative clearfix text-center">
                            <button type="submit" class="btn btn-warning btn-submit">CREATE TOURNAMENT</button>
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
      </article>
      <!-- End article-->
    </main>
    <?php include_once 'footer.php';?>
    <?php include_once 'loadscript.php';?>
    <script src="<?php echo url('asset/js/jquery-3.4.1.min.js');?>"></script>
    <script src="<?php echo url('asset/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?php echo url('asset/js/select2.full.min.js');?>"></script>
    <script src="<?php echo url('asset/gijgo/js/gijgo.min.js');?>"></script>
    <script>
      $(document).ready(function(){
        $('.create__tournament--mode--box').on('click', function(){
          $('.create__tournament--mode--box').removeClass('active');
          $(this).addClass('active');
        });
        $('.pickgame').on('click', function(){
          $('.pickgame').removeClass('active');
          $(this).addClass('active');
        });
        $('#date-start').datepicker();
        $('#date-end').datepicker();
        $('.selectsort').select2({
          placeholder: 'Please Select',
          minimumResultsForSearch: 10
        });
      });
    </script>
<?php include_once 'footerhtml.php';?>
