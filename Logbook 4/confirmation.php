<?php
	//NOTE you must also START sessions where they are used as well as
	//where they are created

	session_start();

	//NOTE: A new variable created to ensure that prices are to 2 dp
	$finalPrice = number_format($_SESSION['quantity']*$_SESSION['price'], 2);
	//NOTE that unlike $_POST[], it seems $_SESSION[] must be concatenated to text output

	echo "<h2> Your order quantity is     : ". $_SESSION['quantity']. "</h2,><br/>";
	echo "<h2> The price of widgets is    : �". $_SESSION['price']. "</h2,><br/>";
   	echo "<h2> and the selected colour is : $_POST[selcolour]</h2><br/><br/>";
  	echo "<h2> Total price to pay is      : �". $finalPrice."</h2,><br/>";

?>

