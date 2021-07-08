<html>
<body>
<?php
$dbname = 'dtu_weather_condition';
$dbuser = 'root';  
$dbpass = ''; 
$dbhost = 'localhost'; 
$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Success!<br><br>";

$temperature = $_GET["temperature"];
$humidity = $_GET["humidity"]; 
$rain = $_GET["rain"]; 


$query = "INSERT INTO total_weather_data (humidity, temperature, rain) VALUES ('$humidity', '$temperature','$rain')";
$result = mysqli_query($connect,$query);
$query2="select * from total_weather_data where Date=date(now())";
$result2 = mysqli_query($connect,$query2);
$count=mysqli_num_rows($result2);

if($count==4)
{
	// calculate minimum humidity values
	$query3="select MIN(humidity) from total_weather_data where Date=date(now())";
    $result3 = mysqli_query($connect,$query3);
	while($row=mysqli_fetch_array($result3))
	{
		$min_hum=$row['MIN(humidity)'];
	}
		// calculate maxmum humidity values
	$query4="select MAX(humidity) from total_weather_data where Date=date(now())";
    $result4 = mysqli_query($connect,$query4);
	while($row=mysqli_fetch_array($result4))
	{
		$max_hum=$row['MAX(humidity)'];
	}
$query = "INSERT INTO humidity (minimum, maximum) VALUES ('$min_hum', '$max_hum')";
$result = mysqli_query($connect,$query);

// calculate minimum temperature values
	$query5="select MIN(temperature) from total_weather_data where Date=date(now())";
    $result5 = mysqli_query($connect,$query5);
	while($row=mysqli_fetch_array($result5))
	{
		$min_temp=$row['MIN(temperature)'];
	}
		// calculate maxmum temperature values
	$query6="select MAX(temperature) from total_weather_data where Date=date(now())";
    $result6 = mysqli_query($connect,$query6);
	while($row=mysqli_fetch_array($result6))
	{
		$max_temp=$row['MAX(temperature)'];
	}
$query = "INSERT INTO temperature (minimum, maximum) VALUES ('$min_temp', '$max_temp')";
$result = mysqli_query($connect,$query);

// calculate minimum rain values
	$query7="select MIN(rain) from total_weather_data where Date=date(now())";
    $result7 = mysqli_query($connect,$query7);
	while($row=mysqli_fetch_array($result7))
	{
		$min_ra=$row['MIN(rain)'];
	}
		// calculate maxmum rain values
	$query8="select MAX(rain) from total_weather_data where Date=date(now())";
    $result8 = mysqli_query($connect,$query8);
	while($row=mysqli_fetch_array($result8))
	{
		$max_ra=$row['MAX(rain)'];
	}
$query = "INSERT INTO rain (minimum, maximum) VALUES ('$min_ra', '$max_ra')";
$result = mysqli_query($connect,$query);
	
}

echo "Insertion Success!<br>";

?>
</body>
</html>