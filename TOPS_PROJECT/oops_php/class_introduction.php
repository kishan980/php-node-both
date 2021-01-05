<?php
class calculation 
{
	public $a, $b,$c;
	function sum()
	{
		return $this->c = $this->a+$this->b;
	}
	function sub()
	{
		return $this->c = $this->a-$this->b;
	}
}
 $c1 = new calculation();
 $c1->a=10;
 $c1->b=20;
 echo $c1->sum();
 echo "<br>";
 echo $c1->sub();
 echo "<br>";
 echo $c1->sub();
?>