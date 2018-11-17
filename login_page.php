
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
			</div>

			<div class="main">
				<div class="divrow">
						<br>
						<form action="login_process.php" method="POST">
							Username:
							<input type="text" name="username" size="20" maxlength="15" >
							<br><br>
							Password:
							<input type="password" name="password" size="20" maxlength="15">
							<br><br>
							<input type="submit" value="Log in">
							<input type="button" onclick="window.location.href='register_page.php'" value="Sign up">
						</form>
				</div>
					<br><br><br>
			</div>
		</div>	
	</body>
</html>