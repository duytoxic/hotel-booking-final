<?php
session_start();
error_reporting(1);
include('connection.php');
$eid = $_SESSION['create_account_logged_in'];
extract($_REQUEST);
if (isset($update)) {
  $que = "update create_account set name='$name',password='$pass',mobile='$mob',address='$add' where email='$eid'";
  mysqli_query($con, $que);
  $msg = "<h3 style='color:blue'>Profile Updated successfully</h3>";
}
?>

<?php
$sql = mysqli_query($con, "select * from create_account where email='$eid' ");
$result = mysqli_fetch_assoc($sql);
?>
<div class="container-fluid">
  <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-12">
            <div class="white-box">
                <div class="user-bg"> <img width="100%" alt="user" src="plugins/images/large/img1.jpg">
                    <div class="overlay-box">
                        <div class="user-content">
                            <a href="javascript:void(0)"><img src="plugins/images/users/genu.jpg"
                                    class="thumb-lg img-circle" alt="img"></a>
                            <h4 class="text-white mt-2">User Name</h4>
                            <h5 class="text-white mt-2">info@myadmin.com</h5>
                        </div>
                    </div>
                </div>
                <div class="user-btm-box mt-5 d-md-flex">
                    <div class="col-md-4 col-sm-4 text-center">
                        <h1>258</h1>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <h1>125</h1>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <h1>556</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material">
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Full Name</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" <?php echo $result['name']; ?> name="name" id="name" 
                                    class="form-control p-0 border-0"> 
                        </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">Email</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="email" value="<?php echo $result['email']; ?>" name="email" id="email"
                                    class="form-control p-0 border-0" name="example-email"
                                    id="example-email">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Password</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="password" value="<?php echo $result['password']; ?>" name="pw" id="pw" class="form-control p-0 border-0">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Phone No</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" value="<?php echo $result['address']; ?>" name="address" id="address" class="form-control p-0 border-0">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Address</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" value="<?php echo $result['mobile']; ?>" name="phone" id="phone" class="form-control p-0 border-0">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Gender</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" class="form-control" value="<?php echo $result['gender']; ?>" name="gender" id="gender" class="form-control p-0 border-0">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button name="update" class="btn btn-success">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
