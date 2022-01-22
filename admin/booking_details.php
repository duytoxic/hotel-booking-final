
<table class="table table-bordered table-striped table-hover table-responsive">
	<h3 class="text-center mt-2 py-4">Thông tin khách đặt phòng</h3>
	<tr>
		<th>Thứ tự</th>
		<th>Địa chỉ</th>
		<th>Email</th>
		<th>Ngày đăng ký</th>
		<th>Thời gian nhận phòng</th>
		<th>Thời gian trả phòng</th>
		<th>Số người</th>
		<th>Hủy đặt phòng</th>
	</tr>

<?php 
$i=1;
$sql=mysqli_query($con,"select * from booking_details");
while($res=mysqli_fetch_assoc($sql))
{
$oid=$res['id'];

?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['check_in_time'] . $res['check_in_date']; ?></td>
		<td><?php echo $res['check_in_time']; ?></td>
		<td><?php echo $res['check_out_date']; ?></td>
		<td><?php echo $res['occupancy']; ?></td>
		<td><a style="color:red" href="cancel_order.php?booking_id=<?php echo $oid; ?>">Hủy</a></td>
	</td>
	</tr>
<?php 	
}

?>	
</table>