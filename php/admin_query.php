<?php
  session_start();
  include_once('database.php');
  if($connect){
    if(isset($_SESSION['Email'])){
      $sql="SELECT * FROM admin where Email='$_SESSION[Email]'";
      $res=mysqli_query($connect, $sql);
      $row=mysqli_fetch_assoc($res);
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_Query</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../css/admin_query.css">
    <style>
        *{
    margin: 0;
    padding: 0;
    font-family: 'Times New Roman', Times, serif;
    font-variant: small-caps;
}

.heading{
    text-align: center;
    margin: 10px auto;
    color: rgb(15, 130, 212);
}

.heading h3{
    color: rgb(128, 180, 217);
}

.info .col-sm{
    padding: 10px;
    font-size: 20px;
}
*{
    margin: 0;
    padding: 0;
    font-family: 'Times New Roman', Times, serif;
    font-variant: small-caps;
}

.logo{
    font-family: cursive;
    font-size: 25px;
    color: rgb(3, 115, 135)!important;
}

.hero{
    width: 100vw;
    height: 30vw;
}

.hero img{
    width: 100vw;
    height: 30vw;
    position: absolute;
}

.hero h1{
    font-family: fantasy;
    font-variant: small-caps;
    font-style: italic;
    font-style: bold;
    position: relative;
    margin: 0 auto;
    top: 13vw;
    bottom: 13vw;
    font-size: 3.5vw;
    color: white;
}

.product h1{
    text-align: center;
    margin: 10px auto;
    color: rgb(3, 115, 135)!important;
}
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand logo" href="#">Art Gallary</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active bg-info" style="margin: 5px">
                        <a class="nav-link text-light" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item bg-info" style="margin: 5px">
                        <a class="nav-link text-light" href="admin_login.php">Admin Login</a>
                    </li>
                    <li class="nav-item bg-info" style="margin: 5px">
                        <a class="nav-link text-light" href="customer_login.php">Customer - Login/Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container heading">
        <h1>Welcome <?php echo $row['AdminName'];?></h1>
        <h3>Information</h3>
    </div>
    <div class="menu bg-light">
        <div class="container">
            <div class="row text-center info">
                <div class="col-sm">
                    <a href="customer_table.php" class="btn btn-light">Customer Information</a>
                </div>
                <div class="col-sm">
                    <a href="art_table.php" class="btn btn-light">Art's Information</a>
                </div>
                <div class="col-sm">
                <a href="order_table.php" class="btn btn-light">Order's Information</a>
                </div>
                <div class="col-sm">
                <a href="index.php" class="btn  btn-light">Log Out</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="../js/wow.js"></script>
    <script>
    new WOW.init();
    </script>
    <script src="../js/main.js"></script>
</body>

</html>