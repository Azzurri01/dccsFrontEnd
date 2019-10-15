<!DOCTYPE html>
<html>

<head>
<h1 style="background-color: #dddddd", align="center", width="500px">DayCare Center System</h1>
</head>

	<body>
		<style>
			.Address-form
			{
				border: 2px solid black;
				max-width: 250px;
				max-height: 300px;
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
		<li> <a href="/Frontend/php/Address.html">Address</a> </li>
    </ul>
  </nav>
  </div>
		
		<form align="center" class="Address-form" action="" method="post">
		<h1 align="left">Create</h1>
		<table>
			<tr>
				<td>Number:</td>
				<td><input type="text" name="number" class="form-control" placeholder="Enter Street Number"></td>
			</tr>
			<tr>
				<td>Street:</td>
				<td><input type="text" name="street" class="form-control" placeholder="Enter Street Name"></td>
			</tr>
			<tr>
				<td>Suburb:</td>
				<td><input type="text" name="suburb" class="form-control" placeholder="Enter Suburb"></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input type="text" name="city" class="form-control" placeholder="Enter City"></td>
			</tr>
			<tr>
				<td>Country:</td>
				<td><input type="text" name="country" class="form-control" placeholder="Enter Country"></td>
			</tr>
			<tr>
			<td><input type="submit" name="submit" class="btn btn-info" value="Create"></td>
			</tr>
		</table>
			<br />
		</form>

<?php
$curl = curl_init();
$number= "";
$street= "";
$suburb= "";
$city= "";
$country= "";

if(isset($_POST['number']))
{
	$number = $_POST["number"];
}


if(isset($_POST['street']))
{
	$street = $_POST["street"];
}

if(isset($_POST['suburb']))
{
	$suburb = $_POST["suburb"];
}

if(isset($_POST['city']))
{
	$city = $_POST["city"];
}

if(isset($_POST['country']))
{
	$country = $_POST["country"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$name = $_POST["number"];
	$name = $_POST["street"];
	$name = $_POST["suburb"];
	$name = $_POST["city"];
	$name = $_POST["country"];
}

if(isset($_POST['submit']))
{
  curl_setopt_array($curl, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "http://localhost:8080/address/create",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n\t\"street\": \"$street\",\n\t\"suburb\": \"$suburb\",\n\t\"city\": \"$city\",\n\t\"country\": \"$country\",\n\t\"number\": $number\n}",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Authorization: Basic YWRtaW46Y3B1dFBUYWRtaW4=",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Length: 191",
    "Content-Type: application/json",
    "Cookie: JSESSIONID=28CB439B54E65B8555ECB2803D4DB6D7",
    "Host: localhost:8080",
    "Postman-Token: 52fb947c-1531-4ad9-a372-911563627e1d,41c3a380-5c15-4a46-8d4a-b32ecf266caa",
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