<?php

require("./mysql/classe_banco_de_dados.php");
$conta_sgbd->criar_bd($_POST['nome_bd']);
$conta_sgbd->criar_botao($_POST['conectar_ao_banco_de_dados']);
echo $conta_sgbd->banco_de_dados;

?>




