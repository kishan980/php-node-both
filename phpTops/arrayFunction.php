<?php

$car = ["kishan", "ritu","shoya","shomya"];
// echo $car;

print_r($car)."<hr>";
echo "<hr>";
?>

<?php

    $age = ["peter"=>35,"Ben"=>37,"Joe"=>43];
     print_r($age);
     echo "<hr>";
?>

<?php
    $car = ["kishan","rahul","ajay","karan","deepak"];
    $arrayCount = count($car);
    echo $arrayCount;
    for($x=0; $x<$arrayCount; $x++){
        {
            echo $car[$x];
            echo "<br>";
        }
    }
echo "<hr>";
?>

<?php
    $age = ["kishan"=>23,"ritu"=>26, "ajay"=>26,"karan"=>23];
    foreach($age as $kery=>$val){
        echo $kery."=>Age=)".$val."<br>";
    }
echo "<hr>";
?>

<?php
$car = [

        ["kishan","shiya","riya","jiya"],
        ["anup","kiran","aja"],
        [41,52,63]
];
    echo $car[0][0],',',$car[0][1],',',$car[0][2],',',$car[0][3]."<br>";
    echo $car[1][0],',',$car[1][1],',',$car[0][2]."<br>";
echo "<hr>";
?>

<?php
    $a = [
        [
          'id' => 5698,
          'first_name' => 'Peter',
          'last_name' => 'Griffin',
        ],
        [
          'id' => 4767,
          'first_name' => 'Ben',
          'last_name' => 'Smith',
        ],
        [
          'id' => 3809,
          'first_name' => 'Joe',
          'last_name' => 'Doe',
        ]
        ];
$last_names = array_column($a, 'last_name');
print_r($last_names);
echo "<hr>";
?>

<?php

    $arr =["A","Cat","Dog","A","dog"];
    print_r(array_count_values($arr));
    echo "<hr>";
?>

<?php

    $a1 =["a"=>"red","b"=>"green", "c"=>"blue", "d"=>"yellow"];
    $b3 =["e"=>"red","f"=>"green", "g"=>"blue"];
    $resut = array_diff($a1,$b3);
    print_r($resut);
    echo "<hr>";
?>

<?php

    $a1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
    $b1 = ["e"=>"red","f"=>"blck","g"=>"purple"];
    $c = ["a"=>"red","b"=>"back","h"=>"yello"];
    echo "<hr>";
?>

<?php
    echo "<pre>";
    $cars =["Volvo","BWM","Toyota","Hand","Merce","Opel"];
    print_r($cars);
    print_r(array_chunk($cars,4));
    echo "<hr>";
?>

<?php

        
            $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
            $result=array_flip($a1);
            print_r($result);
        echo "<hr>";
?>
<?php
function myfunction($num)
{
  return($num*$num);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));
echo "<hr>";
?>
<?php

    $a1 =["red","green"];
    $b1=["blue","yellow"];
    print_r(Array_merge($a1,$b1));

?>


<?php

    $array = ["red","green","blue"];
    $pop =array_pop($array);
    print_r($pop);
    echo "<hr>";
?>

<?php

    $array = ["red","green"];
    $push =array_push($array,"kishan","shiya");
    print_r($array);
    print_r($push);
    echo "<br>";
?>

<?php

$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];
print_r($random_keys);
?>


<?php

$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,4,5));
?>

<?php
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,-5,1));
?>