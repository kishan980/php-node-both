<?php
echo "The chr() function returns a character from the specified ASCII value.
The ASCII value can be specified in decimal, octal, or hex values. Octal values are defined by a leading 0, while hex values are defined by a leading 0x.";
echo chr(52)."<br>"; 
echo chr(052)."<br>";
echo chr(0x52)."<br>";
echo "<hr>";
echo "The implode() function returns a string from the elements of an array."."<br>";
$str ="hello world. it`s beautiful day";
print_r(explode(" ", $str));
echo "<hr>";
echo  "The join() function returns a string from the elements of an array.";
echo "<br>";
$array =["hello kishan yadav work for tops studen"];
echo join(" ", $array);
echo "<hr>";
echo "The md5() function calculates the MD5 hash of a string.";
echo "<br>";
$md5 = "hello kishan";
echo $md5;
echo "<hr>";
echo md5($md5);
echo "<hr>";
echo "The number_format() function formats a number with grouped thousands.";
echo "<hr>";
echo number_format(10000000). "<br>";
echo number_format(10000000,2)."<br>";
echo number_format(100000000,3);
echo "<hr>";
echo  $str_pad = "hello kishan  str_pad";
echo "<hr>";
echo str_pad($str_pad, 20,'.');
echo "<hr>";
echo "The str_repeat() function repeats a string a specified number of times";
echo "<hr>";
echo strlen(str_repeat("hello sir", 10));
echo "<hr>";
echo "The str_replace() function replaces some characters with some other characters in a string.";
echo "<hr>";
echo $str_replce="<p>Search the string Hello world, find the value 'world' and replace it with </p>";
echo str_replace("world", "kishan",$str_replce);
echo "str_split";
echo "<hr>";
print_r(str_split("kishan"));
echo "<hr>";
echo $str_world_count="str_world_count hello world kishan yadav";
echo "<hr>";
echo str_word_count($str_world_count);
echo "strlen";
echo "<hr>";
echo $strlen = "hello kishan yadav";
echo "<hr>";
echo strlen($strlen);
echo $substr ="hello kishan";
echo "<hr>";
echo substr($substr,5);
echo "<hr>";
echo ucfirst(ucwords("kishan yadav"));
echo "<hr>";
echo $trim  = trim("   kishna   yadav   ");
?>