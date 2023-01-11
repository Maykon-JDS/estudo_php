<?php
require("./mysql/classe_banco_de_dados.php");


$conta_sgbd->conectar_ao_bd($conta_sgbd->banco_de_dados);
echo $conta_sgbd->banco_de_dados;