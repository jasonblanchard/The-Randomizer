<html>
<head><link rel="stylesheet" type="text/css" href="shuffle.css" /></head>
<body>

<div class="maincontent" >

<h1>The Randomizer</h1> <br  >
<br />

<?php

session_start();

function sortThings($items) {
	$num=1;
	shuffle($items);
	foreach($items as $choice) {
		echo "<tr>";
		echo "<td>$num. $choice</td>";
		echo "</tr>";
		$num=1+$num;
	}
}

?>

<div id="items">

<?php

if (isset($_POST['thing'])) {
	echo "<table class='items'";
	sortThings($_POST['thing']);
	echo "</table>";
	$_SESSION['rerandomize'] = $_POST['thing'];
} elseif (isset($_SESSION['rerandomize'])) {	
	echo "<table class='items'";
 	sortThings($_SESSION['rerandomize']);
	echo "</table>";
}	


?>
</div>
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


