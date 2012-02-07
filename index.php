<html>
<head><link rel="stylesheet" type="text/css" href="shuffle.css" /></head>
<body>

<div class="github">
<br />
Help us improve on <a href="https://github.com/jasonblanchard/The-Randomizer">github!</a>

</div>


<div class="maincontent" >
<br />
<h1>The Randomizer</h1> <br  >
<br />

<?php
$script = $_SERVER['SCRIPT_NAME'];

if (! isset($_POST['amount'])) {
	?>
	<table id="landing">
	<tr>
	<form action="<?php $script ?>" method="post">
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

    if ( ! ctype_digit($amount) ) {
        echo "Go <a href='$script'>back</a> and enter a number!";
        } else {

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
        }

?>

</div>
</body>
</html>
