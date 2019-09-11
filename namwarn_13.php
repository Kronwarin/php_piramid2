<?php include("header.php"); ?>
<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	for($col=2;$col<=$namwarn;$col++) {
	echo("  ");
	}
	for($col=11;$col>=11;$col--){
		echo($col-$namwarn-$namwarn);
	}
	for($col=10;$col>=6+$namwarn;$col--){
		echo($col-$namwarn-$namwarn);
	}
	for($col=5;$col>=1+$namwarn;$col--){
		echo($col-$namwarn);
	}
	echo "<br/>";
}
?>
<br><a href="index.php" >Back</a></br>
<?php include("footer1.php"); ?>