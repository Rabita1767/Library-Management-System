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
    <style>
 * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

body {
    font-size: 20px;
    overflow-x: hidden;
    color: wheat;
    font-family: 'Flamenco', cursive;
}

header {
    background-image: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .8)), url('../image/old-library-1.jpg');
    background-size: cover;
    width: 100%;
    height: 130vh;
    background-repeat: no-repeat;
    background-position: center;
}

.clearfix:after {
    content: ".";
    visibility: hidden;
    display: block;
    height: 0px;
    clear: both;
}

nav {
    background-color: rgba(0, 0, 0, .4);
    ;
}

.row {
    max-width: 1180px;
    margin: 0 auto;
}

.left {
    width: 25%;
    float: left;
}

.right {
    width: 75%;
    float: right;
    margin-left: auto;
    margin-right: 0%;
    padding-left: 0%;
}

h4 {
    font-size: 300%;
    float: left;
    color: whitesmoke;
    transform: translate(-50%, 0%);
}

.logo {
    
    height: 100px;
    float: left;
    margin-top: 20px;
}

.main-nav {
    float: right;
    margin-top: 70px;
    font-weight: bold;
}

.main-nav li {
    display: inline-block;
    list-style: none;
    margin-left: 20px;
    transform: translate(50%, 0%);
}

.main-nav li a {
    padding: 3px 0;
    color: whitesmoke;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 120%;
    font-weight: lighter;
}

.main-nav li a img{
    height: 10%;
    width: 10%;
    

}

.main-nav li a:hover {
    border-bottom: 2px solid rgb(209, 108, 108);
    color: rgb(209, 108, 108);
}

.main {
    width: 1180px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.first {
    margin-bottom: 30px;
    font-size: 60%;
    letter-spacing: 3px;
    font-weight: lighter;
}

h1 {
    color: whitesmoke;
    font-size: 240%;
    word-spacing: 5px;
    letter-spacing: 3px;
    margin: 20px 0px;
    text-transform: uppercase;
    font-weight: bold;
}

h3 {
    margin: 10px 0px;
    color: whitesmoke;
    font-weight: lighter;
    font-size: 150%;
    word-spacing: 5px;
    letter-spacing: 3px;
}

.btn {
    display: inline-block;
    padding: 10px 30px;
    margin-top: 10px;
    text-decoration: none;
    font-weight: bold;
    border-radius: 200px;
    transition: background-color .2s, border .2s, color .2;
}

.btn-sign {
    background-color: rgb(209, 108, 108);
    
    color: white;
    margin-right: 15px;
    border: 1px solid rgb(209, 108, 108);
    font-size: 100%;
}

.btn-sign:hover {
    background-color: rosybrown;
}

.btn-show {
    background-color: rgba(245, 245, 245, .2);
    color: rgb(245, 245, 245);
    margin-right: 15px;
    border: 1px solid whitesmoke;
    font-size: 100%;
}

.btn-show:hover {
    background-color: rgb(209, 108, 108);
    
}

.change1 {
    animation: colorEva 2s infinite;
}

@keyframes colorEva {
    0% {
        color: tomato;
    }
    25% {
        color: rosybrown;
    }
    50% {
        color: violet;
    }
    100% {
        color: rgb(209, 108, 108);
    }
}

@media only screen and (max-width: 1180px) {
    .main {
        width: 100%;
        padding: 0 2%;
    }
    h4 {
        width: 100%;
        padding: 0 4%;
    }
}

@media only screen and (max-width: 998px) {
    h1 {
        font-size: 200%;
    }
    h3 {
        font-size: 120%;
    }
    h4 {
        font-size: 270%;
    }
}

@media only screen and (max-width: 768px) {
    h1 {
        font-size: 180%;
    }
    h3 {
        font-size: 100%;
    }
    h4 {
        font-size: 240%;
    }
    .main-nav {
        display: none;
    }
}
</style>
</head>
<body style="background-image: url(../image/old-library-1.jpg); background-size: cover; width: 100vw; height: auto;">
<header>
<nav>
            <div class="row clearfix">
                <div class="left">
                    <h4 class="change1">Online Library</h4>
                </div>
                <div class="right">
                    <ul class="main-nav ">

                      

                        <li><a href="adminindex.php">HOME</a></li>
                      
                        

                       
                        <li><a href="adminbook.php">BOOKS</a></li>
                        
                        <li><a href="upload_book.php">Add Book</a></li>
                        <li> <a href="graph.php">Dashboard</a></li>
                        
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
                <input type="number" class="form-control allign" style="height:31px; width:300px;background:transparent;border:solid 2px white;color:white;" id="inputName" name="id">
        </div>
        <!-- <div class="form-row"> -->
            <div class="form-group col-md-6 labell" style="margin-left:162px;margin-bottom:5px;" >
                <label for="inputArtist">ISBN</label>
                <input type="text" class="form-control allign" style="height:31px; width:300px;background:transparent;border:solid 2px white;color:white;" id="inputArtist" name="isbn">
            </div>
            <div class="form-group col-md-6" style="margin-left:110px;margin-bottom:5px;">
                <label for="inputYear">Book Name</label>
                <input type="text" class="form-control" style="height:31px; width:300px;background:transparent;border:solid 2px white;color:white;"  id="inputYear" name="name">
            </div>
        <!-- </div> -->
        <!-- <div class="form-row"> -->
            <div class="form-group col-md-6" style="margin-left:145px;margin-bottom:5px;">
                <label for="inputPrice">Writer</label>
                <input type="text" class="form-control" style="height:31px; width:300px;background:transparent;border:solid 2px white;color:white;" id="inputPrice" name="writer">
            </div>
            <div class="form-group col-md-6" style="margin-left:128px;margin-bottom:5px;">
                <label for="inputNumber">Category</label>
                <input type="text" class="form-control" style="height:31px; width:300px;background:transparent;border:solid 2px white;color:white;" id="inputNumber" name="category" min="1" max="50">
            </div>
        <!-- </div> -->
        <div>
        <label for="custome-file"><h5 style="margin-left:110px;margin-bottom:5px;">Upload Book</h5></label>
        <div class="custom-file" style="margin-left:218px;margin-bottom:5px;">
    <input type="file" class="custom-file-input" style="margin-right:0px;"id="customFile" name="image">
    <label class="custom-file-label" style="height:31px; width:300px;background:transparent;border:solid 2px white;color:white;" for="customFile">Choose file</label>
</div>
    <div class="form-group col-md-6" style="margin-left:155px;margin-bottom:5px;">
                <label for="inputNumber">Count</label>
                <input type="number" class="form-control" style="height:31px; width:300px;background:transparent;border:solid 2px white;color:white;"  id="inputNumber" name="count" min="1" max="50">
            </div>
        <!-- </div> -->
        <div class="form-group col-md-6" style="margin-left:173px;margin-bottom:5px;">
                <label for="inputNumber">Link</label>
                <input type="varchar" class="form-control"  style="height:31px; width:300px;background:transparent;border:solid 2px white;color:white;"  id="inputNumber" name="link" min="1" max="50">
            </div>
  </div>
        <button type="submit" class="btn btn-danger mt-2 buton" style=" margin-left: 35%; margin-top:0px;
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
</header>
</html>