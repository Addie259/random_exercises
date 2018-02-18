<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$numbers = array(324,87495,745,13567,232,6,1,3);

?>
<hr>
<?php

echo current($numbers) . "<br>";//ispise prvi broj u nizu, obrati paznju na pointere!
next($numbers);
echo current($numbers);
end($numbers);//pokazuje poslednji element u nizu
?>
</body>
</html>