<?php
session_start();
$host="localhost";
$dbuser="root";
$pass="";
$dbname="fest";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_errno())
{
 die("connection failed".mysqli_connect_error());
}

$username=$_POST['login'];
$password=$_POST['password'];
$sql="SELECT `username`,`password` FROM `registration` WHERE `id`='$username'";
$res=mysqli_query($conn,$sql);
				
				if(!$res)
				{
					header("Location: login.php?msg=You are not registered yet");
				}
				else{
					  $row=mysqli_fetch_assoc($res);
					if($row['password']==$password)
					{
						
					$_SESSION['username']=$username;
					$_SESSION['studentname']=$row['username'];
					header("Location: events.php");}
					else{
						header("Location: login.php?msg=invalid username or password");
					}
				}