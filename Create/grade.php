<!DOCTYPE html>
<html>

<head>
<h1 style="background-color: #dddddd", align="center", width="500px">DayCare Center System</h1>
</head>

	<body>
		<style>
			.Grade-form
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
		<li> <a href="/Frontend/php/Grade.html">Grade</a> </li>
    </ul>
  </nav>
  </div>
		
		<form align="center" class="Grade-form" action="" method="post">
		<h1 align="left">Create</h1>
		<table>
			<tr>
				<td>Grade:</td>
				<td><input type="text" name="grade" class="form-control" id="grade" placeholder="Enter Grade"></td>
			</tr>
			<tr>
			<td><input type="submit" name="submit" class="btn btn-info" value="Create"></td>
			</tr>
		</table>
			<br />
		</form>

<?php
$curl = curl_init();
$grade = "";

if(isset($_POST['grade']))
{
	$grade = $_POST["grade"];
}
	
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$name = $_POST["grade"];
}

if(isset($_POST['submit']))
{
	if(!empty($_POST['grade']))
	{
		curl_setopt_array($curl, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "http://localhost:8080/grade/create",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"grade\": \"$grade\"}",
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
  echo "<p style='margin-left: 660px'>Grade created successfully!!!</p>";
}
		
	}
	
	else
{
	echo "<p style='margin-left: 660px'>Error #: No grade entered!!!</p>";
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