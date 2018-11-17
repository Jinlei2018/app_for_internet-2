<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
<?php
    include("components/head.php");
    write_header("Receps Recept");
?>
	</head>
	
	<body>
		<div class="container">
			<div class="logo">
			<div><img src="images/bar2.jpg" alt="Tasty recipes" style="width:100%"></div>
			<div class="logo_text">Welcome to Tasty Recipes</div>
			</div>
			<div class="menu">
				<div class="menuitem"><a href="index.php"> Homepage</a></div>
				<div class="menuitem"><a href="meatballs.php">Meatballs</a></div>
				<div class="menuitem"><a href="pancakes.php">Pancakes</a></div>
				<div class="menuitem"><a href="calendar.php"> Calendar</a></div>
				<div class="login">				
					<?php
						if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
							echo "Welcome! ".$_SESSION['username']."! ";
						}else{
							echo "  <a href='login_page.php'>Log in</a>";
						}
					?>
				</div>
			</div>
			<div class="main">
				<div class="divrow">
					<br>
                <form action="register_process.php" method="POST">
					Your username:
					<input type="text" name="username" size="20" maxlength="15" >
					<br><br>
					Your password:
					<input type="password" name="password" size="20" maxlength="15">
					<br><br>
					Confirm password：
					<input type="password" name="confirmPassword" size="20" maxlength="15">
					<br><br>
					
					<input type="submit" name="submit" value="Register">
					<input type="reset" name="cancel" value="Cancel">
				</form>
				</div>
					<br><br><br>
			</div>
		</div>	
	</body>
</html>