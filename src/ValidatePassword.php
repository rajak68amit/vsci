<?php 
 /**
  * 
  */
 class ValidatePassword 
 {
 	const MIN_LENGTH = 6;
 	CONST MAX_LENGHT = 28;

 	public function validLength($password){
 	$passLength = strlen($password);
 	return $passLength >= self::MIN_LENGTH && $passLength <= self::MAX_LENGHT;
 }
}


?>