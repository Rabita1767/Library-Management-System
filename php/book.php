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
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title></title>
  <link rel="stylesheet" type="text/css" href="book.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&family=Lato&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
</head>
<body>
    <br>
    <div class="conatiner" style="width:700px;">
    <h3 class="heading">Shopping Cart</h3>
    <?php
    $selectquery="select * from book1";
    $query=mysqli_query($con,$selectquery);
    $nums=mysqli_num_rows($query);
    while($res=mysqli_fetch_array($query))
    {
       ?>
       <div class="col-md-4">
           <form action="book.php?action=add&id=<?php echo $res["id"];?>" method="post">
           <div>
               <img src="<?php echo $res['image'];?>" alt="">
               <h4><?php echo $res['name'];?></h4>
               <h6><?php echo $res['writer'];?></h6>
               <input type="text" name="quantity" class="form-control" value="1">
               <input type="hidden" name="hidden_name" value="<?php echo $res['name'];?>">
               <input type="hidden" name="hidden_writer" value="<?php echo $res['writer'];?>">
               <input type="submit" name="add" class="btn btn-warning" value="Claim">
               

           </div>
        </form>

       </div>
       <?php
    }
    ?>

    </div>
    <div style="clear:both">


    </div>
    <br>
    <h3>Booking Detail</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th width="40%">Name</th>
                <th width="40%">Writer Name</th>
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
                    <tr>
                        <td><?php echo $values["item_name"] ; ?></td>
                        <td><?php echo $values["item_writer"] ; ?></td>
                        <td><?php echo $values["item_quantity"] ; ?></td>
                        <td><a href="book.php?action=delete&id=<?php echo $values["item_id"] ;?>"><span class="text-danger">Remove</span></a></td>

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