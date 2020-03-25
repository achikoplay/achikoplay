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
                <li class="breadcrumb-item"><a href="<?php echo url();?>">Star Labre Imba..</a></li>
                <li class="breadcrumb-item"><a href="<?php echo url();?>">Open Qualifier</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bracket</li>
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
      <div class="tournament__bracket">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center mt-5 mb-5">
              <h1 class="mb-0"><img src="<?php echo url('asset/static/iconstar.png');?>" class="tournament__overview--icon" alt="icon"/>Star Ladder Imba Minor League </h1>
            </div>

            <div class="col-12">
              <div class="tournament__bracket--wrap">
                <div id="tournament__bracket--area" class="tournament__bracket--area">
                  <p class="tournament__bracket--area__firstp">Single Elim / Double Elim</p>
                  <div id="bracket-area" class="tournament__bracket--placearea"></div>
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
<script>
  const initScript = () =>{
    Js.load('<?php echo url('asset/js/jquery-3.4.1.min.js')?>','js', function(){
      Js.load('<?php echo url('asset/js/bootstrap.bundle.min.js')?>','js', function(){
        Js.load('<?php echo url('asset/css/bracket.css?v='.time())?>','css', function(){
          Js.load('<?php echo url('asset/css/jquery.bracket.min.css')?>','css', function(){
            Js.load('<?php echo url('asset/js/jquery.bracket.min.js')?>','js', function(){
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
                Js.load('<?php echo url('asset/js/RequestAnimationFrame.js')?>','js', function(){
                  Js.load('<?php echo url('asset/js/TouchScroll.js')?>','js', function(){
                    let viewer = new TouchScroll();
                        viewer.init({
                            id: 'tournament__bracket--area',
                            draggable: true,
                            wait: false
                        });
                  });
                });
                $(document).ready(function(){
                  initializeTicker();
                  //bracket js
                  var titles = [
                              `<div class="wrapTitlebracket">
                                <div class="d-flex align-items-center">
                                  <div>Quart Best Of 3</div>
                                  <div>
                                    <a href="#" class="wrapTitlebracket__link--bracket"><i class="material-icons">more_horiz</i></a>
                                  </div>
                                </div>
                                <div class="dateTitleBracket"><?php echo date('d F Y');?></div>
                              </div>`,
                              `<div class="wrapTitlebracket">
                                <div class="d-flex align-items-center">
                                  <div>Quart Best Of 3</div>
                                  <div>
                                    <a href="#" class="wrapTitlebracket__link--bracket"><i class="material-icons">more_horiz</i></a>
                                  </div>
                                </div>
                                <div class="dateTitleBracket"><?php echo date('d F Y');?></div>
                              </div>`,
                              `<div class="wrapTitlebracket">
                                <div class="row">
                                  <div class="col-5">
                                    <div class="d-table h-100 w-100">
                                      <div class="d-table-cell align-bottom">
                                        <div class="relative">
                                          <input type="text" class="form-control noradius" placeholder=""/>
                                          <label class="label-input">BO</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-7">
                                    <div class="text-right">
                                      <label class="togglebox mb-1">
                                      <span class="togglebox-label">ASAP</span>
                                      <input class="togglebox-checkbox" type="checkbox">
                                        <div class="togglebox-switch"></div>
                                      </label>
                                    </div>
                                    <div>
                                      <input id="date-picker" type="text" name="date" class="form-control noradius" placeholder="<?php echo date('d M Y');?>"/>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-6">
                                    <a href="#" class="wrapTitlebracket__btn save mt-1 mb-2">SAVE</a>
                                  </div>
                                  <div class="col-6">
                                    <a href="#" class="wrapTitlebracket__btn cancel mt-1 mb-2">CANCEL</a>
                                  </div>
                                </div>
                              </div>`,
                              `<div class="wrapTitlebracket">
                                <div class="d-flex align-items-center">
                                  <div>Quart Best Of 3</div>
                                  <div>
                                    <a href="#" class="wrapTitlebracket__link--bracket"><i class="material-icons">more_horiz</i></a>
                                  </div>
                                </div>
                                <div class="dateTitleBracket"><?php echo date('d F Y');?></div>
                              </div>`,
                              `<div class="wrapTitlebracket">
                                <div class="d-flex align-items-center">
                                  <div>Quart Best Of 3</div>
                                  <div>
                                    <a href="#" class="wrapTitlebracket__link--bracket"><i class="material-icons">more_horiz</i></a>
                                  </div>
                                </div>
                                <div class="dateTitleBracket"><?php echo date('d F Y');?></div>
                              </div>`,
                              `<div class="wrapTitlebracket">
                                <div class="d-flex align-items-center">
                                  <div>Quart Best Of 3</div>
                                  <div>
                                    <a href="#" class="wrapTitlebracket__link--bracket"><i class="material-icons">more_horiz</i></a>
                                  </div>
                                </div>
                                <div class="dateTitleBracket"><?php echo date('d F Y');?></div>
                              </div>`,
                              ];
                  var bigData = {
                      teams : [
                        [`
                          <div class='d-flex align-items-center'>
                          <div>1</div><div><img src="<?php echo url('asset/static/tournament/boom.jpg')?>" alt="icon" width="20" height="20" class="rounded-circle" /></div><div>BOOMID</div>
                          </div>`,
                          `<div class='d-flex align-items-center'>
                          <div>64</div><div><img src="<?php echo url('asset/static/tournament/packman.jpg')?>" alt="icon" width="20" height="20" class="rounded-circle" /></div><div>PACPRO</div>
                          </div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'>
                          <div>32</div><div><img src="<?php echo url('asset/static/tournament/boom.jpg')?>" alt="icon" width="20" height="20" class="rounded-circle" /></div><div>BOOMID</div>
                          </div>`,
                          `<div class='d-flex align-items-center'>
                          <div>33</div><div><img src="<?php echo url('asset/static/tournament/packman.jpg')?>" alt="icon" width="20" height="20" class="rounded-circle" /></div><div>PACPRO</div>
                          </div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>16</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>49</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>17</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>48</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>8</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>57</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>25</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>40</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>9</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>56</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>24</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>41</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>4</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>61</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>29</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>36</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>13</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>52</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>20</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>45</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>5</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>60</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>28</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>37</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>12</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>53</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>21</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>44</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>2</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>63</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>31</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>34</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>15</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>50</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>18</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>47</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>7</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>58</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>26</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>39</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>10</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>55</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>23</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>42</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>3</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>62</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>30</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>35</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>14</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>51</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>19</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>46</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>6</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>59</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>27</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>38</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>11</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>54</div><div></div><div></div></div>`
                        ],
                        [
                          `<div class='d-flex align-items-center'><div>22</div><div></div><div></div></div>`,
                          `<div class='d-flex align-items-center'><div>43</div><div></div><div></div></div>`
                        ],
                      ],
                      results :[
                        [
                          [21, 43],[22, 45],[30, 23],[21, 50],[30, 23],[22, 51],[11, 30],[12, 20],[12, 20],[12, 20],[12, 20],[12, 20],[12, 20],[12, 20],[12, 20],[12, 20],[12, 20],[12, 20],[12, 20],[12, 20],[12, 20],[12, 20],[12, 20],[15, 20],[12, 20],[12, 20],[12, 20],[12, 20],[12, 20],[12, 20],[12, 20],[12, 20]
                        ],
                        [
                          [10, 12],[10, 18],[12, 13],[11, 10],[10, 12],[10, 18],[12, 13],[11, 10],[10, 12],[10, 18],[12, 13],[11, 10],[10, 12],[10, 18],[12, 13],[11, 10]
                        ],
                        [
                          [10, 12],[10, 18],[10, 12],[10, 18],[10, 12],[10, 18],[10, 12],[10, 18]
                        ],
                        [
                          [10, 12],[10, 12],[10, 12],[10, 12]
                        ],
                        [
                          [10, 12],[10, 12]
                        ],
                        [
                          [15, 12]
                        ],
                      ]
                      // results : [
                      //   [ /* WINNER BRACKET */
                      //     [
                      //       [3,5],
                      //       [2,4],
                      //       [6,3],
                      //       [2,3],
                      //       [1,5],
                      //       [5,3],
                      //       [7,2],
                      //       [1,2]
                      //     ],
                      //     [
                      //       [1,2],
                      //       [3,4],
                      //       [5,6],
                      //       [7,8]
                      //     ],
                      //     [
                      //       [9,1],
                      //       [8,2]
                      //     ],
                      //     [
                      //       [1,3]
                      //     ]
                      //   ],
                      //   [ /* LOSER BRACKET */
                      //     [
                      //       [5,1],
                      //       [1,2],
                      //       [3,2],
                      //       [6,9]
                      //     ],
                      //     [
                      //       [8,2],
                      //       [1,2],
                      //       [6,2],
                      //       [1,3]
                      //     ],
                      //     [
                      //       [1,2],
                      //       [3,1]
                      //     ],
                      //     [
                      //       [3,0],
                      //       [1,9]
                      //     ],
                      //     [
                      //       [3,2]
                      //     ],
                      //     [
                      //       [4,2]
                      //     ]
                      //   ],
                      //   [/* FINALS */
                      //     [
                      //       [3,8],
                      //       [1,2]
                      //     ],
                      //     [
                      //       [2,1]
                      //     ]
                      //   ]
                      // ]
                    }

                    var resizeParameters = {
                        teamWidth: 200,
                        scoreWidth: 30,
                        matchMargin: 30,
                        roundMargin: 70,
                        init: bigData
                      };
                    $('#bracket-area').bracket(resizeParameters);
                    console.log(titles[0]);
                    setTimeout(function(){
                      $(".round").each(function(i) {
                          $(this).find('.teamContainer').first().prepend(titles[i])
                      });
                      $(".match").each(function(i) {
                          $(this).attr('data-number',++i);
                      });
                    },1000);
                });

            });
          });
        });
      });
    });
  }
  if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', initScript);
  }
</script>
<?php include_once 'footerhtml.php';?>
