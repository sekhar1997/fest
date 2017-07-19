
<?php
session_start();
/* if(empty($_SESSION['username']))
{
	session_destroy();
	header("Location: index.php");
} */
$user=$_SESSION['username'];
?>


<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>register Form</title>
  <link rel="stylesheet" href="css/style2.css">
  

  
 
  
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <form name="myform" method="POST" action="team_insert.php" class="login" onsubmit="return validate()">
	<p>
	<?php
	?>
	</p>
     <p>
	  <?php
      echo "leader id: ". $user;
	  ?>
    </p>
      <p>
      <label for="password">TeamName:</label>
      <input type="text" name="teamname"  required="required" >
    </p>
	 <p>
      <label for="password">participant1</label>
      <input type="text" name="p1" id="r_password"  >
    </p>
	
	<p>
      <label for="password">participant2</label>
      <input type="text" name="p2" id="r_password"  >
    </p>
	
	<p>
      <label for="password">participant3</label>
      <input type="text" name="p3" id="r_password"  >
    </p>
	
	<p>
      <label for="password">participant4</label>
      <input type="text" name="p4" id="r_password"  >
    </p>
	<p>
      <label for="password">participant5</label>
      <input type="text" name="p5" id="r_password"  >
    </p>
     

   
	<center>
    <p class="">
      <button type="submit" name="submit" class="login-button">register</button></center>
    </p>

    
  </form>

 
</body>
</html>
