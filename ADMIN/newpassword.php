<?php
if(isset($_POST['RP'])){
$e=$_POST['uemail'];	
$np=$_POST['newp'];
$conn = mysqli_connect("localhost","root","","spicykitchen");
if (!$conn) {
  die("Connection failed: " . '$conn->connect_error');
}

$sql = "SELECT * FROM admin;";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

	While($row=mysqli_fetch_array($result)){

	  $sql1="UPDATE admin SET password='$np' WHERE  email='$e';";	

      if($row['email']==$e){

    		if(mysqli_query($conn,$sql1)){
   
				  header("location:adminlogin.html");
          
	 		  }

			  else{

				  echo "Failed To Change Your Password";

			  }

     }

     
  }

}

}

?>