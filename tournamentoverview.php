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
      <div class="wrap__breadcrumb">
        <div class="absolute top-0 z-index-1 w-100">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb noradius text-white">
                    <li class="breadcrumb-item"><a href="<?php echo url();?>"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo url();?>">Tournament</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Star Labre Imba..</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main Article-->
      <article>
        <div class="maincontent relative">
          <div class="banner__game backgroundCoverCenter" style="background-image: url(<?php echo url('asset/static/banner-placeholder.jpg');?>)">
            <div class="banner__game--container relative">
              <div class="banner__game--container--image relative">
                <img class="img-fluid invisible" src="<?php echo url('asset/static/banner-placeholder.jpg')?>" alt="placeholder" />
                <div class="banner__game--container--overlay h40">&nbsp;</div>
              </div>
            </div>
          </div>
          <div class="tournament__overview">
            <div class="container">
              <div class="row">
                <div class="col-12 mb-10px">
                  <a href="" class="btn btn-gradient-success d-inline-block radius">Series</a>&nbsp; &nbsp;<a href="" class="btn btn-gradient-warning d-inline-block radius">Prime</a>
                </div>
                <div class="col-12">
                  <div class="tournament__overview--joininfo">
                    <div class="row">
                      <div class="col-12">
                        <h1 class="mb-0"><img src="<?php echo url('asset/static/iconstar.png')?>" class="tournament__overview--icon" alt="icon"/>Star Ladder Imba Minor League </h1>
                      </div>
                      <div class="col-12">
                        <div class="row">
                          <div class="col-md-9">
                            <div class="mb-15px">Jakarta Dota 2 Qualifier deskripsi</div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="d-table h-100 w-100">
                                  <div class="d-table-cell align-middle">
                                    <div class="clearfix">
                                      <div class="float-left"><img src="<?php echo url('asset/static/icon/pricepool.png')?>" class="tournament__overview--icon iconpool" alt="icon"/></div>
                                      <div class="float-left">
                                        <div class="small d-block">Prize Pool</div>
                                        <div class="d-block"><h5>$ 30.000</h5></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-5">
                                <div class="d-table h-100 w-100">
                                  <div class="d-table-cell align-middle">
                                    <div class="clearfix">
                                      <div class="float-left"><img src="<?php echo url('asset/static/icon/location.png')?>" class="tournament__overview--icon iconpool" alt="icon"/></div>
                                      <div class="float-left">
                                        <div class="small d-block">Location</div>
                                        <div class="d-block"><h5>Surabaya, Indonesia</h5></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="d-table h-100 w-100">
                                  <div class="d-table-cell align-middle">
                                    <div class="clearfix">
                                      Single Elim / Double Elim
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#join-tournament" class="btn btn-big-join btn-warning d-block">
                              <div class="d-table h-100 w-100">
                                <div class="d-table-cell align-middle">
                                  <div class="clearfix">
                                    Join Tournament
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 mt-5">
                  <div class="tournament__overview--pricemanagedesc">
                    <div class="row">
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-10">
                            <div class="tournament__overview--pricemanagedesc__prize">
                              <h3 class="nunitoLight">Tournament Prize</h3>
                              <ul class="list-unstyled nunitoLight">
                                <li><h4 class="mb-0">1st  - $2.000</h4></li>
                                <li><h4 class="mb-0">2nd - $1.000</h4></li>
                                <li><h4 class="mb-0">3rd - $500</h4></li>
                                <li><h4 class="mb-0">4th - $500</h4></li>
                                <li><h4 class="mb-0">5th - $500</h4></li>
                              </ul>
                            </div>
                            <div class="tournament__overview--pricemanagedesc__desc mt-5">
                              <h4 class="nunitoLight">Description : </h4>
                              <p>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="tournament__overview--pricemanagedesc__man">
                          <h4 class="nunitoLight mb-10px">Manage By : </h4>
                          <div class="row">
                            <div class="col-md-6">
                              <img src="<?php echo url('asset/static/cohave.jpg')?>" class="img-fluid" alt="icon"/>
                            </div>
                            <div class="col-md-6 pdl-md-0">
                              <h5>Cohave</h5>
                              <div class="clearfix">
                                <div class="maincontent__widget--community--tab--content__list--icon float-left mr-10px small">
                                  <i class="fas fa-gem"></i> 210
                                </div>
                                <div class="maincontent__widget--community--tab--content__list--icon float-left small">
                                  <i class="fas fa-heart"></i> 1250
                                </div>
                              </div>
                              <div class="clearfix">
                                <div class="tournament__overview--pricemanagedesc__man--socmed float-left mr-10px">
                                  <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                                </div>
                                <div class="tournament__overview--pricemanagedesc__man--socmed float-left mr-10px">
                                  <a href="https://twitter.com"><i class="fab fa-facebook-square"></i></a>
                                </div>
                                <div class="tournament__overview--pricemanagedesc__man--socmed float-left mr-10px">
                                  <a href="https://twitter.com"><i class="fab fa-youtube"></i></a>
                                </div>
                                <div class="tournament__overview--pricemanagedesc__man--socmed float-left mr-10px">
                                  <a href="https://twitter.com"><i class="fab fa-instagram"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row mt-5">
                            <div class="col-12">
                              <a href="javascript:void(0)"  data-toggle="modal" data-target="#rules" class="btn btn-big-outline text-white"><h4 class="mb-0">Rules</h4></a>
                            </div>
                          </div>
                          <br/>
                          <div class="row">
                            <div class="col-12">
                              <a href="javascript:void(0)" data-toggle="modal" data-target="#how-to-join"  class="btn btn-big-outline text-white"><h4 class="mb-0">How to Join</h4></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="tournament__overview--tab fiveth long">
                    <!--
                      tambahkan class fourth pada tournament__overview--tab jika jumlah 4 nav-item
                      tambahkan class fiveth pada tournament__overview--tab jika jumlah 5 nav-item
                      tambahkan class Long pada tournament__overview--tab jika jumlah lebih dari 5 nav-item
                    -->
                    <div class="tournament__overview--tab--wrap">
                      <div class="tournament__overview--tab--wrap__list">
                        <ul class="nav nav-tabs nunitoLight" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="open-tab" data-toggle="tab" href="#open" role="tab" aria-controls="open" aria-selected="true">
                              <h5 class="mb-0">Open Qualifier</h5>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" target="_blank" id="close-tab" href="<?php echo url('tournamentoverviewsecond.php')?>">
                              <h5 class="mb-0">Closed Qualifier</h5>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="mainevent-tab" data-toggle="tab" href="#mainevent" role="tab" aria-controls="mainevent" aria-selected="false">
                              <h5 class="mb-0">Main Event</h5>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="open-tab" data-toggle="tab" href="#open" role="tab" aria-controls="open" aria-selected="false">
                              <h5 class="mb-0">Open Qualifier</h5>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" target="_blank" id="close-tab" href="<?php echo url('tournamentoverviewsecond.php')?>">
                              <h5 class="mb-0">Closed Qualifier</h5>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="mainevent-tab" data-toggle="tab" href="#mainevent" role="tab" aria-controls="mainevent" aria-selected="false">
                              <h5 class="mb-0">Main Event</h5>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="open" role="tabpanel" aria-labelledby="open-tab">
                        <div class="tournament__overview--tab--details mb-5">
                          <div class="row">
                            <div class="col-md-10">
                              <h4>TOURNAMENT DETAILS</h4>
                              <br/>
                              <div class="row">
                                <div class="col-md-4 mb-20px">
                                  <div class="d-table h-100 w-100">
                                    <div class="d-table-cell align-middle">
                                      <div class="clearfix">
                                        <div class="float-left">
                                          <img src="<?php echo url('asset/static/icon/tournament-details-name-game.png')?>" class="tournament__overview--icon" alt="img"/>
                                        </div>
                                        <div class="float-left">
                                          <img src="<?php echo url('asset/static/dota.png')?>" class="tournament__overview--icon" alt="img"/>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-8 mb-20px">
                                  <div class="d-table h-100 w-100">
                                    <div class="d-table-cell align-middle">
                                      <div class="clearfix">
                                        <div class="float-left">
                                          <img src="<?php echo url('asset/static/icon/tournament-details-streaming.png')?>" class="tournament__overview--icon" alt="img"/>
                                        </div>
                                        <div class="float-left">
                                          <h5 class="mb-0 tournament__overview--tab--details__heading5">Friday, 1 March 2019, 11:05 WIB</h5>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-4 mb-20px">
                                  <div class="d-table h-100 w-100">
                                    <div class="d-table-cell align-middle">
                                      <div class="clearfix">
                                        <div class="float-left">
                                          <img src="<?php echo url('asset/static/icon/location.png')?>" class="tournament__overview--icon" alt="img"/>
                                        </div>
                                        <div class="float-left">
                                          <h5 class="mb-0 tournament__overview--tab--details__heading5">Surabaya, Indonesia</h5>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-8 mb-20px">
                                  <div class="d-table h-100 w-100">
                                    <div class="d-table-cell align-middle">
                                      <div class="clearfix">
                                        <div class="float-left">
                                          <img src="<?php echo url('asset/static/icon/tournament-details-streaming.png')?>" class="tournament__overview--icon" alt="img"/>
                                        </div>
                                        <div class="float-left">
                                          <h5 class="mb-0 tournament__overview--tab--details__heading5">Friday, 1 March 2019, 11:05 WIB</h5>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="create__tournament--mode--box grey h-100">
                                <div class="d-table h-100 w-100">
                                  <div class="d-table-cell align-middle">
                                    <div class="clearfix">
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
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tournament__overview--tab--participant">
                          <div class="row">
                            <?php for ($i=1; $i < 13 ; $i++) {?>
                              <div class="col-md-4 mb-30px">
                                <div class="clearfix">
                                  <div class="tournament__overview--tab--participant__icon mr-10px">
                                    <img src="<?php echo url('asset/static/tournament-details/'.$i.'.jpg')?>" alt="img" class="img-fluid"/>
                                  </div>
                                  <div class="tournament__overview--tab--participant__detail">
                                    <h5>Борис_Селиверстов60</h5>
                                    <div class="clearfix">
                                      <?php if($i%2 == 0){?>
                                        <div class="float-left mr-10px">
                                          <img src="<?php echo url('asset/static/icon/waiting.png')?>" alt="img" class="tournament__overview--tab--participant__detail--icon"/>
                                        </div>
                                        <div class="float-left">
                                          <div class="tournament__overview--tab--participant__detail--status">Waiting for check in</div>
                                        </div>
                                      <?php }else{ ?>
                                        <div class="float-left mr-10px">
                                          <img src="<?php echo url('asset/static/icon/checkin.png')?>" alt="img" class="tournament__overview--tab--participant__detail--icon"/>
                                        </div>
                                        <div class="float-left">
                                          <div class="tournament__overview--tab--participant__detail--status">check in</div>
                                        </div>
                                        <?php }?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <?php }?>
                          </div>
                          <div class="row mt-5">
                            <div class="col-12">
                              <div class="tournament__overview--tab--participant__regist">
                                <div class="row">
                                  <div class="col-md-4">
                                    <div>Registration Start</div>
                                    <h5 class="mb-5">Friday, 1 March 2019</h5>
                                    <div>Registration en</div>
                                    <h5 class="mb-5">Friday, 1 March 2019</h5>
                                    <div>Stand</div>
                                    <h5 class="mb-5">No</h5>
                                  </div>
                                  <div class="col-md-4">
                                    <div>Check-In Start</div>
                                    <h5 class="mb-5">Friday, 1 March 2019</h5>
                                    <div>Check-In End</div>
                                    <h5 class="mb-5">Friday, 1 March 2019</h5>
                                    <div>Stand-In Limit</div>
                                    <h5 class="mb-5">0</h5>
                                  </div>
                                  <div class="col-md-4">
                                    <div>Start Date:</div>
                                    <h5 class="mb-5">Friday, 1 March 2019</h5>
                                    <div>End Date:</div>
                                    <h5 class="mb-5">Friday, 1 March 2019</h5>
                                    <div>Participant</div>
                                    <h5 class="mb-5">16</h5>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row mt-5 mb-5">
                            <div class="col-12">
                              <div class="tournament__overview--tab--participant__linksubmit">
                                <div class="row">
                                  <div class="col-md-4">
                                    <a href="tournamentmatch.php" class="btn btn-big-join nominus btn-warning d-block">MATCH</a>
                                  </div>
                                  <div class="col-md-4">
                                    <a href="tournamentbracket.php" class="btn btn-big-join nominus btn-warning d-block">BRACKET</a>
                                  </div>
                                  <div class="col-md-4">
                                    <a href="tournamentwatch.php" class="btn btn-big-join nominus btn-warning d-block">
                                      <div class="d-flex justify-content-center align-items-center">
                                        <div class="icon-circle"><i class="fas fa-play"></i></div><div>WATCH</div>
                                      </div>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="mainevent" role="tabpanel" aria-labelledby="mainevent-tab">
                        <div class="tournament__overview--tab--closequalifier mb-5">
                          <div class="row">
                            <?php for ($number=1; $number < 11 ; $number++) {
                              $ends = array('th','st','nd','rd','th','th','th','th','th','th');
                              if (($number %100) >= 11 && ($number%100) <= 13){
                                 $abbreviation = $number. 'th';
                              }else{
                                 $abbreviation = $number. $ends[$number % 10];
                              }
                            ?>
                              <div class="col-md-6 mb-10px">
                                <div class="d-flex flex-row align-items-center">
                                  <div class="d-inline-block text-center mr-20px minw45 ">
                                    <h5 class="mb-0"><?php echo $abbreviation;?></h5>
                                  </div>
                                  <div class="tournament__overview--tab--participant__icon mr-20px float-none d-inline-block">
                                    <img src="<?php echo url('asset/static/tournament-details/'. $number .'.jpg')?>" alt="img" class="img-fluid"/>
                                  </div>
                                  <div class="d-inline-block">
                                    <h5 class="mb-0">Светлана_Горбачев</h5>
                                  </div>
                                </div>
                              </div>
                            <?php }?>
                          </div>
                        </div>

                        <div class="tournament__overview--tab--details mb-5">
                          <div class="row">
                            <div class="col-md-10">
                              <h4>TOURNAMENT DETAILS</h4>
                              <br/>
                              <div class="row">
                                <div class="col-md-4 mb-20px">
                                  <div class="d-table h-100 w-100">
                                    <div class="d-table-cell align-middle">
                                      <div class="clearfix">
                                        <div class="float-left">
                                          <img src="<?php echo url('asset/static/icon/tournament-details-name-game.png')?>" class="tournament__overview--icon" alt="img"/>
                                        </div>
                                        <div class="float-left">
                                          <img src="<?php echo url('asset/static/dota.png')?>" class="tournament__overview--icon" alt="img"/>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-8 mb-20px">
                                  <div class="d-table h-100 w-100">
                                    <div class="d-table-cell align-middle">
                                      <div class="clearfix">
                                        <div class="float-left">
                                          <img src="<?php echo url('asset/static/icon/tournament-details-streaming.png')?>" class="tournament__overview--icon" alt="img"/>
                                        </div>
                                        <div class="float-left">
                                          <h5 class="mb-0 tournament__overview--tab--details__heading5">Friday, 1 March 2019, 11:05 WIB</h5>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-4 mb-20px">
                                  <div class="d-table h-100 w-100">
                                    <div class="d-table-cell align-middle">
                                      <div class="clearfix">
                                        <div class="float-left">
                                          <img src="<?php echo url('asset/static/icon/location.png')?>" class="tournament__overview--icon" alt="img"/>
                                        </div>
                                        <div class="float-left">
                                          <h5 class="mb-0 tournament__overview--tab--details__heading5">Surabaya, Indonesia</h5>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-8 mb-20px">
                                  <div class="d-table h-100 w-100">
                                    <div class="d-table-cell align-middle">
                                      <div class="clearfix">
                                        <div class="float-left">
                                          <img src="<?php echo url('asset/static/icon/tournament-details-streaming.png')?>" class="tournament__overview--icon" alt="img"/>
                                        </div>
                                        <div class="float-left">
                                          <h5 class="mb-0 tournament__overview--tab--details__heading5">Friday, 1 March 2019, 11:05 WIB</h5>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="create__tournament--mode--box grey h-100">
                                <div class="d-table h-100 w-100">
                                  <div class="d-table-cell align-middle">
                                    <div class="clearfix">
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
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tournament__overview--tab--participant">
                          <div class="row">
                            <?php for ($i=1; $i < 13 ; $i++) {?>
                              <div class="col-md-4 mb-30px">
                                <div class="clearfix">
                                  <div class="tournament__overview--tab--participant__icon mr-10px">
                                    <img src="<?php echo url('asset/static/tournament-details/'.$i.'.jpg')?>" alt="img" class="img-fluid"/>
                                  </div>
                                  <div class="tournament__overview--tab--participant__detail">
                                    <h5>Борис_Селиверстов60</h5>
                                    <div class="clearfix">
                                      <?php if($i%2 == 0){?>
                                        <div class="float-left mr-10px">
                                          <img src="<?php echo url('asset/static/icon/waiting.png')?>" alt="img" class="tournament__overview--tab--participant__detail--icon"/>
                                        </div>
                                        <div class="float-left">
                                          <div class="tournament__overview--tab--participant__detail--status">Waiting for check in</div>
                                        </div>
                                      <?php }else{ ?>
                                        <div class="float-left mr-10px">
                                          <img src="<?php echo url('asset/static/icon/checkin.png')?>" alt="img" class="tournament__overview--tab--participant__detail--icon"/>
                                        </div>
                                        <div class="float-left">
                                          <div class="tournament__overview--tab--participant__detail--status">check in</div>
                                        </div>
                                        <?php }?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <?php }?>
                          </div>
                          <div class="row mt-5">
                            <div class="col-12">
                              <div class="tournament__overview--tab--participant__regist">
                                <div class="row">
                                  <div class="col-md-4">
                                    <div>Registration Start</div>
                                    <h5 class="mb-5">Friday, 1 March 2019</h5>
                                    <div>Registration en</div>
                                    <h5 class="mb-5">Friday, 1 March 2019</h5>
                                    <div>Stand</div>
                                    <h5 class="mb-5">No</h5>
                                  </div>
                                  <div class="col-md-4">
                                    <div>Check-In Start</div>
                                    <h5 class="mb-5">Friday, 1 March 2019</h5>
                                    <div>Check-In End</div>
                                    <h5 class="mb-5">Friday, 1 March 2019</h5>
                                    <div>Stand-In Limit</div>
                                    <h5 class="mb-5">0</h5>
                                  </div>
                                  <div class="col-md-4">
                                    <div>Start Date:</div>
                                    <h5 class="mb-5">Friday, 1 March 2019</h5>
                                    <div>End Date:</div>
                                    <h5 class="mb-5">Friday, 1 March 2019</h5>
                                    <div>Participant</div>
                                    <h5 class="mb-5">16</h5>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row mt-5 mb-5">
                            <div class="col-12">
                              <div class="tournament__overview--tab--participant__linksubmit">
                                <div class="row">
                                  <div class="col-md-4">
                                    <a href="tournamentmatch.php" class="btn btn-big-join nominus btn-warning d-block">MATCH</a>
                                  </div>
                                  <div class="col-md-4">
                                    <a href="tournamentbracket.php" class="btn btn-big-join nominus btn-warning d-block">BRACKET</a>
                                  </div>
                                  <div class="col-md-4">
                                    <a href="tournamentwatch.php" class="btn btn-big-join nominus btn-warning d-block">WATCH</a>
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
            </div>
          </div>
        </div>
      </article>
      <!-- End article-->
      <!-- Modal -->
      <div class="modal fade" id="join-tournament" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <div class="clearfix">
                <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="tournament__overview--jointurnament relative">
                <h4 class="text-center mt-5">Join Tournament</h4>
                <br/>
                <div class="container mb-5">
                  <div class="row">
                    <div class="col-md-6">
                      <a href="#" class="btn btn-big-join bg-light nominus d-block">With Team</a>
                    </div>
                    <div class="col-md-6">
                      <a href="#" class="btn btn-big-join bg-light nominus d-block">With Party</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="how-to-join" tabindex="-1" role="dialog" aria-labelledby="howtojoin" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <div class="clearfix">
                <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="tournament__overview--jointurnament relative">
                <h4 class="text-center">How to Join</h4>
                <br/>
                <p class="text-center">How to Join is here</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="rules" tabindex="-1" role="dialog" aria-labelledby="rules" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <div class="clearfix">
                <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="tournament__overview--jointurnament relative">
                <h4 class="text-center">Rule</h4>
                <br/>
                <p class="text-center">rules is here</p>
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
        let ytb = $('.youtube-iframe');
        if(ytb.length){
          for (var i=0; i<ytb.length; i++) {
            if(ytb[i].getAttribute('data-src')) {
              ytb[i].setAttribute('src',ytb[i].getAttribute('data-src'));
            }
          }
        }
        if($('.long').length > 0){
          let lengthItem = $('.long').find('li').length;
          let widthItem = $('.long').find('li').width();
          let sizeofwidht = widthItem*lengthItem;
          $('.long').find('li').css({'width':widthItem+'px'});
          $('.tournament__overview--tab--wrap__list').css({'width':sizeofwidht+'px'});
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
