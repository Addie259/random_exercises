<?php
$color = array("red","green"."blue");
array_pop($color);//izbaci poslednji
array_push($color,"black","white","pink"); // doda na kraj



$numbers = array(13,45,325,5657,799,3355,566);
count($numbers);// izbaci broj clanova niza
max($numbers);//najveci broj
min($numbers);//najmanji broj
in_array(45, $numbers); // trazi da li ima
sort($numbers);//od najmanjeg do najveceg

rsort($numbers); //od najveceg do najmanjeg
implode(glue, pieces);//pravi string od elemenata niza
explode(delimiter, string)//pravi niz od stringa, po delimiteru