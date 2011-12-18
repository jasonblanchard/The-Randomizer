<html>
<head><link rel="stylesheet" type="text/css" href="shuffle.css" /></head>
<body>

<div id="maincontent" >

<h1>The Randomizer</h1> <br  >
<br />

<?php

session_start();

function sortThings($items) {
	$num=1;
	shuffle($items);
	foreach($items as $choice) {
		echo "<table class='items'>";
		echo "<tr>";
		echo "<td>$num. $choice</td>";
		echo "</tr>";
		$num=1+$num;
	}
	echo "</table>";
}

if (isset($_POST['thing'])) {
	sortThings($_POST['thing']);
	$_SESSION['rerandomize'] = $_POST['thing'];
} elseif (isset($_SESSION['rerandomize'])) {
 	sortThings($_SESSION['rerandomize']);
}	


?>

<br />
<form action="shuffle.php" method="post">
<input type="hidden" name="dummy" />
<input type="submit" value="Re-randomize" />
<br />
<br />
<a href="index.php">Sort new items</a>

</div>
</body>
</html>


