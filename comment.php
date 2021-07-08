<?php
$dbname = 'dtu_weather_condition';
$dbuser = 'root';  
$dbpass = ''; 
$dbhost = 'localhost'; 
if(isset($_POST['comment']))
{
$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}
$f_name = $_POST['fname'];
$l_name = $_POST['lname']; 
$Phone_num = $_POST['Phone'];
$Email = $_POST['email'];
$com = $_POST['com1']; 

$query = "INSERT INTO Add_comment (fname, lname, phone_number,email,comment) VALUES ('$f_name', '$l_name','$Phone_num','$Email','$com')";
$result = mysqli_query($connect,$query);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add comment</title>
<style>
	body{
		background-color: #c4c4c4;

	}
	.comment{
		border-radius: 20px;
		max-width: 350px;
		box-sizing: border-box;
		padding: 40px;
		color: #fff;
		margin-top: 30px;
		background: rgba(0,0,0,0.8);
	    margin-left: 320px;
	}
	h2{
		text-align: center;
	}
	input[type=text],input[type=Email]{
		width: 100%;
		box-sizing: border-box;
		padding: 12px 5px;
		background:rgba(0,0,0,0.50);
		outline: none;
		border:none;
		border-bottom: 1px dotted #fff;
		color: #fff;
		border-radius: 5px;
		margin: 4px;
		font-weight: bold;
	}
	input[type=submit]{
	    width: 100%;
		box-sizing: border-box;
		padding: 10px 0;
		background:rgba(0,0,0,0.10);
		outline: none;
		border:none;
		color: #fff;
		border-radius: 20px;
		margin-top: 30px;
		font-weight: bold;
		background:#60adde;
		opacity: 0.7;
	}
</style>
</head>
<body>
	<div class="comment">
		<form method="POST">
		<label>Frist Name:</label>
		<input type="text" name="fname">
		<label>Last Name:</label>
		<input type="text" name="lname">
		<label>Phone number:</label>
		<input type="text" name="Phone">
		<label>Email:</label>
		<input type="Email" name="email">
		<textarea rows="6px" cols="25px" name="com1">
		</textarea>
		<input type="submit" name="comment" value="Send comment">
	</form>
	</div>

</body>
</html>