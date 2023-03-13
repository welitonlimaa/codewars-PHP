<?php
// Write an algorithm that will identify valid IPv4 addresses in dot-decimal format. IPs should be considered valid if they consist of four octets, with values between 0 and 255, inclusive.

// Valid inputs examples:
// Examples of valid inputs:
// 1.2.3.4
// 123.45.67.89
// Invalid input examples:
// 1.2.3
// 1.2.3.4.5
// 123.456.78.90
// 123.045.067.089
// Notes:
// Leading zeros (e.g. 01.02.03.04) are considered invalid
// Inputs are guaranteed to be a single string

function isValidIP(string $str): bool
{		
	if(strlen($str) === 0) return false;
	if($str[0] === ' ') return false;
	$newStr = str_replace(".", " ", $str);
	$arrayElements = explode(" ", $newStr);
	if(count($arrayElements) !== 4) return false;
	foreach ($arrayElements as $element) {
		$verifyZero = str_split($element);
		if(count($verifyZero) > 1 && $verifyZero[0] === '0') {
			return false;
		}
		if(!is_numeric($element)) {
			return false;
		}
		if($element < 0 || $element > 255) {
			return false;
		}
	}
	
	return true;
}
?>