<!DOCTYPE html>
<html>
<head>
	<title> date function</title>
</head>
<body>
		<h1 align="center">date function</h1>
		  <?php 
			//date function
			echo "today is :".date("m/d/Y")."<br>";
			echo date("l");
			echo date("D");

			//Date creation
			$date= date_create("2021-04-12");
			date_add($date,date_interval_create_from_date_string("10days"));
			echo date_format($date,"Y-m-d");


			$now=getdate();
			echo "<br>";
			echo "now".$now['hours'].":".$now['minutes'].":".$now['seconds']."on".$now['mday'].":".$now['mon'].":".$now['year'];
			echo "<br>";
			
			
			//last Sunday
			$startDate = strtotime("12 April 2021");

			
			echo date("Y-m-d",strtotime("last Sunday",$startDate));
			
			
			
           
		?>
</body>
</html>