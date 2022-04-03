<?php
    require "../db_connect.php";
    require "../message_display.php";
	require "verify_librarian.php";
	require "header_librarian.php";
?>

<html>
	<head>
		<title>LMS</title>
		<link rel="stylesheet" type="text/css" href="../member/css/home_style.css" />
        <link rel="stylesheet" type="text/css" href="../css/global_styles.css">
		<link rel="stylesheet" type="text/css" href="../css/home_style.css">
		<link rel="stylesheet" type="text/css" href="../member/css/custom_radio_button_style.css">
	</head>
	<body>

    <?php
			$query = $con->prepare("SELECT issue_id, member, isbn , title, author, category, due_date  from book_issue_log inner join book on (book_issue_log.book_isbn = book.isbn)");
			$query->execute();
			$result = $query->get_result();
			if(!$result)
				die("ERROR: Couldn't fetch books");
			$rows = mysqli_num_rows($result);
			if($rows == 0)
				echo "<h2 align='center'>No books available</h2>";
			else
			{
				echo "<form class='cd-form'>";
				echo "<div class='error-message' id='error-message'>
						<p id='error'></p>
					</div>";
				echo "<table width='100%' cellpadding=10 cellspacing=10>";
				echo "<tr>
				
						<th>Issue Id<hr></th>
						<th>User Name<hr></th>
						<th>Book ISBN<hr></th>
                        <th>Book name<hr></th>
                        <th>Author Name<hr></th>
                        <th>Category<hr></th>
						<th>Due Date<hr></th>
						
					</tr>";
				for($i=0; $i<$rows; $i++)
				{
					$row = mysqli_fetch_array($result);
					echo "<tr>
							";
					for($j=0; $j<7; $j++)
						if($j == 4)
							echo "<td>Rs.".$row[$j]."</td>";
						else
                            echo "<td>".$row[$j]."</td>";
                            
					echo "</tr>";
				}
				echo "</table>";
				
				echo "</form>";
			}
			
			
		?>
 <button type="button" class="btn btn-dark"><a href="book_issue_table_print.php" style="text-decoration: none;">Print</a></button>

    </body>

</html>