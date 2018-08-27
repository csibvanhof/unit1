<!DOCTYPE html>		<!--	Brad VH  unit1_02.php		-->
<html>

<head>	<title>BVH Unit1_02</title>	</head>

<body>
	<?php
		$atms = array("LK01" => "Blue Lakes",
					  "LK02" => "Washington",
					  "LK03" => "Jerome",
					  "LK04" => "Mt. Home",
					  "LK05" => "Boise",
					  "LK06" => "Broadway",
					  "LK07" => "Overland",
					  "LK08" => "Emerald",
					  "LK09" => "Ustick",
					  "LK10" => "Franklin");

		print "<table>\n";
		foreach ($atms as $key => $value)	{
				print "<tr>";
				print "<td>" . $key . "</td>";
				print "<td>" . $value . "</td>";
				print "</tr>\n";
			};
		print "</table>";

		$atms["LK11"] = '12th';
		$atms["LK12"] = 'Cleveland';
		$atms["LK06"] = 'Number06';

		print "<table>\n";
		foreach ($atms as $key => $value)	{
				print "<tr>";
				print "<td>" . $key . "</td>";
				print "<td>" . $value . "</td>";
				print "</tr>\n";
			};
		print "</table>";
		
	?>
</body>

</html>
