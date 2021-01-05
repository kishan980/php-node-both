<?php

    $d = Date("D");
    if($d == "fir"){
        echo "Have a nice Weekend";
    }
?>



<?php

    $date  = Date("D");
    if($d == "Fri"){
        echo "have nice day weeked day";
    } else {
        echo "have a nice day";
    }
    echo "<hr>";
?>

<?php

    $dateOf = date("D");
    if($dateOf == "Fri"){
        echo "have a nice Weeked";
    } else if($dateOf == "Sun"){
        echo "have a nice Sunday";
    } else {    
        echo "have a nice day";
    }
    echo "<hr>";
?>


<?php
    $age = 18;
    if($age < 18){
        echo "Chiled";
    } else {
        echo "Adult";
    }
    echo "<hr>";
?>

<?php

    echo ($age <18) ?'child' : 'Adult'; 
    echo "<hr>";
?>

<?php
    $overTime = 60;
    if($overTime <= 50){
        $pay_amt =1200;
        $medical = 1000;
        echo "pay Amount :$pay_amt : Medical : $medical";
    } else{
        $pay_amt =12000;
        $medical =15000;
        echo "pay Amount : $pay_amt: Mediacl : $medical";
    }
    echo "<hr>";
?>

<?php
    $age =25 ;
    if($age <= 30){
        echo "You are not allowed to consume alchohol";
    }
    echo "<hr>";
?>
<?php

    $age =25; 
    if($age <=24){
        echo "You are not allowed to consume alchohol";
    } else {
        echo "enjoy the drink";
    }
    echo "<hr>";
?>

<?php

    $speed =110;
    if($speed < 60){
        echo "Safe driving speed";
    } else if($speed > 60 && $speed < 110){
          echo "You are burning extra fuel";
    } else {
        echo "Its dangers";
    }
    echo "<hr>";
?>



<?php
    for($i=1; $i<=5; $i++){
        echo "$i <br>";
    }
    echo "<hr>";

    for ($n=5; $n>=1; $n-- )
    {
        echo $n."<br>";
    }
    echo "<hr>";
?>

<?php 
    $num =5;
    for($i=0; $i<$num; $i++){
        
            for($j=0; $j<=$i; $j++){
                echo "*";
            }
            echo "<br>";
    }
?> 

<?php
    $addNum =5;
    for($s =0; $s<$addNum; $s++){
        for($k=$addNum; $k>$s+1; $k--){
            echo " ";
        } 
        for($j =0; $j<=$s; $j++){
            echo "*";
        } 
        echo "<br>";
    }
?>
    

    <?php

        $n=5;
        $i;
        $j;
        $k;

        for($i=1;$i<=$n;$i++){
            for($j=$n-1;$j>=$i;$j--){
                echo " ";
            }
            for($k=1; $k<=$i; $k++){
                echo "*";
            }
            echo "<br>";
        }
    ?>

    <?php
        $n= 5;
        $i;
        $j;
        for($i=1; $i<=$n; $i++){
            for($j=$n; $j>=1;$j--){
                if($i>=$j){
                    echo "*";
                } else {
                    echo " ";
                }
            }
            echo "<br>";
        }
        echo "<br>";
    ?>

    <?php
function print_pattern($num)
{
// Outer loop handles number of rows
for ($i = 0; $i < $num; $i++)
{
// inner loop handles indentation
for($k = $num; $k > $i+1; $k-- )
{
// Print spaces
echo " ";
}
// inner loop handles number of stars
for($j = 0; $j <= $i; $j++ )
{
// Print stars
echo "* ";
}
// go to new line after each row pattern is printed
echo "<br>";
}
}
//Call function and send number of lines as parameter
$num = 5;
print_pattern($num);
?>


<?php
function print_pattern1($num)
{
// The Upper Half Pattern
// Outer loop handles number of rows
for ($i = 0; $i < $num; $i++)
{
// inner loop handles indentation
for($k = $num; $k > $i+1; $k-- )
{
// Print spaces
echo " ";
}
// inner loop handles number of stars
for($j = 0; $j <= $i; $j++ )
{
// Print stars
echo "* ";
}
// go to new line after each row pattern is printed
echo "<br>";
}
// The Lower Half Pattern
// Outer loop handles number of rows
for ($i = $num-1; $i > 0; $i--)
{
// inner loop handles indentation
for($k = $num-1; $k >= $i; $k-- )
{
// Print spaces
echo " ";
}
// inner loop handles number of stars
for($j = 0; $j < $i; $j++ )
{
// Print stars
echo "* ";
}
// go to new line after each row pattern is printed
echo "<br>";
}
}
//Call function and send number of lines as parameter
$num = 5;
print_pattern1($num);
?>