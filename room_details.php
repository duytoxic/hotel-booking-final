<?php
include('header.php');
include('navigation.php');
include('function.php');
?>

<?php
$room_id = $_GET['room_id'];
$sql = mysqli_query($con, "select * from rooms where room_id='$room_id' ");
$res = mysqli_fetch_assoc($sql);

?>
<section class="intro">
  <div class="intro__bg-wrap">
    <div class="overlay intro__bg js-image js-parallax js-scale-down" data-image="uploads/rooms/<?php echo $res['image']; ?>"></div>
  </div>
  <div class="container intro__container">
    <div class="row h-100 align-items-center align-items-center justify-content-center">
      <div class="col-12 col-xl-8 text-center">
        <span class="title title--overhead text-white js-lines"><?php echo $res['address'] ?></span>
        <h1 class="title title--display-1 js-lines"><?php echo $res['name'] ?></h1>
      </div>
    </div>
  </div>
</section>

<div class="bottom-panel bottom-panelRoom">
  <div class="bottom-panel__wrap">
    <div class="row h-100 align-items-center">
      <div class="col-12 col-md-12 col-xl-8">
        <div class="row room-details">
          <div class="col-4 room-details__item slash"><i class="icon-maximize"></i>80 m²</div>
          <div class="col-4 room-details__item slash"><i class="icon-bed"></i>4 Phòng ngủ</div>
          <div class="col-4 room-details__item"><i class="icon-bath"></i>2 Phòng tắm</div>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="content" class="container">
  <div class="row sticky-parent">
    <div class="col-md-12 col-xl-8 order-2 order-xl-1 mt-4 mt-sm-5">
      <h3 class="title title--h3">Mô tả</h3>
      <p><?php echo $res['details'] ?></p>

      <!-- Amenity -->
      <h3 class="title title--h3 mt-4 mt-sm-5">Amenity</h3>
      <div class="row">
        <ul class="list-unstyled list-feature col-12 col-md-4">
          <li class="list-feature__item">
            <img class="icon icon--24" src="assets/icons/icon-parking.svg" alt="" />
            Free parking
          </li>
          <li class="list-feature__item">
            <img class="icon icon--24" src="assets/icons/icon-wifi.svg" alt="" />
            Fast Wi-Fi
          </li>
          <li class="list-feature__item">
            <img class="icon icon--24" src="assets/icons/icon-spa.svg" alt="" />
            SPA Services
          </li>
          <li class="list-feature__item">
            <img class="icon icon--24" src="assets/icons/icon-sport.svg" alt="" />
            Gym
          </li>
        </ul>
        <ul class="list-unstyled list-feature col-12 col-md-4">
          <li class="list-feature__item">
            <img class="icon icon--24" src="assets/icons/icon-elevator.svg" alt="" />
            Elevator
          </li>
          <li class="list-feature__item">
            <img class="icon icon--24" src="assets/icons/icon-tv.svg" alt="" />
            Cable TV
          </li>
          <li class="list-feature__item">
            <img class="icon icon--24" src="assets/icons/icon-kitchen.svg" alt="" />
            Kitchen
          </li>
          <li class="list-feature__item">
            <img class="icon icon--24" src="assets/icons/icon-pool.svg" alt="" />
            Pool
          </li>
        </ul>
        <ul class="list-unstyled list-feature col-12 col-md-4">
          <li class="list-feature__item">
            <img class="icon icon--24" src="assets/icons/icon-coffee-maker.svg" alt="" />
            Coffee maker
          </li>
          <li class="list-feature__item">
            <img class="icon icon--24" src="assets/icons/icon-conditioner.svg" alt="" />
            Conditioning
          </li>
          <li class="list-feature__item">
            <img class="icon icon--24" src="assets/icons/icon-hair-dryer.svg" alt="" />
            Hair dryer
          </li>
          <li class="list-feature__item">
            <img class="icon icon--24" src="assets/icons/icon-washer.svg" alt="" />
            Washer
          </li>
        </ul>
      </div>

    </div>

    <!-- Sidebar Booking -->
    <div class="col-md-12 col-xl-4 order-1 order-xl-2">
      <div class="sidebar-booking sticky-column">
        <div class="sidebar-booking__priceWrap">
          <div class="priceWrap-title">Giá phòng</div>
          <div class="priceWrap-price"><?php echo currency_format($res['price']); ?><span> đêm</span></div>
        </div>

        <div class="text-center mt-5">
          <?php
          if ($_SESSION['create_account_logged_in'] != "") {
          ?>
            <a href="bookingForm.php?room_id=<?php echo $res['room_id']; ?>" class="button btn-custom">Đặt phòng ngay</a>
          <?php } else {
          ?>
            <a href="login.php" class="button btn-custom">Đặt phòng ngay</a>
          <?php
          } ?>
        </div>

      </div>
    </div>
  </div>
</section>

<?php
include('footer.php')
?>