<?php
	$date1=date_create("2018-12-04");
	$date2=date_create("2018-12-6");
	$diff=date_diff($date1, $date2);
	echo $diff->days;
?>