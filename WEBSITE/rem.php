<form action="rem.php" method="get">
	Apple:<input type="text" name="fruits[]" value="apple">
	Mango:<input type="text" name="fruits[]" value="mengo">
	<button type="submit">check</button>
</form>
<?php
//working with check/radio boxes..
$fruits = $_GET['fruits'];
echo $fruits;

?>