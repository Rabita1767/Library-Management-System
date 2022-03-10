<?php
session_start();
include('connection.php');
if(isset($_POST["add"]))
{
   if(isset( $_SESSION["shopping_cart"]))
   {
       $item_array_id= array_column($_SESSION["shopping_cart"],"item_id");
       if(!in_array($_GET["id"],$item_array_id))
       {
           $count= count($_SESSION["shopping_cart"]);
           $item_array=array(
            'item_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'item_writer' => $_POST["hidden_writer"],
            'item_quantity' => $_POST["quantity"]
 

           );
           $_SESSION["shopping_cart"][$count]= $item_array;

        
       }
       else{
           ?>
           <script>alert("Book is already added");</script>
           <script>window.location="book.php"</script>
           <?php

       }

   }
   else{
       $item_array=array(
           'item_id' => $_GET["id"],
           'item_name' => $_POST["hidden_name"],
           'item_writer' => $_POST["hidden_writer"],
           'item_quantity' => $_POST["quantity"]


       );
       $_SESSION["shopping_cart"][0]=$item_array;
   }

}
if(isset($_GET['action']))
{
    if($_GET['action'] =="delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"]==$_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
                ?>
                <script>alert('Book Removed');</script>
                <script>window.location="cart.php"</script>
                <?php
            }
        }


    }

}
if(isset($_POST['search']))
{
  $valueToSearch=$_POST['valueToSearch'];
  $query= "select * from book1 where CONCAT(name,writer,category) LIKE '%".$valueToSearch."%' UNION SELECT * 
  FROM `book1` 
  WHERE   
   `name` = '".$valueToSearch."'
     OR `writer` = '".$valueToSearch."'
     OR `category` = '".$valueToSearch."'
     
     
    
";

     
  
  $search_result=filterTable($query);

}
else{
  $query="select * from book1";
  $search_result=filterTable($query);

}
function filterTable($query)
{
  $connect=mysqli_connect("localhost","root","","webtech");
$filter_Result=mysqli_query($connect,$query)  or die( mysqli_error($connect));

return $filter_Result;
}
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

<form action="book.php" method="post" class="search pl-5 mt-4"> 
    <br>
    <br>
    <input type="text" name="valueToSearch" placeholder="Search by name,category or writer"><br><br>
    <input type="submit" class="btn btn-success" name="search" value="Filter"><br><br>
    
    </form>
    <div class="container text-center ">
   
    <h1 class="title mt-0 ">LIST OF BOOKS</h1>


    <br>
    <div class="row">
    <?php
  while($res=mysqli_fetch_array($search_result)):?>
      <div class="col-lg-3 col-md-3 col-sm-12">
      <form action="book.php?action=add&id=<?php echo $res["id"];?>" method="post">
      <div class="card">
          <h4 class="card-title pb-2 pt-2 text-white  r1"><?php echo $res['category'];?></h4>

          <div class="card-body">
          <img src="../book_image/<?php echo $res['image'];?>" alt="" class="img-fluid mb-2">

          <h5><?php echo $res['name'];?></h5>

          <h6><?php echo $res['writer'];?></h6>
          <p>ISBN : <span><?php echo $res['isbn'];?></span></p>
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
               <input type="hidden" name="hidden_name" value="<?php echo $res['name'];?>">
               <input type="hidden" name="hidden_writer" value="<?php echo $res['writer'];?>">




          </div>
          
          <div class="btn-group d-flex">
              <button class="btn btn-success flex-fill" name="add">Add to cart <i class=" fa fa-shopping-cart"></i></button>
              <h4 ><a href="online.php?id=<?php echo $res['id']?>"> <data-toggle="tooltip" data-placement="top" title="Preview">Online <i class="fa fa-book" aria-hidden="true"></i></a></h4>
              

          </div>

      </div>
    </form>

      </div>
      <?php endwhile;?>

      

  
    

    
    

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