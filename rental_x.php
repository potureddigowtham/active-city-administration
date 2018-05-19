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
    $sql="select * from rental_report";
    
	$res = mysqli_query($conn,$sql);?>
	<font color="red" size="5" >Problems</font>
	<?php
    while($num = mysqli_fetch_array($res)){?>
	<br><div style=" 
	width: auto;
	left: auto;
	top: auto;
	border: 2px solid skyblue;
	border-radius: 10px;
	background-color: skyblue;
	padding: 10px;
	color: black;
	box-sizing: border-box;
	font-size: 20px;
	font-family: areial;
	height: auto;"><br>Name: <b><?php echo $num['firstname']; ?></b> <br>
	Message: <?php echo $num['message']; ?> </div>  <?php 
	  }
	?>
	
<?php
mysqli_close($conn);
?>

</body>
</html>
