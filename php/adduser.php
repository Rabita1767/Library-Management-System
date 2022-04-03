

<!DOCTYPE html>
<html>
<head>
  
  <title>website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/newcart.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&family=Lato&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" >
</head>
<body>
<div class="ratri">
     <div class="row">
       <div class="col-md-6">
         <div class="navbar">
         <div class="logo">
                <a href="indexnew.php">Online<span> Library</span></a>
            </div>
         </div>


       </div>
       <div class="col-md-6">
       <form action="adminbook.php"  method="post" >
            <div class="search">
            <div class="s1">
                <div class="s2">
                    <input type="text" class="input"  name="valueToSearch" >
                    <div class="btn btn_common">
                    <input type="submit" class="btn btn-success" name="search" value="Filter">
                        

                    </div>
                </div>
            </div>
        </div>
            </form>

       </div>
     </div>
   </div>
   <section id="nav">
     <div class="container">
     <div class="menu">
                <ul>
                    <li class="r1">
                        <a href="">Category</a></li>
                        
                        <li><a href="upload_book.php">Add Book</a></li>
                       <li> <a href="adminbook.php">Book</a></li>
                       <li> <a href="graph2.php">Dashboard</a></li>

                       
                       <li class="reg-btn"> <a href="logout.php">Log Out</a></li>
                       
                    
                </ul>
                
            </div>
</section>

<div class="container">
  <div class="row">
    <div class="col-md-6 register-left">
      <img src="../image/reg.png">
    </div>
    <div class="col-md-6 register-right">
    <h3>Add User</h3>
      <div class="register-form">
      <form action="" method="post">
  <div class="form-group">

    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  
 
  <div class="form-group">
    <label for="Email">Email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="gender">Password</label>
    <input type="text" name="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="Contact_number">Contact Number</label>
    <input type="text" pattern= "[0-9]{11}" maxlength="11" name="Contact_number"  class="form-control" id="Contact_number" placeholder="+88" >
 
 
  </div>

  
  <div class="form-group">
    <label for="address">Class Id</label>
    <input type="text" name="c_id" class="form-control" id="c_id" placeholder="Class Id">
  </div>
  
  <button type="submit" name="save_data"class="btn btn-primary">Submit</button>
</form>
<div class="alert alert-info" style="display: none;"></div>


      </div>


    </div>

  </div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
 </head>
 
 

</body>

</html>
<?php

$username="root";
$password="";
$server="localhost";
$db="login_register";
$con=mysqli_connect($server,$username,$password,$db);
if(isset($_POST['save_data']))
{
  $name=$_POST['name'];
 
  $Contact_number=$_POST['Contact_number'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $c_id=$_POST['c_id'];
  $insertquery="INSERT INTO `user`(`full_name`, `email`, `password`, `Contact_number`, `cid`) VALUES ('$name','$email','$password','$Contact_number','$c_id')";
  $res=mysqli_query($con,$insertquery);


  if($res)
  {
    ?>
    <script>
    alert("Data inserted properly");
    </script>
    <?php
   // header('location:userlist.php');
  }
  else{
    ?>
    <script>
    alert("Data not inserted properly");
    </script>
    <?php

  }
  
}
?>
