
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
       <!-- Icon Font Stylesheet -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>

<?php

$conn= mysqli_connect("localhost","root","","spicykitchen");
if(!$conn){
	die("Connection Failed:".mysqli_connect_error());
}
$s="SELECT * from menu ;";
$r=mysqli_query($conn,$s);



  
if (mysqli_num_rows($r)> 0){

  while($row = mysqli_fetch_array($r)){
$c=urlencode($row['category']);
echo "<fieldset>";
         
  echo "<td><table align=center class=tab ></td>
		<td colspan=2><img class=im src='data:image/jpg;charset=utf8;base64,".base64_encode($row['image'])."'>
        <tr><td align=center class=imgs ><a href=wc.php?Cate=".$c.">".$row['category']."</td></a>";
?>
     </table>
</html>
<?php
	 echo "</fieldset>";
	}

}
else{
	header("location:kitchen2html");
}

?>


<script src="./bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
</body>
</html>