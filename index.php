<?php
function isWeekend($date) {
    $weekDay = date('w', strtotime($date));
    echo $date." datum ".$weekDay." ";
	return ($weekDay == 0 || $weekDay == 6);
}

if(!isWeekend("24.6.2017")){ 
	echo "Po�iljam.<br>";
}
else{
	echo "Pavza vikend.";
}
?>