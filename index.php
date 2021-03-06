<?php
include('header.php');
include('function.php');
?>

<?php
include('navigation.php')
?>
<section class="contact-banner-area" id="contact">
  <div class="container h-100">
    <div class="contact-banner">
      <div class="text-center">
        <h1>Đặt phòng khách sạn giá rẻ</h1>
      </div>
    </div>
  </div>
</section>

<!-- Section Rooms -->
<section class="container section">
  <div class="row align-items-end">
    <div class="col-12 col-md-12 col-lg-8 flex-row align-items-center">
      <h4 class="title title--overhead js-lines mb-4">Dách sách phòng</h4>
    </div>
    <div class="col-12 col-md-12 col-lg-4 text-lg-right d-md-block">
      <a class="btn-link header-btn-more" href="rooms.php">Xem tất cả</a>
    </div>
  </div>

  <div class="row">
    <?php
    $sql = mysqli_query($con, "select * from rooms where status = 1");
    $countHotelPop = 0;
    while ($r_res = mysqli_fetch_assoc($sql)) {
      if ($countHotelPop === 5) {
        break;
      }
    ?>
      <div class="col-12 <?php 
        if($countHotelPop === 0){
          echo 'col-md-12 col-lg-8';
        } else{
          echo 'col-md-6 col-lg-4';
        }
      ?>">
        <div class="itemRoom">
        <?php
          if($countHotelPop === 0){
            echo '<span class="badge">phổ biến</span>';
          }
        ?>       
          <div class="itemRoom__img-wrap">
            <a class="itemRoom__link" href="room_details.php?room_id=<?php echo $r_res['room_id']; ?>"">
              <img class="cover" src="uploads/rooms/<?php echo $r_res['image']; ?>" alt="room" />
            </a>
          </div>
          <div class="itemRoom__details">
            <h4 class="title title--h4"><?php echo $r_res['address']; ?></h4>
            <div class="itemRoom__price"><?php echo currency_format($r_res['price']); ?><span>đêm</span></div>
          </div>
        </div>
      </div>
    <?php
      $countHotelPop++;
    }
    ?>
  </div>
</section>

<?php
include('footer.php')
?>