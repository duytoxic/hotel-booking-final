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
  <h1 class="text-center text--title mb-4">Danh sách đã đặt</h1>
  <div class="row">
    <table class="table table-bordered" style="height:150px;">
      <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Address</th>
        <th>Thời gian kiểm tra</th>
        <th>Check In Time</th>
        <th>Occupancy</th>
        <th>Xem chi tiết phòng</th>
        <th>Cancel</th>
      </tr>

      <?php
      $sql = mysqli_query($con, "select * from booking_details as bkdt
        inner join rooms as rm on rm.room_id = bkdt.room_id ");

      while ($result = mysqli_fetch_assoc($sql)) {
        $oid = $result['id'];
        $count = 1;
      ?>

        <tr>
          <td class="text-center"><?php echo $count++; echo $result[$i] ?></td>
          <td><?php echo $result['name']; ?></td>
          <td><?php echo $result['address']; ?></td>
          <td><?php echo $result['check_in_date']; ?></td>
          <td><?php echo $result['check_in_date']; ?></td>
          <td><?php echo $result['occupancy']; ?></td>
          <td>
            <a href="order_detail.php?order_id=<?php echo $oid; ?>" class="text-link">Xem chi tiết</a>
          </td>
          <td>
            <a href="cancel_order.php?order_id=<?php echo $oid ?>" class="btn btn-danger btn-sm">Hủy</a>
          </td>
        </tr>

      <?php } ?>
    </table>

  </div>
</div>

<?php
include('footer.php')
?>