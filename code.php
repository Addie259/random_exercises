<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
print_r($_POST);


$Username = $_POST["Username"];
$Password = $_POST["Password"];
$Submit = $_POST["Submit"];


if(isset($_POST['Submit'])){
	echo "Succesfull Login ";
	echo "Welcome {$Username}";
}
/*

if(isset($Username) && !empty($Username)) {
	echo "Welcome {$Username} <br>";
} else {
	echo "No Username detected <br>";
}




if(isset($Password) && !empty($Password)) {
	echo "Pass: {$Password} <br>";
} else {
	echo "No password detected <br>";
}
*/


if(isset($_POST["Username"])){
	$Username = $_POST["Username"];
	echo "$Username <br>";
}else{
	$Username="";
}

if(isset($_POST["Password"])){
	$Password = $_POST["Password"];
	echo "$Password <br>";
}else{
	$Password="";
}//postavlja default vrednosti juzernejma i pasvorda
?>


</body>
</html>