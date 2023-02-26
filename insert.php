
<?php
$conn = mysqli_connect("localhost","root","","spicykitchen");
if (!$conn) {
  die("Connection failed");
}
if(isset($_POST['add'])){
  // print_r($_POST);z
$n=$_POST['name'];
$a=$_POST['amount'];
// echo $_FILES['image']['name'];
if(!empty($_FILES['image']['name'])){

  $image=basename($_FILES['image']['name']);
  $image_type=pathinfo($image,$pathinfo_extension);

  if($image_type=='jpg' or $image_type=='png' or $image_type='jpeg' or $image_type='gif'){
  //  echo "hello";
$image=$_FILES['image']['tmp_name'];
$image=addslashes(file_get_contents($image));
 $sql = "INSERT INTO menu(name,amount,image) VALUES('$n','$a','$image')";
//  echo $sql;
 if(mysqli_query($conn,$sql)){
	echo "success";
}
else{
  echo "not instered";
}
  }

}

}
?>
