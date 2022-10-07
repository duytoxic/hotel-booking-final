<table class="table table-bordered table-striped table-hover">
	<h1 style="text-align: center;">Thông tin người dùng</h1><hr>
	<tr>
		<th>Thứ tự</th>
		<th>Tên</th>
		<th>Email</th>
		<th>Điện thoại</th>
		<th>Địa chỉ</th>
		<th>Giới tính</th>
	</tr>
	<?php 
$i=1;
$sql=mysqli_query($con,"select * from account");
while($res=mysqli_fetch_assoc($sql))
{
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['mobile']; ?></td>
		<td><?php echo $res['address']; ?></td>
	</td>
	</tr>	
<?php 	
}
?>	