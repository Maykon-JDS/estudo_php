<?php 
    $hostname = "localhost";
    $username = "root";
    $password = 1234;
    $database = "loja";

    //conectando com o banco de dados
    $conn = new mysqli($hostname, $username, $password, $database);

    //verificando conexão com o banco de dados
    function verificador_de_conexao(object $conn){
        if($conn->connect_errno){
            echo "Conexão Falhou!<br>Erro: " . $conn->connect_error; 
        }else{
            echo "Conexão Bem Sucedida!";
        }
    }

    verificador_de_conexao($conn);
?>