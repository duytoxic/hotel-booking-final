<?php
if (isset($add)) { {
    $img = $_FILES['img']['name'];
    mysqli_query($con, "insert into rooms values('','$rno','$room_cat','$price','$address','$details','$img')");
    move_uploaded_file($_FILES['img']['tmp_name'], "../uploads/rooms/" . $_FILES['img']['name']);
    echo "Rooms added successfully";
  }
}
?>

<form method="post" enctype="multipart/form-data">
  <table class="table table-bordered">

    <tr>
      <th>Số phòng</th>
      <td><input type="text" name="rno" class="form-control" required />
      </td>
    </tr>

    <tr>
      <th>Loại phòng</th>
      <td>
        <div class="form-group">
          <select class="custom-select form-control" name="room_cat" id="selectRoomCat" required>
            <option selected>Chọn loại phòng</option>
            <?php
            $sql = mysqli_query($con, "select * from room_categories");
            while ($result = mysqli_fetch_assoc($sql)){
              echo '<option value="'. $result['id'] .'">'. $result['name'] .'</option>';
            } 
            ?>
          </select>
        </div>
      </td>
    </tr>

    <tr>
      <th>Price</th>
      <td><input type="text" name="price" class="form-control" required />
      </td>
    </tr>

    <tr>
      <th>Address</th>
      <td><input type="text" name="address" class="form-control" required />
      </td>
    </tr>

    <tr>
      <th>Details</th>
      <td><textarea name="details" class="form-control" required></textarea>
      </td>
    </tr>

    <tr>
      <th>Images</th>
      <td><input type="file" name="img" class="form-control" required />
      </td>
    </tr>

    <tr>
      <td colspan="2">
        <input type="submit" class="btn btn-primary" value="Add Room Details" name="add" />
      </td>
    </tr>
  </table>
</form>