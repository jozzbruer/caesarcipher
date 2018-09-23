<?php 
	$test = false;
	require_once 'cipher_algo.php';
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ceasar Encryption / Decryption System </title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>Ceasar Encryption / Decryption Systems</h1>
	<form method="post" action="<?= $_SERVER['PHP_SELF'];?>">
		<p>
			<?php if ($test == true) : ?>
			<p class="warning">ERROR,your key is not valid!!!</p>
			<?php endif; ?>
			<label for="key">Key:</label>
			
			<input type="number" name="key" id="key" required>
		</p>
		
		<p>
			<label for="cipher">Cipher text / Plain Text:</label>
			<textarea name="cipher" id="cipher"></textarea>
		</p>

		<p>
			<input type="submit" name="encrypt" id="encrypt" value="Encryption" required>
		
			<input type="submit" name="decrypt" id="decrypt" value="Decryption">
		</p>

		
		
	</form>

	<?php 
	echo "The answer is:";
	if (isset($_POST['encrypt'])&& ($_POST['encrypt'] != " " )) {
		$key = $_POST['key'];
		if ($key > 25 || $key < 0) {
			$test = true;
		}else{
			
			$textplain = $_POST['cipher'];
			$textplain = StringToTable($textplain);
			
			foreach ($textplain as $x) {
				  $final = toText(Encryption($x,$key));
				  echo $final;
				 
			}
		}
	}


	if (isset($_POST['decrypt']) && ($_POST['decrypt'] != " ")) {
		$key = $_POST['key'];
		if ($key > 25 || $key < 0) {
			$test = true;
		}else{
			$textcipher = $_POST['cipher'];
			$textcipher = StringToTable($textcipher);
			foreach ($textcipher as $x) {
				$final = toText(Decryption($x,$key));
				echo $final;
			
			}
			
		}
	}

	 ?>

</body>
</html>