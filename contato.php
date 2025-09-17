<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KILL THE SUN</title>
    <link href="Imagem/icono_assustado.png" rel="icon">
    <link href="css/style.css" rel="stylesheet">
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
        <li><a href="Jogosatuaisefuturos.php"> NOSSOS JOGOS </a></li>
        <li><a href="contato.php">CONTATO</a></li>
        <li><a href="jogar.php">JOGAR</a></li>
        <li><a href="cadastro.php">CADASTRO</a></li>
        <li><a href="entre.php">ENTRAR</a></li>
      </ul>
    </nav>
  </header>
    <main>
        <div class="contato">
          <h2>Entre em Contato</h2>
          <form action="https://formsubmit.co/joaomateusalcantara2003@gmail.com" method="POST">
            <input type="hidden" name="_captcha" value="false">
      
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br>
      
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
      
            <label for="mensagem">Mensagem:</label><br>
            <textarea id="mensagem" name="mensagem" rows="5" required></textarea><br>
      
            <button type="submit">Enviar</button>
          </form>
        </div>
      </main>
    <footer>
        <img src="Imagem/soldorock2.png" alt="Solpagina" class="SIRIUS">
        <p>
            Desenvolvido por João Mateus  Alcantara Dos Santos
        </p>
    </footer>
    <script>
        document.getElementById("menu-toggle").addEventListener("click", function () {
document.getElementById("menu").classList.toggle("active");
});

   </script>
</body>

</html>