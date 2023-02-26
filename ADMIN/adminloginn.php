<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        
    </script>

    <style>
        /* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: #ecf0f3;
}

.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 80px 30px;
    background-image:linear-gradient(rgb(145, 203, 250),#cffd00f6);
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}

.logo {
    width: 80px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 2.4rem;
    letter-spacing: 0.5px;
    text-align: center;
    color: #555;
    margin-bottom: 40px;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 40px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #03A9F4, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {

    color: #555;
}

.wrapper .btn {
    box-shadow:#666;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 15px;
    /* box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff; */
    letter-spacing: 1.3px;
}

.wrapper .btn:hover {
    background-color:#5f5f5f;
}

.wrapper a {
    text-decoration:wavy;
    font-size: 0.8rem;
    color: #03A9F4;
}


.line{
    padding-left: 50px;
}

</style>

</head>
<body>
  

    <div class="wrapper">
        <div class="logo">
            <img src="./images/admin.png" alt="admin">
        </div>
        <div class="text-center mt-4 name">
            ADMIN
        </div>

        <form class="p-3 mt-3" action="./adminlogin.php" method="post">
             <div class="form-field align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="uemail"  placeholder="Username">
            </div>

            <div class="form-field  align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="upass" placeholder="Password">
            </div>
            <button class="btn mt-3" name="sub">Sign in</button>
        </form>
            <div class="line">
            <a href="./forgetpassword.php">Forget password?</a> or <a href="./adminsignup.html">Sign up</a>
                </div>
    </div>  
</body>
</html>