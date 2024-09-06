<?php
	$id=$_GET['id'];
	include('db_connlogin.php');
	mysqli_query($conn,"delete from students where s_id='$id'");
	header('location:deletestudent.php');
?>