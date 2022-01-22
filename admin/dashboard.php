<?php
session_start();
extract($_REQUEST);
include('../connection.php');
$admin = $_SESSION['admin_logged_in'];
if ($admin == "") {
  header('location:index.php');
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
  <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
  <meta name="robots" content="noindex,nofollow">
  <title>Admin</title>
  <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
  <!-- Custom CSS -->
  <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
  <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
  <!-- Custom CSS -->
  <link href="css/admin.min.css" rel="stylesheet">
  <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
          <a class="navbar-brand" href="../index.php">

          </a>

          <!-- ============================================================== -->
          <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <div class="navbar-header" data-logobg="skin6">
          <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav ms-auto d-flex align-items-center">
            <li class=" in">
              <form role="search" class="app-search d-none d-md-block me-3">
                <input type="text" placeholder="Tìm kiếm..." class="form-control mt-0">
                <a href="" class="active">
                  <i class="fa fa-search"></i>
                </a>
              </form>
            </li>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <li>
              <a class="profile-pic" href="#"><span class="text-white font-medium">Xin chào <?php echo $admin; ?></span></a>
            </li>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
          </ul>
        </div>
      </nav>
    </header>

    <aside class="left-sidebar" data-sidebarbg="skin6">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav">
            <!-- User Profile-->
            <li class="sidebar-item pt-2">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php?option=update_password" aria-expanded="false">
                <i class="fas fa-key" aria-hidden="true"></i>
                <span class="hide-menu">Đổi mật khẩu</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php?option=admin_profile" aria-expanded="false">
                <i class="fas fa-address-card" aria-hidden="true"></i>
                <span class="hide-menu">Hồ sơ quản trị viên</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php?option=feedback" aria-expanded="false">
                <i class="far fa-comment-alt" aria-hidden="true"></i>
                <span class="hide-menu">Phản hồi</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php?option=rooms" aria-expanded="false">
                <i class="fas fa-th-list" aria-hidden="true"></i>
                <span class="hide-menu">Phòng</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php?option=room_categories" aria-expanded="false">
                <i class="fas fa-th-list" aria-hidden="true"></i>
                <span class="hide-menu">Loại phòng</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php?option=booking_details" aria-expanded="false">
                <i class="fas fa-bookmark" aria-hidden="true"></i>
                <span class="hide-menu">Khách đặt phòng</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php?option=user_registration" aria-expanded="false">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span class="hide-menu">Thông tin người dùng</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false">
                <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                <span class="hide-menu">Đăng xuất</span>
              </a>
            </li>
          </ul>

        </nav>
      </div>
    </aside>
    <div class="container-fluid">
      <div class="page-wrapper">
        <?php
        @$opt = $_GET['option'];
        if ($opt == "") {
          include('admin_profile.php');
        } else {
          if ($opt == "feedback") {
            include('feedback.php');
          } else if ($opt == "update_password") {
            include('update_password.php');
          } else if ($opt == "rooms") {
            include('rooms.php');
          } else if ($opt == "room_categories") {
            include('room_categories.php');
          } else if ($opt == "add_room_categories") {
            include('add_room_categories.php');
          } else if ($opt == "add_rooms") {
            include('add_rooms.php');
          } else if ($opt == "delete_room") {
            include('delete_room.php');
          } else if ($opt == "update_room") {
            include('update_room.php');
          } else if ($opt == "booking_details") {
            include('booking_details.php');
          } else if ($opt == "user_registration") {
            include('user_registration.php');
          } else if ($opt == "admin_profile") {
            include('admin_profile.php');
          }
        }
        ?>
        <footer class="footer text-center"> 2022 © Made by <a href="https://www.wrappixel.com/">Nhóm 4</a>
        </footer>
      </div>
    </div>
  </div>
  <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/app-style-switcher.js"></script>
  <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="js/waves.js"></script>
  <script src="js/sidebarmenu.js"></script>
  <script src="js/custom.js"></script>
  <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
  <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
  <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>