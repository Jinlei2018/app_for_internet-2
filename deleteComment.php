<?php

if ($username === $_SESSION["username"]) {
	echo  	'<form method="post">
				<input type="submit" name="delete" value="Delete" class="button">
			</form>';

	if (isset($_POST["delete"])) {
		$sql = "DELETE FROM comments WHERE time = '$time'";
		if ($databaseConnection->query($sql) === true) {
echo '<script language="JavaScript">;alert("Your comment has been successfully deleted!");location.href="pancakes.php";</script>;';
		}
	}
}
?>