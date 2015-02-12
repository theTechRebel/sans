<?php

//MySQL date time format
	function get_time(){
	$currenttime = time();
	$mysql_date_time = strftime("%Y-%m-%d", $currenttime);
	$time = $mysql_date_time;
	return $time;
	}
?>
