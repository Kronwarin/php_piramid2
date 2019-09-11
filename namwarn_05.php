<?php include("header.php"); ?>
<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=4;$namwarn++) {
	for($col=1;$col<=4-$namwarn;$col++) {
	echo(" ");
	}
	echo($namwarn);
	for($col=2;$col<=$namwarn;$col++){
	echo("**");
	}
	echo($namwarn);
	echo "<br/>";
}
for($namwarn=3;$namwarn>=1;$namwarn--) {
	for($col=1;$col<=4-$namwarn;$col++) {
	echo(" ");
	}
	echo($namwarn);
	for($col=2;$col<=$namwarn;$col++){
	echo("**");
	}
	echo($namwarn);
	echo "<br/>";
}
?>
<br><a href="index.php" >Back</a></br>
<?php include("footer1.php"); ?>