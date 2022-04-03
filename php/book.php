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
            'item_category' => $_POST["hidden_category"],
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
     
       //database insert for pdf
        $res1 = $item_array['item_id'];
        $res2 = $item_array['item_name'];
        $res3 = $item_array['item_writer'];
        
        $insertquery="INSERT INTO `receipt`(`id`, `name`, `writer`) VALUES ('$res1','$res2','$res3')";
        $res=mysqli_query($con,$insertquery);


        //Database insert for pie chart


        
        
   }
   else{
       $item_array=array(
           'item_id' => $_GET["id"],
           'item_name' => $_POST["hidden_name"],
           'item_writer' => $_POST["hidden_writer"],
           'item_category' => $_POST["hidden_category"],
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
    <link rel="stylesheet" type="text/css" href="../css/new1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>List of books</title>
</head>
<body>
   <div class="ratri">
     <div class="row">
       <div class="col-md-6">
         <div class="navbar">
         <div class="logo">
                <a href="">Online<span> Library</span></a>
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
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="aboutdemo.php">Services</a></li>
                       <li> <a href="book.php">Book</a></li>
                       
                       <li class="reg-btn"> <a href="cart.php">Cart</a></li>
                       
                    
                </ul>
                
            </div>
            
            <div class="row">
              <div class="col-md-3">
              <div class="table-responsive">
            <table class="t1">
                <thead>
                    <tr>
                        <th><a href="cg.php">COMPUTER GRAPHICS</a></th>
                        
                    </tr>
                    <tr>
                        <th><a href="wt.php">WEB TECHNOLOGY</a></th>
                        
                    </tr>
                    <tr>
                        <th><a href="mp.php">MICROPROCESSOR</a></th>
                        
                    </tr>
                    <tr>
                        <th><a href="bi.php">BIO INFORMATICS</a></th>
                        
                    </tr>
                    <tr>
                        <th><a href="se.php">SOFTWARE ENGINEERING</a></th>
                        
                    </tr>
                </thead>
</table>
</div>

              </div>
              <div class="col-md-9">

              </div>
            </div>
            

     </div>

   </section>
   <section id="item">
     <div class="container">
       <div class="row">
       <?php
  while($res=mysqli_fetch_array($search_result)):?>
  <div class="col-md-3">
    <form action="book.php?action=add&id=<?php echo $res["id"];?>" method="post">
    <div class="card">
      <div class="card-body">
      <img src="../image/<?php echo $res['image'];?>" alt="" class="img-fluid mb-2">

<h5><?php echo $res['name'];?></h5>

<h6><?php echo $res['writer'];?></h6>
<p>ISBN : <span><?php echo $res['isbn'];?></span></p>
<h6 class="b3">
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
     <input type="hidden" name="hidden_category" value="<?php echo $res['category'];?>">
     <input type="hidden" name="hidden_writer" value="<?php echo $res['writer'];?>">

      </div>
      <div class="b1">
      <button class="reg-btn" name="add">Add to cart <i class=" fa fa-shopping-cart"></i></button> 

      </div>
      <div class="b2">
      <a href="pdf.php?id=<?php echo $res['id']?>"> <data-toggle="tooltip" data-placement="top" title="Preview">Online <i class="fa fa-book" aria-hidden="true"></i></a>

      </div>
    </div>
  </form>

  </div>
  <?php endwhile;?>

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