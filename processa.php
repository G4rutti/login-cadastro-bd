<?php
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_EMAIL);
$email = filter_input(INPUT_POST, 'e-mail', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senhazada', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO cadastro (nome, email, senha) VALUES ('$nome', '$email', md5('{$senha}'))";
$resultado_usuario = mysqli_query($conn, $result_usuario);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar</title>
    <link rel="stylesheet" href="css/stylesprocessa.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div id="login-container">
    <h1>Sua conta foi cadastrada</h1>
    <a id="login"href="login.php"><input type="submit" value="fazer login"></a>
    <div id="social-container">
      <p>Ou entre pelas suas redes sociais</p>
      <i class="fa fa-facebook-f"></i>
      <i class="fa fa-linkedin"></i>
  </div>
</body>
</html>