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
  <form name="myform" method="POST" action="destination.php" class="login" onsubmit="return validate()">
     <p>
      <label for="login">UserName:</label>
      <input type="text" name="name" id="name" placeholder=" username" required>
    </p>
      <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" placeholder="4815162342" required="required" >
    </p>
	 <p>
      <label for="password">RetypePwd:</label>
      <input type="password" name="r_password" id="r_password" placeholder="4815162342" required>
    </p>
     <p>
      <label for="login">RegisterNo:</label>
      <input type="text" name="reg_no" id="reg_no" placeholder="register no" required>
    </p>
    <p>
      <label for="login">PhNo:</label>
      <input type="text" name="number" id="number" pattern="[789][0-9]{9}" placeholder="" required>
    </p>
    <p>
      <label for="login">Email:</label>
      <input type="text" name="email" id="email" placeholder="name@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter a valid email id" required>
    </p>

   
	<center>
    <p class="">
      <button type="submit" name="submit" class="login-button">Login</button></center>
    </p>

    
  </form>

 
</body>
</html>
