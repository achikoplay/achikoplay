<?php include_once 'metahead.php'; ?>
<?php include_once 'header.php';?>
    <main>
      <!-- Main Article-->
      <article>
        <div class="maincontent">
          <div class="maincontent__widget">
            <div class="maincontent__widget--communitytournament">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb noradius">
                        <li class="breadcrumb-item"><a href="<?php echo url();?>"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="<?php echo url('tournament.php');?>">Tournamnet</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo url('tournamentoverview.php');?>">Star Leaser Imbra..</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Match</li>
                      </ol>
                    </nav>
                  </div>
                </div>
                <div class="row mt-5">
                  <div class="col-12">
                    <div class="tournament__match">
                      <div class="clearfix d-block mb-3">
                        <h1 class="mb-0 text-center"><img src="http://localhost/achikohtml/asset/static/iconstar.png" class="tournament__overview--icon" alt="icon">Star Ladder Imba Minor League </h1>
                      </div>
                      <!--
                        tambahkan class long pada tournament__match--menu jika jumlah > 3 item li
                        (take out class long if only three)
                      -->
                      <div class="tournament__match--menu long">
                        <div class="tournament__match--menu--wrap">
                          <div class="tournament__match--menu--wrap__length">
                            <ul class="clearfix">
                              <li>
                                <a class="tournament__match--menu--link active" href="javascript:void(0);">
                                  <div class="row">
                                    <div class="col-9 text-left">
                                      Open Qualifier
                                    </div>
                                    <div class="col-3 relative">
                                      <div class="tournament__match--menu--link__arrow w-100">
                                        <img src="<?php echo url('asset/static/icon/arrow.png');?>" alt="icon"/>
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a class="tournament__match--menu--link" href="javascript:void(0);">
                                  <div class="row">
                                    <div class="col-9 text-left">
                                      Closed Qualifier
                                    </div>
                                    <div class="col-3 relative">
                                      <div class="tournament__match--menu--link__arrow w-100">
                                        <img src="<?php echo url('asset/static/icon/arrow.png');?>" alt="icon"/>
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a class="tournament__match--menu--link" href="javascript:void(0);">
                                  <div class="row">
                                    <div class="col-9 text-left">
                                      Main Stage
                                    </div>
                                    <div class="col-3 relative">
                                      <div class="tournament__match--menu--link__arrow w-100">
                                        <img src="<?php echo url('asset/static/icon/arrow.png');?>" alt="icon"/>
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a class="tournament__match--menu--link" href="javascript:void(0);">
                                  <div class="row">
                                    <div class="col-9 text-left">
                                      Main Stage
                                    </div>
                                    <div class="col-3 relative">
                                      <div class="tournament__match--menu--link__arrow w-100">
                                        <img src="<?php echo url('asset/static/icon/arrow.png');?>" alt="icon"/>
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a class="tournament__match--menu--link" href="javascript:void(0);">
                                  <div class="row">
                                    <div class="col-9 text-left">
                                      Main Stage
                                    </div>
                                    <div class="col-3 relative">
                                      <div class="tournament__match--menu--link__arrow w-100">
                                        <img src="<?php echo url('asset/static/icon/arrow.png');?>" alt="icon"/>
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a class="tournament__match--menu--link" href="javascript:void(0);">
                                  <div class="row">
                                    <div class="col-9 text-left">
                                      Main Stage
                                    </div>
                                    <div class="col-3 relative">
                                      <div class="tournament__match--menu--link__arrow w-100">
                                        <img src="<?php echo url('asset/static/icon/arrow.png');?>" alt="icon"/>
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="tournament__match--choose">
                        <div class="row">
                          <div class="col-md-5">
                            <div class="maincontent__widget--wrap--select relative">
                              <select class="selectsort" name="sort">
                                <option value="Date Ascending">Date Ascending</option>
                                <option value="Date Descending">Date Descending</option>
                                <option value="Prizo Pool">Prizo Pool (Descending)</option>
                              </select>
                              <label>Choose Group</label>
                            </div>
                          </div>
                          <div class="col-md-5 offset-md-2">
                            <div class="maincontent__widget--wrap--select relative">
                              <select class="selectsort" name="sort">
                                <option value="Date Ascending">Date Ascending</option>
                                <option value="Date Descending">Date Descending</option>
                                <option value="Prizo Pool">Prizo Pool (Descending)</option>
                              </select>
                              <label>Choose Round</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <br/>
                      <div class="tournament__match--wrapbox">
                        <?php for ($i=0; $i < 11 ; $i++) { ?>
                          <div class="tournament__match--wrapbox--item mb-30px">
                            <div class="row">
                              <div class="col-md-6 relative">
                                <div class="tournament__match--wrapbox--item__separated">&nbsp;</div>
                                <h6>Open Qualifier / Quarter Final / Best fo 1</h6>
                                <div class="clearfix mb-10px">
                                  <div>Game Mode</div>
                                  <div class="d-flex flex-row align-items-center">
                                    <div class="mr-10px">
                                      <img src="http://localhost/achikohtml/asset/static/iconstar.png" class="tournament__overview--tab--participant__detail--icon" alt="icon">
                                    </div>
                                    <div><h5 class="mb-0">5 vs 5 All Pick</h5></div>
                                  </div>
                                </div>
                                <div class="clearfix">
                                  <div>Date</div>
                                  <div class="d-flex flex-row align-items-center">
                                    <div><h5 class="mb-0">2 Desember 2019, 07:21 WIB</h5></div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="d-table w-100 h-100">
                                <div class="d-table-cell align-middle">
                                <div class="clearfix">
                                  <div class="d-flex flex-row align-items-center justify-content-center">
                                    <div class="text-center d-block">
                                      <div class="tournament__overview--tab--participant__icon">
                                        <img src="<?php echo url('asset/static/tournament/packman.jpg');?>" alt="img" class="img-fluid">
                                      </div>
                                      <div>Pacman Pro</div>
                                    </div>
                                    <div class="tournament__match--wrapbox--item__vs d-block">
                                      <div class="d-flex flex-row align-items-center">
                                        <div class="tournament__match--wrapbox--item__vs--left">
                                          <h2 class="mb-0">57</h2>
                                        </div>
                                        <div class="tournament__match--wrapbox--item__vs--center">
                                          <h5 class="mb-0">vs</h5>
                                        </div>
                                        <div class="tournament__match--wrapbox--item__vs--right">
                                          <h2 class="mb-0">57</h2>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="text-center d-block">
                                      <div class="tournament__overview--tab--participant__icon">
                                        <img src="<?php echo url('asset/static/tournament/boom.jpg');?>" alt="img" class="img-fluid">
                                      </div>
                                      <div>Boom ID</div>
                                    </div>
                                  </div>
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
          $('.tournament__match--menu--link').on('click', function(){
            $('.tournament__match--menu--link').removeClass('active');
            $(this).addClass('active');
          });
          if($('.long').length > 0){
            let lengthItem = $('.long').find('li').length;
            let widthItem = $('.long').find('li').width();
            let sizeofwidht = widthItem*lengthItem;
            $('.long').find('li').css({'width':widthItem+'px'});
            $('.long').find('.tournament__match--menu--wrap__length').css({'width':sizeofwidht+'px'});
          }
          $('.selectsort').select2({
            placeholder: 'Please Select',
            minimumResultsForSearch: 10
          });
        });
    </script>
<?php include_once 'footerhtml.php';?>
