

<?php

if(isset($_POST['sub']))
{

$e=$_POST['uemail'];
$p=$_POST['upass'];

$conn = mysqli_connect("localhost","root","","spicykitchen");

if (!$conn) {

  die("Connection failed: " .$conn->connect_error);
}

$sql = "SELECT * FROM admin WHERE email='$e' and password='$p';";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){

	while($row=mysqli_fetch_array($result)){

		if($row['email']==$e && $row['password']==$p){

			header("location:adminpanel.html");

		}

	 }

 }
	  else{
				echo "incorrect passsword";

  	    }

  }

?>
