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
							echo " <a href='login_page.php'>Log in</a>";
						}
					?>
				</div>
			</div>
				<div class="main">
					<br>
					<h2>Classic dishes</h2>
					<div class="divrow">
						<div class="divleft">
							<a href="pancakes.php"> <img class = img1 src="images/pancakes.jpg" alt = "Image of Pancakes"></a>
							<p>Pancakes</p>
						</div>
						<div class="divright">
							<a href="meatballs.php"> <img class = img1 src="images/meatballs.jpg" alt = "Image of Meatballs"></a>
							<p>Meatballs</p>
						</div>
					</div>
					<br><br><br>
				</div>
		</div>	
	</body>
</html>