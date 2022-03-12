<?php
$user="root";
$pass="";
$server="localhost";
$db="webtech";
$con=mysqli_connect($server,$user,$pass,$db);



    if($con){
        if(isset($_POST['upload'])){
            // $id=$_POST['id'];
            $isbn=$_POST['isbn'];
            $name=$_POST['name'];
            $writer=$_POST['writer'];
            $category=$_POST['category'];
            $image= time().'_'.$_FILES['image']['name'];
            $target='../image/'.$image;
            $count=$_POST['count'];
            $sqlFind="Select * from book1 where id='$id'";
            $resultFind=mysqli_query($con,$sqlFind);
            if(mysqli_num_rows($resultFind)>0){
                echo '<script>alert("This book is already uploaded.")</script>';
            }
            else{
                $sql="INSERT INTO book1(isbn,name,writer,category,`image`,`count`,`link`) 
                VALUES('$isbn','$name','$writer','$category','$image','$count','a')";
                
                $result= mysqli_query($con, $sql);
                if($result){
                    move_uploaded_file($_FILES['image']['tmp_name'], $target);
                   // echo "added";
                    //$_SESSION['Email']=$Email;
                    header('location:book.php');
                }else{
                    echo "not added";
                    // echo '<script>alert("Please enter your information once again.")</script>';
                }
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/upload_book.css">
<body style="background-image: url(../image/old-library-1.jpg); background-size: cover; width: 100vw; height: auto;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand logo" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active bg-info" style="margin: 5px">
                        <a class="nav-link text-light" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item bg-info" style="margin: 5px">
                        <a class="nav-link text-light" href="admin_login.php">Admin Login</a>
                    </li>
                    <li class="nav-item bg-info" style="margin: 5px">
                        <a class="nav-link text-light" href="customer_login.php">Customer - Login/Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container signup text-danger" style="margin-left: 50%; width: 50vw; height: auto; margin: 16vh auto; padding: 4vh;
    background-color:black;
    color: whitesmoke;">
    <form method="post" action="" enctype="multipart/form-data">
        <div class="form-group labell" style="margin-left:190px;margin-bottom:5px;" >
            <label for="inputName">Id</label>
                <input type="number" class="form-control allign" style="height:31px; width:300px;" id="inputName" name="id">
        </div>
        <!-- <div class="form-row"> -->
            <div class="form-group col-md-6 labell" style="margin-left:168px;margin-bottom:5px;" >
                <label for="inputArtist">ISBN</label>
                <input type="text" class="form-control allign" style="height:31px; width:300px;" id="inputArtist" name="isbn">
            </div>
            <div class="form-group col-md-6" style="margin-left:125px;margin-bottom:5px;">
                <label for="inputYear">Book Name</label>
                <input type="text" class="form-control" style="height:31px; width:300px;"  id="inputYear" name="name">
            </div>
        <!-- </div> -->
        <!-- <div class="form-row"> -->
            <div class="form-group col-md-6" style="margin-left:153px;margin-bottom:5px;">
                <label for="inputPrice">Writer</label>
                <input type="text" class="form-control" style="height:31px; width:300px;" id="inputPrice" name="writer">
            </div>
            <div class="form-group col-md-6" style="margin-left:138px;margin-bottom:5px;">
                <label for="inputNumber">Category</label>
                <input type="text" class="form-control" style="height:31px; width:300px;" id="inputNumber" name="category" min="1" max="50">
            </div>
        <!-- </div> -->
        <div>
        <label for="custome-file"><h4 style="margin-left:110px;margin-bottom:5px;">Upload Book</h4></label>
        <div class="custom-file" style="margin-left:208px;margin-bottom:5px;">
    <input type="file" class="custom-file-input" id="customFile" name="image">
    <label class="custom-file-label" style="height:31px; width:300px;" for="customFile">Choose file</label>
</div>
    <div class="form-group col-md-6" style="margin-left:160px;margin-bottom:5px;">
                <label for="inputNumber">Count</label>
                <input type="number" class="form-control" style="height:31px; width:300px;"  id="inputNumber" name="count" min="1" max="50">
            </div>
        <!-- </div> -->
        <div class="form-group col-md-6" style="margin-left:173px;margin-bottom:5px;">
                <label for="inputNumber">Link</label>
                <input type="varchar" class="form-control"  style="height:31px; width:300px;"  id="inputNumber" name="link" min="1" max="50">
            </div>
  </div>
        <button type="submit" class="btn btn-danger mt-2 buton" style=" margin-left: 38%; margin-top:0px;
    width: 10vw; height:40px;"name="upload">Upload</button> 
            
        <!-- <a class="btn btn-info" href="customer_query.html" role="button">Log in</a> -->
    </form>
    </div>

    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="../js/wow.js"></script>
    <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
    <script>
        new WOW.init();
    </script>
    <script src="../js/main.js"></script>
</body>

</html>