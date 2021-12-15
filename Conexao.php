<?php
$servidor = "localhost:3306";
$usuario = "root";
$senha = "";//não tem senha
$dbname = "cadastro";//nome do banco de dados lá no xampp

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//esse arquivo mostra como está a tela inicial para acessar o php