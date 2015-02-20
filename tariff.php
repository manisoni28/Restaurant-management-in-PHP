<html>
<head>
	<title>tariff</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
	include "index.php";
?>
<br><br>
<div id="center"><b><i><u>TARIFF & POLICIES</u></i></b></div>
<br><br>
<?php
	include "connection.php";
	$stmt="select * from tariff";
	$rowset=mysql_query($stmt);
	if(!$rowset)
	{
		echo "<h1>In correct mysql select Query.</h1>";
		die($stmt);
	}
	echo "<center>";
	echo "<table border=1>";
	echo "<caption><font color='#7c0000' size=4><b><i>ROOM TARIFF</i></b></font></caption>";
	echo "<tr><th>ROOM</th><th colspan=2>INR</th><th colspan=2>CND</th><th>AVAILABLE</th><th>TOTAL</th></tr>";
	echo "<tr><th>TYPE</th><th>SINGLE</th><th>DOUBLE</th><th>SINGLE</th><th>DOUBLE</th><th>ROOM</th><th>ROOM</th></tr>";
	
	while($result=mysql_fetch_array($rowset))
	{
		echo "<tr>";
		echo "<td>".$result['type']."</td>";
		echo "<td>".$result[1]."</td>";
		echo "<td>".$result[2]."</td>";
		echo "<td>".$result[3]."</td>";
		echo "<td>".$result[4]."</td>";
		echo "<td>".$result[5]."</td>";
		echo "<td>".$result[6]."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>
<br><br>

<table class = "table2">
<tr>
	<td>
	<ul class="b">
	<div id = "roominfo"><li>POLICIES:</div>
		<ul class="a">
		<li class="a">Check in 12 hours.
		<li class="a">Check out 12 hours.
		<li class="a">Goverment taxes extra as applicable
		<li class="a">Inr Rs.700 (13 CND) for extra person/bed.
	</ul>
	<br> 
	<div id = "roominfo"><li>RESERVATION GURANTEE:</div>
	<ul class="a">
		<li class="a">All booking are confirmed after payment of the initial deposit amount<br>
		and payment can be done through money deposit or through travel agency.
	</ul>	
	<br>
	<div id = "roominfo"><li>RESERVATION CANCELLATION :</div>
	<ul class="a">
		<li class="a">Reservation must be cancelled 24 hours prior to the <br>planned arrival time.
		<li class="a">One night room charges can be waived in case of non-arival.
	</ul>
	</ul>
</table>
<marquee behavior=alternate><b><i>Powered By: Kunal Vaidya™</i></b></marquee>
</body>
</html>
	