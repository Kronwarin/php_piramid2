<?php include("header.php"); ?>
<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=3;$namwarn++) {
	for($col=1;$col<=3-$namwarn;$col++) {
		
		echo(" ");
	}
	for($col=1;$col<=$namwarn;$col++){
		echo("*");
	}
	for($col=2;$col<=$namwarn;$col++){
		echo("*");
	}
	for($col=1;$col<=3-$namwarn;$col++) {
		
		echo(" ");
	}
	echo "<br/>";
}
for($namwarn=2;$namwarn>=1;$namwarn--) {
	for($col=1;$col<=3-$namwarn;$col++) {
		echo(" ");
	}
	
	for($col=1;$col<=$namwarn;$col++){
		echo("*");
	}
	
	for($col=2;$col<=$namwarn;$col++){
		echo("*");
	}
	for($col=1;$col<=3-$namwarn;$col++) {
		echo(" ");
	}
	echo "<br/>";
}
?>
<br><a href="index.php" >Back</a></br>
<?php include("footer1.php"); ?>