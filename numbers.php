<!doctype html5>
<head>
<meta http-equipv="Content-Type"
	content="text/html"
	charset="utf-8" />
<title>Numbers</title>
<body>
	<?php 
	#Script 1.8 - numbers.php
	$quantity = 30;
	$price = 119.95;
	$taxrate = .05;
	
	$total = $quantity * $price;
	$total = $total + ($total * $taxrate);
	
	//format total
	$total = number_format ($total,2);
	
	echo '<p>You are purchasing <b>'
		. $quantity . '</b> widget(s) at
		a cost of <b>$' . $price . '</b>
		each. With tax, the total comes
		to <b>$' . $total . '</b>.</p>';
?>
</body>
</html>