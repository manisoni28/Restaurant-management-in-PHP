<?php
	session_start();
	
	$conn=mysql_connect("localhost","vaidyak","991385187");
	mysql_select_db('vaidyak');
	
	$username=$_POST['username'];
	$password=$_POST['password'];

	$loggedin = true;
	$_SESSION['loggedin'] = $loggedin;
    
	$resultset=mysql_query("select * from `user` where  `username`='".$username."' and  `password`='".$password."'",$conn);
	
	if(mysql_num_rows($resultset)>0)
	{
	   	$_SESSION['username']=$username;
		header("location:reservation.php");
		exit();		 
	}
	else
	{
	     header("location:login.php"); 
		 exit();
	}
	
?>