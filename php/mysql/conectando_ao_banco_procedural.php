<?php 
    $hostname = "localhost";
    $username = "root";
    $password = 1234;
    $database = "loja";

    //conectando com o banco de dados
    $conn = mysqli_connect($hostname, $username, $password, $database);


    //verificando conexão com o banco de dados
    if($conn){
        echo "Conexão Bem Sucedida!" ; 
    }else{
        echo "Conexão Falhou!";
    }
?>