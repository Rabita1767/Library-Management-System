<html>
    <head>
    
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/booktype.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&family=Lato&display=swap" rel="stylesheet">
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
<br>
<div class="container">
<div class="row">
<div class="col md-6 register-left">
<img src="../image/sel.png" alt="">

</div>
<div class="col md-6 register-right">
<div id="bloodtype" style="text-align:center">
  <form method="post" action="booktype1.php" >
  <h2 class="title text-center">Select Booktype</h2>
    <select name="booktype" onchange="this.form.submit()">
    <option value="userinfo.php">Select an option</option>
    <option value="ITF">Information Technology Fundamentals</option>
    <option value="EC">Electrical Circuits</option>
    <option value="IPE">Introduction to Programming Environment</option>
    <option value="DS">Data Structure</option>
    <option value="OOP">Object Oriented Programming</option>
    <option value="DB">Database Management System</option>
    <option value="CG">Computer Graphics</option>
    <option value="MP">Microprocessor</option>
    <option value="Web">Web Technology</option>
    <option value="Accounting">Accounting</option>
    </select>
  </form>
</div>

</div>
</div>
</div>

    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
    </html>