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
    <a href="index.html" class="HOME">
      <img src="Imagem/soldorock-removebg-preview.png" alt="Logo da KILL THE SUN" class="soldorock5" />
    </a>
    <div class="menu-toggle" id="menu-toggle">☰</div>
    <nav>
      <ul id="menu" class="menu">
        <li><a href="index.php">HOME</a></li>
        <li><a href="sobrejogo.php">SOBRE</a></li>
        <li><a href="galeriadejogos.php">GALERIA DE JOGOS</a></li>
        <li><a href="contato.php">CONTATO</a></li>
        <li><a href="jogar.php">JOGAR</a></li>
        <li><a href="cadastro.php">CADASTRO</a></li>
        <li><a href="entre.php">ENTRAR</a></li>
      </ul>
    </nav>
  </header>
    <main>
    <div class="galeria">
        <h2>Galeria de Imagens</h2>
        <div class="galeria-container">
          <img src="Imagem/FASE11.png" alt="Cena fase11" class="fase11">
          <img src="Imagem/FASE12.png" alt="Cena fase12" class="fase12">
          <img src="Imagem/FAE21.png" alt="Cena fase21" class="fase21">
          <img src="Imagem/FASE22.png" alt="Cena fase22" class="fase22">
          <img src="Imagem/IMAGEMDOJO.png" alt="Cenajogador" class="jogador">
          <img src="Imagem/IMAGEMVILAO.png" alt="CenaVILÃO" class="vilao">
          
        </div>
    </div>
    </main>
    <footer>
        <img src="Imagem/soldorock2.png" alt="Solpagina" class="SIRIUS">
        <p>
            Desenvolvido por João Mateus  Alcantara Dos Santos
        </p>
    </footer>
    </main>
    <script>
        document.getElementById("menu-toggle").addEventListener("click", function () {
document.getElementById("menu").classList.toggle("active");
});

   </script>
</body>
</html>
