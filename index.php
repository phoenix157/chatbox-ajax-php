<?php
	include "database.php";
	$query = "SELECT * FROM shouts ORDER BY id DESC";
	$shouts = mysqli_query($con,$query); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Js Shout Box</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script
  	src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<div class="container">
		<header>
			<h1>JS ShoutBox</h1>
		</header>
		<div id="shouts">
			<ul>
				<?php while($row = mysqli_fetch_assoc($shouts)) :?>
					<li><?php echo $row['name'];?>: <?php echo $row['shout'];?> [<?php echo $row['date']; ?>]</li>
				<?php endwhile;?>
			</ul>
		</div>
		<footer>
			<form>
				<label>Name:</label>
				<input type="text" id="name">
				<label>Shout Text:</label>
				<input type="text" id="shout">
				<input type="submit" id="submit" value="Shout">
			</form>
		</footer>
	</div>
</body>
</html>