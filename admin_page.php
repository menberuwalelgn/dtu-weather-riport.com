<?php 
session_start();

if (isset($_SESSION['phone_number']) && isset($_SESSION['user_name'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<title> ADMIN HOME</title>
</head>
<style media="screen">
	body{
		background-color: #c4c4c4;
		font-family: sans-serif;
	}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  text-shadow: 1px 1px 1px #919191,
1px 2px 1px #919191,
1px 3px 1px #919191,
1px 4px 1px #919191,
1px 5px 1px #919191,
1px 6px 1px #919191,
1px 7px 1px #919191,
1px 8px 1px #919191,
1px 9px 1px #919191,
1px 10px 1px #919191;
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 18px 23px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}
.con{
		width: 600px;
		display: flex;
		flex-wrap: wrap;
		justify-content: space-around;
		margin-left: 600px;
	}
	.con .btn {
		position: relative;
		width: 155px;
		height: 30px;
		margin: 10px;
	}
	.con .btn a{
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		display: flex;
		align-items: center;
		justify-content: center;
		background:rgb(0,70,45);
		box-shadow: 0 15px 35px rgb(0,70,45);
		border-top: 1px solid rgb(0,70,45);
		border-bottom: 1px solid rgb(0,70,45);
		border-radius: 30px;
		color: #fff;
		z-index: 1;
        font-weight: 400;
        text-decoration: none;
        transition: 0.5s;
	}
	.con .btn:hover a{
		letter-spacing: 4px;
		transform: skewX(45deg) translateX(0);
		transition: 0.5s;
	}
</style>
<body>
<div style="margin-left: 100px; margin-top: 100px; font-size: 20px;">
  <table  class="content-table">
  	<thead>
  	       <tr>
  		      <th>Frist name</th>
  		      <th>Last name</th>
  		      <th>Phone number</th>
  		      <th>Email</th>
  		      <th>Comment</th>
  		      <th>Date</th>
  	        </tr>
  	</thead>
  <?php
		// database connection
		$dbname = 'dtu_weather_condition';
        $dbuser = 'root';  
        $dbpass = ''; 
        $dbhost = 'localhost'; 
        $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	         $query="select * from add_comment";
             $result = mysqli_query($connect,$query);
             if($result)
             {
             	while ($record=mysqli_fetch_assoc($result)) {
             		
             		echo "<tr><td>".$fname=$record['fname'];
             		echo "<td>".$lname=$record['lname'];
             		echo "<td>".$phone_number=$record['phone_number'];
             		echo "<td>".$email=$record['email'];
             		echo "<td>".$comment=$record['comment'];
             		echo "<td>".$Date=$record['Date'];
             	}
           }
      ?>
  </table>
  </div>
  	<div class="con">
		<div class="btn">
	       <a href="/dtu/logout.php"> Logout</a>
		</div>
	</div>
</body>
</html>
<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?> 