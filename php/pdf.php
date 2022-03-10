<?php
session_start();
include('connection.php');


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>List of Books</title>
  <link rel="stylesheet" type="text/css" href="../css/book.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&family=Lato&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
</head>
<body>
<div class="start">
        <section id="nav-bar">
            <div class="header">
            <div class="navbar">
                <div class="logo">
                    <a href="">Online<span> Library</span></a>
                </div>
                <div class="menu">
                    <ul>
                        <li>
                            <a href="index.html">HOME</a></li>
                            <li><a href="">ABOUT US</a></li>
                            <li> <a href="">SERVICES</a></li>
                            <li><a href="book.php">BOOKS</a></li>
                            <li><a href="feedback.php">FEEDBACK</a></li>
                           
                           <li> <a href="../template/contact.html">CONTACTS</a></li>
        
                          
                           
                           
                        
                    </ul>
                </div>
        
                <div class="reg-btn">
                    <a href="cart.php">CARTS</a>
                </div>
            </div>
        

    </div>
    </section>

    <div class="container text-center ">
   
    <h1 class="title mt-0 ">LIST OF BOOKS</h1>
<?php
$ids=$_GET['id'];
$showquery="select * from book1 where id={$ids}";
$showdata=mysqli_query($con,$showquery)or die( mysqli_error($con));
$arrdata=mysqli_fetch_assoc($showdata);

?>
<div class="row">
    <div class="col-md-3">
    <div class="card">
          <h4 class="card-title pb-2 pt-2 text-white  r1"><?php echo $arrdata['category'];?></h4>

          <div class="card-body">
          <img src="<?php echo $arrdata['image'];?>" alt="" class="img-fluid mb-2">

          <h5><?php echo $arrdata['name'];?></h5>

          <h6><?php echo $arrdata['writer'];?></h6>
          <p>ISBN : <span><?php echo $arrdata['isbn'];?></span></p>
          <h6 class="badge badge-success">
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star-o">
                            </i>
                        </h6>

                        <input type="text" name="quantity" class="form-control" value="1">
               <input type="hidden" name="hidden_name" value="<?php echo $arrdata['name'];?>">
               <input type="hidden" name="hidden_writer" value="<?php echo $arrdata['writer'];?>">




          </div>
          
          <div >
              
              <h4 class="card-title text-center pb-2 pt-2 text-white  r1"><a class="card-title text-white" href="<?php echo $arrdata['link'];?>">Click</a></h4>
              

          </div>

      </div>
    
      

  
    

    
    

</div>
</div>
    </div>
</div>

<section id="footer">
  
<div class="container">
  <div class="row">
    <div class="col-md-4 footer-box">
      <h4>Address <i class="fa fa-map-marker"></i></h4>
      <p>House-21<br>Motijheel<br>Dhaka</p>
    </div>
    <div class="col-md-4 footer-box">
      <h4>Phone <i class="fa fa-phone"></i>

      </h4>
      <ul>
        <li>
          01767453687
        </li>
        <li>
          01965348790
        </li>
        <li>
          01897564323
        </li>
        <li>
          01356795642
        </li>
      </ul>
    </div>
    <div class="col-md-4 footer-box">
      <h4>Email <i class="fa fa-envelope"></i></h4>
      <ul>
        <li>
          eva@gmail.com
        </li>
        <li>
          rabita@gmail.com
        </li>
        <li>
          sumaiya@gmail.com
        </li>
        <li>
          sahal@gmail.com
        </li>
      </ul>
    </div>
    
  </div>

</div>       
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>