
<?php
session_start();
/* if(empty($_SESSION['username']))
{
	session_destroy();
	header("Location: index.php");
} */
$user=$_SESSION['username'];
//$eventid=$_SESSION['event'];
?>


<?php
$host="localhost";
$dbuser="root";
$pass="";
$dbname="fest";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_errno())
{
 die("connection failed".mysqli_connect_error());
}
?>
<html>
<head><title>signup</title></head>
<body>
<?php 
if(isset($_POST["submit"]))
{
	
	$leaderid=$user;
	$teamname=$_POST['teamname'];
	$p1=$_POST['p1'];
	$p2=$_POST['p2'];
	$p3=$_POST['p3'];
	$p4=$_POST['p4'];
	$p5=$_POST['p5'];

		   $sql="INSERT INTO `teams`(`team_id`, `leader_id`, `event_id`, `team_name`, `member_1`, `member_2`, `member_3`, `member_4`, `member_5`) VALUES ( '',$leaderid,2,'$teamname','$p1','$p2','$p3','$p4','$p5')";

				$res=mysqli_query($conn,$sql);
				
				if(!$res)
				{
					die("form not inserted into data base".mysqli_error($conn));	
				}
				else{
					//echo "data inserted sucessfully";
					header("Location: #");
				}
	   }
	   


 
?>

</body>

</html>