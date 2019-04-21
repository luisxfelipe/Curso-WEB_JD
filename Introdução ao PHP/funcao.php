<?php  

	$imposto = 0;
	
	function calculaIRF($salario){
		if ($salario <= 1903.98) {
			return "Isento";
		} elseif ($salario >= 1903.99 AND $salario <= 2826.65) {
			return ($salario / 100) * 7.5;
		} elseif ($salario >= 2826.66 AND $salario <= 3751.05) {
			return ($salario / 100) * 15;
		} elseif ($salario >= 3751.06 AND $salario <= 4664.68) {
			return ($salario / 100) * 22.5;
		} elseif ($salario > 4664.68) {
			return ($salario / 100) * 27.5;
		}


	}

	$imposto = calculaIRF(10000);

	echo $imposto;


?>

<!DOCTYPE html>
<html>
<head>
	<title>Função</title>
</head>
<body>

</body>
</html>