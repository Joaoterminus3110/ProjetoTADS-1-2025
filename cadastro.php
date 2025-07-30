 
 
 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KILL THE SUN</title>
  <link rel="icon" href="Imagem/icono_assustado.png" />
  <link rel="stylesheet" href="css/style.css" />
</head>
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
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  //senha
  $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

  //salva no banco
  $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha_hash) VALUES (?, ?, ?)");
  try {
    $stmt->execute([$nome, $email, $senha_hash]);
    echo "✅ Usuário cadastrado com sucesso! <a href='login.php'>Fazer login</a>";
  } catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
  }
}
?>
<form method="POST">
  <h2>Cadastro</h2>
  <input type="text" name="nome" placeholder="Nome" required><br>
  <input type="email" name="email" placeholder="E-mail" required><br>
  <input type="password" name="senha" placeholder="Senha" required><br>
  <button type="submit">Cadastrar</button>
</form>
<a href="entre.php">Já tem conta? Faça login</a>