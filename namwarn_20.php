<?php include("header.php"); ?>
<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	for($col=1;$col<=$namwarn;$col++) {
		echo($namwarn);	
	}
	for($col=1;$col<=$namwarn;$col++) {
		echo("*");	
	}
	for($col=1;$col<=$namwarn;$col++) {
		echo($namwarn);	
	}
	echo "<br/>";
}
?>
<br><a href="index.php" >Back</a></br>
<?php include("footer1.php"); ?>