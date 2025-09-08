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
  <link rel="stylesheet" href="css/bootstrap.min.css" >
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
    </nav>
  </header>

  <main>
    <div class="paroalto">
      <h2 style="color:black">BEM-VINDO AO JOGO DE PLATAFORMA INSPIRADO EM UM LIVRO DE SUCESSO!</h2>
      <h2 style="color:black">CONHEÇA KILL THE SUN</h3>
      <h1><a href="sobrejogo.php" title="Sobre" class="SAIBA" style="color: red;">SAIBA MAIS SOBRE</a></h1>
      <img src="Imagem/solopng.png" alt="solvermelho" class="SOLVERM" />
    </div>

    <div>
      <h2>A LORE DO LIVRO QUE INSPIROU O JOGO</h2>
      <h2>UMA BREVE HISTÓRIA DO LIVRO</h2>
      <img src="Imagem/Killofsun capa.webp" alt="capa" class="capaimagem" />
      <p>
        A Terra encontra-se em um estado pós-apocalíptico, milhares de anos após seres aterrorizantes chamados
         Espectros destruírem o mundo. Ao longo dos milênios, a humanidade tentou se reconstruir diversas vezes,
          mas o passado foi esquecido — e agora, os Espectros reinam supremos.
        
      </p>
      <p>
        Um jovem com amnésia vive nas favelas da enigmática Cidade do Fungo Carmesim. Com esforço e determinação, 
        ele se torna forte o suficiente para se qualificar para um dos trabalhos mais prestigiados: ser um Extrator de Zephyx —
         aqueles que colhem os poderes dos Espectros. No entanto, um antigo encontro com uma dessas criaturas o torna inelegível.
          É então que um homem misterioso surge, mudando para sempre o rumo de seu destino.
      </p>
      <p>
        Ao lado de alianças improváveis, eles precisam capturar os Espectros —
         pois essas criaturas são tanto a chave para a liberdade da humanidade quanto a fonte de uma energia infinita.
      </p>
    </div>
  </main>

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
