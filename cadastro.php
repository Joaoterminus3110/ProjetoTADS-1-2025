 
 <?php
session_start();
?>
 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KILL THE SUN</title>
  <link rel="icon" href="Imagem/icono_assustado.png" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <header>
    <a href="index.php" class="HOME">
      <img src="Imagem/soldorock-removebg-preview.png" alt="Logo da KILL THE SUN" class="soldorock5" />
    </a>
    <div class="menu-toggle" id="menu-toggle">☰</div>
    <nav>
      <ul id="menu" class="menu">
        <li><a href="index.php">HOME</a></li>
        <li><a href="sobrejogo.php">SOBRE</a></li>
        <li><a href="galeriadejogos.php">GALERIA DE JOGOS</a></li>
        <li><a href="Jogosatuaisefuturos.php">NOSSOS JOGO</a></li>
        <li><a href="contato.php">CONTATO</a></li>
        <li><a href="jogar.php">JOGAR</a></li>
        <li><a href="cadastro.php">CADASTRO</a></li>
        <li><a href="entre.php">ENTRAR</a></li>
      </ul>
    </nav>
  </header>
<div class="contato">
<form method="POST">
  <h2>Cadastro</h2>
  <input type="text" name="nome" placeholder="Nome" required><br>
  <input type="email" name="email" placeholder="E-mail" required><br>
  <input type="password" name="senha" placeholder="Senha" required><br>
  <button type="submit">Cadastrar</button>
  <a href="entre.php">Já tem conta? Faça login</a>
  </form>
</div>
<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome  = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // salva no banco
    $stmt = $pdo->prepare(
        "INSERT INTO usuarios (nome, email, senha_hash)
         VALUES (:nome, :email, :senha_hash)"
    );
        
    try {
        $stmt->execute([
            ':nome'       => $nome,
            ':email'      => $email,
            ':senha_hash' => $senha_hash,
        ]);
        $_SESSION['user_id'] = $nome;
        echo "<button class='btn btn-danger'>✅ Usuário cadastrado com sucesso! <a href='entre.php'>Fazer login</a></button>";
       
    } catch (PDOException $e) {
        echo "<p class='text-warning'>Erro: " . " (O usuário já existe ou o email já está cadastrado)</p>";
        unset($_SESSION['user_id']);
    }
}
?>
<footer>
    <img src="Imagem/soldorock2.png" alt="Solpagina" class="SIRIUS" />
    <p>Desenvolvido por João Mateus Alcantara Dos Santos </p>
  </footer>

  <script>
    document.getElementById("menu-toggle").addEventListener("click", function () {
      document.getElementById("menu").classList.toggle("active");
    });
  </script>