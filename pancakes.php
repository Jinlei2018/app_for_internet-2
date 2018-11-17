<?php
	session_start();
	$xml = simplexml_load_file('xml/recipe.xml');
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
				<br>
				<div><h2><?php 
							echo $xml->recipe[1]->title; 
						?></h2>
				</div>
				
				<div class="divrow">
					<div>
						<img class = img0 src="<?php 
							echo $xml->recipe[1]->imageurl; 
						?>" alt="Image of Pancakes"></div>
					<div><?php 
							echo $xml->recipe[1]->description; 
						?></div>
					<div>Prep: <?php 
							echo $xml->recipe[1]->preptime; 
						?> Cook: <?php 
							echo $xml->recipe[1]->cooktime; 
						?> Total: <?php 
							echo $xml->recipe[1]->totaltime; 
						?>
						</div>
				</div>
					<br><br>
				<div class="divrow">
					<div class="divleft">
						<h2>Ingredients for 
							<?php 
								echo $xml->recipe[1]->quantity; 
							?>
						</h2>
				
						<?php 
							foreach ($xml->recipe[1]->ingredient->li as $ingredient) {
								echo "<li>" . $ingredient . "</li>";
							}
						?>
				
					</div>
					<div class="divright">
						<h2>Directions</h2>
						<?php 
							foreach ($xml->recipe[1]->recipetext->li as $recipetext) {
								echo "<li>" . $recipetext . "</li>";
							}
						?>
					</div>
				</div>
			</div>
			<div class="mbox">
				<br>
				<div class="divrow">
					<h2 style="text-align: left">Do you like it? Leave your comments if you wish.</h2>
					<div class="divleft">
				<?php
				include 'readComment.php';
				?>

					</div>
					<div class="divright">
						<br><br><br>
							<form method="post" action="add_Comment_process.php" >
								<textarea cols="50" rows="6" name="comment"></textarea>
								<input type="submit" value="Submit"><br><br>
							</form>
					</div>
				</div>
			</div>
		</div>	
	</body>
</html>