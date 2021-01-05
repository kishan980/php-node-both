<?php
class math{
	function add($a,$b){
		return $c = $a+$b;
	}

}
$class = new math();

	if(isset($_POST["btn-add"]))
	{		
		echo $class->add($_POST["val1"],$_POST["val2"]);
	}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="val1">
        <input type="text" name="val2">
        <input type="submit" name="btn-add">
    </form>
</body>
</html>