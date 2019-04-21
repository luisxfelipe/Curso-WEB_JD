<?php  

	$idade = 19;
	$peso = 54;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Doador de Sangue</title>
</head>
<body>
	<?php  

		echo "Idade ".$idade;
		echo "<br />";
		echo "Peso: ".$peso;
		echo "<br />";

		if(($idade >= 16 OR $idade <= 69) AND $peso >= 55){
			echo "Atende aos requisitos";
		} else {
			echo "Não atende aos requisitos";
		}
	?>

</body>
</html>