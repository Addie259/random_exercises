<?php
//branching - break, continue u petlji

$names = array("Anna", "Marie", "David", "Alex", "Michael", "Hannah", "John", "Mike");

for($i=0;$i<7;$i++){
	if($names[$i]=="Alex"){
		continue;//izbacice Alexa, ostale ispisati
	}
	echo $names;
}

for($i=0;$i<7;$i++){
	if($names[$i]=="Alex"){
		break;//stane kad naidje na alex
	}
	echo $names[$i];
}