
<?php
if(isset($_POST["Submit"])) {
$Username=$_POST["Username"]; //hvata ono sto je uneseno u "name" na formi.
$Password=$_POST["Password"];


if($Username=="Adriana" && $Password=="12345"){
	echo "Welcome {$_POST["Username"] }"; 
}else{
	echo "User doesn't exist, try again";
}
}
else {
	echo "Login Required";
}
// u action forme ide fajl u kome se nalazi ovakav kod gore, koji obradjuje formu.
?>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>

<?php ?>
<fieldset>
    <legend>HTML 5 Form</legend>
    <form action="form.php" method="POST" >
<label for="Username">Username:</label>
<input id="Username" type="text" name="Username"><br><br>
<label for="Password">Password:</label>
&nbsp;
<input id="Password" type="Password" name="Password"><br><br><br>
<input type="Submit" name="Submit" value="Submitted">
    </form>
    </fieldset> 
	</body>
</html>