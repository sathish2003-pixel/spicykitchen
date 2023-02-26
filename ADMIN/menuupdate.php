<?php

$id=$_GET['id'];
$sqll="select * from menu where id='$id'";
$conn = mysqli_connect("localhost","root","","spicykitchen");
$val=mysqli_query($conn,$sqll);
$row=mysqli_fetch_array($val);
//  print_r($row['image']);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">
        <form action="#"method="POST"  enctype="multipart/form-data">

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
  // print_r($_POST);
  

   
    $image=basename($_FILES['image']['name']);
    $image_type=pathinfo($image,$pathinfo_extension);
  
    if($image_type=='jpg' or $image_type=='png' or $image_type='jpeg' or $image_type='gif'){
    //  echo "hello";
  $image=$_FILES['image']['tmp_name'];
  $image=addslashes(file_get_contents($image));
// print_r($_POST['name']);
// print_r($_POST['amount']);
// echo $image;

  
  $sql1="UPDATE menu SET name='$n',amount='$a', image = '$image'  WHERE id='$id'";	
  // echo $sql1;
  
   if(mysqli_query($conn,$sql1)){
  
    header("location:adminpanel.html");
  
  }
  else{
    echo "failed";
  }
  // print_r($image);
    }
  
  }
// $i=$_POST['id'];

if (!$conn) {
  die("Connection failed: " . '$conn->connect_error');
}

     
    


?>