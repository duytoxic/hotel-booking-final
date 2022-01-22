<?php 
include('connection.php');
$oid=$_GET['order_id'];
$roomid=$_GET['room_id'];
$q=mysqli_query($con,"delete from booking_details where id='$oid' ");
if($q)
{
$sql_update_status = "update rooms set status = 1 where room_id = $roomid";
mysqli_query($con, $sql_update_status);
header('location:order.php');
}
