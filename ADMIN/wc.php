<html>
<style>
body{
background-color:black;
}
ul {
  list-style-type: none;
  overflow: hidden;
 background-color:black;
  height:50px;
}


li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
table{
color:white;

}
.im{
width:275px;
height:300px;
}
.tab{
	border:20px;
	cursor:pointer;
}
.active{
	background-color:grey;
}
input[type=submit]
{
background-color:red;
height:40px;
width:100px;
}
</style>
</head>
<body>

<ul >
  <li><a href="navbar.html">Home</a></li>
  <li><a class="active" href="category.html">Categories</a></li>
  <li><a href="branches.html">Branches</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="user.html">User Login</a></li>
  <li><a href="login.html">Admin</a></li>
  <li><a href="feedback.html">FeedBack</a></li>
</ul>
</body>
</html>

<?php

$conn= mysqli_connect("localhost","root","","spicykitchen");
if(!$conn){
	die("Connection Failed:".mysqli_connect_error());
}
$s="SELECT * from menu WHERE `category` = '$_GET[Cate]' ;";
$r=mysqli_query($conn,$s);


echo "<table align=center cellpadding=10  ><tr>";
$c=0;
if (mysqli_num_rows($r)> 0){
  while($row = mysqli_fetch_array($r)){

    if($c==4){
          echo "<tr>";
            $c=0;
  }
  echo "<td><table cellpadding=10 class=tab ></td>
		
		<td colspan=2><img class=im src='data:image/jpg;charset=utf8;base64,".base64_encode($row['image'])."'>
        <tr><td align=center colspan=2><i>".$row['name']."</i></td>
        <tr><td align=center><b>".$row['amount']."</b></td>
<tr><td  align=center><a href=desc.php?id=".$row['id'].">VIEW</a></tr></td>";
?>
<html>

</table>
</html>
<?php
        
	
    $c=$c+1;
	}
}
else{
	header("location:kitchen2.html");
}

?>
