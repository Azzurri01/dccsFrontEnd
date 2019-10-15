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
		<li> <a href="/Frontend/php/Address.html">Address</a> </li>
    </ul>
  </nav>
  </div>
		
		<form class="Address-form" action="" method="put">
		<h1>Update</h1>
		<table>
			<tr>
			<tr>
				<td>ID:</td>
				<td><input type="text" name="id" class="form-control" placeholder="Enter ID"></td>
			</tr>
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
			<td><input type="submit" name="submit" class="btn btn-info" value="Update"></td>
			</tr>
		</table>
		</form>
	
<?php
$curl = curl_init();
$id= "";
$number= "";
$street= "";
$suburb= "";
$city= "";
$country= "";

if(isset($_GET['id']))
{
	$id = $_GET["id"];
}

if(isset($_GET['number']))
{
	$number = $_GET["number"];
}

if(isset($_GET['street']))
{
	$street = $_GET["street"];
}

if(isset($_GET['suburb']))
{
	$suburb = $_GET["suburb"];
}

if(isset($_GET['city']))
{
	$city = $_GET["city"];
}

if(isset($_GET['country']))
{
	$country = $_GET["country"];
}

if(isset($_GET['submit']))
{
	if(!empty($_GET['id']))
	{
  curl_setopt_array($curl, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "http://localhost:8080/address/update",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
 CURLOPT_POSTFIELDS => "{\n\t\"street\": \"$street\",\n\t\"suburb\": \"$suburb\",\n\t\"city\": \"$city\",\n\t\"country\": \"$country\",\n\t\"number\": $number\",\n\t\"id\": $id\"n}",
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
  echo "<p style='margin-left: 660px'>Address updated successfully!!!</p>";
}
	}
	
	else
	{
		echo "<p style='margin-left: 630px'>Error #: ID cannot be left blank!!!</p>";
	}
}
?>
	
	</body>
	
		<footer style="background-color: #dddddd", align="center", width="500px">
	<h3>Your child is in good care...!</h3>
	</footer>
	
</html>