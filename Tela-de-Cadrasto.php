<?php
$password = 'Relogio@202a1';
$username = 'root';


try {
    $conn = new PDO('mysql:host=localhosat;dbname=usesrs', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

    if(isset($_POST['nome'])){
      $sql = $pdo->prepare("INSERT INTO tbUsuario VALUES (null, ?, ?, ?");
      $sql->execute(array($_POST['Nome'], $_POST['Email'], $_POST['Senha']));
      echo 'inserido com sucesso!';
    }
?>

<form method="post">
  <input type="text" name="Nome"> 
  <input type="text" name="Email">
  <input type="text" name="Senha">
  <input type="submit" value="Enviar">
  </form>