<?php

	require_once("./includes/start.php");
	require_once("./includes/config.php");
	require_once("./includes/classes/VDatabase.php");
	require_once("./includes/vutils.php");
	
	
	$array_result = array();
	$db = new VDatabase(true);
	
	
	$select_query = " SELECT * FROM  users";  
	$rows = $db->getRows($select_query);
	 
	$count=0;
	
	foreach($rows as $row)
	{
		$count++;
		$array_result[]=array(
		'ID' => $row['id'],
		'Name' => $row['name'], 
		'Age' => $row['age']
		);
	}
	if($count)
	{
		echo json_encode($array_result, JSON_UNESCAPED_SLASHES);
	}
	else
	{
		
		echo json_encode("No  Found");
	}

  

?>
