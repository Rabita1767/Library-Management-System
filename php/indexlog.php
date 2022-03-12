<?php

session_start();

include ('helper.php');

$user = array();


if(isset($_SESSION['userID'])){
    require ('mysqli_connect.php');
    $user = get_user_info($con, $_SESSION['userID']);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login and Registration</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/indexlog.css"> 

</head>
<body>

<header>
        <nav>
            <div class="row clearfix">
                <div class="left">
                    <h4 class="change1">Online Library</h4>
                </div>
                <div class="right">
                    <ul class="main-nav ">

                        <li><a href="../index.html">HOME</a></li>
                        <li><a href="../template/about.html">ABOUT US</a></li>
                        <li><a href="../template/services.html">SERVICES</a></li>
                        <li><a href="../php/book.php">BOOKS</a></li>
                        <li><a href="../php/feedback.php">FEEDBACK</a></li>
                        <li><a href="../template/contact.html">CONTACT US</a></li>
                        <li><a href="../php/indexlog.php"><img src="../image/log.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    
<section id="main-site" class="ind">
    <div class="container py-5">
        <div class="row1">
            <div class="col-4 offset-5 shadow py-4">
                <div class="upload-profile-image d-flex justify-content-center pb-5">
                    <div class="text-center">
                        <h4 class="text-center py-3">
                            <?php
                            if(isset($user['firstName'])){
                                printf('%s %s', $user['firstName'], $user['lastName'] );
                            }
                            ?>
                        </h4>
                    </div>
                </div>

                <div class="user-info px-3">
                    <ul class="font-flamenco  navbar-nav">
                        <li class="nav-link"><b>First Name: </b><span><?php echo isset($user['firstName']) ? $user['firstName'] : ''; ?></span></li>
                        <li class="nav-link"><b>Last Name: </b><span><?php echo isset($user['lastName']) ? $user['lastName'] : ''; ?></span></li>
                        <li class="nav-link"><b>Email: </b><span><?php echo isset($user['email']) ? $user['email'] : ''; ?></span></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
</header>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="../js/main.js"></script>
</body>
</html>


