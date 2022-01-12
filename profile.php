<?php
session_start();
error_reporting(1);
include('connection.php');
$eid = $_SESSION['create_account_logged_in'];
extract($_REQUEST);
if (isset($update)) {
  $que = "update create_account set name='$name',password='$pass',mobile='$mob',address='$add' where email='$eid'";
  mysqli_query($con, $que);
  $msg = "<h3 style='color:blue'>Profile Updated successfully</h3>";
}
?>

<?php
$sql = mysqli_query($con, "select * from create_account where email='$eid' ");
$result = mysqli_fetch_assoc($sql);

include('header.php');
include('navigation.php');
?>

<div class="container mb-5">
  <h4 class="title--custom text-center">Thông tin cá nhân</h4>
  <div class="row">
    <div class="col-md-6">
      <?php echo $msg; ?>
      <form class="form--primary" method="post">       
        <div class="form-group input-group">
          <label class="form-label" for="name">Họ và tên: </label>
          <input type="text" class="form-control" value="<?php echo $result['name']; ?>" name="name" id="name" />
        </div>

        <div class="form-group input-group">
          <label class="form-label" for="email">Email: </label>
          <input type="email" class="form-control" value="<?php echo $result['email']; ?>" name="email" id="email" />
        </div>

        <div class="form-group input-group">
          <label class="form-label" for="pw">Mật khẩu: </label>
          <input type="password" class="form-control" value="<?php echo $result['password']; ?>" name="pw" id="pw" />
        </div>

        <div class="form-group input-group">
          <label class="form-label" for="phone">Điện thoại: </label>
          <input type="text" class="form-control" value="<?php echo $result['mobile']; ?>" name="phone" id="phone" />
        </div>

        <div class="form-group input-group">
          <label class="form-label" for="address">Địa chỉ: </label>
          <input type="text" class="form-control" value="<?php echo $result['address']; ?>" name="address" id="address" />
        </div>

        <div class="form-group input-group">
          <label class="form-label" for="gender">Giới tính: </label>
          <input type="text" class="form-control" value="<?php echo $result['gender']; ?>" name="gender" id="gender" />
        </div>

        <div class="text-center mt-3">
          <input type="submit" value="Cập nhật" class="button btn-custom" name="update" />
        </div>
      </form>
    </div>

    <div class="col-md-6">
      <div class="profile-image d-flex">
        <img src="assets/images/default_image_hotel.jpg" alt="img-profile">
      </div>      
    </div>
  </div>
</div>

<?php
include('footer.php')
?>
