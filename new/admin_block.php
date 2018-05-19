<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div style="position: absolute; left: 950px; font-size: 30px; top: 123px;">
<p>Reply</p></div>
<div style="position: absolute; left: 729px; width: 40%; height: 180px; padding: 12px 20px; box-sizing: border-box; border: 2px solid #ccc; border-radius: 4px; background-color: #f8f8f8; font-size: 16px; resize: none; top: 221px;">
<form action="">
To: <input type="text" name="to">
<textarea name="message" placeholder="reply" rows="7" cols="70">
</textarea>
<input type="submit" name="submit">
</form>
</div>


<?php
  if(isset($_POST['submit'])){
    $to=$_POST['to'];
    $message=$_POST['message'];

    $conn=mysqli_connect("localhost","root","","nikhila");
    if(!$conn){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="INSERT INTO user_report values('$to','$message')";
    if($result=mysqli_query($conn,$sql)){
        echo "<script type='text/javascript'>
        alert('Submitted successfully!');
          window.location.href='citizenlogedpage.php';
        </script>";
    } else {
      echo "<script type='text/javascript'>alert(' Failed!')</script>";
    }
mysqli_close($conn);
}
?>

</body>
</html>
