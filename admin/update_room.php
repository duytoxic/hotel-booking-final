<?php
$id = $_GET['id'];
$sql = mysqli_query($con, "select * from rooms where room_id='$id'");
$res = mysqli_fetch_assoc($sql);

extract($_REQUEST);
if (isset($update)) {
	mysqli_query($con, "update rooms set room_number='$rno',,type='$type',price='$price',address='$address' ,details='$details' where room_id='$id' ");
	header('location:dashboard.php?option=rooms');
}

?>

<form method="post" enctype="multipart/form-data">
	<table class="table table-bordered">

		<tr>
			<th>Số phòng</th>
			<td><input type="text" name="rno" value="<?php echo $res['room_number']; ?>" class="form-control" />
			</td>
		</tr>

		<tr>
			<th>Địa chỉ</th>
			<td><input type="text" name="rno" value="<?php echo $res['address']; ?>" class="form-control" />
			</td>
		</tr>

		<tr>
			<th>Giá</th>
			<td><input type="text" name="price" value="<?php echo $res['price']; ?>" class="form-control" />
			</td>
		</tr>

		<tr>
			<th>Chi tiết</th>
			<td><textarea name="details" class="form-control"><?php echo $res['details']; ?></textarea>
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<input type="submit" class="btn btn-primary" value="Update Room Details" name="update" />
			</td>
		</tr>
	</table>
</form>