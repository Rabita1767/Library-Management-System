<?php
session_start();
require('../vendor/autoload.php');
$con=mysqli_connect('localhost','root','','webtech');

//$res=mysqli_query($con,"select * from book1");

$name=$_SESSION["email"];
$item_array_id= array_column($_SESSION["shopping_cart"],"item_id");
if(!empty($_SESSION["shopping_cart"]))
{
    foreach($_SESSION['shopping_cart'] as $keys => $values)
    {
        $res = $values["item_name"];
        $res1 = $values["item_writer"];
        $res2 = $values["item_quantity"];
        $res3 = $_SESSION['userID'];
        $html='
        <style>
                table,th,td{
                    height: 30px;
                    width: 200px;
                }
                table,th,tr{
                    border: 2px solid black;
                }
                img {
                    height: 110px;
                    width: 100px;
                }
                .pdf_center{
                    text-align: center;
                }
                #nb{
                    font-weight: bold;
                }
                #td_cnt{
                    font-size: 20px;
                    font-weight: bold;
                    margin-left: 1000px;
                }
        </style>
        <div class="pdf_center">
            <img src="../image/ju_logo.png" alt="" srcset="">
            <h4>Institute of Information Technology</h4>
            <h4>Jahangirnagar University</h4>
            <h1>Claim Receipt</h1>
        </div>
        
        <p>Validity: 2 weeks</p>
        <p>Expiry Date:</p>
        <table class="table">';
        $html.='<tr><td>'.$res.'</td><td>'.$res1.'</td><td id="td_cnt">'.$res2.'</td></tr>';
        
        $html.='</table>
        <style>
        .pdf_footer img {
            height: 2px;
            width: 5px;
        }
        .pdf_footer{
            margin-top: 200px;
        }
        </style>
        <div>
            <h4>Student Email: '.$name.' </h4>
            
                    
            
        </div>
        <div class="pdf_footer">
            <img src="../image/d_signature.png" alt="" srcset="">
            <h4>Director</h4>
            <h4>IIT, JU</h4>        
            <p id="nb">N.B: After 2 weeks of issue date charge will be applicable for each day.</p>
        
        </div>';
        // if(mysqli_num_rows($res)>0){
        //     $html='
        //     <style>
        //         table,th,td{
        //             height: 20px;
        //             width: 90px;
        //             font: 
        //         }
        //         table,th,tr{
        //             border: 2px solid tomato;
        //         }
        //     </style>
        //     <table class="table">';
        //         $html.='<tr><td>ID</td><td>Date</td><td>Bus</td><td>Seat Reserve</td><td>Transaction No</td><td>Seat</td></tr>';
        //         while($row=mysqli_fetch_assoc($res)){
        //             $html.='<tr><td>'.$row['id'].'</td><td>'.$row['isbn'].'</td><td>'.$row['name'].'</td><td>'.$row['writer'].'</td></tr>';
        //         }
        //     $html.='</table>';
        // }
        // else
        // {
        //     $html="Data not found";
        // }
    }
}
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'I');
//D
//I
//F
//S
?>