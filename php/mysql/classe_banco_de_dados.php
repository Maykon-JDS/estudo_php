<?php
class Conta_SGDB
{
    private const hostname = 'localhost';
    private const username = 'root';
    private const password = 1234;
    private $conn;
    public $banco_de_dados;

    public function conectar_ao_sgbd()
    {
        $this->conn = new mysqli(self::hostname, self::username, self::password);

        if ($this->conn->connect_error) {
            echo "Conexão Falhou!<br>Erro: " . $this->conn->connect_error . '<br>';
        } else {
            echo "Conexão Bem Sucedida!<br>";
        }
    }

    public function criar_bd($banco_de_dados)
    {
        $sql = "CREATE DATABASE {$banco_de_dados}";
        if ($this->conn->query($sql) === TRUE) {
            echo "Banco de Dados '{$banco_de_dados}' criado com sucesso! <br>";
        } else {
            echo "Criação do Bando de Dados Falhou!<br>Erro: " . $this->conn->error . '<br>';
        }
        $this->banco_de_dados = $banco_de_dados;
    }

    public function conectar_ao_bd($banco_de_dados)
    { 
        $this->conn = new mysqli(self::hostname, self::username, self::password, $banco_de_dados);
        
        if ($this->conn->connect_error) {
            echo "Conexão Falhou!<br>Erro: " . $this->conn->connect_error . '<br>';
        } else {
            echo "Conexão Bem Sucedida!<br>";
        }
    }

    public function criar_botao($post){
        if($post){
            $this->conn->query("USE {$this->banco_de_dados}");
            echo $this->banco_de_dados . '<br>';
            $sql = $this->conn->query(" SELECT * FROM {$this->banco_de_dados}" );
            var_dump($sql);
            $this->conectar_ao_bd($this->banco_de_dados);
        } else {
            echo 
            '<form action="?dir=mysql&file=conectando_ao_banco_de_dados_criado_poo" method="post">
                <button type="submit" value="conectar_ao_banco_de_dados" name="conectar_ao_banco_de_dados">Conectar ao Banco de Dados Criado</button>
            </form>';
        }
    }


}

$conta_sgbd = new Conta_SGDB;
$conta_sgbd->conectar_ao_sgbd();