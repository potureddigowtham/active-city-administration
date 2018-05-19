<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Active City Administration</title>
<link href="css/citizenreport.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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

.a {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	

}
</style>
</head>
<body>

<!-- Main Container -->
<div class="container"> 
   <!-- Navigation -->
  <header> <a href="">
    <h4 class="logo">FIRE</h4>
    </a>
    <nav>
      <ul>
        <li><a href="home.html">HOME</a></li>
        <li><a href="#about">ABOUT</a></li>
          
        <li><a href="reportpage.html">REPORT</a></li>
       <li><a href="user_logout.php">LOGOUT</a></li>
      </ul>
    </nav>
  </header>
  
  
<h3>&nbsp;&nbsp;&nbsp;Fire Station</h3>

<div class="a">
  <form name=report method=post action="">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

   

    <label for="message">Message</label>
  <textarea name="message" placeholder="Some text..."></textarea>     
  
    <input type="submit" name="submit" value="Submit">
  </form>
</div>
<?php
  if(isset($_POST['submit'])){
    $name=$_POST['firstname'];
    $msg=$_POST['message'];

    $conn=mysqli_connect("localhost","root","","nikhila");
    if(!$conn){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="INSERT INTO fire_report values('$name','$msg')";
    if($result=mysqli_query($conn,$sql)){
        echo "<script type='text/javascript'>
        alert('Submitted successfully!');
          window.location.href='reportpage.html';
        </script>";
    } else {
      echo "<script type='text/javascript'>alert(' Failed!')</script>";
    }
mysqli_close($conn);
}
?>
</body>
</html>
