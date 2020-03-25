<!-- Header -->
<header id="header" class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-10">
        <ul class="header__menu clearfix">
          <li><a href="<?php echo url();?>" class="header__menu--logofont text-uppercase">Achikoplay</a></li>
          <li>
            <a class="nav-link nunitoBold" href="#">All Games</a>
            <ul>
              <li><a class="nav-link nunitoBold has-bg" href="homedota.php" style="background-image: url(<?php echo url('asset/static/menubg.jpg');?>);"><span>Dota 2</span> <i class="material-icons header__menu--sub">keyboard_arrow_right</i></a></li>
              <li><a class="nav-link nunitoBold" href="homepubg.php"><span>Pub G</span> <i class="material-icons header__menu--sub">keyboard_arrow_right</i></a></li>
              <li><a class="nav-link nunitoBold" href="homemobilelegend.php"><span>Mobile Legend</span> <i class="material-icons header__menu--sub">keyboard_arrow_right</i></a></li>
            </ul>
          </li>
          <li><a class="nav-link nunitoBold" href="tournament.php">Tournament</a></li>
          <li><a class="nav-link nunitoBold" href="#">Shop</a></li>
          <li><a class="nav-link nunitoBold" href="community.php">Community</a></li>
          <li><a class="nav-link nunitoBold" href="new_posts.php">Articles</a>
            <ul>
              <li><a class="nav-link nunitoBold" href="news.php"><span>News</span> <i class="material-icons header__menu--sub">keyboard_arrow_right</i></a></li>
              <li><a class="nav-link nunitoBold" href="gaming_tips.php"><span>Gaming Tips</span> <i class="material-icons header__menu--sub">keyboard_arrow_right</i></a></li>
              <li><a class="nav-link nunitoBold" href="featured_articles.php"><span>Featured Articles</span> <i class="material-icons header__menu--sub">keyboard_arrow_right</i></a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="col-md-2 d-md-block d-sm-none d-none">
        <div class="d-table w-100 h-100">
          <div class="d-table-cell align-middle text-right">
            <div class="d-inline-block">
              <ul class="header__menu--member">
                <li>
                  <a href="javascript:void(0);">
                    <i class="material-icons">notifications_active</i>
                  </a>
                  <div class="header__menu--menunotif active">
                    <ul>
                      <li>
                        <div class="clearfix">
                          <div class="float-left nunitoLight">
                            NOTIFICATION
                          </div>
                          <div class="float-right">
                            <i class="fal fa-bell"></i>
                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="notification.php">
                          <div class="d-flex align-items-center">
                            <div class="menunotif__img">
                              <img src="<?php echo url('asset/static/tournament-details/1.jpg')?>" alt="icon-img-notif" width="40" height="40" class="rounded-circle"/>
                            </div>
                            <div class="menunotif__text">
                              <h5 class="nunitoSemiBold mb-0"><em>New Team Request</em></h5>
                              <h6 class="nunitoLight mb-0">Natus Vincere</h6>
                              <h6 class="nunitoLightItalic mb-0"><span class="small">23 minutes ago</span></h6>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="notification.php">
                          <div class="d-flex align-items-center">
                            <div class="menunotif__img">
                              <img src="<?php echo url('asset/static/tournament-details/3.jpg')?>" alt="icon-img-notif" width="40" height="40" class="rounded-circle"/>
                            </div>
                            <div class="menunotif__text">
                              <h5 class="nunitoSemiBold mb-0"><em>New Follower</em></h5>
                              <h6 class="nunitoLight mb-0">Ter Stegen</h6>
                              <h6 class="nunitoLightItalic mb-0"><span class="small">3 hours ago</span></h6>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="notification.php">
                          <div class="d-flex align-items-center">
                            <div class="menunotif__img">
                              <img src="<?php echo url('asset/static/tournament-details/7.jpg')?>" alt="icon-img-notif" width="40" height="40" class="rounded-circle"/>
                            </div>
                            <div class="menunotif__text">
                              <h5 class="nunitoSemiBold mb-0"><em>New Party Request</em></h5>
                              <h6 class="nunitoLight mb-0">BOOM ID</h6>
                              <h6 class="nunitoLightItalic mb-0"><span class="small">2 days ago</span></h6>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="notification.php" class="clearfix nunitoSemiBold text-center d-block">
                          See All Notification
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li>
                  <a href="#" class="memberIcon"><img src="<?php echo url('asset/static/member.png');?>" alt="member-area" class="img-fluid"/></a>
                  <div class="header__menu--menumember">
                    <ul>
                      <li><a href="profile_page.php"><i class="far fa-user-circle"></i> &nbsp;&nbsp;Profile</a></li>
                      <li><a href="profilesettings.php"><i class="fas fa-cogs"></i> &nbsp;Setting</a></li>
                      <li><a href="indexlogout.php"><i class="fas fa-power-off"></i> &nbsp;&nbsp;Log Out</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-2 d-lg-none d-md-none d-sm-block d-block">
        <a href="javascript:void(0);" id="header__togglemenu" class="header__togglemenu">
          <i class="fas fa-bars"></i>
        </a>
      </div>
    </div>
  </div>
</header>
<div class="wrapmenumobile">
  <div class="wrapmenumobile__content">
    <ul class="wrapmenumobile__mainmenu">
      <li>
        <a href="javascript:void(0);" class="nav-link nunitoBold wrapmenumobile__mainmenu--hassubmenu">All Games <i class="fas fa-angle-right"></i></a>
        <div class="wrapmenumobile__mainmenu--submenu">
          <ul>
            <li><a class="nav-link nunitoBold has-bg" href="homedota.php"><span>Dota 2</span></a></li>
            <li><a class="nav-link nunitoBold" href="homepubg.php"><span>Pub G</span></a></li>
            <li><a class="nav-link nunitoBold" href="homemobilelegend.php"><span>Mobile Legend</span></a></li>
          </ul>
        </div>
      </li>
      <li><a class="nav-link nunitoBold" href="tournament.php">Tournament</a></li>
      <li><a class="nav-link nunitoBold" href="#">Shop</a></li>
      <li><a class="nav-link nunitoBold" href="community.php">Community</a></li>
      <li><a class="nav-link nunitoBold" href="new_posts.php">News</a></li>
      <li><a class="nav-link nunitoBold wrapmenumobile__mainmenu--hassubmenu" href="javascript:void(0);">Member<i class="fas fa-angle-right"></i></a>
        <div class="wrapmenumobile__mainmenu--submenu">
          <ul>
            <li><a href="profile_page.php">Profile</a></li>
            <li><a href="profilesettings.php">Setting</a></li>
            <li><a href="indexlogout.php">Log Out</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
  <div class="wrapmenumobile__social">
    <p class="mb-5px">Following Us</p>
    <ul class="wrapmenumobile__social--media text-white clearfix">
      <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
      <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
    </ul>
  </div>
</div>
<!-- End Header -->
