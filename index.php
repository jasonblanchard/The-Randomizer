<html>
<head><link rel="stylesheet" type="text/css" href="shuffle.css" /></head>
<body>

<div id="maincontent" >

<h1>The Randomizer</h1> <br  >
<br />

<?php

if (! isset($_POST['amount'])) {

	?>
	
	<form action="index.php" method="post">
	How many things do you need to sort? <br /> <input type="text" name="amount" />
	<input type="submit" value="Submit" />
	</form>

<?php

	}

else {	
	$amount=$_POST['amount'];
	$thingnumber = 1;
	$loop = 1;
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
<!--

	<form action="shuffle.php" method="post">
	Thing 1: <input type="text" name="thing[]" /><br />
	Thing 2: <input type="text" name="thing[]" /><br />
	Thing 3: <input type="text" name="thing[]" /><br />
	Thing 4: <input type="text" name="thing[]" /><br />
	Thing 5: <input type="text" name="thing[]" /><br />
	<br />
	<input type="submit" value="randomize!"/>
			</form>
-->


</div>
</body>
</html>
