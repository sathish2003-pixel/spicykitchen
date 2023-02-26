<?php
$conn = mysqli_connect("localhost","root","","spicykitchen");
if (!$conn) {
  die("Connection failed");
}
if(isset($_POST['add'])){
$n=$_POST['name'];
$a=$_POST['amount'];
echo $_FILES['image']['name'];
if(!empty($_FILES['image']['name'])){
  echo 1;
  $image=basename($_FILES['image']['name']);
  
  $image_type=pathinfo($image,'pathinfo_extension');
  print_r($image_type);
  if($image_type=='jpg' or $image_type=='png' or $image_type='jpeg' or $image_type='gif'){
   echo "hello";
$image=$_FILES['image']['tmp_name'];
$image=addslashes(file_get_contents($image));
 $sql = "INSERT INTO menu(name,amount,image) VALUES('$n','$a','$image')";
 if(mysqli_query($conn,$sql)){
	header("Location:./adminlogin.html");
}
else{
  echo "not instered";
}
  }

}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">
</head>
<body>


<form action="menu.php" method="post" enctype="multipart/form-data">
<div class="container-fluid bg-info">
<div class="row">

<div class="col-xl-12 mx-4 col-sm-12">
    <h1 class="display-1">Menu items</h1>
</div>
</div>



<div class="row">
                      <div class="col-md-6 mb-4">
                            <label class="form-label">Name</label>
                          <input type="text" id="firstName" class="form-control form-control-lg" name="name" />
                      </div>
                    



    </div>
    <div class="row">
                      <div class="col-md-6 mb-4">
                            <label class="form-label">Amount</label>
                          <input type="number" id="firstName" class="form-control form-control-lg" name="amount" />
                      </div>
                    



    </div>
    <div class="row">
                      <div class="col-md-6 mb-4">
                            <label class="form-label">Image</label>
                          <input type="file" id="firstName" class="form-control form-control-lg" name="image" />
                      </div>
                    



    </div>
    <button class="btn mt-3 btn-dark" type="submit" name="add">Add items</button>
</div>
<!-- <script src="./bootstrap-5.2.3-dist/js/bootstrap.min.js"> -->
    </form>
</body>
</html>
