<?php include_once('dbconnect.php')?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
 <title>Tables Example</title>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />

<style>
table,th,td
{
border:2px solid red;
border-collapse:collapse;
border-spacing:5px;
text-align:center;
}
</style>

</head>

<body>
 
 <!--<a> is anchor tag -->
 <h3> <a href="http://google.com"> My World</a> | <a href="http://google.com"> Your World </a> | 
 	<a href="http://google.com"> Our World</a></h3>
 
 <p>
 	Team Beatles!!
 </p>
 
<p>
	<table style="width:400px" border=1>
		<tr>
  			<th>First Name</th>
  			<th>Last Name</th> 
  			<th>Age</th>
  			<th>Activity</th>
		</th>
		

		<?php
			$query = "SELECT * FROM beatles";
			$result = mysql_query($query) or die(mysql_error());

			while($row = mysql_fetch_array($result)){
				echo "<tr>";
					echo "<td>$row[firstname]</td>";
					echo "<td>$row[lastname]</td>";
					echo "<td>$row[age]</td>";
					echo "<td>$row[activity]</td>";
				echo "</tr>";
			}
		?>
	</table>	
<p>
 
<p>
	<h3 style="font-family:verdana;color:red">My List of Favorite bands are: </h3>
	
	<ul>
		<li style="color:red">The Beatles</li>
		<li style="color:blue">Pink Floyd</li>
		<li style="color:green">Led Zeppelin</li>
	</ul>
</p>
 
</body>
</html>

