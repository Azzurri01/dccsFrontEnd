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
		
		<form class="Playtime-form" action="" method="put">
		<h1>Update</h1>
		<table>
			<tr>
				<td>ID:</td>
				<td><input type="text" name="id" class="form-control" placeholder="Enter ID"></td>
			</tr>
			<tr>
				<td>Playtime:</td>
				<td><input type="text" name="playtime" class="form-control" placeholder="Enter Playtime"></td>
			</tr>
			<tr>
			<td><input type="submit" name="submit" class="btn btn-info" value="Update"></td>
			</tr>
		</table>
		</form>
	
<?php
$curl = curl_init();
$id = "";
$playtime = "";

		if(isset($_GET['id']))
		{
			$id = $_GET["id"];
		}
		
		if(isset($_GET['playtime']))
		{
			$playtime = $_GET["playtime"];
		}

if(isset($_GET['submit']))
{
	if(!empty($_GET['id']) && !empty($_GET['playtime']))
	{
  curl_setopt_array($curl, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "http://localhost:8080/playtime/update",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_POSTFIELDS => "{\"id\": \"$id\",\"behaviour\": \"$playtime\"}",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Authorization: Basic YWRtaW46Y3B1dFBUYWRtaW4=",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Length: 66",
    "Content-Type: application/json",
    "Cookie: JSESSIONID=8D11DFE28B97F89A1B7997CF97C3FAE3",
    "Host: localhost:8080",
    "Postman-Token: a0fdbffd-0c40-4539-b6ff-5b74b9b2c123,57ba6f96-dede-4a2d-b5d4-5e123e83485e",
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
  echo "<p style='margin-left: 660px'>Playtime updated successfully!!!</p>";
}
	}
	
	else
	{
		echo "<p style='margin-left: 630px'>Error #: Entries cannot be blank!!!</p>";
	}
}
?>
	
	</body>
	
		<footer style="background-color: #dddddd", align="center", width="500px">
	<h3>Your child is in good care...!</h3>
	</footer>
	
</html>