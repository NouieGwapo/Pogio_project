<!DOCTYPE html>
<html>
<body>

<?php
	//multiplier 
    $num = 5;
    
    echo "<h1><center>Multiplication Table of $num</center></h1><br>";
    for($x = 0; $x <= 10; $x++){
    
    	$z = $num * $x;
        echo "<h2><center>$num * $x = $z</center><h2>";
        
    }
?>

</body>
</html>