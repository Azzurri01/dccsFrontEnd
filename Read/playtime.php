<!DOCTYPE html>
<html>

<head>
<h1 style="background-color: #dddddd", align="center", width="500px">DayCare Center System</h1>
</head>

	<body>
		<style>
			.Playtime-form
			{
				border: 2px solid black;
				max-width: 250px;
				max-height: 200px;
				padding: 3px;
				background-color: #dddddd;
				margin-left: auto;
				margin-right: auto;
			}
			.menu
			{
				margin-left: 690px;
				margin-right: auto;
			}
		</style>
		
<div class="menu">
  <nav>
    <ul>
		<li> <a href="/Frontend/php/Home.html">Home</a> </li>
		<li> <a href="/Frontend/php/Playtime.html">Playtime</a> </li>
    </ul>
  </nav>
  </div>
		
		<form class="Playtime-form" action="" method="get">
		<h1>Read</h1>
		<table>
			<tr>
				<td>ID:</td>
				<td><input type="text" name="id" class="form-control" id="name" placeholder="Enter ID"><br></td>
			</tr>
			<tr>
			<td><input type="submit" name="submit" class="btn btn-info" value="Read"></td>
			</tr>
		</table>
		</form>
		
<?php
$curl = curl_init();
$id = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") 
	{
		if(isset($_GET['id']))
		{
			$id = $_GET["id"];
		}
	}

if(isset($_GET['submit']))
{
	if(!empty($_GET['id']))
	{
curl_setopt_array($curl, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "http://localhost:8080/playtime/read/$id",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "{\r\n    \"playtime\": \"test\"\r\n}",
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
  echo "<p style='margin-left: 550px'>$response</p>";
}
	}
	else
	{
		echo "<p style='margin-left: 660px'>Error #: No ID entered!!!</p>";
	}
}
?>
</body>

	<footer style="background-color: #dddddd", align="center", width="500px">
	<h3>Your child is in good care...!</h3>
	</footer>
	
</html>