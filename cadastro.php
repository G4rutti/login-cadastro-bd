<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/stylescadastro.css">
</head>
<body>
  <div id="login-container">
        <h1>Cadastrar</h1>
        <form action="processa.php" method="POST">
            <label for="name">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
            <label for="email">E-mail</label>
            <input type="email" name="e-mail" id="email" placeholder="Digite seu e-email" autocomplete="off">
            <label for="password">Senha</label>
            <input type="password" name="senhazada" id="password" placeholder="Digite sua senha">
            <input type="submit" value="cadastrar">
        </form>
        <div id="social-container">
            <p>Ou entre pelas suas redes sociais</p>
            <i class="fa fa-facebook-f"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <div id="register-container">
            <p>Você já tem uma conta?</p>
            <a href="login.php">Entrar</a>
        </div>
  </div>
</body>
</html>

