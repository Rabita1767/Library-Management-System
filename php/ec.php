<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title></title>
  <link rel="stylesheet" type="text/css" href="../css/booktype.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&family=Lato&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
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
                        <a href="adminindex.php">Home</a></li>
                        <li><a href="aboutdemo.php">Services</a></li>
                       <li> <a href="book.php">Book</a></li>
                       <li> <a href="servicedemo.php">Services</a></li>
                       <li class="reg-btn"> <a href="logout.php">Log out</a></li>
                       
                    
                </ul>
                
            </div>
</section>
<div class="main-div">
    <h2 class="title text-center">List of Books</h2>
    <div class="center-div">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Book Name</th>
                        <th>Writer Name</th>
                        <th>ISBN</th>
                        <th>No of Copies</th>
                        
                    </tr>
                </thead>
                <tbody>
    
                <?php
include 'connection.php';
$sql="select count(*) as total from book1 where category='EC'";
$result= mysqli_query($con,$sql);
while($res=mysqli_fetch_array($result))
{
  $output=$res['total'];

}
$selectquery="select * from book1 where category='EC'";
$query=mysqli_query($con,$selectquery);
$nums=mysqli_num_rows($query);

while($res=mysqli_fetch_array($query))
{
   
    ?>
    <tr>
    <td><?php echo $res['id']?></td>
    <td><?php echo $res['name']?></td>
    <td><?php echo $res['writer']?></td>
    <td><?php echo $res['isbn']?></td>
    <td><?php echo $res['count']?></td>
    


</tr>


<?php






}
?>

                   
                </tbody>

            </table>
        </div>
        <div class="container">
        <br><br>
        <table>
        <thead>
                    <tr>
                        <th>Total Number Of Books</th>  
                    </tr>
                </thead>
                <tr>
                <td><?php echo $output?></td>
                </tr>
                
        </table>

        </div>

</div> 
</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>