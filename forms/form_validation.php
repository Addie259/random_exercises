<h2>Form Validation with PHP.</h2>

<?php
if(isset($_POST['Submit'])){
	if(empty($_POST['Name'])){
		$nameError = "Name is Required";
	}
	else{
		$name = test_user_input($_POST["Name"]);
	}
}

function test_user_input($data){
	return $data;
}
?>


<form  action="FormValidationProject.php" method="post"> 
<legend>* Please Fill Out the following Fields.</legend>			
<fieldset>
Name:<br>
<input class="input" type="text" Name="Name" value="">
*<br>	 
E-mail:<br>
<input class="input" type="text" Name="Email" value="">
*<br>
Gender:<br>
<input class="radio" type="radio" Name="Gender" value="Female">Female
<input class="radio" type="radio" Name="Gender" value="Male">Male
*<br>		   
Website:<br>
<input class="input" type="text" Name="Website" value="">
*<br>
Comment:<br>
<textarea Name="Comment" rows="5" cols="25"></textarea>
<br>
<br>
<input type="Submit" Name="Submit" value="Submit Your Information">
   </fieldset>
</form>