<!DOCTYPE html>		<!--	Brad VH  unit1_03.php		-->
<html>

<head>	<title>BVH Unit1_03</title>	</head>

<body>
	<?php
		$loops = 7;
		for ($x=0; $x < $loops; $x++)	{
				$sometext = say_hello($x);
				print $sometext;
		};

		function say_hello($x) {
			$xy=$x+1;
			$txt = "<p>Hello, World &nbsp" . $xy . "</p>";
			return $txt;
		};
	?>
</body>

</html>
