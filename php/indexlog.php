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
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Flamenco&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

<div class="container">
    
    <h1>Profile</h1>
    <br>
    
    <li>Name : <?php echo  $_SESSION["user_name"];?></li> 
    <li>Email : <?php echo  $_SESSION["user_email"];?></li>    
    <li>Contact Number : <?php echo  $_SESSION["user_Contact_number"];?></li> 
    
  </div>
    
</body>

</html>