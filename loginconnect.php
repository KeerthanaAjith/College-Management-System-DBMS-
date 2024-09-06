<?php
session_start();
include "db_connlogin.php";
	if(isset($_POST['uname'])&& isset($_POST['password']))
	{
		function validate($data)
		{
			$data=trim($data);
			$data=stripcslashes($data);
			$data=htmlspecialchars($data);
			return $data;
		}
		$uname=validate($_POST['uname']);
		$pass=validate($_POST['password']);
		if(empty($uname))
		{
			header("Location: login.php?error=User Name is required");
			exit();
		}
		else if(empty($pass))
		{
			header("Location: login.php?error=Password is required");
		exit();
		}
		else
		{
			$sql="select *from students where s_id='$uname'and password='$pass'";
			$sql1="select *from admin where a_id='$uname'and pass='$pass'";
			$sql2="select *from staff where f_id='$uname'and pass='$pass'";
			$result =mysqli_query($conn,$sql);
			$result1 =mysqli_query($conn,$sql1);
			$result2 =mysqli_query($conn,$sql2);
			if(mysqli_num_rows($result)===1)
			{
				$row=mysqli_fetch_assoc($result);
				if($row['s_id']===$uname && $row['password']===$pass)
				{
					$_SESSION['s_id']=$row['s_id'];
					$_SESSION['sname']=$row['sname'];
					header("Location:mainui.php");
					exit();
				}
			}
			else if(mysqli_num_rows($result1)===1)
			{
				$row=mysqli_fetch_assoc($result1);
				if($row['a_id']===$uname && $row['pass']===$pass)
				{
					$_SESSION['a_id']=$row['a_id'];
					$_SESSION['a_name']=$row['a_name'];
					header("Location:adminui.php");
					exit();
				}
			}
			else if(mysqli_num_rows($result2)===1)
			{
				$row=mysqli_fetch_assoc($result2);
				if($row['f_id']===$uname && $row['pass']===$pass)
				{
					$_SESSION['f_id']=$row['f_id'];
					$_SESSION['f_name']=$row['f_name'];
					header("Location:staffui.php");
					exit();
				}
			}
			else
			{
				header("Location: login.php?error=Invalid Credientials");
			exit();
			}
		}
	}
	else
	{
		header("Location: login.php?error=Logged out");
	}
?>


