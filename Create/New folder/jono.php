<?php
$curl = curl_init();
$colour = $_POST["colour"];

$name = $id = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];
  $colour = $_POST["colour"];
}

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "http://localhost:8080/colour/create",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
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

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err){
		echo "cURL Error #:" . $err;
	}else{
		$responseObject = json_decode($response);
		$responseCode = $responseObject->responseCode;
		$responseDescription = $responseObject->responseDescription;

		$url = "http://127.0.0.1/dccs/colour.php";
		$ch = curl_init($url);

		curl_exec($ch);
		curl_close($ch);

		if($responseCode == "412 PRECONDITION_FAILED"){
			echo "<p style='color:red;'>$responseDescription</p>";
		}else{
			if($responseCode == "200 OK"){
				echo "<p style='color:#FFFFFF;'>$responseDescription</p>";
			}	
		}
	}
?>