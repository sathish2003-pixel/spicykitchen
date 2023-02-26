<?php
$con=mysqli_connect("localhost","root","","spicykitchen");
mysqli_select_db($con,'spicykitchen');
$r='select * from  menu';
$re=mysqli_query($con,$r);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    

    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">
</head>

 
    <!-- <table class="table table-striped">
        <thead>
    <tr>
        <th>Name</th>
        <th>Amount</th>
        <th>Image</th>
       
</tr>
</thead>
<tbody> 

<?php

while($row=mysqli_fetch_array($re)){
    echo"<tr><td>".$row['name'];
    echo"<td>".$row['amount'];  
    echo"<td><img src=data:image/jpg;charset=utf8;base64,".base64_encode($row['image'])." style=width:300px;height:200px;/>";
    
}
?>
</tbody>
</table>   
<script src="./bootstrap-5.2.3-dist/js/bootstrap.min.js">
</body>

</html>