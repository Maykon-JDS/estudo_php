<?php 
function estilizar_exercicio(){
    if($_GET){
        return '<link rel="stylesheet" href="/View/exercicio.css">';
    }
}

function criacao_subtitulo(){
    if($_GET){
        return "<h2>Exercício</h2>";
    } else{
        return "<h2>Índice dos Exercícios</h2>";
    }
}

function voltar(){
    if($_GET){
        return "<a href='index.php' class='botao_voltar'>Voltar</a> ";
    }
}

function adicionador_conteudo(){
    if ($_GET) {
        echo "<div class='exercicio'>";
        include("{$_GET['dir']}/{$_GET['file']}.php");
        echo "</div>";
    } else {
        include("indice_de_exercicios.php");
    }
}


?>