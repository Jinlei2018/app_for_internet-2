
<?php

	 include_once("database.php");
	 getConnect();

	 $sql = "SELECT * FROM comments";
$result = mysqli_query($databaseConnection, $sql);


if (mysqli_num_rows($result) > 0) {
	while($row = $result->fetch_assoc()) {
		echo $row["username"] . "<br>" . "Comment: " . $row["comment"] . "<br><br>";
		$username = $row["username"];
		$time = $row["time"];
							
						if (isset($_SESSION['username'])) {
							include 'deleteComment.php';
						}
				
		
	}
}


	closeConnect();
	
?>



