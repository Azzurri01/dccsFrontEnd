<!DOCTYPE html>
<html>	
		<?php
	//Step 1 - Initialize
	$ch = curl_init();
	$id = $_GET[""];
	$colour = $_GET[""];
	
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $id = $_GET["id"];
  $colour = $_GET[""];
}
	
	//Step 2 - set options
curl_setopt_array($ch, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "http://localhost:8080/colour/getall",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "{\"id\": \"$id\",\"colour\": \"$colour\"}",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Authorization: Basic YWRtaW46YWRtaW4=",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Length: 290",
    "Content-Type: application/json",
    "Cookie: JSESSIONID=199AA9912649F1368F926A8DFCCD28E4",
    "Host: localhost:8080",
    "Postman-Token: f927f2c2-b54f-47f1-89d2-6e67776d2285,7692f9ee-18fa-443a-85a4-1cab64e68142",
    "User-Agent: PostmanRuntime/7.17.1",
    "cache-control: no-cache"
  ),
));
	
	//Step 3 - Execute request and fetch response. Check for errors
	$json = curl_exec($ch);
	
	if($json === false)
	{
		echo "Curl error: " . curl_error($ch);
	}
	
	//Step 4 - Close curl handle
	curl_close($ch);
	
	//Step 5 - JSON decode
	$json = json_decode($json, true);
	
	//Step 6 - print output
	print_r($json);
	?>
</html>