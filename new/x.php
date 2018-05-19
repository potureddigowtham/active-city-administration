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

<?php
    $conn=mysqli_connect("localhost","root","","nikhila");
    if(!$conn){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="select * from user_report";
    
	$res = mysqli_query($conn,$sql);
    while($num = mysqli_fetch_array($res)){?>
	<br>Name: <b><?php echo $num['name']; ?></b> <br>
	Message: <?php echo $num['message'];    
	  }
	?>
	
<?php
mysqli_close($conn);
?>

</body>
</html>
