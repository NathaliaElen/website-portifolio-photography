<?php
session_start();
include_once("Conexao.php");
$nome = filter_input(INPUT_POST,  nome, FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,  email,FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST,  senha, FILTER_SANITIZE_INT);
$cidade = filter_input(INPUT_POST,  cidade, FILTER_SANITIZE_STRING);
//echo "Nome: $nome <br>";
//echo  "E-mail: $email <br>";
$result_usuario = "INSERT INTO usuarios (nome, email, senha, cidade,  created) VALUES ('$nome', '$email', '$senha', '$cidade' NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso </p>";
    header("Location: Tela-de-Cadastro.php");
} else {
    $_SESSION['msg'] = "<p style='red'; '>Usuário não foi cadastrado com sucesso</p>";
    header("Location: Tela-de-Cadastro")
}