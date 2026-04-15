<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Home/home.css">
  <link rel="stylesheet" href="clube.css">
  <title>Clube</title>
</head>
<body>
  <header>
    <div class="header-left">
      <div class="logo">
        <a href="../Home/inicio.php">
          <img src="../imagens/logo/logo.png" alt="Logotipo do Clube">
        </a>
      </div>

      <nav class="nav-desktop">
        <a href="../Home/inicio.php" class="active">Início</a>
        <a href="../Clube/clube.php">Clube</a> 
        <a href="../Emprestar/emprestar.php">Emprestar</a>
        <a href="../Perfil/perfil.html.php">Perfil</a>
      </nav>
    </div>

    <div class="header-right">
      <div class="search-box">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" width="20">
          <circle cx="11" cy="11" r="8"></circle>
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35" />
        </svg>
        <input type="text" placeholder="Pesquisar..." />
      </div>

      <div class="avatar-wrapper">
        <div class="avatar">
          <img src="../imagens/usuario/edilson.png" alt="Foto de Perfil" />
        </div>
        <svg class="chevron" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" width="16">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
        </svg>
      </div>

      <!-- Hamburger (mobile) -->
      <button class="hamburger" id="hamburger" aria-label="Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </header>

  <!-- Mobile menu -->
  <div class="mobile-menu" id="mobileMenu">
    <a href="../Home/inicio.php" class="active">início</a>
    <a href="../Clube/clube.php">Clube</a> 
    <a href="../Emprestar/emprestar.php">Emprestar</a>
    <a href="../Perfil/perfil.php">Perfil</a>


    <div class="mobile-search">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/>
      </svg>
      <input type="text" placeholder="Search..." />
    </div>
  </div>

  <!--
  Conteúdo da página do clube
  -->

  <div class="hero">
    <div class="texto-principal">
      <h1 id="titulo">Procurando por um <span style="color: #7c7cff;">clube?</span></h1>
      <p id = "subtitulo">Encontre o clube ideal para você ou crie o seu próprio!</p>
    </div>
  
    <div class="btn-escolha">
      <a href="clube.php" class="btn-escolha-personalizado">Entrar em um clube</a>
      <a href="criar_clube.php" id="btn-escolha-personalizado-outline">Criar um clube</a>
    </div>
  </div>    
  
  <main class="container">

    <!-- MAIS POPULARES -->
    <section class="section">
      <div class="section-header">
        <div>
          <h2>Mais Populares</h2>
          <p class="section-sub">Os clubes favoritos da comunidade</p>
        </div>
        <a href="#" class="ver-todos">Ver todos →</a>
      </div>

      <div class="cards-row">

        <!-- Card 1 -->
        <div class="card">
          <div class="card-banner" style="background: linear-gradient(135deg, #1a1a2e, #16213e);">
            <div class="club-icon">🎮</div>
            <div class="club-initials">GG</div>
          </div>
          <div class="card-body">
            <h3 class="club-name">Romanticos</h3>
            <p class="club-category">para os apaixonados em romance</p>
            <div class="club-meta">
              <span class="members">👥 10</span>
              <span class="dot">·</span>
            </div>
            <div class="criador">
              <img src="../imagens/usuario/edilson.png" class="criador-imagem" alt="">
              <span class="criador-nome">Edilson.Jr</span>
            </div>
            <div class="tags">
              <span class="tag">Debates</span>
              <span class="tag">Recomendações</span>
              <span class="tag">Online</span>
            </div>
            <button class="btn-details">Ver clube</button>
          </div>
        </div>

      </div>
    </section>

    <!-- MAIS RECENTES -->
    <section class="section">
      <div class="section-header">
        <div>
          <h2>Mais Recentes</h2>
          <p class="section-sub">Os clubes mais novos disponíveis na plataforma</p>
        </div>
        <a href="#" class="ver-todos">Ver todos →</a>
      </div>

      <div class="cards-row">

        <!-- Card 1 -->
        <div class="card">
          <div class="card-banner" style="background: linear-gradient(135deg, #2d6a4f, #52b788);">
            <div class="club-icon">📚</div>
            <div class="club-initials">LC</div>
          </div>
          <div class="card-body">
            <h3 class="club-name">Leitores de CS</h3>
            <p class="club-category">Literatura & Cultura</p>
            <div class="criador">
              <img src="../imagens/usuario/edilson.png" class="criador-imagem" alt="">
              <span class="criador-nome">Edilson.Jr</span>
            </div>
            <div class="club-meta">
              <span class="members">👥 14</span>
              <span class="dot">·</span>
            </div>
            <div class="tags">
              <span class="tag">Leitura</span>
              <span class="tag">Debates</span>
              <span class="tag">Presencial</span>
            </div>
            <button class="btn-details">Ver clube</button>
          </div>
        </div>

      </div>
    </section>

  </main>

  <script>
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');

    // Liga/Desliga menu
    hamburger.addEventListener('click', (e) => {
      e.stopPropagation(); // Evita fechar ao clicar no próprio botão
      hamburger.classList.toggle('open');
      mobileMenu.classList.toggle('open');
    });

    // Fecha ao clicar em um link
    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        hamburger.classList.remove('open');
        mobileMenu.classList.remove('open');
      });
    });

    // Fecha o menu se clicar fora dele
    document.addEventListener('click', (e) => {
      if (!mobileMenu.contains(e.target) && !hamburger.contains(e.target)) {
        hamburger.classList.remove('open');
        mobileMenu.classList.remove('open');
      }
    });
  </script>
</body>
</html>