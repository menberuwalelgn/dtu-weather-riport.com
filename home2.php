<?php 
session_start();
        $dbname = 'dtu_weather_condition';
        $dbuser = 'root';  
        $dbpass = ''; 
        $dbhost = 'localhost'; 
        $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname); 

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}
	else{
		$sql = "SELECT * FROM admin WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($connect, $sql);

		if (mysqli_num_rows($result) === 1) {

			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['phone_number'] = $row['phone_number'];
            	$_SESSION['email'] = $row['email'];
            	header("Location: admin_page.php");
		        exit();
            }
            else{
				header("Location: login.php?error=Incorect User name or password");
		        exit();
			}
		}
		else{
			header("Location: login.php?error=Incorect User name or password");
	        exit();
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ደብረ ታቦር ዩኒቨርስቲይ</title>
<style media="screen">
	body{
		background-color: #c4c4c4;
	}
	.con{
		width: 600px;
		display: flex;
		flex-wrap: wrap;
		justify-content: space-around;
		margin-left: 300px;
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
	#sidebar{
		position: fixed;
		width: 22%;
		height: 100%;
		left: -22%;
		background-color: black;
		text-decoration: none;

	}
	#sidebar li{
		color: white;
		font-size: 30px;
		padding: 30px;
		border-bottom: 0.5px solid gray;
		text-align: center;
		box-shadow: 0 25px 35px rgb(0,70,45);
		border-top: 1px solid rgb(0,70,45);
		border-bottom: 1px solid rgb(0,70,45);
		border-radius: 30px;
		margin-top: 20px;
		margin-right: 20px;
		text-shadow: 1px 1px 1px #919191,
1px 2px 1px #919191,
1px 3px 1px #919191,
1px 4px 1px #919191,
1px 5px 1px #919191,
1px 6px 1px #919191,
1px 7px 1px #919191,
1px 8px 1px #919191,
1px 9px 1px #919191,
1px 10px 1px #919191;	}
	#sidebar ul li{
		list-style: none;

	}
     #sidebar:hover li{
     	color: red;
     	letter-spacing: 2px;
     }
	.setting{
		display: none;
	}
	#sidebar ul li:hover .setting{
		display: block;
		position: absolute;
		margin-top: 10px;
		margin-left: -30px;
	}

	.toggle_btn{
		position: absolute;
		left: 100%;
		top: 0px;
	}
	.toggle_btn span{
		display: block;
		background-color: black;
		width: 30px;
		height: 5px;
		margin: 5px;
	}
	ul li a{
		text-decoration: none;
		color: white;
	}
	#sidebar.active{
		left: 0;
	}
</style>
<script type="text/javascript">
	function togglemenu(){
		document.getElementById('sidebar').classList.toggle('active');
	}
</script>
</head>
<body>
	
<div id="sidebar" >
	<div class="toggle_btn" onclick="togglemenu()">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<ul>
		<li><a href="/dtu/home2.php/"> Home</a></li>
		<li><a href="/dtu/comment2.php/">Comment</a></li>
		<li><a href="#">Language</a>
         <div class="setting">
          <ul>
          	<li><a href="/dtu/HOME.php/"> ENGLISH</a></li>
          	<li><a href="/dtu/home2.php/"> AMHARIC</a></li>
          </ul>
		</div>
		</li>
	</ul>
</div>
<div style="text-align: center;font-weight:700;margin-top: 10px;">
<p style=" font-size:45px;font-family: times new roman,cursive;color:#f5f5f5;transform: translate(0);display: inline; text-shadow: 1px 1px 1px #919191,
1px 2px 1px #919191,
1px 3px 1px #919191,
1px 4px 1px #919191,
1px 5px 1px #919191,
1px 6px 1px #919191,
1px 7px 1px #919191,
1px 8px 1px #919191,
1px 9px 1px #919191,
1px 10px 1px #919191,
1px 18px 6px rgba(16,16,16,0.4),
1px 20px 10px rgba(16,16,16,0.2),
1px 22px 25px rgba(16,16,16,0.2),
1px 28px 30px rgba(16,16,16,0.4);">ደብረ ታቦር ዩኒቨርስቲይ</p>

</div>
<div style="text-align: center;margin-top: 20px;">
<div style="font-size:35px;transform: translate(0);font-family: times new roman;display: inline; color: #000000; text-shadow: 1px 1px 1px #919191,
1px 2px 1px #919191,
1px 3px 1px #919191,
1px 4px 1px #919191,
1px 5px 1px #919191,
1px 6px 1px #919191,
1px 7px 1px #919191,
1px 8px 1px #919191,
1px 9px 1px #919191,
1px 10px 1px #919191;">
	<?php
	$today= date("D");
     if("Mon"==$today)
	     {
         echo "ሰኞ  &nbsp;&nbsp;";
	    }
	    elseif ("Tue"==$today) {
	    	echo "ማክሰኞ  &nbsp;&nbsp;";
	    }
	    elseif ("Wed"==$today) {
	    	echo "ረቡዕ  &nbsp;&nbsp;";
	    }
	    elseif ("Thu"==$today) {
	    	echo "ሀሙስ  &nbsp;&nbsp;";
	    }
	    elseif ("Fri"==$today) {
	    	echo "አርብ  &nbsp;&nbsp;";
	    }
	    elseif ("Sun"==$today) {
	    	echo "ቅዳሜ  &nbsp;&nbsp;";
	    }
	    elseif ("Sat"==$today) {
	    	echo "እሁድ  &nbsp;&nbsp;";
	    }
	 $me= date("M");
     if("Sep"==$me)
	     {
         echo "መስከረም";
	    }
	    elseif ("Oct"==$me) {
	    	echo "ጥቅምት";
	    }
        elseif("Nov"==$me)
	       {
             echo "ህዳር";
	       }
	    elseif ("Dec"==$me) {
	    	echo "ታህሳስ";
	       }
        elseif("Jan"==$me)
	       {
            echo "ጥር";
	       }
	    elseif ("Feb"==$me) {
	    	echo "ይካቲት";
	    }
       elseif("Mar"==$me)
	     {
         echo "መጋቢት";
	    }
	    elseif ("Apr"==$me) {
	    	echo "ሚያዝያ";
	    }	    
	    elseif ("May"==$me) {
	    	echo "ግንቦት";
	    }
	    elseif ("Jun"==$me) {
	    	echo "ሰኔ";
	    }
	    elseif ("Jul"==$me) {
	    	echo "ሀምሌ";
	    }
	    elseif ("Aug"==$me) {
	    	echo "ነሀሴ";
	    }
	echo "</br>";
	echo date('d-m-y');
	echo "</br>";
	echo date("h:i:s");
	$d=date("A");
	if("AM"==$d){
		echo"&nbsp;&nbsp; ጥዋት";
	}
	else{
		echo"&nbsp;&nbsp; ከሰዓት በኋላ";
	}
	?>

</div>
     </div>
        <form style="margin-left: 300px; margin-right: 840px;">
	<!--<textarea rows="10" cols="30" placeholder="Weatehr Riport in DTU">-->
        <div style="size: 30px;">
 	    <p style="margin:0; display: inline;"><img src="/dtu/image/cc.jpg" width="150" height="70" border="0" /></p>

	  <p style="text-align: center; font-size:35px;transform: translate(0);font-family: times new roman;color: #000000; text-shadow: 1px 1px 1px #919191,
1px 2px 1px #919191,
1px 3px 1px #919191,
1px 4px 1px #919191,
1px 5px 1px #919191,
1px 6px 1px #919191,
1px 7px 1px #919191,
1px 8px 1px #919191,
1px 9px 1px #919191,
1px 10px 1px #919191;margin: 0; display: inline;" align="right">
		<?php
		// desplay temperature value
		$dbname = 'dtu_weather_condition';
        $dbuser = 'root';  
        $dbpass = ''; 
        $dbhost = 'localhost'; 
        $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if(isset($_POST['temperature']))
        {
	         $query="select maximum from temperature where Date=date(now())";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "</br>";
	         	echo "$max";
	         	echo "  °c";
	         	echo "</br>";
	         }
	         $query="select minimum from temperature where Date=date(now())";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "       $min";
	         	echo "  °c";
	         }
	         $averag=($max+$min)/2;
	         if($averag>30)	
	         {
	         	echo "</br>";
	         	echo "ሞቃት";
	         }
	         elseif ($averag>20 && $averag<30)
	          {
	         	echo "</br>";
	         	echo "መካከለኛ";
	         }
	         else
	         {
	         	echo "</br>";
	         	echo "ቀዝቃዛ";
	         }
        }
        //desplay the humidity value on the textarea
      elseif(isset($_POST['humidity']))
             {
	         $query="select maximum from humidity where Date=date(now())";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "</br>";
	         	echo "       $max";
	         	echo "  %";
	         	echo "</br>";
	         }
	         $query="select minimum from humidity where Date=date(now())";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "\n";
	         	echo "       $min";
	         	echo "  %";
	         }
	         	         $averag=($max+$min)/2;
	         if($averag>30)	
	         {
	         	echo "</br>";
	         	echo "        ቀዝቃዛ";
	         }
	         elseif ($averag>20 && $averag<30) {
	         	echo "</br>";
	         	echo "        መካከለኛ";
	         }
	         else
	         {
	         	echo "</br>";
	         	echo "        ሞቃት";
	         }
	         	
        }
        // desplay the rain status
             elseif(isset($_POST['rain']))
             {
	         $query="select maximum from rain where Date=date(now())";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "</br>";
	         	echo "       $max";
	         	echo "  %";
	         }
	         $query="select minimum from rain where Date=date(now())";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "</br>";
	         	echo "       $min";
	         	echo "  %";
	         }
	         	         $averag=($max+$min)/2;
	         if($averag<300)	
	         {
	         	echo "</br>";
	         	echo "በአብዛኛው_ደመናማ";
	         }
	         elseif ($averag>300 && $averag<900)
	          {
	         	echo "</br>";
	         	echo "        ከፊል_ደመናማ";
	         }
	         else
	         {
	         	echo "</br>";
	         	echo "       ፀሀያማ";
	         }
        }
        else
        {
	         $query="select maximum from temperature where Date=date(now())";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "</br>";
	         	echo "$max";
	         	echo "  °c";
	         	echo "</br>";
	         }
	         $query="select minimum from temperature where Date=date(now())";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "       $min";
	         	echo "  °c";
	         }
	         $averag=($max+$min)/2;
	         if($averag>30)	
	         {
	         	echo "</br>";
	         	echo "ሞቃት";
	         }
	         elseif ($averag>20 && $averag<30)
	          {
	         	echo "</br>";
	         	echo "መካከለኛ";
	         }
	         else
	         {
	         	echo "</br>";
	         	echo "ቀዝቃዛ";
	         }   	
        }
	?>
</p>
</div>

	<!--</textarea>-->
</form >

	<form method="post" style="margin-left: 400px;">
	<button type="submit" name="temperature">
		<img src="/dtu/image/trmp.jpg" width="80" height="80" border="-30" />
	</button>
          <!--add speace between to images-->
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button type="submit" name="humidity">
		<img src="/dtu/image/te.jpg" width="80" height="80" />
	</button>
         <!--add speace between to images-->
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button type="submit" name="rain" >
		<img src="/dtu/image/rain.jpg" width="80" height="80" />
	</button><br>

	<p style="margin: 0; display: inline; text-align: center;  font-size:20px;font-family: times new roman;font-weight: bold; text-shadow: 2px 2px #ff9900;">የሙቀት መጠን</p>
	  <!--add speace between to paragraphs-->
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  	      <p style="margin: 0; display: inline;text-align: center;  font-size:20px;font-family: times new roman;font-weight: bold; text-shadow: 2px 2px #ff9900;" align="right">የአየር እርጥበት</p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <p style="margin: 0; display: inline;text-align: center;  font-size:20px;font-family: times new roman;font-weight: bold; text-shadow: 2px 2px #ff9900;"align="right">የዝናብ መጠን</p>
	<div class="con">
		<div class="btn">
	       <a href="/dtu/data2.php">የሳምንቱ ዝርዝር</a>
		</div>
	</div>
	</form>
</body>
</html>