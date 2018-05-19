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

<h3>Police officer feedback</h3>

<div>
  <form name=report method=post action="">
    <label for="fname">To:</label>
    <input type="text" id="fname" name="to" placeholder="Citizen name.." required>

    <label for="message">Message</label>
  <textarea name="message" placeholder="Some text..." required></textarea><br>     
  <input type="radio" name="one" value="1" > <font size=3> Yes!! Case is closed.</font>
  <input type="radio" name="one" value="2" > <font size=3> No!! Case is being verified.</font>
    <input type="submit" name="submit" value="Submit">
  </form>
</div>
<?php
  if(isset($_POST['submit'])){
    $to=$_POST['to'];
    $message=$_POST['message'];
	$radio=$_POST['one'];

    $conn=mysqli_connect("localhost","root","","nikhila");
    if(!$conn){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="INSERT INTO admin_report values('$to','$message','$radio')";
    if($result=mysqli_query($conn,$sql)){
        echo "<script type='text/javascript'>
        alert('Submitted successfully!');
          window.location.href='police_report.php';
        </script>";
		if($radio==1){
			$sql="INSERT INTO uni_admin values('$to','$message','$radio')";
			mysqli_query($conn,$sql);
		}
    } else {
      echo "<script type='text/javascript'>alert(' Failed!')</script>";
    }
mysqli_close($conn);
}
?>
</body>
</html>
