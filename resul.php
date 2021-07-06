<?php
	if($_GET)
	{
		echo "Nome: " . $_GET['name'];
		echo "<br>Idade: " . $_GET['age'];
	}
	else
	{
		echo "Formulário em branco.";
	}
?>

