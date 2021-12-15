
  <?php 
session_start();
?>

<!DOCTYPE html><!--tecla ! e depois tab para se definir o html5-->
<html lang="pt-br"><!-- tipo de linguagem que sera inserida no site -->
<head>
    <meta charset="UTF-8"> <!--padrao do html5 -->
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadas.css"><!-- inserir o css -->
</head>
<body class="imagem-cadastro"> <!-- classe imagem-cadastro para que o programa encontre que formatado no no css -->
 
   
    <?php
        if  (isset($_SESSION['msg'])){
             echo $_SESSION['msg'];
             unset($_SESSION['msg']);
    }
        ?>

    <div class="form_cd">
    <h2>Cadastra usuario</h2>
      <form method="post" action="Tela-de-Cadastro.php">
     <!-- inserido o metodo post para mostra a tela paras se cadastrar e informa a ação que foi feita que saiu da pagina inicial index.php e veio para esta de cadastro-->
            <label>Nome: </label> <!--informar aonde fica o nome para o cliente digitar-->
            <input type="text" name="nome" placeholder="Digite o nome completo"><br><br><!--serve para adicionar a barra de preenchimento do nome completo-->
        <!--o tipo (type) texto para digitar / (name) para aparecer o nome / (placeholder) serve para colocar uma descrição dentro da barra-->
            <label>E-mail: </label>
            <input type="text" name="email" placeholder="Digite o seu e-mail"><br><br>

            <label>Senha: </label>
            <input type="password" name="senha" placeholder="Informe a senha"><br><br>
        
            <label>Cidade: </label>
            <input type="text" name="cidade" placeholder="Informe a cidade"><br><br>
            
            <input class="btn btn-cadastro" type="submit" value="Cadastrar"> <!-- coloquei a classe btn-cadastro para modificar o botão 
            (submit para direcionar quando terminar de preencher com o nome (vaalue) cadastra -->
            <input class="btn btn-cadastro" type="reset" value="Limpa">
            <!-- type resete serve para limpa tudo que foi escrito no formulario -->
        </form>
    </div>
   </body>
</html>