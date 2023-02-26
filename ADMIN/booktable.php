<?php
if(isset($_POST['submit'])){
$n=$_POST['name'];
$p=$_POST['phone'];
$e=$_POST['email'];
$d=$_POST['date'];
$m=$_POST['members'];
$conn = mysqli_connect("localhost","root","","spicykitchen");
if (!$conn) {
  die("Connection failed");
}
$sql = "INSERT INTO reservation(rname,rphone,remail,rdate,rmembers) VALUES('$n','$p','$e','$d','$m')";
if(mysqli_query($conn,$sql)){
	echo "we will contact you soon";
}

else{
	echo "Error:".$sql."<br>".mysqli_error($conn);
}
}
?>