<?php
$connect = mysqli_connect("localhost","root","","librarygh");
$sql="SELECT category, count(*) as total from book_issue_log inner join book on (book_issue_log.book_isbn = book.isbn) group by category";
$result= mysqli_query($connect, $sql);
?>

<html>
  <head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/newcart.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&family=Lato&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" >


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['category', 'total'],
          <?php
          while($row = mysqli_fetch_array($result))
          {
              echo "['".$row["category"]."',".$row["total"]."],";
          }
          ?>
        ]);

        var options = {
          title: 'Summary of books according to courses'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
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
                    
                        <li><a href="adminindex">Home</a></li>
                        <li><a href="upload_book.php">Add Book</a></li>
                       <li> <a href="adminbook.php">Book</a></li>
                       <li> <a href="graph2.php">Dashboard</a></li>
                       
                       <li class="reg-btn"> <a href="logout.php">Log Out</a></li>
                       
                    
                </ul>
                
            </div>


  </section>
      <br/><br/>
      
      <button type="button" class="btn btn-secondary"><a href="book_issue_table.php" style="text-decoration: none;color:white">Issue Table</a></button>

    <div id="piechart" style=" align:center; width: 900px; height: 500px;">
        <br>
    </div>

  </body>
</html>
