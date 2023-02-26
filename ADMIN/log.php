 <?php session_start(); 
      if(isset($_SESSION['user'])){
            echo '<a style="padding-left:86%;">'.$_SESSION["user"].'</a><a href="logout.php">Logout</a>';
        } else{?>
        <a href="login.php" style="padding-left:86%;">Login</a>
            <a href="register.php">SignUp</a><?php }?>



