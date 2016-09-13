<?php

// Execute PHP Cron script here
try { 

	$data = array("<KEY>" => "<VALUE>", "<KEY>" => "<VALUE>");
	$data_string = json_encode($data);
	$ch = curl_init('<ENDPOINT>');    

	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Content-Type: application/json',
	    'Authorization: Bearer <TOKEN>', 
	    'Content-Length: ' . strlen($data_string)) );
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data_string);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

	$result = curl_exec($ch);
	curl_close($ch);

	print_r($result);

	//echo json_decode($result);

} catch (Exception $e) {
	print "something went wrong\n";
} /*finally {
	print "This part is always executed\n";
}*/


?>