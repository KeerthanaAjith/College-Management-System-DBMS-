<?php
	include('db_connlogin.php');
	$id=$_GET['id'];
	$noc=$_POST['noc'];
	$ca=$_POST['ca'];
    $percentage=$_POST['percentage'];
	mysqli_query($conn,"update attandance set noc='$noc', ca='$ca',percentage='$percentage' where s_id='$id'");
	header('location:attandstud.php');
?>