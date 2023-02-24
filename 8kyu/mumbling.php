<?php
// This time no story, no theory. The examples below show you how to write function accum:

// Examples:
// accum("abcd") -> "A-Bb-Ccc-Dddd"
// accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
// accum("cwAt") -> "C-Ww-Aaa-Tttt"
// The parameter of accum is a string which includes only letters from a..z and A..Z.

// Solution

function accum($s) {
  $length = strlen($s);
	$letra = "";
	$string = "";
	for($i=1;$i<=$length;$i+=1) {
		for($j=0;$j<$i;$j+=1) {
			if($j === 0){
				$letra .= strtoupper($s[$i-1]);
			} else {
				$letra .= strtolower($s[$i-1]);
			}
	  	}
		if($i === 1) {
			$string .= "{$letra}";
		} else {
			$string .= "-{$letra}";
		}
		$letra = "";
	}
	return $string;
}
?>