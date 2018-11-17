<?php
    $databaseConnection = null;
	$databasequery = null;

    function getConnect() {
        $hosthome = "localhost";
        $database = "mydb";
        $userName = "root";
        $password = "";
        global $databaseConnection;
		
        $databaseConnection = mysqli_connect($hosthome, $userName, $password) or die (mysql_error());
        
        mysqli_select_db($databaseConnection,$database) or die (mysql_error());
    }
	

    function closeConnect() {
        global $databaseConnection;
        if ($databaseConnection) {
            mysqli_close($databaseConnection) or die (mysql_error());
        }
    }
?>
