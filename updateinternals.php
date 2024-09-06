<?php
	include('db_connlogin.php');
	$t1=$_GET['t1'];
	$t2=$_POST['t2'];
	$quiz=$_POST['quiz'];
    $endsem=$_POST['endsem'];
	mysqli_query($conn,"update internals set t1='$t1', t2='$t2',quiz='$quiz',endsem='$endsem' where s_id='$id'");
	header('location:internalstud.php');
?>