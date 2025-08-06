<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KILL THE SUN</title>
    <link href="Imagem/icono_assustado.png" rel="icon">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <header>
    <a href="index.html" class="HOME">
      <img src="Imagem/soldorock-removebg-preview.png" alt="Logo da KILL THE SUN" class="soldorock5" />
    </a>
    <div class="menu-toggle" id="menu-toggle">☰</div>
    <nav>
      <ul id="menu" class="menu">
        <li><a href="index.html">HOME</a></li>
        <li><a href="sobrejogo.html">SOBRE</a></li>
        <li><a href="galeriadejogos.html">GALERIA DE JOGOS</a></li>
        <li><a href="contato.html">CONTATO</a></li>
        <li><a href="jogar.html">JOGAR</a></li>
        <li><a href="cadastro.php">CADASTRO</a></li>
        <li><a href="entre.php">ENTRAR</a></li>
      </ul>
    </nav>
  </header>
<?php
session_start();
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $senha_digitada = $_POST['senha'];


  $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
  $stmt->execute([$email]);
  $usuario = $stmt->fetch();

  
  if ($usuario && password_verify($senha_digitada, $usuario['senha_hash'])) {
    $_SESSION['usuario'] = $usuario['nome'];
    header("Location: restrito/jogar.php");
    exit;
  } else {
    $erro = "❌ E-mail ou senha incorretos.";
  }
}
?>

  <div class="contato">
<form method="POST">
  <h2>Login</h2>
  <input type="email" name="email" placeholder="E-mail" required><br>
  <input type="password" name="senha" placeholder="Senha" required><br>
  <button type="submit">Entrar</button>
  <?php if (isset($erro)) echo "<p>$erro</p>"; ?>
<a href="Cadastro.php">Criar conta</a>
</form>
</div>
<footer>
    <img src="Imagem/soldorock2.png" alt="Solpagina" class="SIRIUS" />
    <p>Desenvolvido por João Mateus Alcantara Dos Santos </p>
  </footer>

  <script>
    document.getElementById("menu-toggle").addEventListener("click", function () {
      document.getElementById("menu").classList.toggle("active");
    });
  </script>
</body>
</html>