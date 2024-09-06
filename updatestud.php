<?php
	include('db_connlogin.php');
	$id=$_GET['id'];
 
	$sname=$_POST['sname'];
	$email=$_POST['email'];
    $mobile_no=$_POST['mobile_no'];
	mysqli_query($conn,"update students set sname='$sname', email='$email',mobile_no='$mobile_no' where s_id='$id'");
	header('location:attandstud.php');
?>