<?php include("header.php"); ?>
<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	for($col=$namwarn;$col<=7;$col++){
		echo("*");
	}
	
	echo($namwarn);
	for($col=1;$col<=$namwarn;$col++){
		echo("*");
	}
	for($col=$namwarn;$col<=$namwarn;$col++){
		echo(8-$namwarn);
	}
	echo "<br/>";
}
?>
<br><a href="index.php" >Back</a></br>
<?php include("footer1.php"); ?>