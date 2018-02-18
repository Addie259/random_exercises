<?php
function normalV(){
	$value = 1;
	echo $value . "<br>";
	$value++;
}

normalV();
normalV();
normalV();
normalV();

function staticV(){
	static $value = 1;
	echo $value . "<br>";
	$value++;
}
staticV();
staticV();
staticV();
staticV();

//staticka varijabla omogucava inkrementaciju kroz vise poziva funkcije. Upisuje novu vrednost, a ne uvek istu. 