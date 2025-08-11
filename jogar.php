<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KILL THE SUN</title>
  <link href="Imagem/icono_assustado.png" rel="icon">
  <link href="css/style.css" rel="stylesheet">
  <style>
    html, body {
      overflow-x: hidden;
      overflow-y: auto;
    }
  </style>
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
        <li><a href="contato.php">CONTATO</a></li>
        <li><a href="jogar.php">JOGAR</a></li>
        <li><a href="cadastro.php">CADASTRO</a></li>
        <li><a href="entre.php">ENTRAR</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="sobre">
      <div class="container">
        <h1>
          <span class="faixa">
            <i class="fas fa-play"></i>
            JOGAR KILL THE SUN
          </span>
        </h1>
        <iframe
          id="jogo-frame"
          src="jogo/KILLBETA7/index.php"
          width="300"
          height="300"
          tabindex="0"
          style="border: none;">
        </iframe>

        <p class="center">
          <a href="KILLBETA7.zip" class="btn">⬇ Baixar jogo</a>
          <a href="jogo/KILLBETA7/index.php" target="_blank" title="Abrir em Nova Aba" class="btn">▶ Abrir</a>
        </p>
      </div>
    </section>
  </main>

  <footer>
    <img src="Imagem/soldorock2.png" alt="SIRIUS" class="SIRIUS">
    <p>Desenvolvido por João Mateus Alcantara Dos Santos</p>
  </footer>
  <script>
    document.getElementById("menu-toggle")
      .addEventListener("click", () => {
        document.getElementById("menu").classList.toggle("active");
      });
    const iframe = document.getElementById("jogo-frame");
    iframe.addEventListener("pointerdown", () => {
      iframe.focus();
    });
    document.addEventListener("keydown", function (e) {
      const navKeys = ["ArrowUp", "ArrowDown", "ArrowLeft", "ArrowRight", " "];
      if (document.activeElement === iframe && navKeys.includes(e.key)) {
        e.preventDefault();
      }
    }, { passive: false });
  </script>
</body>
</html>


      