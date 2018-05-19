<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>RENTAL</title>
<style type="text/css">
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin-left: 1050px;
 
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00ab';
  position: absolute;
  opacity: 0;
  top: 0px;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
	.h{
	border-top: 0px;
    border-left: 6px solid red;
    background-color:aqua;
	font-size: 32px;
}
	</style>
</head>

<body>
<div class="h"><center><b>MUNICIPAL</b></center>
<form action="logoutrental.php">
<button class="button" type="submit" formtarget="_parent" name="logout"><span>Logout </span></button>
</form>
</div>
</body>
</html>