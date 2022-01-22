<table class="table table-bordered table-striped table-hover">
	<h1 style="text-align: center;">Thông tin người dùng</h1><hr>
	<tr>
		<th>Thứ tự</th>
		<th>Tên</th>
		<th>Email</th>
		<th>Mật khẩu</th>
		<th>Điện thoại</th>
		<th>Địa chỉ</th>
		<th>Giới tính</th>
		<th>Quốc gia</th>
		<th>Ảnh</th>
	</tr>
	<?php 
$i=1;
$sql=mysqli_query($con,"select * from create_account");
while($res=mysqli_fetch_assoc($sql))
{
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['password']; ?></td>
		<td><?php echo $res['mobile']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['gender']; ?></td>
		<td><?php echo $res['country']; ?></td>
		<td><?php echo $res['pictrure']; ?></td>
	</td>
	</tr>	
<?php 	
}
?>	