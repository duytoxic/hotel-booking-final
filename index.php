<?php
include('header.php')
?>

<?php
include('navigation.php')
?>
<section class="contact-banner-area" id="contact">
    <div class="container h-100">
      <div class="contact-banner">
        <div class="text-center">
          <h1>Accomodation</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Accomodation</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  
<div class="container-fluid" id="red">
  <!--Id Is Red-->
  <div class="container text-center">
    <h1>Welcome To<b>Online Hotel.Com</b></font>
    </h1>
    <hr><br>
    <div class="row">
      <div class="hov">

        <?php
        $sql = mysqli_query($con, "select * from rooms");
        while ($r_res = mysqli_fetch_assoc($sql)) {
        ?>
          <div class="col-sm-4">
            <img src="image/rooms/<?php echo $r_res['image']; ?>" class="img-responsive thumbnail" alt="Image" id="img1">
            <!--Id Is Img-->
            <h4 class="Room_Text">[ <?php echo $r_res['type']; ?>]</h4>
            <p class="text-justify"><?php echo substr($r_res['details'], 0, 100); ?></p><br>
            <a href="room_details.php?room_id=<?php echo $r_res['room_id']; ?>" class="btn btn-danger text-center">Read more</a><br><br>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<?php
include('footer.php')
?>