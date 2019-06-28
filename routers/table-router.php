<?php
include '../includes/connect.php';
	foreach ($_POST as $key => $value)
	{
		if(preg_match("/[0-9]+_hide/",$key)){
			if($_POST[$key] == 1){
			$key = strtok($key, '_');
			$sql = "UPDATE tables SET table_status = 0 WHERE id = $key;";
			$con->query($sql);
			} else{
			$key = strtok($key, '_');
			$sql = "UPDATE tables SET table_status = 1 WHERE id = $key;";
			$con->query($sql);			
			}
		}
	}
header("location: ../tables.php");
?>