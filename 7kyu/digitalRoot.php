<?php
// Digital root is the recursive sum of all the digits in a number.

// Given n, take the sum of the digits of n. If that value has more than one digit, continue reducing in this way until a single-digit number is produced. The input will be a non-negative integer.

// Examples
//     16  -->  1 + 6 = 7
//    942  -->  9 + 4 + 2 = 15  -->  1 + 5 = 6
// 132189  -->  1 + 3 + 2 + 1 + 8 + 9 = 24  -->  2 + 4 = 6
// 493193  -->  4 + 9 + 3 + 1 + 9 + 3 = 29  -->  2 + 9 = 11  -->  1 + 1 = 2

function digital_root($number): int
{
  $arrayNumbers = str_split("$number");
	$length = count($arrayNumbers);
	$repeated = 0;
	
	for($i=0;$i<$length;$i++) {
		if($arrayNumber[$i] === $arrayNumber[$i+1]){
			$repeated = $arrayNumber[$i];
		}
	}
	if($repeated != 0) {
		$arrayNumbers = array_filter(
      $arrayNumbers, 
      function ($num) { 
        $num != $repeated; 
    	}
    );
	}
	$somaNumbers = 0;

	while ($length > 1) {
		foreach ($arrayNumbers as $number) {
			$somaNumbers += $number;
		}
		$arrayNumbers = str_split("$somaNumbers");
		$length = count($arrayNumbers);
		if($length > 1) {
			$somaNumbers = 0;
		}
	}

  return $somaNumbers;
}
?>