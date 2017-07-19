<?php 
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Dark Login Form</title>
  <link rel="stylesheet" href="css/style1.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <form method="post" action="vallidate.php" class="login">
  
    <p>
      <label for="login">Registerno:</label>
      <input type="text" name="login" id="login" placeholder="Register no">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" placeholder="password">
    </p>

    <p class="login-submit">
      <button type="submit" class="login-button">Login</button>
    </p>

    <p class="forgot-password"><a href="index.html">Forgot your password?</a></p>
	
	<Center> <p style="color: red">
  <?php
		
	 if(isset($_GET['msg'])){
	$msg=$_GET['msg'];
    echo $msg;}
	?></p></center>
		
	
  </form>
 
 
</body>
</html>
