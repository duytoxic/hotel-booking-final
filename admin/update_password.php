<?php 
if(isset($update))
{
$sql=mysqli_query($con,"select * from admin where username='$admin' and password='$op' ");
	if(mysqli_num_rows($sql))
	{
		if($np==$cp)
		{
		mysqli_query($con,"update admin set password='$np' where username='$admin' ");	
		echo "<h3 style='color:blue'>Password updated successfully</h3>";
		}
		else
		{
			echo "<h3 style='color:red'>New and confirm doesn't match</h3>";
		}
	}
	else
	{
	echo "<h3 style='color:red'>Old Password doesn't match</h3>";	
	}
	
}
?>
<form method="post" enctype="multipart/form-data">
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<h1 style="text-align: center;">Update password</h1>
					<div class="login-wrap p-4 p-md-5">
						<form action="#" class="login-form">
		      		<div class="form-group d-flex">
	              <input name="op" type="password" class="form-control rounded-left" placeholder="Old password" required>
	            </div>
	            <div class="form-group d-flex">
	              <input name="np" type="password" class="form-control rounded-left" placeholder="New password" required>
	            </div>
	            <div class="form-group d-flex">
	              <input name="cp" type="password" class="form-control rounded-left" placeholder="Confirm password" required>
	            </div>
	            <div class="form-group">
	            	<button name="update" required type="submit" class="form-control btn btn-primary rounded submit px-3">Update password</button>
	            </div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</form>