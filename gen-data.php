<?php
//
// A very simple PHP example that sends a HTTP POST to a remote site
//

$url = "https://www.example.com/post-data.php";
$data = "api_key=tPmAT5Ab3j7F9&value1=".(rand(2000, 3000)/100)."&value2=".(rand(1000, 10000)/100)."&value3=".(rand(100000, 200000)/100)."";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

//print_r($url);
//print_r($data);
//print_r($server_output);

curl_close ($ch);

// Further processing ...
if ($server_output == "New record created successfully") { 
	echo "OK";
} 
else {
	echo "Oops!!!";
}
?>