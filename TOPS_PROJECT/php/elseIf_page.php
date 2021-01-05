<?php

$par =70;
if($par >= 80  &&  $par <=100)
{
	echo "You are in Merit";
}
else if($par >=60 && $par <=79)
{	echo "You are in Ist Div";

}
else if($pre >=50 && $pre <=60)
{
	echo "You are in IIst Div";
}
else if($par >= 49 && $par <= 34)
{
		echo "You are in IIIst Div";
}
else if($par < 32)
{
	echo "Fail";
}
else
{
	echo "Please Enter Propare result";
}
?>