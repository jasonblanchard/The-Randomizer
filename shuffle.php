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
		echo "$num. $choice <br />";
		$num=1+$num;
	}
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


