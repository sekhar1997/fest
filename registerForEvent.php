<?php
session_start();
if(empty($_SESSION['username']))
{
	session_destroy();
	header("Location: login.php?msg=You need to login.");
}
$eventid=$_GET['msg'];
$user=$_SESSION['username'];
$host="localhost";
$dbuser="root";
$pass="";
$dbname="fest";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_errno())
{
 die("connection failed".mysqli_connect_error());
}
//echo $eventid." ".$user;
$sql="INSERT INTO `student_data`(`id`, `event_id`) VALUES ('$user','$eventid')";
echo $sql;
$res=mysqli_query($conn,$sql);
if($res==true)
	//echo"Success!";
	header("Location: eventlist.php?msg=Successfully registered for the event.");
else
	header("Location: eventlist.php?msg=You are already registered for this event");
	//header("Location: eventlist.php");
?>