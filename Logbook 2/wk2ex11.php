<html>
<head>  <!----- This is the head of the html part of the page ----->
</head>
<title> Marks from Year 1 Computing </title>   <!----- This is the page title ----->

<?php 								// Start of Marks script
  $mymarks["CO450"] = 50;			// CO450 mark was 50	
  $mymarks["CO453"] = 79;			// CO453 mark was 79
  $mymarks["CO454"] = 66;			// CO453 mark was 79
  $mymarks["CO455"] = 57;			// CO453 mark was 79
  $mymarks["CO452"] = 68;			// CO453 mark was 79	
  $mymarks["CO456"] = 65;			// CO453 mark was 79

  $total = 0;

  while(list($index,$value) = each($mymarks))					// Start a loop
  {
    echo "for  $index  my grade was  $value <br/>";
    $total = $total + $mymarks[$index];
  }
$average = $total /  6;					// Average and total of modules is equal to 6 because they are 6 modules being taken 

  echo "<br/> My best module was CO453 with ". $mymarks["CO453"] ." marks!";				// print out the best module was CO453 
  echo "<br/> My module average was ". $average ." marks!";									// print out an average score for all the modules taken dived by 6	

?>

</html>