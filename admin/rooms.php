<script>
	function delRoom(id)
	{
		if(confirm("Bạn có muốn xóa phòng này khỏi danh sách ?"))
		{
		window.location.href='delete_room.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1 style="text-align: center;">Phòng</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_rooms" class="btn btn-primary">Thêm phòng</a></td>
	</tr>
	<tr style="height:40">
		<th>Thứ tự</th>
		<th>Ảnh</th>
		<th>Số phòng</th>
		<th>Loại phòng</th>
		<th>Giá</th>
		<th>Chi tiết</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
<?php 
$i=1;
$sql=mysqli_query($con,"select * from rooms");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['room_id'];	
$img=$res['image'];
$path="../uploads/rooms/$img";
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><img src="<?php echo $path;?>" width="50" height="50"/></td>
		<td><?php echo $res['room_number']; ?></td>
		<td><?php echo $res['room_cat']; ?></td>
		<td><?php echo $res['price']; ?></td>
		<td><?php echo $res['details']; ?></td>

		<td><a href="dashboard.php?option=update_room&id=<?php echo $id; ?>">Sửa</a></td>

		
		<td><a href="#" onclick="delRoom('<?php echo $id; ?>')">Xóa</a></td>
	</tr>	
<?php 	
}
?>	
	
</table>