<?php
session_start();
$eid = $_SESSION['create_account_logged_in'];
error_reporting(1);
?>

<header class="header_area">
  <div class="header-top">
    <div class="container">
      <div class="d-flex align-items-center justify-space-between">
        <div id="logo">
          <a href="index.html"><img src="data:image/webp;base64,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" alt="" title="" /></a>
        </div>
        <div class="ml-auto d-none d-md-block d-md-flex">
          <div class="media header-top-info">
            <span class="header-top-info__icon"><i class="fas fa-phone-volume"></i></span>
            <div class="media-body">
              <p>Have any question?</p>
              <p>Free: <a href="tel:+12 365 5233">+12 365 5233</a></p>
            </div>
          </div>
          <div class="media header-top-info">
            <span class="header-top-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <p>Have any question?</p>
              <p>Free: <a href="tel:+12 365 5233">+12 365 5233</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
          <ul class="nav navbar-nav menu_nav">
            <li class="nav-item active"><a class="nav-link" href="index.php">Trang chủ</a></li>
            <li class="nav-item submenu dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Phòng</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link" href="about.php">Phòng loại I</a></li>
                <li class="nav-item"><a class="nav-link" href="blog-single.html">Phòng loại II</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="about.php">Giới thiệu</a></li>
            <li class="nav-item"><a class="nav-link" href="image gallery.php">Liên hệ</a></li>
          </ul>
        </div>
        <ul class="nav navbar-nav navbar-right nav-user">

          <li><a href="admin/index.php" title="Admin Login" class="button button--active"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin Login</a></li>

          <?php
          if ($_SESSION['create_account_logged_in'] != "") {
          ?>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View Status <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="profile.php">Profile</a></li>
                <li><a href="order.php">Booking Status</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </li>
          <?PHP } else {
          ?>
            <li><a href="Login.php" title="login" class="button button-outline"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;User Login</a>
            </li>
          <?php
          } ?>
        </ul>
      </div>
    </nav>

  </div>
</header>
<!--Header -->
<nav class="navbar navbar-inverse navbar-fixed-top bg-light">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="logo/logo2.png" /width="160px" height="40px" style="margin-top:5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php" title="Home">Trang chủ</a></li>
        <li><a href="about.php" title="About">Giới thiệu</a></li>
        <li><a href="image gallery.php" title="Gallery">Gallery </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li><a href="admin/index.php" title="Admin Login"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin Login</a></li>

        <?php
        if ($_SESSION['create_account_logged_in'] != "") {
        ?>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View Status <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="profile.php">Profile</a></li>
              <li><a href="order.php">Booking Status</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        <?PHP } else {
        ?>
          <li><a href="Login.php" title="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;User Login</a>
          </li>
        <?php
        } ?>
      </ul>
    </div>
  </div>
</nav>

<!--Header Close Here-->