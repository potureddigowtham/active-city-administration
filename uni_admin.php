<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
	}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>

<h3>Admin feedback</h3>

<div>
  <form name=report method=post action="">
    <label for="fname">To:</label>
    <input type="text" id="fname" name="to" placeholder="Citizen name.." required>
	<font size=4>Type:</font>
    <br><input type="radio" name="two" value="police_report" > <font size=3> police</font>
	<br><input type="radio" name="two" value="fire_report" > <font size=3> fire</font>
	<br><input type="radio" name="two" value="hospital_report" > <font size=3> hospital</font>
	<br><input type="radio" name="two" value="rental_report" > <font size=3> rental</font>
  <br><font size=4>Status:</font><br>
  <input type="radio" name="one" value="1" > <font size=3> Yes!! Support is provided.</font>
  <input type="radio" name="one" value="2" > <font size=3> No!! Still pending.</font>
    <input type="submit" name="submit" value="Submit">
  </form>
</div>
<?php
  if(isset($_POST['submit'])){
    $to=$_POST['to'];
	$status=$_POST['one'];
	$type=$_POST['two'];
    $conn=mysqli_connect("localhost","root","","nikhila");
    if(!$conn){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
		if($status==1){
			$sql="DELETE FROM $type WHERE firstname='$to'";
			mysqli_query($conn,$sql);
			$sql1="DELETE from uni_admin where name='$to'";
			mysqli_query($conn,$sql1);
			echo "<script type='text/javascript'>alert(' Problem Solved and Deleted From Database!')</script>";
		}
     else {
      echo "<script type='text/javascript'>alert(' Failed!')</script>";
    }
mysqli_close($conn);
}
?>
</body>
</html>
