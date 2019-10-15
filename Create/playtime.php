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
				background: #dddddd;
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
		
		<form align="center" class="Playtime-form" action="" method="post">
		<h1 align="left">Create</h1>
		<table>
			<tr>
				<td>Playtime:</td>
				<td><input type="text" name="playtime" class="form-control" id="playtime" placeholder="Enter Playtime"></td>
			</tr>
			<tr>
			<td><input type="submit" name="submit" class="btn btn-info" value="Create"></td>
			</tr>
		</table>
			<br />
		</form>

<?php
$curl = curl_init();
$playtime = "";

if(isset($_POST['playtime']))
{
	$playtime = $_POST["playtime"];
}
	
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$name = $_POST["playtime"];
}

if(isset($_POST['submit']))
{
	if(!empty($_POST['playtime']))
	{
		curl_setopt_array($curl, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "http://localhost:8080/playtime/create",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"behaviour\": \"$playtime\"}",
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
  echo "<p style='margin-left: 660px'>Playtime created successfully!!!</p>";
}
		
	}
	
	else
{
	echo "<p style='margin-left: 660px'>Error #: No playtime entered!!!</p>";
}

}
?>


	</body>
	
	<footer style="background-color: #dddddd", align="center", width="500px">
	<h3>Your child is in good care...!</h3>
	</footer>
</html>

<?php
function pre_r($array)
{
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}
?>