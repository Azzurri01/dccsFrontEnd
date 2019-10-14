<!DOCTYPE html>
<html>
	<body style="background: url(abc.jpeg) no-repeat">
		<h1>Create</h1>
		
		<style>

		
			.Colour-form
			{
				border: 2px solid black;
				max-width: 250px;
				max-height: 200px;
				padding: 3px;
				background: #dddddd;
			}
		
		</style>

<?php
$curl = curl_init();
//$colour = $_POST["colour"];
//$colour = "";

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "http://localhost:8080/colour/create",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"colour\": \"colour\"}",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Authorization: Basic YWRtaW46Y3B1dFBUYWRtaW4=",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Length: 33",
    "Content-Type: application/json",
    "Cookie: JSESSIONID=D7DF533A3E8553D146013B049EBD42A4",
    "Host: localhost:8080",
    "Postman-Token: f351c74e-7fa1-4d2f-86cc-112f68aa0358,70469f32-4288-46ac-90e5-066cc7f19463",
    "User-Agent: PostmanRuntime/7.17.1",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>
			<form class="Colour-form" action="" method="post">
			Colour:<br /> <input type="text" id="colour"/><br />
			<br />
		<input type="Reset" value="Reset">
		<input type="Submit" name= "Submit" value="Create">
		</form>

	</body>
</html>

<?php
function pre_r($array)
{
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}
?>