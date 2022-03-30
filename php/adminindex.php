<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Library</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Flamenco&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <header>
        <nav>
            <div class="row clearfix">
                <div class="left">
                    <h4 class="change1">Online Library</h4>
                </div>
                <div class="right">
                    <ul class="main-nav animate__animated animate_slideInDown">

                      

                        <li><a href="index.html">HOME</a></li>

                        <li><a href="adminbook.php">BOOKS</a></li>
                        <li><a href="upload_book.php">ADD BOOKS</a></li>
                        <li> <a href=""><?php echo $_SESSION["email"];?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="main">

            <h1>
                <span class="first">READ   ●   THINK   ●   APPLY</span></br>
                Welcome to our <span class="change">Online library</span>.<br>
            </h1>
            <h3>House of thoughts and knowledge.</h3>
            <a href="logout.php" class="btn btn-sign">Log Out</a>
            
        </div>
    </header>
</body>

</html>