<!DOCTYPE html>
<html>

<head>
<h1 style="background-color: #dddddd", align="center", width="500px">DayCare Center System</h1>
</head>

	<body>
	
	<div class="menu">
  <nav>
    <ul>
		<li> <a href="/Frontend/php/Home.html">Home</a> </li>
		<li> <a href="/Frontend/php/Colour.html">Colour</a> </li>
    </ul>
  </nav>
  </div>
  
		<h1>Colours: All</h1>
		
		<style>
			.Colour-table
			{
				border: 2px solid black;
				border-collapse: collapse;
				font-size: 1.5em;
				min-width: 170px;
				text-align: left;
				max-width: 500px;
				background-color: white;
			}
				
			.Colour-table thead 
			{
				background-color: #33FFDF;
				font-weight: bold;
			}
			
			.Colour-table thead: active-row
			{
				background-color: #33FFDF;
				font-weight: bold;
			}
			.menu
			{
				margin-left: 690px;
				margin-right: auto;
			}
		</style>
	</body>
	
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "http://localhost:8080/colour/getall",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Authorization: Basic YWRtaW46Y3B1dFBUYWRtaW4=",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Type: application/json",
    "Cookie: JSESSIONID=9DE0F81D7CC9ED589B8CBEA87693F6E1",
    "Host: localhost:8080",
    "Postman-Token: afb1ccfd-ff54-4052-bae9-f739878406e0,b405dcee-ce20-49e9-b120-6612f2bfdf64",
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

	<footer style="background-color: #dddddd", align="center", width="500px">
	<h3>Your child is in good care...!</h3>
	</footer>
	
</html>