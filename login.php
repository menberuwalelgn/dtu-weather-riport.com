<!DOCTYPE html>
<html>
<head>
<title>Admin login</title>
<style media="screen">
	body{
		background-color: #c4c4c4;
	}
	.log{
		border-radius: 20px;
		max-width: 350px;
		box-sizing: border-box;
		padding: 40px;
		color: #fff;
		margin-top: 150px;
		background: rgba(0,0,0,0.8);
	    margin-left: 280px;
	}
	h2{
		text-align: center;
	}
	input[type=text],input[type=password]{
		width: 100%;
		box-sizing: border-box;
		padding: 12px 5px;
		background:rgba(0,0,0,0.50);
		outline: none;
		border:none;
		border-bottom: 1px dotted #fff;
		color: #fff;
		border-radius: 5px;
		margin: 5px;
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
	.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}
</style>
</head>
<body>
 <div class="log">
 	<h2>Login</h2>
 		<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
 	<form action="HOME.php" method="post">
 		<input type="text" name="uname" placeholder="Enter username">
 		<input type="password" name="password" placeholder="Enter password">
 		<button type="submit">login</button>
 	</form>
 </div>
</body>
</html>