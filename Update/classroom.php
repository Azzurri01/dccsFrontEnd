<!DOCTYPE html>
<html>

<head>
<h1 style="background-color: #dddddd", align="center", width="500px">DayCare Center System</h1>
</head>

	<body>
		<style>
			.Classroom-form
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
		<li> <a href="/Frontend/php/Classroom.html">Classroom</a> </li>
    </ul>
  </nav>
  </div>
		
		<form class="Classroom-form" action="" method="put">
		<h1>Update</h1>
		<table>
			<tr>
				<td>ID:</td>
				<td><input type="text" name="id" class="form-control" placeholder="Enter ID"></td>
			</tr>
			<tr>
				<td>Classroom:</td>
				<td><input type="text" name="classroom" class="form-control" placeholder="Enter Classroom"></td>
			</tr>
			<tr>
			<td><input type="submit" name="submit" class="btn btn-info" value="Update"></td>
			</tr>
		</table>
		</form>
	
<?php
$curl = curl_init();
$id = "";
$classroom = "";

		if(isset($_GET['id']))
		{
			$id = $_GET["id"];
		}
		
		if(isset($_GET['classroom']))
		{
			$classroom = $_GET["classroom"];
		}

if(isset($_GET['submit']))
{
	if(!empty($_GET['id']) && !empty($_GET['classroom']))
	{
  curl_setopt_array($curl, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "http://localhost:8080/classroom/update",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_POSTFIELDS => "{\"id\": \"$id\",\"roomNo\": \"$classroom\"}",
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
  echo "<p style='margin-left: 660px'>Classroom updated successfully!!!</p>";
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