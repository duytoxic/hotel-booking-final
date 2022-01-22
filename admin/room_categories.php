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
	<h3 class="text-center mt-2 py-4">Loại Phòng</h3>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_room_categories" class="btn btn-primary">Thêm loại phòng</a></td>
	</tr>
	<tr style="height:40">
		<th>Thứ tự</th>
		<th>Tên</th>
		<th>slug</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
<?php 
$i=1;
$sql=mysqli_query($con,"select * from room_categories");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['id'];	
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['slug']; ?></td>
		<td><a href="dashboard.php?option=update_room&id=<?php echo $id; ?>">Sửa</a></td>
		<td><a href="#" onclick="delRoom('<?php echo $id; ?>')">Xóa</a></td>
	</tr>	
<?php 	
}
?>	
	
</table>