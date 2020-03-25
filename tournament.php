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
                        <li class="breadcrumb-item active" aria-current="page">Tournament</li>
                      </ol>
                    </nav>
                  </div>
                  <div class="col-12">
                    <div class="maincontent__widget--communitytournament--content">
                      <h2 class="text-center nunitoLight">Tournament</h2>
                      <br/>
                      <div class="communitytournament__wrap--picklogo">
                        <div class="row">
                          <div class="col-md-4 col-6 text-center  mb-15px">
                            <div class="communitytournament__wrap--picklogo--item text-center">
                              <a href="#" class="d-block communitytournament__wrap--picklogo--link--image backgroundCoverCenter mb-10px" style="background-image: url('asset/static/tournament/hover-1.jpg')">
                                <div class="communitytournament__wrap--picklogo--image">
                                  <div class="d-table h-100 w-100">
                                    <div class="d-table-cell align-middle text-center">
                                      <img src="<?php echo url('asset/static/tournament/logodota2@2x.png')?>" class="img-fluid" alt="dota"/>
                                    </div>
                                  </div>
                                </div>
                              </a>
                              <a href="#" class="d-block communitytournament__wrap--picklogo--text text-center text-white">
                                Dota 2
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4  col-6 text-center  mb-15px">
                            <div class="communitytournament__wrap--picklogo--item text-center">
                              <a href="#" class="d-block communitytournament__wrap--picklogo--link--image backgroundCoverCenter mb-10px" style="background-image: url('asset/static/tournament/hover-3.jpg')">
                                <div class="communitytournament__wrap--picklogo--image">
                                  <div class="d-table h-100 w-100">
                                    <div class="d-table-cell align-middle text-center">
                                      <img src="<?php echo url('asset/static/tournament/cs-go@2x.png')?>" class="img-fluid" alt="dota"/>
                                    </div>
                                  </div>
                                </div>
                              </a>
                              <a href="#" class="d-block communitytournament__wrap--picklogo--text text-center text-white">
                                Counter Strike : GO
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4  col-12 text-center mb-15px">
                            <div class="communitytournament__wrap--picklogo--item text-center">
                              <a href="#" class="d-block communitytournament__wrap--picklogo--link--image backgroundCoverCenter mb-10px" style="background-image: url('asset/static/tournament/hover-2.jpg')">
                                <div class="communitytournament__wrap--picklogo--image">
                                  <div class="d-table h-100 w-100">
                                    <div class="d-table-cell align-middle text-center">
                                      <img src="<?php echo url('asset/static/tournament/mobilel@2x.png')?>" class="img-fluid" alt="dota"/>
                                    </div>
                                  </div>
                                </div>
                              </a>
                              <a href="#" class="d-block communitytournament__wrap--picklogo--text text-center text-white">
                                Mobile Legend
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 mt-5">
                    <form action="">
                      <div class="wrapinputsearch">
                        <input id="input-search" type="text" name="search" class="maincontent__widget--communitytournament--search form-control input-search noradius" placeholder="Search Tournament Name Here"/>
                        <i class="fal fa-search"></i>
                      </div>
                    </form>
                  </div>
                  <div class="col-12 mt-5">
                    <div class="row">
                      <div class="col-lg-9 col-md-12">
                        <div class="maincontent__widget--communitytournament--filter__content d-block">
                          <ul id="maincontent__widget--communitytournament--filter" class="maincontent__widget--communitytournament--filter clearfix">
                            <li class="maincontent__widget--communitytournament--filter__item--current"><a class="filter-item" href="javascript:void(0);" data-filter="all">ALL(122)</a></li>
                            <li><a class="filter-item" href="javascript:void(0);" data-filter="ongoing">Ongoing(122)</a></li>
                            <li><a class="filter-item" href="javascript:void(0);"  data-filter="upcoming">Upcoming(122)</a></li>
                            <li><a class="filter-item" href="javascript:void(0);"  data-filter="finished">Past(122)</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-12">
                        <div class="maincontent__widget--wrap--select relative">
                          <select class="selectsort" name="sort">
                            <option value="Date Ascending">Date Ascending</option>
                            <option value="Date Descending">Date Descending</option>
                            <option value="Prizo Pool">Prizo Pool (Descending)</option>
                          </select>
                          <label>Sort By</label>
                        </div>
                      </div>
                    </div>

                    <div class="row mt-3">
                      <div class="col-12">
                        <div class="communitytournament__date mb-10px">
                          February 2020
                        </div>
                        <div class="row">
                          <?php
                            for ($i=1; $i < 7 ; $i++) :
                              if($i == 1){
                                $datatext = 'ongoing';
                                $textstatus = 'text-success';
                              }else if($i == 2 || $i == 3){
                                $datatext = 'upcoming';
                                $textstatus = 'text-warning';
                              }else if($i == 4){
                                $datatext = 'ongoing';
                                $textstatus = 'text-success';
                              }else{
                                $datatext = 'finished';
                                $textstatus = 'text-danger';
                              }
                          ?>
                          <div class="communitytournament__list--item communitytournament__list--item__filtering mb-25px col-lg-12 col-md-6 <?php echo $datatext;?>">
                            <div class="row">
                              <div class="col-lg-3 col-md-12 pdr-md-0">
                                <div class="w-100 h-100 backgroundCoverTop" style="background-image: url('<?php echo url('asset/static/tournament/tournamentlist-'.$i.'.jpg')?>')">
                                  <img src="<?php echo url('asset/static/tournament/tournamentlist-'.$i.'.jpg')?>" class="img-fluid invisible" alt="img"/>
                                </div>
                              </div>
                              <div class="col-lg-9 col-md-12 bg-dark-list">
                                <div class="communitytournament__list--item--header clearfix">
                                  <div class="communitytournament__list--item--header__icon d-inline-block float-left">
                                    <img src="<?php echo url('asset/static/gametips/1.png')?>" class="img-fluid" alt="icon"/>
                                  </div>
                                  <h5 class="float-left text-uppercase ptb-0 mtb-0">ESL PRO LEAGUE</h5>
                                  <a href="#" class="float-right text-status <?php echo $textstatus;?> text-uppercase"><?php echo $datatext; ?></a>
                                </div>
                                <div class="communitytournament__list--item__body">
                                  <div class="row">
                                    <div class="col-lg-9 col-md-12">
                                      <div class="clearfix">
                                        <div class="communitytournament__list--item--info__item">
                                          <small>Free</small>
                                          <h5>Free</h5>
                                        </div>
                                        <div class="communitytournament__list--item--info__item">
                                          <small>Slot</small>
                                          <h5>36/36</h5>
                                        </div>
                                        <div class="communitytournament__list--item--info__item">
                                          <small>Date</small>
                                          <h5>1 Jan 2020</h5>
                                        </div>
                                        <div class="communitytournament__list--item--info__item last">
                                          <small>Time</small>
                                          <h5>03:00 PM</h5>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                      <div class="communitytournament__list--item--info__price last">
                                        <small>CashPrizepool</small>
                                        <h4 class="text-warning">Rp. 2.000.000</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        <?php endfor;?>
                      </div>
                      </div>
                    </div>

                    <div class="row mt-3">
                      <div class="col-12">
                        <div class="communitytournament__date mb-10px">
                          January 2020
                        </div>
                        <div class="row">
                          <?php for ($i=1; $i < 3 ; $i++) : ?>
                          <div class="communitytournament__list--item communitytournament__list--item__filtering mb-25px finished col-lg-12 col-md-6">
                            <div class="row">
                              <div class="col-lg-3 col-md-12 pdr-md-0">
                                <div class="w-100 h-100 backgroundCoverTop" style="background-image: url('<?php echo url('asset/static/tournament/tournamentlist-'.$i.'.jpg')?>')">
                                  <img src="<?php echo url('asset/static/tournament/tournamentlist-'.$i.'.jpg')?>" class="img-fluid invisible" alt="img"/>
                                </div>
                              </div>
                              <div class="col-lg-9 col-md-12 bg-dark-list">
                                <div class="communitytournament__list--item--header clearfix">
                                  <div class="communitytournament__list--item--header__icon d-inline-block float-left">
                                    <img src="<?php echo url('asset/static/gametips/1.png')?>" class="img-fluid" alt="icon"/>
                                  </div>
                                  <h5 class="float-left text-uppercase ptb-0 mtb-0">ESL PRO LEAGUE</h5>
                                  <a href="#" class="float-right text-status text-danger text-uppercase">Finished</a>
                                </div>
                                <div class="communitytournament__list--item__body">
                                  <div class="row">
                                    <div class="col-lg-9 col-md-12">
                                      <div class="clearfix">
                                        <div class="communitytournament__list--item--info__item">
                                          <small>Free</small>
                                          <h5>Free</h5>
                                        </div>
                                        <div class="communitytournament__list--item--info__item">
                                          <small>Slot</small>
                                          <h5>36/36</h5>
                                        </div>
                                        <div class="communitytournament__list--item--info__item">
                                          <small>Date</small>
                                          <h5>1 Jan 2020</h5>
                                        </div>
                                        <div class="communitytournament__list--item--info__item last">
                                          <small>Time</small>
                                          <h5>03:00 PM</h5>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                      <div class="communitytournament__list--item--info__price last">
                                        <small>CashPrizepool</small>
                                        <h4 class="text-warning">Rp. 2.000.000</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php endfor;?>
                        </div>
                      </div>
                    </div>

                    <div class="row mt-3">
                      <div class="col-12">
                        <div class="communitytournament__date mb-10px">
                          Descember 2020
                        </div>
                        <div class="row">
                          <div class="communitytournament__list--item communitytournament__list--item__filtering mb-25px finished col-lg-12 col-md-6">
                            <div class="row">
                              <div class="col-lg-3 col-md-12 pdr-md-0">
                                <div class="w-100 h-100 backgroundCoverTop" style="background-image: url('<?php echo url('asset/static/tournament/tournamentlist-'.$i.'.jpg')?>')">
                                  <img src="<?php echo url('asset/static/tournament/tournamentlist-'.$i.'.jpg')?>" class="img-fluid invisible" alt="img"/>
                                </div>
                              </div>
                              <div class="col-lg-9 col-md-12 bg-dark-list">
                                <div class="communitytournament__list--item--header clearfix">
                                  <div class="communitytournament__list--item--header__icon d-inline-block float-left">
                                    <img src="<?php echo url('asset/static/gametips/1.png')?>" class="img-fluid" alt="icon"/>
                                  </div>
                                  <h5 class="float-left text-uppercase ptb-0 mtb-0">ESL PRO LEAGUE</h5>
                                  <a href="#" class="float-right text-status text-danger text-uppercase">Finished</a>
                                </div>
                                <div class="communitytournament__list--item__body">
                                  <div class="row">
                                    <div class="col-lg-9 col-md-12">
                                      <div class="clearfix">
                                        <div class="communitytournament__list--item--info__item">
                                          <small>Free</small>
                                          <h5>Free</h5>
                                        </div>
                                        <div class="communitytournament__list--item--info__item">
                                          <small>Slot</small>
                                          <h5>36/36</h5>
                                        </div>
                                        <div class="communitytournament__list--item--info__item">
                                          <small>Date</small>
                                          <h5>1 Jan 2020</h5>
                                        </div>
                                        <div class="communitytournament__list--item--info__item last">
                                          <small>Time</small>
                                          <h5>03:00 PM</h5>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                      <div class="communitytournament__list--item--info__price last">
                                        <small>CashPrizepool</small>
                                        <h4 class="text-warning">Rp. 2.000.000</h4>
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

                    <div class="row mt-3 mb-15">
                      <div class="col-12 text-center">
                        <a href="javascript:void(0)" class="btn-loadmore">Load More</a>
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
          //for list menu
          var $el, leftPos, newWidth, $clicked,
              $mainNav = $("#maincontent__widget--communitytournament--filter");

          $mainNav.append("<li id='magic-line'></li>");
          var $magicLine = $("#magic-line");

          var $currentpage = $(".maincontent__widget--communitytournament--filter__item--current");
          var $currentactive = $currentpage.find('a');
          $magicLine.width($currentpage).css("left",$currentactive.position().left).data("origLeft", $magicLine.position().left)
          .data("origWidth", $magicLine.width());

          $("#maincontent__widget--communitytournament--filter li a").on('click', function(){
            $datafilter = $(this).attr('data-filter');
            console.log($datafilter);
            filterSelection($datafilter);
            $mainNav.find('li').removeClass('maincontent__widget--communitytournament--filter__item--current');
            $(this).parent().addClass('maincontent__widget--communitytournament--filter__item--current');

            $currentpage = $(".maincontent__widget--communitytournament--filter__item--current");
            $currentactive = $currentpage.find('a');
            $magicLine.width($currentpage).css("left",$currentactive.position().left).data("origLeft", $magicLine.position().left)
            .data("origWidth", $magicLine.width());
          });

          $("#maincontent__widget--communitytournament--filter li a").hover(function() {
              $el = $(this);
              leftPos = $el.position().left;
              newWidth = $el.parent().width();
              $magicLine.stop().animate({
                  left: leftPos,
                  width: newWidth
              });
          });

          $("#maincontent__widget--communitytournament--filter li a").mouseleave(function(){
              if($(this).parent().hasClass('maincontent__widget--communitytournament--filter__item--current')){
                $els = $(this);
                leftPoss = $els.position().left;
                newWidths = $els.parent().width();
                $magicLine.stop().animate({
                    left: leftPoss,
                    width: newWidths
                });
              }else{
                $magicLine.stop().animate({
                    left: $magicLine.data("origLeft"),
                    width: $magicLine.data("origWidth")
                });
              }
          });

          $('.selectsort').select2({
            placeholder: 'Please Select',
            minimumResultsForSearch: 10
          });
      });

      //filter function
      filterSelection("all")
      function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("communitytournament__list--item__filtering");
        if (c == "all") c = "";
        // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
        for (i = 0; i < x.length; i++) {
          filterRemoveClass(x[i], "show");
          if (x[i].className.indexOf(c) > -1) filterAddClass(x[i], "show");
        }
      }

      // Show filtered elements
      function filterAddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
          }
        }
      }

      // Hide elements that are not selected
      function filterRemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
          }
        }
        element.className = arr1.join(" ");
      }
    </script>
<?php include_once 'footerhtml.php';?>
