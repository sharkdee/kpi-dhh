<?php
function isWeekend($date) {
    $weekDay = date('w', strtotime($date));
    echo $date." datum ".$weekDay." ";
	return ($weekDay == 0 || $weekDay == 6);
}

if(!isWeekend("24.6.2017")){ 
	echo "Pošiljam.<br>";
}
else{
	echo "Pavza vikend.";
}
?>