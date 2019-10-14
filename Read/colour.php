<!DOCTYPE html>
<html>
	<body style="background: url(abc.jpeg) no-repeat">
		<h1>Read</h1>
		
		<style>
			.Colour-form
			{
				border: 2px solid black;
				max-width: 250px;
				max-height: 200px;
				padding: 3px;
				background-color: #dddddd;
			}
		
		</style>
		
		<form class="Colour-form" action="" method="get">
			<br />
			<input type="text" name="id" class="form-control" id="name" placeholder="Enter ID"><br>
			<input type="submit" class="btn btn-info" value="Read">
			<input type="Reset" value="Reset">
		</form>
		
<?php
$curl = curl_init();
$id = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") 
	{
	  $id = $_GET["id"];
	}

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "http://localhost:8080/colour/read/$id",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "{\r\n    \"colour\": \"test\"\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Authorization: Basic YWRtaW46Y3B1dFBUYWRtaW4=",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Length: 26",
    "Content-Type: application/json",
    "Cookie: JSESSIONID=9DE0F81D7CC9ED589B8CBEA87693F6E1",
    "Host: localhost:8080",
    "Postman-Token: 84858005-e483-4f86-a54b-ed4fed34d8b9,712523c2-db52-4496-b639-44461463a903",
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
</body>
</html>