<html>
<head>
	<title>Delete reservation</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
<p><a href="reservation.php">Go Back</a></p>
<form action=delemenu.php method=POST>
<?php
	include "connection.php";
	//include "index.php";

	$qrysel="select * from menu";
	$rs=mysql_query($qrysel);
	echo "<table border=1>";
	echo "<tr>
		<th></th>
		<th>Item no.</th>
		<th>Item Name</th>
		<th>Rate</th>";

	while($v=mysql_fetch_array($rs))
	{
		echo"<tr>";
		echo "<td><input type=checkbox name=chkd".$v['id']." value=".$v['id']."></td>";
		echo "<td>".$v[0]."</td>";
		echo "<td>".$v[1]."</td>";
		echo "<td>".$v[2]."</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysql_free_result($rs);
	mysql_close();
?>
<input type="submit" name="s1" value="delete">
</form>
<marquee behavior=alternate><b><i>Powered By: Kunal Vaidya™</i></b></marquee>
</body>			
</html>