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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="../css/newcart.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>Cart items</title>
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
       <form action="book.php"  method="post" >
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
                        <li><a href="aboutdemo.php">Services</a></li>
                       <li> <a href="book.php">Book</a></li>
                       <li> <a href="servicedemo.php">Services</a></li>
                       <li class="reg-btn"> <a href="cart.php">Cart</a></li>
                       
                    
                </ul>
                
            </div>
            <div class="row">
              <div class="col-md-4">


              </div>
              <div class="col-md-8">
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
    <div class="b2">
      <a href=""> <data-toggle="tooltip" data-placement="top" title="Proceed">Proceed to pay <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

      </div>


              </div>
            </div>
            

     </div>

   </section>
   
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
