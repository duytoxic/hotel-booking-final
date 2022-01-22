<?php
if (isset($add)) { {
    $img = $_FILES['img']['name'];
    mysqli_query($con, "insert into room_categories values('','$name','$slug')");
    header('location:dashboard.php?option=room_categories');	
  }
}
?>

<form method="post" enctype="multipart/form-data" class="form-add">
  <table class="table table-bordered">
    <tr>
      <th>Tên</th>
        <td><input type="text" name="name" class="form-control" required />
      </td>
    </tr>

    <tr>
      <th>Slug</th>
      <td><input type="text" name="slug" class="form-control" required />
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <input type="submit" class="btn btn-primary" value="Thêm" name="add" />
      </td>
    </tr>
  </table>
</form>