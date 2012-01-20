<html>
<head><link rel="stylesheet" type="text/css" href="shuffle.css" /></head>
<body>



<div class="maincontent" >

<h1>The Randomizer</h1> <br  >
<br />

<?php

if (! isset($_POST['amount'])) {
	?>
	<table id="landing">
	<tr>
	<form action="index.php" method="post">
	<td>How many things do you need to randomize? (Enter a number) </td>
</tr>
<tr>
 <td><input type="text" name="amount" />
	<input type="submit" value="Submit" /></td>
	</form>
	</tr>
	</table>	

<?php

	}

else {	
	$amount=$_POST['amount'];
	$thingnumber = 1;
	$loop = 1;
	echo "Enter the things you want to randomize: <br /><br />";
	?>
	<table>
	<?php
	do {
		?>
		<tr>
		<form action='shuffle.php' method='post'>
		<td><?php echo $thingnumber; ?>: <input type='text' name='thing[]' /><br /></td>
		</tr>
		<?php $loop += 1;
		$thingnumber += 1; 
		}
	while ($loop <= $amount);
	?>
	</table>
	<input type='submit' value='Randomize!' /><br />
	</form>
<?php
}	
?>

</div>
</body>
</html>
