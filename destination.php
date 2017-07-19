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
	
	$name=$_POST['name'];
	$pass=$_POST['password'];
	$repass=$_POST['r_password'];
	$registerno=$_POST['reg_no'];
	$phno=$_POST['number'];
	$email=$_POST['email'];
	  $sql1="select * from registration where `id`=$registerno ";
	  $res1=mysqli_query($conn,$sql1);
	  if(!$res1)
	  {}
  else{
	  header("Location: login.php?msg= You are already Registered");
  }
	  if(empty($name)||empty($pass)||empty ($repass)||empty($registerno)||empty($phno)||empty($email))
	  {
	  echo "please fill the details";
	  }
	  elseif($pass!=$repass)
	  {
		  echo "password did not match please try again";
	  }
	   else{
		   $sql="INSERT INTO registration(username,password,id,phone_no,email_id) VALUES ('$name','$pass','$registerno','$phno','$email')";

				$res=mysqli_query($conn,$sql);
				
				if(!$res)
				{
					die("form not inserted into data base".mysqli_error($conn));	
				}
				else{
					echo "data inserted sucessfully";
					//Rheader("Location:submit.php");
				}
	   }
	   
}

 
?>

</body>

</html>