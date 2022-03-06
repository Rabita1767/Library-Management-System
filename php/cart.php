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
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Cart Item</title>
  <link rel="stylesheet" type="text/css" href="../css/cart.css">
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
                            <li><a href="book.php">BOOKS</a></li>
                           <li> <a href="">SERVICES</a></li>
                           <li> <a href="">CONTACTS</a></li>
        
                          
                           
                           
                        
                    </ul>
                </div>
        
                <div class="reg-btn">
                    <a href="cart.php">CARTS</a>
                </div>
            </div>
        

    </div>
    </section>
<body>
    <div class="container text-center ">
    <h1 class="title mt-5 ">Booking Detail</h1>
    


    <br>
    <br>
    
    

    <div style="clear:both">


    </div>
   
    
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr class="icon">
                <th width="30%">Name</th>
                <th width="30%">Writer Name</th>
                <th width="10%">Quantity</th>
                <th width="5%">Action</th>

                
                
            </tr>
            <?php
            if(!empty($_SESSION["shopping_cart"]))
            {
                //$total=0;
                foreach($_SESSION["shopping_cart"] as $keys => $values)
                {
                    ?>
                    <tr class="icon">
                        <td><?php echo $values["item_name"] ; ?></td>
                        <td><?php echo $values["item_writer"] ; ?></td>
                        <td><?php echo $values["item_quantity"] ; ?></td>
                        <td><a href="book.php?action=delete&id=<?php echo $values["item_id"] ;?>"><span class="text-danger"><i class="fa fa-trash"></i></span></a></td>

                    </tr>
                    <?php
                }

            }
            ?>

        </table>

    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>