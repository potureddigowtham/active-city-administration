<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Bootstrap Real Estate Website Template</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myInverseNavbar2" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">VELLORE</a> </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="myInverseNavbar2">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="citizenreport.php">Report</a></li>
		<li><a href="replies.php">Replies</a></li>
        <li><a href="#">Education</a></li>
        <li><a href="#">Vit</a></li>
        <li><a href="#">TEMPLE</a></li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Food <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">ASP</a></li>
            <li><a href="#">SWAGATH</a></li>
            <li><a href="#">SALEEM</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">LIMRA</a></li>
          </ul>
        </li>
		<li><a href="user_logout.php">Logout</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<?php
    $conn=mysqli_connect("localhost","root","","nikhila");
    if(!$conn){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="select * from admin_report";
    
	$res = mysqli_query($conn,$sql);
    while($num = mysqli_fetch_array($res)){?>
	<br>To: <b><?php echo $num['to']; ?></b> <br>
	Message: <?php echo $num['message'];    
	  }
	?>
	
<?php
mysqli_close($conn);
?>

</body>
</html>
