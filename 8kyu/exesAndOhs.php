<?php
// Check to see if a string has the same amount of 'x's and 'o's. The method must return a boolean and be case insensitive. The string can contain any char.

// Examples input/output:

// XO("ooxx") => true
// XO("xooxx") => false
// XO("ooxXm") => true
// XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
// XO("zzoo") => false

// Solution

function XO($s) {
	$arrayXO = str_split($s);
	$arrayX = array_filter( $arrayXO, fn ($string) => strtolower($string) === 'x' );
	$arrayO = array_filter( $arrayXO, fn ($string) => strtolower($string) === 'o' );
	
	if(count($arrayX) === count($arrayO)) return true;
	
	return false;
}
?>