<?php
session_start();
/* if(empty($_SESSION['username']))
{
	session_destroy();
	header("Location: index.php");
} */
if(empty($_GET['msg']))
{
	$event = $_SESSION['eventCat'];
}
else
	$event=$_GET['msg'];
if(empty($_SESSION['eventCat']))
	$_SESSION['eventCat'] = $event;

	
$host="localhost";
$dbuser="root";
$pass="";
$dbname="fest";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_errno())
{
 die("connection failed".mysqli_connect_error());
}
$sql="select * from events where category='$event'";
$res=mysqli_query($conn,$sql);

?>

<!doctype html>
	<!-- NavBar-->
	<nav class="navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#home">MVGR College Of Engineering</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					
					
					
					<a class="navbar-brand" href="#home"> 
					<?php 
					if(isset($_SESSION['username']))
					{ 
						echo $_SESSION['username'];
					}
					?></a>
					
					
					<li class="menuItem"><a href="logout.php">Logout</a></li>
					
				</ul>
			</div>
		   
		</div>
	</nav>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

    <title>inter department day</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom CSS-->
    <link href="css/general.css" rel="stylesheet">
	
	 <!-- Owl-Carousel -->
    <link href="css/custom.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">

	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="css/magnific-popup.css"> 
	
	<script src="js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->
	<!--[if IE 9]>
		<script src="js/PIE_IE9.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/PIE_IE678.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->

</head>
<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"><p>
	</p></center>
		</div>
	</div>
	<div id="whatis" class="content-section-b" style="border-top: 0">
		<div class="container">

			<div class="row">

   <Center> <p style="color: green">
<?php	

		while(($row=mysqli_fetch_assoc($res))>0)
		{
			$Name = $row['name'];
			$Desc = $row['description'];
			$eventid = $row['event_id'];
			echo'<div class="col-sm-4 wow fadeInDown text-center">
				 <a href="registerForEvent.php?msg='.$eventid.'"> <img class="rotate" src="img/icon/tweet.svg" alt="Generic placeholder image"></a>
				 <h3>'.$Name.'</h3>
				 <p class="lead">'.$Desc.' </p>

				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->';
		}		
				
?>		
			</div><!-- /.row -->
				
		</div>
	</div>
	
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/script.js"></script>
	<!-- StikyMenu -->
	<script src="js/stickUp.min.js"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="js/jquery.corner.js"></script> 
	<script src="js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="js/classie.js"></script>
	<script src="js/uiMorphingButton_inflow.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="js/jquery.magnific-popup.js"></script>
</body>
</html>

	
