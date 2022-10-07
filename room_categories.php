<?php
include('connection.php');
include('function.php');

include('header.php');
include('navigation.php');

$catid = $_GET['catid'];
?>

<div class="breadcrumb-custom d-flex">
  <div class="container">
    <?php
      $sql_get_cat = mysqli_query($con, "select name from room_categories where id = $catid");
      $res = mysqli_fetch_assoc($sql_get_cat);
    ?>
  <p>Trang chủ / <?php echo $res['name']; ?></p>
  </div>
</div>

<div class="container-fluid my-5">
  <div class="row">
    <div class="col-lg-3">
      <div class="room-navigation">
        <h4 class="text-center text-uppercase pb-3">Khách sạn</h4>
        <ul>
        <?php
          $sql = mysqli_query($con, "SELECT * FROM  room_categories");
          while ($res = mysqli_fetch_assoc($sql)){ ?>
            <li class="<?php if($res['id'] == $catid){echo 'active';} ?>">
              <a href="room_categories.php?catid=<?php echo $res['id']; ?>"><?php echo $res['name']; ?></a>
            </li>
        <?php } ?>
        </ul>
      </div>
    </div>
    <div class="col-lg-9">
      <div class="row">
        <?php
        $sql = mysqli_query($con, "SELECT distinct image, room_id, price, status, address FROM rooms as r inner join room_categories as rc on $catid = r.room_cat");
        while ($res = mysqli_fetch_assoc($sql)){ ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="room-item">
            <div class="image-wrapper"><img src="uploads/rooms/<?php echo $res['image']; ?>" alt="photo" class="img-responsive"></div>
            <div class="text">
              <h6><?php echo $res['address']; ?></h6>
              <p>Giá <strong><?php echo currency_format($res['price']); ?> / đêm</strong></p>
              <div class="post-meta mb30">
                <ul>
                  <li><span class="review-rate"></span> <i class="icon-star"></i> 132 đánh giá</li>
                  <li><i class="icon-user2"></i> 2 người</li>
                </ul>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                  <a href="room_details.php?room_id=<?php echo $res['room_id']; ?>" class="button button--active" disabled>Xem chi tiết</a>
                  <?php 
                    if($res['status'] == 2){
                      echo '<p class="ordered">Đã được đặt</p>';
                    }
                  ?>
                  
                </div>
            </div>
          </div>
        </div>
      
        <?php }
        
        ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include('footer.php')
?>