<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <title>KILL THE SUN</title>
  <link rel="icon" href="Imagem/icono_assustado.png" >
  <link rel="stylesheet" href="css/style.css" >

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
        <li><a href="Jogosatuaisefuturos.php"> NOSSOS JOGOS </a></li>
        <li><a href="contato.php">CONTATO</a></li>
        <li><a href="jogar.php">JOGAR</a></li>
        <li><a href="cadastro.php">CADASTRO</a></li>
        <li><a href="entre.php">ENTRAR</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <main>
    <div class="Jogo1" >
          <img src="Imagem/Capadojogo1.png"  class="Capa" alt="Capa do jogo Kill the Sun" style="display: block; width: 300px; height: 300px;
  margin: 0 auto;">
            <p>Kill the Sun é um jogo de plataforma 2D desenvolvido por João Mateus Alcantara Dos Santos, inspirado no livro "Warmaisach" de . O jogo apresenta uma jogabilidade desafiadora, onde os jogadores controlam um personagem que deve superar obstáculos e inimigos para avançar pelas fases. Com gráficos pixelados . Kill the Sun oferece uma experiência nostálgica para os fãs de jogos de plataforma clássicos. O enredo do jogo gira em torno da luta do protagonista contra forças sombrias que ameaçam o mundo, proporcionando uma narrativa cativante que complementa a ação intensa do gameplay.</p>
        </div>
    </div>
    <div class="Jogo2">
          <img src="Imagem/Capajogo2.png"  class="Capa" alt="Capa do jogo Kill the Sun" style="display: block; width: 300px; height: 300px;
  margin: 0 auto;">
  <p>Futuro Jogo Supremacy Games: Em desenvolvimento</p>
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