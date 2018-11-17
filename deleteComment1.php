<?php

if ($username === $_SESSION["username"]) {
	echo  	'<form method="post">
				<input type="hidden" value="'.$time.'" name="time">
				<input type="submit" name="delete" value="Delete" class="button">
			</form>';
	echo "<br>";
	if (isset($_POST["delete"])) {
		$time = $_POST["time"];
		$sql = "DELETE FROM comments1 WHERE time = '$time'";
		if ($databaseConnection->query($sql) === true) {
echo '<script language="JavaScript">;alert("Your comment has been successfully deleted!");location.href="meatballs.php";</script>;';
		}
	}
} else {
	echo "<br><br>";
}
?>