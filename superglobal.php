<?php
$x = 5;
$y = 10;

function addition(){
	$GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
}
addition();
print_r($GLOBALS);
echo $z;//izbaci 15

//sve globalne promenljive se cuvaju u nizu globals index. To omogucava da promenljive ne budu globalne

