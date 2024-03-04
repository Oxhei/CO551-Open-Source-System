<?php					// start of php script

mysql> USE test			
$sql= "SELECT * from test";			// select all the feilds from the test table 

<html>
<body>

<?php
while ($row = mysql_fetch_assoc($result))			// fetch the row of 
{
      echo "<a href=\"wk6ex2action.php?id=$row[name]\">$row[name]</a></br>";  	
}
?>
</body>
</html>
