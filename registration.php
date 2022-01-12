<?php
include('connection.php');
extract($_REQUEST);
if (isset($save)) {
  $sql = mysqli_query($con, "select * from account where email='$email' ");
  if (mysqli_num_rows($sql)) {
    $msg = "<h1 style='color:red'> account already exists</h1>";
  } else {

    $sql = "insert into account values('','$name','$email','$pw','$phone','$address','$gender','$image')";
    if (mysqli_query($con, $sql)) {
      $msg = "<h1 style='color:green'>Data Saved Successfully</h1>";
      header('location:login.php');
    }
  }
}
include('header.php');
include('navigation.php');
?>

<div class="container">
  <h3 class="text--title text-center">
    Đăng ký
  </h3>
  <div class="login_from-wrapper">
    <form method="post" class="form--primary">
      <div class="form-group">
        <label class="form-label" for="name">Họ và tên: </label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Nhập họ tên" required />
      </div>

      <div class="form-group">
        <label class="form-label" for="email">Địa chỉ email: </label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Nhập email" autocomplete="off" required />
      </div>

      <div class="form-group" >
        <label class="form-label" for="pw">Mật khẩu</label>
        <input type="password" class="form-control" name="pw" id="pw" placeholder="Mật khẩu" required />
      </div>

      <div class="form-group">
        <label class="form-label" for="cfpw">Nhập lại mật khẩu</label>
        <input type="password" class="form-control" name="cfpw" id="cfpw" placeholder="Nhập lại mật khẩu" required />
      </div>

      <div class="form-group">
        <label class="form-label" for="address">Địa chỉ</label>
        <input type="text" class="form-control" name="address" id="address" placeholder="Nhập địa chỉ" required />
      </div>

      <div class="form-group">
        <label class="form-label" for="phone">Số điện thoại</label>
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại" required />
      </div>

      <div class="form-group">
        <input type="radio" name="gender" value="nam" required><b>Nam</b>&emsp;
        <input type="radio" name="gender" value="nu" required><b>Nữ</b>&emsp;
        <input type="radio" name="gender" value="other" required><b>Khác</b>
      </div>

      <div class="form-group">
        <input type="file" name="image" accept="image/*" required>
      </div>

      <div class="form-group text-center">
      <input type="submit" value="Đăng ký" name="save" class="button btn-custom btn-group-justified" />
      </div>
    </form>
  </div>
</div>

<?php
include('footer.php')
?>