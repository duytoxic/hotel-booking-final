<?php 
session_start();
error_reporting(1);
if($_SESSION['create_account_logged_in']!="")
{
header('location:bookingForm.php');
}
error_reporting(1);
require('connection.php');
extract($_REQUEST);
if(isset($login))
{
  if($eid=="" || $pass=="")
  {
  $error= "<h4 style='color:red'>fill all details</h4>";  
  }   
  else
  {
  $sql=mysqli_query($con,"select * from create_account where email='$eid' && password='$pass' ");
    if(mysqli_num_rows($sql))
    {
    $_SESSION['create_account_logged_in']=$eid;  
    header('location:bookingForm.php'); 
    }
    else
    {
    $error= "<h4 style='color:red'>Invalid login details</h4>"; 
    } 
  }
}
?>
<?php
include('header.php')
?>

<?php
include('navigation.php')
?>
<div class="login_from-wrapper">
    <h2 class="text-center">Đăng nhập</h2>
    <?php echo @$error; ?>
    <form class="row contact_form" method="post" id="contactForm" novalidate>
      <div class="col-12">
        <div class="form-group">
          <input type="Email" class="form-control" name="eid" placeholder="Email Id" autocomplete="off" required />
        </div>
        <div class="form-group">
          <input type="Password" class="form-control" name="pass" placeholder="Password" autocomplete="off" required />
        </div>
      </div>
      <div class="col-md-12 text-center">
        <input type="submit" value="Đăng nhập" name="login" class="button-contact btn-group-justified" required>
    </input>
      </div>
    </form>
  </div>
<?php
include('footerMain.php')
?>
