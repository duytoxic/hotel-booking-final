<?php
session_start();
error_reporting(1);
if ($_SESSION['create_account_logged_in'] != "") {
  header('location:bookingForm.php');
}
error_reporting(1);
require('connection.php');
extract($_REQUEST);
if (isset($login)) {
  if ($eid == "" || $pass == "") {
    $error = '<div class="alert--message">
    <i class="fal fa-times btn--close--message"></i>
    Bạn cần nhập tài khoản và mật khẩu.
  </div>';
  } else {
    $sql = mysqli_query($con, "select * from account where email='$eid' && password='$pass' ");
    if (mysqli_num_rows($sql)) {
      $_SESSION['create_account_logged_in'] = $eid;
      header('location:bookingForm.php');
    } else {
      $error =  '<div class="alert--message">
      <i class="fal fa-times btn--close--message"></i>
      Thông tin tài khoản, mật khẩu không chính xác.
    </div>';
    }
  }
}
?>
<?php
include('header.php')
?>

<?php
include('navigation.php')
?>

<?php echo @$error; ?>

<div class="login_from-wrapper mt-5">
  <h3 class="text-center text--title">Đăng nhập ngay</h3>
  <form class="row form--primary" method="post" id="contactForm" novalidate>
    <div class="col-12">
      <div class="form-group input-group">
        <label class="form-label">Địa chỉ email</label>
        <input type="Email" class="form-control" name="eid" placeholder="Email" autocomplete="off" required />
      </div>
      <div class="form-group mt-4">
        <label class="form-label">Mật khẩu</label>
        <input type="Password" class="form-control" name="pass" placeholder="Mật khẩu" autocomplete="off" required />
      </div>
      <div class="col-12 text-right mt-3">
        <a href="registration.php" class="text-link">Quên mật khẩu</a>
      </div>
    </div>
    <div class="col-md-12 text-center mt-3">
      <input type="submit" value="Đăng nhập" name="login" class="button btn-custom" required>
    </div>
    <div class="col-12 text-center mt-3">
      <p>Bạn chưa có tài khoản? <a href="registration.php" class="text-link">Đăng ký ngay</a></p>
    </div>
  </form>
</div>

<?php
include('footer.php')
?>