<html>
<h1>Your Order:</h1>
<?php
	$TC=0;
	$samoas=$_POST["samoas"];
	$thinmints=$_POST["thinmints"];
	$shipping=$_POST["shipping"];
	for($i=0;$i<=$samoas;$i++)
	{
		echo '<img src="samoas.jpg">';
		$TC+=3.5;
	}
	for($i=0;$i<=$thinmints;$i++)
	{
		echo '<img src="thinmints.jpg">';
		$TC+=3.5;
	}
	if($shipping=="regular"){
		$TC+=7;
	}
	elseif($shipping=="regular"){
		$TC+=9;
	}
	if(isset($_POST["donation"])){
		$TC+=5;
	}
	echo "<br>";
	print "<strong>Your total is:</strong> $TC ";
	echo "<br>";
	if(isset($_POST["donation"])){
		print "Thanks for your Donations!";
	}
	?>
	</html>
	
	