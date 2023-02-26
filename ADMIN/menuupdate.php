<?php

$id=$_GET['id'];
$sqll="select * from menu where id='$id'";
$conn = mysqli_connect("localhost","root","","spicykitchen");
$val=mysqli_query($conn,$sqll);
$row=mysqli_fetch_array($val);
//  print_r($row['image']);

?>
        <form action="#"method="POST">

<div class="row">
    <div class="col-md-6 mb-4">
          <label class="form-label">Name</label>
        <input type="text" id="firstName" class="form-control form-control-lg" name="name" value="<?php echo $row['name']?>"/>
    </div>
  



</div>
<div class="row">
    <div class="col-md-6 mb-4">
          <label class="form-label">Amount</label>
        <input type="number" id="firstName" class="form-control form-control-lg" name="amount" value="<?php echo $row['amount'];?>" />
    </div>
  



</div>
<div class="row">
    <div class="col-md-6 mb-4">
          <label class="form-label">Image</label>
        <input type="file" id="firstName" class="form-control form-control-lg" name="image" />
    </div>
  



	<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
    <button type="submit" class="btn btn-primary btn-lg" name="RP">update</button>
  </div>
</form>




<?php
if(isset($_POST['RP'])){
 $n=$_POST['name'];
 $a=$_POST['amount'];
//  $im=base64_encode($row['image']);





 echo "<img src=data:image/jpg;charset=utf8;base64,".base64_encode($row['image'])." style=width:200px;height:200px;/>";
 
// $i=$_POST['id'];

if (!$conn) {
  die("Connection failed: " . '$conn->connect_error');
}


// $sql = "SELECT * FROM menu;";

// $result=mysqli_query($conn,$sql);

// if(mysqli_num_rows($result)>0){

// 	While($row=mysqli_fetch_array($result)){


	  $sql1="UPDATE menu SET name='$n',amount='', WHERE id='$id';";	
    echo $sql1;



   

    //   if($row['id']==$id){

    		if(mysqli_query($conn,$sql1)){
   
				  // header("location:adminlogin.html");
          echo "success";
	 		  }

			  else{

				  echo "Failed To Update";

			  }

     }

     
//   }


?>