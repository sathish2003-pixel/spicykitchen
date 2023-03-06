<?php

$conn = mysqli_connect("localhost","root","","spicykitchen");

mysqli_select_db($conn,'spicykitchen');
$r='select * from  menu';
$re=mysqli_query($conn,$r);
?>
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

    <style>
    .back{
        background: linear-gradient(rgba(15, 23, 43, .4), rgba(15, 23, 43, .4)), url(./images/body\ image.jpg);
  background-position: center;
    background-repeat:repeat;
    background-size:contain;
 
} 
.card {
            backdrop-filter: blur(5px) saturate(185%);
    -webkit-backdrop-filter: blur(5px) saturate(185%);
    background-color: rgba(1, 13, 41, 0.27);
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
          }

</style>
</head>
<body>

<div class="container">

<?php 
$row=mysqli_fetch_array($re);
print_r($re);
    foreach ($row as $re){
  ?>



       <div class="row-fluid ">
    <div class="col-xl-4 ">
<div class="card-columns-fluid">

    <div class="card  bg-light" style = "width: 22rem; " >
    <?php echo "<td><img src=data:image/jpg;charset=utf8;base64,".base64_encode($row['image'])." style=width:150px;height:150px;/>";?>

      

      <div class="card-body">
        <h5 class="card-title"><b><?php echo $row['id']?></b></h5>
         <p class="card-text"><b><?php echo $row['name']?></b></p>
        <p class="card-text"><?php echo $row['amount']?></p>
        <a href="#" class="btn btn-secondary">Full Details</a>

     </div></div></div></div>

    <?php
        }
      
    ?>

    </div> 
     </div> 





<!-- <div class="back">
        <div class="container-xxl back text-light py-5 my-5">
          <div class="container">
            <div class="row g-4">
                  <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                      <div class="service-item rounded pt-3">
                    
                          <div class="p-4">
                              <i class="fa fa-4x fa-user-tie text-warning mb-4"></i> -->
                              
  
                              <!-- <h5 class="text-dark"></h5>
                              <p class="text-dark">.</p><br>
                              <p class="text-dark"></p>
                              



                          </div>
                      
                      </div>
                      </div>
                  </div>
                  
              </div>
              </div>
          </div>
      </div>
      -->
  
<script src="./bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
</body>
</html>
