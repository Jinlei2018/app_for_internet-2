<?php
session_start();
?>
<?php
    include_once("database.php");
        $username=$_REQUEST["username"];
		$password=$_REQUEST["password"];

    getConnect();
    $loginSQL = "select * from user_info where username='$username' and password='$password'";
   
    $resultLogin = mysqli_query($databaseConnection,$loginSQL);
	
    if (mysqli_num_rows($resultLogin) > 0)  {
		$_SESSION['username']= $username;
        echo '<script language="JavaScript">;alert("Login successful! Welcome!");location.href="index.php";</script>;';
    } else {
		echo '<script language="JavaScript">;alert("Login failed! The username or the password is wrong! Please try again!");location.href="login_page.php";</script>;';
	}
    closeConnect();
?>
