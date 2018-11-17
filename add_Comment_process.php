<?php
session_start();						
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
	echo '<script language="JavaScript">;alert("You must log in to send a comment!");location.href="login_page.php";</script>;';
}
?>


<?php
	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
		$username=$_SESSION['username'];
		if (!empty($_POST['comment'])) {

	 include_once("database.php");
	 getConnect();
	}

    $comment = $_POST['comment'];
	$time = date("Y-m-d H:i:s");
	
	$sql = 	"INSERT INTO comments (username, comment, time)
			VALUES ('$username', '$comment', '$time')";
	$commentResult = mysqli_query($databaseConnection,$sql);
	if ($commentResult===TRUE) {

		echo '<script language="JavaScript">;alert("Your comment has been successfully sent!");location.href="pancakes.php";</script>;';
	} else {
		echo "Error: " . $sql . "<br>" ;
	}
	closeConnect();
	}
		

?>