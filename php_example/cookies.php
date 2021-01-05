<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
</head>
<body>
	<?php
			$namecookie = "user";
			$cookieValue = "kishan yadav";


			setcookie($namecookie,$cookieValue,time()+(86400*1),"/");

	?>

	<?php

	//echo $_COOKIE[$namecookie];
	//echo $_COOKIE[$cookieValue];

	if(!isset($_COOKIE[$namecookie])){
		echo "Not set cookie";
	}else{
		echo  $_COOKIE[$namecookie];
	}
	?>
</body>
</html>