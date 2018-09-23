<?php 
	$alphabet= ('abcdefghijklmnopqrstuvwxyz');

	function StringToTable($string){
		$tab = str_split($string);
		return $tab;
	}

	function Encryption($sentence,$k){
		global $alphabet;
		$alphabet_length = strlen($alphabet);
		$plain_text = strpos($alphabet, $sentence);
		$Ex = ($plain_text + $k) % $alphabet_length;
		return $Ex;

	}

	function Decryption($sentence,$k){
		global $alphabet;
		$alphabet_length = strlen($alphabet);
		$cipher_text = strpos($alphabet, $sentence);
		$Dx = ($cipher_text - $k) % $alphabet_length;
		return $Dx;

	}


	function toText($num){
			global $alphabet;
			return $alphabet[$num];	
		}




		

 ?>