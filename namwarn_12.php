<?php include("header.php"); ?>
<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=5;$namwarn++) {
	for($col=2;$col<=$namwarn;$col++) {
	echo(" ");
	}
	for($col=$namwarn;$col<=10-$namwarn;$col++){
		echo($col);
	}
	echo "<br/>";
}
?>
<br><a href="index.php" >Back</a></br>
<?php include("footer1.php"); ?>