<?php
//	FONCTION ADDITION
function addition($a, $b)
{
	return $a + $b;
} 
//	FONCTION SOUSTRACTION
function soustraction($a, $b)
{
	return $a - $b;
}
//	FONCTION MULTIPLICATION
function multiplication($a, $b)
{
	return $a * $b;
}
//	FONCTION DIVISION
function division($a, $b)
{
	if($b != 0)
	{
		return $a / $b;
	}else{
		echo "<br/>Division par zero impossible<br/>";
		return 0;
	}
}
?>