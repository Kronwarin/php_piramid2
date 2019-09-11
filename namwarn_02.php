<?php include("header.php"); ?>
<?php include ("ww.php");?>
<?php
for($namwarn=1;$namwarn<=4;$namwarn++) {
	for($col=$namwarn;$col<=$namwarn+2;$col++) {
		echo($col);
	}
	
	for($col=0;$col<=1+$namwarn;$col++){
		echo("*");	
	}
	
	echo "<br/>";
}
?>
<br><a href="index.php" >Back</a></br>
<?php include("footer1.php"); ?>