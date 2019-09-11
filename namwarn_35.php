<?php include("header.php"); ?>
<?php include ("ww.php");?>
<?php
for($namwarn=0;$namwarn<=4;$namwarn++) {
	echo($namwarn+1);
	echo("*");
	for($col=1;$col<=1;$col++){
		echo($col+$namwarn+$namwarn);
	}
	echo("*");
	for($col=2;$col<=2;$col++){
		echo($col+$namwarn+$namwarn);
	}
	echo "<br/>";
}
?>
<br><a href="index.php" >Back</a></br>
<?php include("footer1.php"); ?>