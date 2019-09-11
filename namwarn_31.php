<?php include("header.php"); ?>
<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	for($col=$namwarn;$col<=5;$col++) {
		echo($namwarn);	
	}
	for($col=2;$col<=$namwarn;$col++) {
		echo("  ");
	}
	for($col=0;$col<=5-$namwarn;$col++) {
		echo("*");	
	}
	echo "<br/>";
}
?>
<br><a href="index.php" >Back</a></br>
<?php include("footer1.php"); ?>