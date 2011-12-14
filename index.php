<html>
<head><link rel="stylesheet" type="text/css" href="shuffle.css" /></head>
<body>

<div id="maincontent" >

<h1>The Randomizer</h1> <br  >
<br />

<?php

if (! isset($_POST['amount'])) {

	?>
	<p>
	<form action="index.php" method="post">
	How many things do you need to randomize? (Enter a number) <br /> <input type="text" name="amount" />
	<input type="submit" value="Submit" />
	</form>
	</p>	

<?php

	}

else {	
	$amount=$_POST['amount'];
	$thingnumber = 1;
	$loop = 1;
	echo "Enter the things you want to randomize: </ br>";
	do {
		?>
		<form action='shuffle.php' method='post'>
		<?php echo $thingnumber; ?>: <input type='text' name='thing[]' /><br />
		<?php $loop += 1;
		$thingnumber += 1; 
		}
	while ($loop <= $amount);
	?>
	<input type='submit' value='Randomize!' /><br />
	</form>
<?php
}	
?>

</div>
</body>
</html>
