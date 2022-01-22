<?php
include('connection.php');
include('navigation.php');

if ($eid == "") {
  header('location:login.php');
}

extract($_REQUEST);
error_reporting(1);
if (isset($savedata)) {
  $sql = mysqli_query($con, "select * from booking_details where room_id='$room_id' ");
  if (mysqli_num_rows($sql)) {
    $msg = '<div class="alert--message">
    <i class="fal fa-times btn--close--message"></i>
    Phòng này đã được đặt. Vui lòng chọn phòng khác
  </div>';
  } else {

    $sql = "insert into booking_details 
  values('','$eid','$name','$room_id','$email','$phone','$address','$cdate','$ctime','$ldate','$ltime','$occupancy')";
    if (mysqli_query($con, $sql)) {
      $msg = '<div class="alert--message">
      <i class="fal fa-times btn--close--message"></i>
      Đặt phòng thành công. <a href="order.php" class="btn-link">Xem chi tiết</a>
    </div>';
    $sql_update_status = "update rooms set status = 2 where room_id = $room_id";
    mysqli_query($con, $sql_update_status);
    }
  }
}
?>

<?php
include('header.php');
?>

<div class="container mt-4" id="primary">
  <?php echo @$msg;  ?>
  <?php
    $sql_get_user = mysqli_query($con, "select * from account where email='$eid' ");
    $user = mysqli_fetch_assoc($sql_get_user);
  ?>
  <h3 class="text-center mb-4">Đặt phòng ngay</h3>
  <form class="form--primary" method="post">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Tên: </label>
          <input type="text" class="form-control" value="<?php echo $user['name']; ?>" name="name" placeholder="Họ và Tên" required>
        </div>

        <div class="form-group">
          <label>Email: </label>
          <input type="text" class="form-control" value="<?php echo $user['email']; ?>" name="email" placeholder="Email" required>
        </div>

        <div class="form-group">
          <label>Số điện thoại: </label>
          <input type="text" class="form-control" value="<?php echo $user['mobile']; ?>" name="mobile" placeholder="Điện thoại" required>
        </div>

        <div class="form-group">
          <label>Địa chỉ: </label>
          <input type="text" class="form-control" value="<?php echo $user['address']; ?>" name="address" placeholder="Địa chỉ" required>
        </div>
        <div class="form-group">
          <label>Số người: </label>
          <select class="select-control form-control" name="occupancy" id="selectRoomCat" required>
            <option value="1 người">Đơn</option>
            <option value="2 người">Cặp đôi</option>
            <option value="3 người">3 Người</option>
            <option value="4 người">4 Người</option>
          </select>       
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Ngày nhận phòng: </label>
          <input type="date" name="cdate" class="form-control" required>
        </div>

        <div class="form-group">
          <label>Thời gian nhận phòng: </label>
          <input type="time" name="ctime" class="form-control" required>
        </div>

        <div class="form-group">
          <label>Ngày trả phòng: </label>
          <input type="date" name="ldate" class="form-control" required>
        </div>

        <div class="form-group">
          <label>Thời gian trả phòng: </label>
          <input type="time" name="ltime" class="form-control" required>
        </div>

      </div>
    </div>

    <input type="submit" value="Xác nhận" name="savedata" class="button btn-custom" required />
  </form>

  <!-- <div class="container">
    <div class="row">
      <form class="form-horizontal" method="post">
        <div class="col-sm-6">
          <div class="form-group">
            <div class="row">
              <div class="control-label col-sm-4">
                <h4> Name :</h4>
              </div>
              <div class="col-sm-8">
                <input type="text" value="<?php echo $result['name']; ?>" readonly="readonly" class="form-control" name="name" placeholder="Enter Your Frist Name" required>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="control-label col-sm-4">
                <h4>Email :</h4>
              </div>
              <div class="col-sm-8">
                <input type="email" value="<?php echo $result['email']; ?>" readonly="readonly" class="form-control" name="email" placeholder="Enter Your Email-Id" required />
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="control-label col-sm-4">
                <h4>Mobile :</h4>
              </div>
              <div class="col-sm-8">
                <input type="number" value="<?php echo $result['mobile']; ?>" readonly="readonly" class="form-control" name="phone" placeholder="Type Your Phone Number" required>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="control-label col-sm-4">
                <h4>Address :</h4>
              </div>
              <div class="col-sm-8">
                <textarea name="address" class="form-control" readonly="readonly" placeholder="Enter Your Address"><?php echo $result['address'];  ?></textarea>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="control-label col-sm-4">
                <h4>Country</h4>
              </div>
              <div class="col-sm-8">
                <input type="text" class="form-control" readonly="readonly" value="<?php echo $result['country']; ?>" name="city" placeholder="Enter Your City Name" required>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="control-label col-sm-4">
                <h4></h4>
              </div>
              <div class="col-sm-8">
                <input type="hidden" name="state" class="form-control" placeholder="Enter Your State Name" required>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="control-label col-sm-4">
                <h4></h4>
              </div>
              <div class="col-sm-8">
                <input type="hidden" name="zip" class="form-control" placeholder="Enter Your Zip Code" required>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group">
            <div class="row">
              <div class="control-label col-sm-5">
                <h4>Room Type:</h4>
              </div>
              <div class="col-sm-7">
                <select class="form-control" name="room_type" required>
                  <option>Deluxe Room</option>
                  <option>Luxurious Suite</option>
                  <option>Standard Room</option>
                  <option>Suite Room</option>
                  <option>Twin Deluxe Room</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group">
            <div class="row">
              <div class="control-label col-sm-5">
                <h4>check In Date :</h4>
              </div>
              <div class="col-sm-7">
                <input type="date" name="cdate" class="form-control" required>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group">
            <div class="row">
              <div class="control-label col-sm-5">
                <h4>Check In Time:</h4>
              </div>
              <div class="col-sm-7">
                <input type="time" name="ctime" class="form-control" required>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <div class="row">
              <div class="control-label col-sm-5">
                <h4>Check Out Date :</h4>
              </div>
              <div class="col-sm-7">
                <input type="date" name="codate" class="form-control" required>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <div class="row">
              <label class="control-label col-sm-5">
                <h4 id="top">Occupancy :</h4>
              </label>
              <div class="col-sm-7">
                <div class="radio-inline"><input type="radio" value="single" name="Occupancy" required>Single</div>
                <div class="radio-inline"><input type="radio" value="twin" name="Occupancy" required>Twin</div>
                <div class="radio-inline"><input type="radio" value="dubble" name="Occupancy" required>Dubble</div>
              </div>
            </div>
          </div>
          <input type="submit" value="submit" name="savedata" class="btn btn-danger" required />
        </div>
      </form><br>
    </div>
  </div> -->
</div>

<?php
include('footer.php')
?>