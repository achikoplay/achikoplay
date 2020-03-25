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
          <li><a class="nav-link nunitoBold" href="#">Articles</a></li>
        </ul>
      </div>
      <div class="col-md-2 d-md-block d-sm-none d-none">
        <div class="d-table w-100 h-100">
          <div class="d-table-cell align-middle text-right">
            <div class="d-inline-block">
              <ul class="header__menu--member">
                <li><a class="logout-link nav-link nunitoBold" href="signin.php">Sign In</a></li>
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
      <li><a class="nav-link nunitoBold" href="#">Community</a></li>
      <li><a class="nav-link nunitoBold" href="#">News</a></li>
      <li><a class="nav-link nunitoBold" href="signin.php">Sign In</a></li>
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
