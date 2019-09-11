<?php include("header.php"); ?>
<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	echo($namwarn);
	for($col=1;$col<=$namwarn;$col++) {
		echo(" ");	
	}
	
	for($col=1;$col<=$namwarn;$col++) {
		echo("*");	
	}
	echo "<br/>";
}
?>
<br><a href="index.php" >Back</a></br>
<?php include("footer1.php"); ?>