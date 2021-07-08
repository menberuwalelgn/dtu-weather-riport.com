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


$query = "INSERT INTO min_weather_data (humidity, temperature, rain) VALUES ('$humidity', '$temperature','$rain')";
$result = mysqli_query($connect,$query);

echo "Insertion Success!<br>";

?>
</body>
</html>