<?php
session_start();
error_reporting(1);
include('connection.php');
$eid = $_SESSION['create_account_logged_in'];

include('header.php');
include('navigation.php');

?>
<div class="container">
  <!--Primary Id-->
  <h1 class="text-center text--title mb-3 mt-4">Danh sách đã đặt</h1>

  <?php
  $sql = mysqli_query($con, "select * from booking_details as bkdt
    inner join rooms as rm on rm.room_id = bkdt.room_id ");

  if (mysqli_fetch_assoc($sql)) {
  ?>
    <div class="row">
      <table class="table table-bordered">
        <tr>
          <th>STT</th>
          <th>Người đặt</th>
          <th>Address</th>
          <th>Thời gian đến nhận phòng</th>
          <th>Thời gian trả phòng</th>
          <th>Số người</th>
          <th>Hủy</th>
        </tr>

        <?php
        $sql = mysqli_query($con, "select * from booking_details as bkdt
        inner join rooms as rm on rm.room_id = bkdt.room_id ");

        while ($result = mysqli_fetch_assoc($sql)) {
          $oid = $result['id'];
          $count = 1;
        ?>

          <tr>
            <td class="text-center"><?php echo $count++;
                                    echo $result[$i] ?></td>
            <td><?php echo $result['username']; ?></td>
            <td><?php echo $result['address']; ?></td>
            <td><?php echo $result['check_in_date']; ?></td>
            <td><?php echo $result['check_in_date']; ?></td>
            <td><?php echo $result['occupancy']; ?></td>
            <td>
              <a href="order_detail.php?order_id=<?php echo $oid; ?>" class="text-link">Xem chi tiết</a>
            </td>
            <td>
              <a href="cancel_order.php?order_id=<?php echo $oid ?>&room_id=<?php echo $result['room_id'] ?>" class="btn btn-danger btn-sm">Hủy</a>
            </td>
          </tr>

        <?php } ?>
      </table>

    </div>
  <?php } else { ?>
    <div class="row">
      <div class="col-lg-12">
        <div class="bill-container__empty">
          <div class="bill-container__empty-content">
            <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/5fafbb923393b712b96488590b8f781f.png" alt="*" />
            <p>Bạn chưa đặt phòng nào cả</p> <a href="rooms.php" class="text-link-custom ml-2">Đặt ngay</a>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</div>

<?php
include('footer.php')
?>