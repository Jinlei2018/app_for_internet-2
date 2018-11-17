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
				<br>
				<h2>Follow the Rhythm of the Season </h2>

				<table class="calendar">
					<tr>
						<th class = "calend_th">Sun</th>
						<th class = "calend_th">Mon</th>
						<th class = "calend_th">Tue</th>
						<th class = "calend_th">Wed</th>
						<th class = "calend_th">Thu</th>
						<th class = "calend_th">Fri</th>
						<th class = "calend_th">Sat</th>
					</tr>
					<tr>
						<td class = "calend_td"></td>
						<td class = "calend_td">
						     <div class="calend_tx">1</div>
						     <div class="calend_fg"></div>
						     <div style="clear: left"></div>
						</td>
						<td class = "calend_td">
						     <div class="calend_tx">2</div>
						     <div class="calend_fg"></div>
						     <div style="clear: left"></div>
						</td>
						<td class = "calend_td">
						     <div class="calend_tx">3</div>
						     <div class="calend_fg"><a href="pancakes.php"> <img class = img2 src="images/pk.jpg" alt = "Image of Pancakes"></a></div>
						     <div style="clear: left"></div>
						</td>
						<td class = "calend_td">
						     <div class="calend_tx">4</div>
						     <div class="calend_fg"></div>
						     <div style="clear: left"></div>
						</td>
						<td class = "calend_td">
						     <div class="calend_tx">5</div>
						     <div class="calend_fg"></div>
						     <div style="clear: left"></div>
						</td>
						<td class = "calend_td">
						     <div class="calend_tx">6</div>
						     <div class="calend_fg"></div>
						     <div style="clear: left"></div>
						</td>
					</tr>
					<tr>
						<td class = "calend_td">
						     <div class="calend_tx">7</div>
						     <div class="calend_fg"></div>
						     <div style="clear: left"></div>
						</td>
						<td class = "calend_td">
						     <div class="calend_tx">8</div>
						     <div class="calend_fg"></div>
						     <div style="clear: left"></div>
						</td>
						<td class = "calend_td">
						     <div class="calend_tx">9</div>
						     <div class="calend_fg"></div>
						     <div style="clear: left"></div>
						</td>
						<td class = "calend_td">
						     <div class="calend_tx">10</div>
						     <div class="calend_fg"></div>
						     <div style="clear: left"></div>
						</td>
						<td class = "calend_td">
						     <div class="calend_tx">11</div>
						     <div class="calend_fg"></div>
						     <div style="clear: left"></div>
						</td>
						<td class = "calend_td">
						     <div class="calend_tx">12</div>
						     <div class="calend_fg"></div>
						     <div style="clear: left"></div>
						</td>
						
						<td class = "calend_td">
						     <div class="calend_tx">13</div>
						     <div class="calend_fg"></div>
						     <div style="clear: left"></div>
						</td>
					</tr>
					<tr>
						<td class = "calend_td">
						     <div class="calend_tx">14</div>
						     <div class="calend_fg"></div>
						     <div style="clear: left"></div>
						</td>
						<td class = "calend_td">
							<div class="calend_tx">15</div>
							<div class="calend_fg"></div>
							<div style="clear: left"></div>
						</td>
						<td class = "calend_td">
							<div class="calend_tx">16</div>
							<div class="calend_fg"></div>
							<div style="clear: left"></div>
						</td>
						<td class = "calend_td">
							<div class="calend_tx">17</div>
							<div class="calend_fg"></div>
							<div style="clear: left"></div>
						</td>
						<td class = "calend_td">
							<div class="calend_tx">18</div>
							<div class="calend_fg"></div>
							<div style="clear: left"></div>
						</td>
						<td class = "calend_td">
							<div class="calend_tx">19</div>
							<div class="calend_fg"></div>
							<div style="clear: left"></div>
						</td>
						<td class = "calend_td">
							<div class="calend_tx">20</div>
							<div class="calend_fg"></div>
							<div style="clear: left"></div>
						</td>
					</tr>
					<tr>
						<td class = "calend_td">
							<div class="calend_tx">21</div>
							<div class="calend_fg"></div>
							<div style="clear: left"></div>
						</td>
						<td class = "calend_td">
							<div class="calend_tx">22 </div>
							<div class="calend_fg"></div>
							<div style="clear: left"></div>
						</td>
						<td class = "calend_td">
						    <div class="calend_tx">23</div>
						    <div class="calend_fg"></div>
						    <div style="clear: left"></div>
						</td>
						<td class = "calend_td">
						    <div class="calend_tx">24</div>
						    <div class="calend_fg"></div>
						    <div style="clear: left"></div>
						</td>
						<td class = "calend_td">
							<div class="calend_tx">25 </div>
							<div class="calend_fg"><a href="meatballs.php"> <img class = img2 src="images/mb.jpg" alt = "Image of Meatballs"></a></div>
							<div style="clear: left"></div>
						</td>
						<td class = "calend_td">
						    <div class="calend_tx">26</div>
						    <div class="calend_fg"></div>
						    <div style="clear: left"></div>
						</td>
						<td class = "calend_td">
						    <div class="calend_tx">27</div>
						    <div class="calend_fg"></div>
						    <div style="clear: left"></div>
						</td>
					</tr>
					<tr>
						<td class = "calend_td">
						    <div class="calend_tx">28</div>
						    <div class="calend_fg"></div>
						    <div style="clear: left"></div>
						</td>
						<td class = "calend_td">
						    <div class="calend_tx">29</div>
						    <div class="calend_fg"></div>
						    <div style="clear: left"></div>
						</td>
						<td class = "calend_td">
						    <div class="calend_tx">30</div>
						    <div class="calend_fg"></div>
						    <div style="clear: left"></div>
						</td>
						<td class = "calend_td"></td>
						<td class = "calend_td"></td>
						<td class = "calend_td"></td>
						<td class = "calend_td"></td>
					</tr>
				</table>
				
				<br>
				
			</div>
		</div>	
	</body>
</html>