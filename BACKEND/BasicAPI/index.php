<?php
	///// create a db-connection
	$conn = new mysqli('localhost', 'root', '', 'basic_api'); // Create connection
	if ($conn->connect_error) {     	                     // Check connection
		die("Connection failed: " . $conn->connect_error);
	}
	
	///// selecting SQL-query based on parameter in url
	if(!empty($_GET['find']) && is_numeric($_GET['find'])) {
		$sql = 'SELECT * FROM `user_details` WHERE `user_id` ="'.$_GET['find'].'"';
	}
	elseif(!empty($_GET['find']) && $_GET['find'] == 'all') {
		$sql = "SELECT * FROM `user_details`";
	}
	
	///// creating array with result
	if(!empty($sql))    {  
		$result = $conn->query($sql);
		
		$collection=[];
		if ($result->num_rows > 0)
		{
			while($row=$result->fetch_assoc()){
				$collection[]=(object)$row;         // create an array with a numeric row-keys and row-data for each row
			}
		}
	}
	else {
		$collection = ['title'=>'My API-server'];
    }
	
	///// showing data in json
	$out = array_merge(['meta' =>['count'=>count($collection)]],['data' =>$collection]);
	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($out, JSON_PRETTY_PRINT);
	die;
?>