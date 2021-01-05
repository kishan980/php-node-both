<!-- <?php
function print_pattern($num)
{
// Outer loop handles number of rows
for ($i = 0; $i < $num; $i++)
{
// inner loop handles indentation

// inner loop handles number of stars
for($j = 0; $j <= $i; $j++ )
{
// Print stars
echo "* ";
}
for($k = $num; $k > $i+1; $k-- )
{
// Print stars
echo "  ";
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

    $n =6;
    $i;
    $j;
    $k;
    for($i =1; $i<=$n; $i++){
            for($j=$n-1; $j>=$i; $j--){
                echo " ";
            } 
            for($k=1; $k<$i; $k++){
                echo " * ";
            }
            echo "<br>";
    }
?>

<?php 
// PHP code to demonstrate 
// star pattern 

// Function to demonstrate 
// printing pattern 
function pypart2($n) 
{ 
	for ($i = 1; $i <= $n; $i++) { 
		for ($j = 1; $j <= $n; $j++) { 
			if($j<=($n-$i)){ 
				echo " "; 
				
			}else { 
				echo "* "; 
			} 
			
		} 
		echo "<br>"; 
	} 
} 

	// Driver Code 
	$n = 5; 
	pypart2($n); 

?>  -->


<?php 
// PHP code to demonstrate 
// star pattern 
  
// Function to demonstrate  
// printing pattern 
function triangle($n) 
{ 
      
    // number of spaces 
    $k = 2 * $n - 2; 
  
    // outer loop to handle 
    // number of rows 
    // n in this case 
    for ($i = 0; $i < $n; $i++) 
    { 
          
        // inner loop to handle 
        // number spaces 
        // values changing acc.  
        // to requirement 
        for ($j = 0; $j < $k; $j++) 
            echo " "; 
  
        // decrementing k after 
        // each loop 
        $k = $k - 1; 
  
        // inner loop to handle  
        // number of columns 
        // values changing acc.  
        // to outer loop 
        for ($j = 0; $j <= $i; $j++ ) 
        { 
              
            // printing stars 
            echo "* "; 
        } 
  
        // ending line after 
        // each row 
        echo "<br>"; 
    } 
} 
  
    // Driver Code 
    $n = 5; 
    triangle($n); 
      
?> 

<?php 
// PHP code to demonstrate 
// printing pattern of numbers 

// Function to demonstrate 
// printing pattern 
function numpat($n) 
{ 
	
	// initializing starting number 
	$num = 1; 

	// outer loop to handle 
	// number of rows 
	// n in this case 
	for ($i = 0; $i < $n; $i++) 
	{ 

		// inner loop to handle 
		// number of columns 
		// values changing acc. 
		// to outer loop 
		for ($j = 0; $j <= $i; $j++ ) 
		{ 
			
			// printing number 
			echo $num." "; 
		} 
		
			// incrementing number 
			// at each column 
			$num = $num + 1; 

		// ending line after 
		// each row 
		echo "<br>"; 
	} 
} 

	// Driver Code 
	$n = 5; 
	numpat($n); 

?> 
