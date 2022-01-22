
<table class="table table-bordered table-striped table-hover">
	<h1 style="text-align: center;">Thông tin khách đặt phòng</h1><hr>
	<tr>
		<th>Thứ tự</th>
		<th>Tên</th>
		<th>Email</th>
		<th>Điện thoại</th>
		<th>Địa chỉ</th>
		<th>Kiểu phòng</th>
		<th>Ngày đăng ký</th>
		<th>Thời gian</th>
		<th>Ngày trả phòng</th>
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
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['phone']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['room_type']; ?></td>
		<td><?php echo $res['check_in_date']; ?></td>
		<td><?php echo $res['check_in_time']; ?></td>
		<td><?php echo $res['check_out_date']; ?></td>
		<td><?php echo $res['Occupancy']; ?></td>
		<td><a style="color:red" href="cancel_order.php?booking_id=<?php echo $oid; ?>">Hủy</a></td>
	</td>
	</tr>
<?php 	
}

?>	
</table>