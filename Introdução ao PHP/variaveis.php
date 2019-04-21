<?php 

	define ('BD_URL', 'endereco qualquer')
	define ('BD_ USUARIO', 'endereco qualquer')
	define ('BD_SENHA', 'endereco qualquer')

	//string
	$nome = 'Luís Felipe Simões';

	//Int
	$idade = 19;

	//Float
	$peso = 55.50;

	//boolean
	$fumante_sn = True;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
</head>
<body>
	<h1>Ficha Cadastral</h1>
	<br/>
	<p>Nome: <?php echo $nome; ?></p>
	<p>Idade: <?php echo $idade; ?></p>
	<p>Peso: <?php echo $peso; ?></p>
	<?php echo $fumante_sn; ?>
</body>
</html>