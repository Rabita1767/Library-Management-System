<?php
$user="root";
$pass="";
$server="localhost";
$db="art";
$con=mysqli_connect($server,$user,$pass,$db);



    if($con){
        if(isset($_POST['upload'])){
            $ArtTitle=$_POST['ArtTitle'];
            $Artist=$_POST['Artist'];
            $Year=$_POST['Year'];
            $Price=$_POST['Price'];
            $Piece=$_POST['Piece'];
            $image= time().'_'.$_FILES['image']['name'];
            $target='../user_image/'.$image;
            $sqlFind="Select * from art_info where ArtTitle='$ArtTitle'";
            $resultFind=mysqli_query($con,$sqlFind);
            if(mysqli_num_rows($resultFind)>0){
                echo '<script>alert("This Art is already uploaded.")</script>';
            }
            else{
                $input="INSERT INTO art_info(ArtTitle,Artist,YearOfMaking,Price,Piece,`Image`) 
                VALUES('$ArtTitle','$Artist','$Year','$Price','$Piece','$image')";
                $result= mysqli_query($con, $input);
                if($result){
                    move_uploaded_file($_FILES['image']['tmp_name'], $target);
                    //$_SESSION['Email']=$Email;
                    header('location:art_table.php');
                }else{
                    echo '<script>alert("Please enter your information once again.")</script>';
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
    <title>Art Gallary</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" hre="../css/upload_book.css>

<body style="background-image: url(../media/paint4.jpg);">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand logo" href="#">Art Gallary</a>
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
    <div class="container signup text-danger" style="margin: 10vh auto; background-color: white;">
    <form method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="inputName">Art Title</label>
                <input type="text" class="form-control" id="inputName" name="ArtTitle">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputArtist">Artist</label>
                <input type="text" class="form-control" id="inputArtist" name="Artist">
            </div>
            <div class="form-group col-md-6">
                <label for="inputYear">Year of making</label>
                <input type="text" class="form-control" id="inputYear" name="Year">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPrice">Price</label>
                <input type="text" class="form-control" id="inputPrice" name="Price">
            </div>
            <div class="form-group col-md-6">
                <label for="inputNumber">Piece</label>
                <input type="number" class="form-control" id="inputNumber" name="Piece" min="1" max="50">
            </div>
        </div>
        <label for="custome-file">Upload image of art</label>
        <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile" name="image">
    <label class="custom-file-label" for="customFile">Choose file</label>
  </div>
        <button type="submit" class="btn btn-danger mt-2" name="upload">Upload</button> 
            
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