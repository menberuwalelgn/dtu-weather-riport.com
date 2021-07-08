<!DOCTYPE html>
<html>
<head>
<title>Full Riport</title>
<style media="screen">
	.con{
		width: 600px;
		display: flex;
		flex-wrap: wrap;
		justify-content: space-around;
	}
	.con .btn {
		position: relative;
		width: 155px;
		height: 50px;
		margin: 20px;
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
	.con .btn 

</style>
</head>
<body style="background-color:#c4c4c4 ">
	<div style="font-size:25px;font-family: times new roman;font-weight: bold; text-align: right; padding-right: 90px;padding-top: 20px;color:#000000;
       text-shadow: 1px 1px 1px #919191,
1px 2px 1px #919191,
1px 3px 1px #919191,
1px 4px 1px #919191,
1px 5px 1px #919191,
1px 6px 1px #919191,
1px 7px 1px #919191,
1px 8px 1px #919191,
1px 9px 1px #919191,
1px 10px 1px #919191;">
		<p>DEBRE TABORE UNIVERSTY</p>
		<?php
	     $today= date("D ");
	     echo $today;
	     echo "</br>";
	     echo date('h:i:sa');
	    ?>
	    <div style="text-align: left;margin-left: 200px;">

	<p style="margin: 0; display: inline;text-align: center;  font-size:20px;font-family: times new roman;font-weight: bold; text-shadow: 2px 2px #ff9900;">
	    <img src="/dtu/image/cc.jpg" width="100" height="100" border="0" />
	</p>
	<p style="margin: 0; display: inline;text-align: center;  font-size:50px;font-family: times new roman;font-weight: bold; padding-left:20px;                           text-shadow: 1px 1px 1px #919191,
1px 2px 1px #919191,
1px 3px 1px #919191,
1px 4px 1px #919191,
1px 5px 1px #919191,
1px 6px 1px #919191,
1px 7px 1px #919191,
1px 8px 1px #919191,
1px 9px 1px #919191,
1px 10px 1px #919191;"align="right">
	     <?php
		// desplay temperature value on the textarea
		$dbname = 'dtu_weather_condition';
        $dbuser = 'root';  
        $dbpass = ''; 
        $dbhost = 'localhost'; 
        $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	        $query="select maximum from temperature where Date=date(now())";
	          //$query="select maximum from temperature where $last_id";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         
	         $query="select minimum from temperature where Date=date(now())";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	             
	             $ave=($max+$min)/2;
	             echo "";
	             echo "$ave";
	             echo " °c";
	         }}
	         ?>
	     </p>
	     <p style="margin: 0; display: inline;text-align: center;  font-size:20px;font-family: times new roman;font-weight: bold;padding-left:20px;        text-shadow: 1px 1px 1px #919191,
1px 2px 1px #919191,
1px 3px 1px #919191,
1px 4px 1px #919191,
1px 5px 1px #919191,
1px 6px 1px #919191,
1px 7px 1px #919191,
1px 8px 1px #919191,
1px 9px 1px #919191,
1px 10px 1px #919191;"align="right">
  <?php
	
		$dbname = 'dtu_weather_condition';
        $dbuser = 'root';  
        $dbpass = ''; 
        $dbhost = 'localhost'; 
        $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	 //display the average humidity value on the textarea
	        $query="select maximum from humidity where Date=date(now())";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         
	         $query="select minimum from humidity where Date=date(now())";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	             	
	             $ave=($max+$min)/2;
	             echo "humidity:";
	             echo "$ave";
	             echo "%";
	             echo "</br>";
	             }}
        ?>
    </p>
     <p style="margin: 0; display: inline;text-align: center;  font-size:20px;font-family: times new roman;font-weight: bold;padding-left:330px;text-shadow: 1px 1px 1px #919191,
1px 2px 1px #919191,
1px 3px 1px #919191,
1px 4px 1px #919191,
1px 5px 1px #919191,
1px 6px 1px #919191,
1px 7px 1px #919191,
1px 8px 1px #919191,
1px 9px 1px #919191,
1px 10px 1px #919191;"align="right">
  <?php
	
		$dbname = 'dtu_weather_condition';
        $dbuser = 'root';  
        $dbpass = ''; 
        $dbhost = 'localhost'; 
        $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
//display the average rain status on the textarea
	       $query="select maximum from rain where Date=date(now())";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         
	         $query="select minimum from rain where Date=date(now())";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	             
	             $ave=($max+$min)/2;
	             echo "Rain : ";
	             echo "$ave";
	             echo "%";
	             }
	         }

                 ?>
	</p>
	    </div>
	    </div><br>
    <form method="POST">
	<div style="margin-left: 160px;">
	    <button type="submit" name="temperature" value="submit"  style="position: relative;color: #000;text-transform: uppercase;letter-spacing: 2px;font-size: 15px;">Temperature </button>
	    <button type="submit" name="humidity" value="submit" style="position: relative;color: #000;text-transform: uppercase;letter-spacing: 2px;font-size: 15px;">Humidity </button> 
	   	<button type="submit" name="rain" value="submit" style="position: relative;color: #000;text-transform: uppercase;letter-spacing: 2px;font-size: 15px;">Rain </button>
	    </div><br><br>
</form>
<!--   list of 7 days information      -->
	<form method="post" style="margin-left: 150px;">
	<button type="submit" name="monday">
		<img src="/dtu/image/d6.jpg" width="80" height="70" border="0" />
	</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button type="submit" name="tuesday">
		<img src="/dtu/image/d5.jpg" width="80" height="70" border="0" />
	</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button type="submit" name="wednesday">
		<img src="/dtu/image/d4.jpg" width="80" height="70" border="0" />
	</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<form method="post">
	<button type="submit" name="thursday">
		<img src="/dtu/image/d3.jpg" width="80" height="70" border="0" />
	</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button type="submit" name="friday">
		<img src="/dtu/image/d2.jpg" width="80" height="70" border="0" />
	</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button type="submit" name="saturday">
		<img src="/dtu/image/d8.jpg" width="80" height="70" border="0" />
	</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button type="submit" name="sunday">
		<img src="/dtu/image/d7.jpg" width="80" height="70" border="0" />
	</button>
</form>
<div style="margin-left: 150px;">
	<textarea rows="2.5px" cols="10px"><?php
		//database connection
		$dbname = 'dtu_weather_condition';
        $dbuser = 'root';  
        $dbpass = ''; 
        $dbhost = 'localhost'; 
        $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        // desplay monday temperature riport
       if(isset($_POST['temperature']))
        {
         $date1=date("y-m-d");
         $d=date("D");
         for($i=0; $i<=6; $i++)
              {
               $date1=date("y-m-d",strtotime("-$i days"));
               $d=date("D",strtotime("-$i days"));

        	if("Mon"==$d)
        	{
	         $query="select maximum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " °c";
	         }
	         $query="select minimum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "\n";
	         	echo "$min";
	         	echo " °c";
	         }
	       }	
	      }
        }
        // desplay monday humidity riport
         elseif(isset($_POST['humidity']))
        {
          $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Mon"== $d)
        	  {
	         $query="select maximum from humidity where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " %";
	         	echo "\n";
	         }
	         $query="select minimum from humidity where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " %";
	           }
	         }
	       }	
        }
        // desplay monday rian riport
         elseif(isset($_POST['rain']))
        {
          $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Mon"== $d)
        	{
	         $query="select maximum from rain where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo "  %";
	         	echo "\n";
	         }
	         $query="select minimum from rain where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " %";
	            }
	          }
	        }	
        }
        else
        {
         $date1=date("y-m-d");
         $d=date("D");
         for($i=0; $i<=6; $i++)
              {
               $date1=date("y-m-d",strtotime("-$i days"));
               $d=date("D",strtotime("-$i days"));

        	if("Mon"==$d)
        	{
	         $query="select maximum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " °c";
	         }
	         $query="select minimum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "\n";
	         	echo "$min";
	         	echo " °c";
	         }
	       }	
	      }
        }
       ?>
	</textarea>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<textarea rows="2.5px" cols="10px"><?php
		//database connection
		$dbname = 'dtu_weather_condition';
        $dbuser = 'root';  
        $dbpass = ''; 
        $dbhost = 'localhost'; 
        $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        // desplay tuesday temperature riport
         if(isset($_POST['temperature']))
        {
        $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Tue"== $d)
        	{
	         $query="select maximum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " ­°c";
	         	echo "\n";
	         }
	         $query="select minimum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " °c";
	            }
	          }
	        }	
        }
        // desplay tuesday humidity riport
         elseif(isset($_POST['humidity']))
        {
          $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Tue"== $d)
        	{
	         $query="select maximum from humidity where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " %";
	         	echo "\n";
	         }
	         $query="select minimum from humidity where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " %";
	            }
	          }
	        }	
        }
        // desplay tuesday rian riport
         elseif(isset($_POST['rain']))
        {
          $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Tue"== $d)
        	{
	         $query="select maximum from rain where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " %";
	         	echo "\n";
	         }
	         $query="select minimum from rain where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " %";
	            }
	           }
	        }	
        }
        else
        {
        $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Tue"== $d)
        	{
	         $query="select maximum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " ­°c";
	         	echo "\n";
	         }
	         $query="select minimum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " °c";
	            }
	          }
	        }	
        }
       ?>
	</textarea>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<textarea rows="2.5px" cols="10px"><?php
		//database connection
		$dbname = 'dtu_weather_condition';
        $dbuser = 'root';  
        $dbpass = ''; 
        $dbhost = 'localhost'; 
        $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        // desplay wednesday temperature riport
         if(isset($_POST['temperature']))
        {
          $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Wed"== $d)
        	{
	         $query="select maximum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " °c";
	         	echo "\n";
	         }
	         $query="select minimum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " °c";
	            }
	           }
	        }	
        }
        // desplay wednesday humidity riport
         elseif(isset($_POST['humidity']))
        {
          $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Wed"== $d)
        	{
	         $query="select maximum from humidity where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " %";
	         	echo "\n";
	         }
	         $query="select minimum from humidity where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " %";
	            }
	          }
	        }	
        }
        // desplay wednesday rian riport
         elseif(isset($_POST['rain']))
        {
           $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Wed"== $d)
        	{
	         $query="select maximum from rain where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " %";
	         	echo "\n";
	         }
	         $query="select minimum from rain where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " %";
	            }
	          }
	        }	
        }
        else
        {
          $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Wed"== $d)
        	{
	         $query="select maximum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " °c";
	         	echo "\n";
	         }
	         $query="select minimum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " °c";
	            }
	           }
	        }	
        }
       ?>
	</textarea>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<textarea rows="2.5px" cols="10px"><?php
		//database connection
		$dbname = 'dtu_weather_condition';
        $dbuser = 'root';  
        $dbpass = ''; 
        $dbhost = 'localhost'; 
        $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        // desplay thursday temperature riport
         if(isset($_POST['temperature']))
        {
          $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Thu"== $d)
        	{
	         $query="select maximum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo "  °c";
	         	echo "\n";
	         }
	         $query="select minimum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo "  °c";
	           }
	         }
	        }	
        }
        // desplay thursday humidity riport
         elseif(isset($_POST['humidity']))
        {
          $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Thu"== $d)
        	{
	         $query="select maximum from humidity where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " %";
	         	echo "\n";
	         }
	         $query="select minimum from humidity where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " %";
	           }
	         }
	        }	
        }
        // desplay thursday rian riport
         elseif(isset($_POST['rain']))
        {
          $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Thu"== $d)
        	{
	         $query="select maximum from rain where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " %";
	         	echo "\n";
	         }
	         $query="select minimum from rain where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " %";
	            }
	           }
	        }	
        }
        else
        {
          $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Thu"== $d)
        	{
	         $query="select maximum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo "  °c";
	         	echo "\n";
	         }
	         $query="select minimum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo "  °c";
	           }
	         }
	        }	
        }
       ?>
	</textarea>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<textarea rows="2.5px" cols="10px"><?php
		//database connection
		$dbname = 'dtu_weather_condition';
        $dbuser = 'root';  
        $dbpass = ''; 
        $dbhost = 'localhost'; 
        $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        // desplay friday temperature riport
         if(isset($_POST['temperature']))
        {
          $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Fri"== $d)
        	{
	         $query="select maximum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " °c";
	         	echo "\n";
	         }
	         $query="select minimum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " °c";
	           }
	          }
	        }	
        }
        // desplay friday humidity riport
         elseif(isset($_POST['humidity']))
        {
           $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Fri"== $d)
        	{
	         $query="select maximum from humidity where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " %";
	         	echo "\n";
	         }
	         $query="select minimum from humidity where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " %";
	          }
	         }
	        }	
        }
        // desplay friday rian riport
         elseif(isset($_POST['rain']))
        {
          $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Fri"== $d)
        	{
	         $query="select maximum from rain where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " %";
	         	echo "\n";
	         }
	         $query="select minimum from rain where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " %";
	          }
	         }
	        }	
        }
        else{
          $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Fri"== $d)
        	{
	         $query="select maximum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " °c";
	         	echo "\n";
	         }
	         $query="select minimum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " °c";
	           }
	          }
	        }	
        }
       ?>
	</textarea>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<textarea rows="2.5px" cols="10px"><?php
		//database connection
		$dbname = 'dtu_weather_condition';
        $dbuser = 'root';  
        $dbpass = ''; 
        $dbhost = 'localhost'; 
        $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        // desplay saturday temperature riport
     if(isset($_POST['temperature']))
        {
         $date1=date("Y-m-d");
         $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));

        	if("Sat"==$d)
        	{
	         $query="select maximum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " °c";
	         	echo "\n";
	         }
	         $query="select minimum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " °c";
	            }
	           }
	        }	
        }
        // desplay saturday humidity riport
         elseif(isset($_POST['humidity']))
        {
          $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));	
        	if("Sat"== $d)
        	{
	         $query="select maximum from humidity where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " %";
	         	echo "\n";
	         }
	         $query="select minimum from humidity where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " %";
	        }
	        }
	       }	
        }
        // desplay saturday rian riport
         elseif(isset($_POST['rain']))
        {
          $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Sat"== $d)
        	{
	         $query="select maximum from rain where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " %";
	         	echo "\n";
	         }
	         $query="select minimum from rain where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " %";
	        }
	        }       
	       }	
        }
        else
        {
         $date1=date("Y-m-d");
         $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));

        	if("Sat"==$d)
        	{
	         $query="select maximum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " °c";
	         	echo "\n";
	         }
	         $query="select minimum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " °c";
	            }
	           }
	        }	
        }
       ?>
	</textarea>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<textarea rows="2.5px" cols="10px"><?php
		//database connection
		$dbname = 'dtu_weather_condition';
        $dbuser = 'root';  
        $dbpass = ''; 
        $dbhost = 'localhost'; 
        $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        // desplay sunday temperature riport
         if(isset($_POST['temperature']))
        {
          $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));        	
        	if("Sun"== $d)
        	{
	         $query="select maximum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " °c";
	         	echo "\n";
	         }
	         $query="select minimum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " °c";
	        }
	        }
	      }	
        }
        // desplay sunday humidity riport
         elseif(isset($_POST['humidity']))
        {
           $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Sun"== $d)
        	{
	         $query="select maximum from humidity where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " %";
	         	echo "\n";
	         }
	         $query="select minimum from humidity where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " %";
	          }
	         }
	        }	
        }
        // desplay sunday rian riport
         elseif(isset($_POST['rain']))
        {
          $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));
        	if("Sun"== $d)
        	{
	         $query="select maximum from rain where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " %";
	         	echo "\n";
	         }
	         $query="select minimum from rain where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " %";
	          }
	         }
	        }	
        }
        else
        {
          $date1=date("Y-m-d");
          $d=date("D");
         for($i=0; $i<=6; $i++)
              {
   
             $date1=date("Y-m-d",strtotime("-$i days"));
             $d=date("D",strtotime("-$i days"));        	
        	if("Sun"== $d)
        	{
	         $query="select maximum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$max= $row['maximum'];
	         	echo "$max";
	         	echo " °c";
	         	echo "\n";
	         }
	         $query="select minimum from temperature where Date='$date1'";
             $result = mysqli_query($connect,$query);
	         while($row=mysqli_fetch_array($result))
	         {
	         	$min= $row['minimum'];
	         	echo "$min";
	         	echo " °c";
	        }
	        }
	      }	
        }
       ?>
	</textarea>
	<div class="con">
		<div class="btn">
			<a href="/dtu/comment.php/">Send comment</a>
		</div>
		</div>
</div>
</body>
</html>