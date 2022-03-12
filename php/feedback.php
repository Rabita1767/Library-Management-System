<?php 

include 'feedback_config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="../css/feedback.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Library</title>
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Flamenco&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<body>
<header>
        <nav>
            <div class="row clearfix">
                <div class="left">
                    <h4 class="change1">Online Library</h4>
                </div>
                <div class="right">
				<ul class="main-nav animate__animated animate_slideInDown">
                        <li><a href="../index.html">HOME</a></li>
                        <li><a href="../template/about.html">ABOUT US</a></li>
                        <li><a href="../template/services.html">SERVICES</a></li>
                        <li><a href="book.php">BOOKS</a></li>
                        <li><a href="feedback.php">FEEDBACK</a></li>
                        <li><a href="../template/contact.html">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<div class="wrapper">
			<form action="" method="POST" class="form">
				<div class="row">
					<div class="input-group">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" placeholder="Enter your Name" required>
					</div>
					<div class="input-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" placeholder="Enter your Email" required>
					</div>
				</div>
				<div class="input-group textarea">
					<label for="comment">Comment</label>
					<textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
				</div>
				<div class="input-group">
					<button name="submit" class="btn">Post Comment</button>
				</div>
			</form>
	
	
			<div class="prev-comments">
				<?php 
				
				$sql = "SELECT * FROM comments";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
	
				?>
				<div class="single-item">
					<div class="row">
						<div class="col-6">
							<h4><?php echo $row['name']; ?></h4>
						</div>
						<div class="col-6">
							<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
						</div>

					</div>
						<p><?php echo $row['comment']; ?></p>

				</div>
				<?php
	
					}
				}
				
				?>
			</div>
	
		</div>
    </header>

</body>
</html>