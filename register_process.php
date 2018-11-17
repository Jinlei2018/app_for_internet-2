<?php

    include_once("database.php");
    getConnect();
    $username = $_POST['username'];
	$userNameSQL = "select * from user_info where username = '$username'";
    $resultSet = mysqli_query($databaseConnection,$userNameSQL);


    if (mysqli_num_rows($resultSet) > 0) {
		echo '<script language="JavaScript">;alert("This user name has been used, register another one!");location.href="register_page.php";</script>;';
    }
	
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    if ($password != $confirmPassword) {
        echo '<script language="JavaScript">;alert("The password is not equal to the confirmed password!");location.href="register_page.php";</script>;';
    }

	$sql = 	"INSERT INTO user_info (username, password)
			VALUES ('$username', '$password')";
	$registerResult = mysqli_query($databaseConnection,$sql);
	if ($registerResult===TRUE) {
		echo '<script language="JavaScript">;alert("Registration succeeded!");location.href="login_page.php";</script>;';
	} else {
		echo "Error: " . $sql . "<br>" ;
	}
	
    closeConnect();
?>