<?php
$user="root";
$pass="";
$server="localhost";
$db="webtech";
$con=mysqli_connect($server,$user,$pass,$db);
if($con)
{
    ?>
    <script>
       // alert('Connection Successful');
        </script>
        <?php
}
else{
    die("no connection".mysqli_connect_error());
}

?>