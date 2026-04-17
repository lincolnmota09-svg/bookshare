<?php
include('../php/verificar.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Home/home.css">
    
    <link rel="stylesheet" href="clube.css">
    <link rel="stylesheet" href="cclube.css">
  
    
    <title>Criar clube</title>


</head>
<body>

    <header>

    <div class= "header-left">
      <div class="logo"><a href=""><img src="../imagens/logo/logo.png" alt=""></a></div>

      <!-- Nav desktop -->
      <nav>
        <a href="../Home/inicio.php" >início</a>
        <a href="../Clube/clube.php" class="active">Clube</a> 
        <a href="../Emprestar/emprestar.php">Emprestar</a>
        <a href="../Perfil/perfil.php">Perfil</a>
      </nav>
    </div>

    <div class="header-right">
      <!-- Search desktop -->
      <div class="search-box">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/>
        </svg>
        <input type="text" placeholder="Search..." />
      </div>

      <!-- Avatar -->
      <div class="avatar-wrapper">
        <div class="avatar">
          <img src="../imagens/usuario/edilson.png" alt="User" />
        </div>
        <svg class="chevron" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
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

    <!-- Mobile menu -->
  <div class="mobile-menu" id="mobileMenu">
    <a href="../Home/inicio.php" >início</a>
    <a href="../Clube/clube.php" class="active">Clube</a> 
    <a href="../Emprestar/emprestar.php">Emprestar</a>
    <a href="../Perfil/perfil.php">Perfil</a>


    <div class="mobile-search">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/>
      </svg>
      <input type="text" placeholder="Search..." />
    </div>
  </div>

  </header>


  <!-- HERO -->
<div class="hero">
    <div class="texto-principal">
      <h1 id="titulo">Procurando por um <span style="color: #7c7cff;">clube?</span></h1>
      <p id = "subtitulo">Encontre o clube ideal para você ou crie o seu próprio!</p>
    </div>
    

<div class="btn-escolha">
      <a href="clube.php" class="btn-escolha-personalizado">Entrar em um clube</a>
      <a href="criarClube.php" id="btn-escolha-personalizado-outline">Criar um clube</a>
    </div>
  </div> 
  
</div>


<div class="card">
  <h2>Novo Clube</h2>
  <p class="subtitle">Preencha as informações abaixo para criar seu clube personalizado</p>

  <!-- NOME -->
  <div class="section">
    <label>Nome do Clube</label>
    <div class="name-wrapper">
      <input type="text" id="clubName" placeholder="Ex: Leitores de Fantasia" maxlength="60"
        oninput="updateName(this)" />
      <span class="name-counter" id="nameCount">0/60</span>
    </div>
  </div>

  <!-- TEMAS -->
  <div class="section">
    <label>Tema do Clube</label>
    <p class="theme-hint">Escolha exatamente 3 temas para o seu clube</p>
    <div class="selected-count" id="selectedCount">0 de 3 selecionados</div>
    <div class="theme-grid" id="themeGrid">
      <!-- Gêneros Literários -->
      <button class="theme-btn" data-theme="Fantasia" onclick="toggleTheme(this)">Fantasia</button>
      <button class="theme-btn" data-theme="Romance" onclick="toggleTheme(this)">Romance</button>
      <button class="theme-btn" data-theme="Terror" onclick="toggleTheme(this)">Terror</button>
      <button class="theme-btn" data-theme="Ficção Científica" onclick="toggleTheme(this)">Ficção Científica</button>
      <button class="theme-btn" data-theme="Clássicos" onclick="toggleTheme(this)">Clássicos</button>
      <button class="theme-btn" data-theme="Poesia" onclick="toggleTheme(this)">Poesia</button>
      <button class="theme-btn" data-theme="Não-Ficção" onclick="toggleTheme(this)">Não-Ficção</button>
      <button class="theme-btn" data-theme="Mangá & HQ" onclick="toggleTheme(this)">Mangá & HQ</button>
      <!-- Formato -->
      <button class="theme-btn" data-theme="Presencial" onclick="toggleTheme(this)">Presencial</button>
      <button class="theme-btn" data-theme="Online" onclick="toggleTheme(this)">Online</button>
      <!-- Tipo de Atividade -->
      <button class="theme-btn" data-theme="Discussão" onclick="toggleTheme(this)">Discussão</button>
      <button class="theme-btn" data-theme="Recomendação" onclick="toggleTheme(this)">Recomendação</button>
    </div>
  </div>

  <!-- DESCRIÇÃO -->
  <div class="section">
    <label>Descrição</label>
    <div class="desc-wrapper">
      <textarea id="clubDesc" maxlength="300"
        placeholder="Descreva o propósito do clube, quem pode participar e o que vocês vão fazer juntos..."
        oninput="updateDesc(this)"></textarea>
      <span class="desc-counter" id="descCount">0/300</span>
    </div>
  </div>

  <!-- TIPO DE ENTRADA -->
  <div class="section">
    <label>Tipo de Entrada</label>
    <div class="entry-grid">
      <div class="entry-btn selected" id="entryFree" onclick="selectEntry('free')">
        <span class="entry-icon">🔓</span>
        <div>
          <div class="entry-title">Entrada Livre</div>
          <div class="entry-sub">Qualquer pessoa pode entrar diretamente</div>
        </div>
      </div>
      <div class="entry-btn" id="entryRequest" onclick="selectEntry('request')">
        <span class="entry-icon">🔒</span>
        <div>
          <div class="entry-title">Requer Solicitação</div>
          <div class="entry-sub">Membros precisam de aprovação para entrar</div>
        </div>
      </div>
    </div>
  </div>

  <!-- PRÉ-VISUALIZAÇÃO -->
  <div class="section">
    <div class="preview-title">👁 Pré-visualização do Clube</div>
    <div class="preview-card">
      <div class="preview-banner">
        <div class="preview-avatar">📚</div>
      </div>
      <div class="preview-body">
        <div class="preview-name" id="prevName">Nome do Clube</div>
        <div class="preview-description" id="prevDesc">Descrição do clube...</div>
        <div class="preview-tags" id="prevTags">
          <span class="preview-tag" style="opacity:.4">Tema 1</span>
          <span class="preview-tag" style="opacity:.4">Tema 2</span>
          <span class="preview-tag" style="opacity:.4">Tema 3</span>
        </div>
        <div class="preview-entry" id="prevEntry">🔓 Entrada livre</div>
      </div>
    </div>
  </div>

  <!-- AÇÕES -->
  <div class="action-row">
    <button class="btn-cancel">Cancelar</button>
    <button class="btn-create">Criar Clube</button>
  </div>
</div>


<script>

  let selectedThemes = [];
  let entryType = 'free';

  function updateName(input) {
    document.getElementById('nameCount').textContent = input.value.length + '/60';
    document.getElementById('prevName').textContent = input.value || 'Nome do Clube';
  }

  function updateDesc(textarea) {
    document.getElementById('descCount').textContent = textarea.value.length + '/300';
    const prev = document.getElementById('prevDesc');
    prev.textContent = textarea.value || 'Descrição do clube...';
  }

  function toggleTheme(btn) {
    const theme = btn.dataset.theme;
    if (btn.classList.contains('selected')) {
      btn.classList.remove('selected');
      selectedThemes = selectedThemes.filter(t => t !== theme);
    } else {
      if (selectedThemes.length >= 3) return;
      btn.classList.add('selected');
      selectedThemes.push(theme);
    }

    // Disable unselected if max reached
    document.querySelectorAll('.theme-btn').forEach(b => {
      if (!b.classList.contains('selected')) {
        if (selectedThemes.length >= 3) b.classList.add('disabled');
        else b.classList.remove('disabled');
      }
    });

    document.getElementById('selectedCount').textContent =
      selectedThemes.length + ' de 3 selecionados';

    updatePreviewTags();
  }

  function updatePreviewTags() {
    const container = document.getElementById('prevTags');
    container.innerHTML = '';

    const display = selectedThemes.length > 0 ? selectedThemes : ['Tema 1', 'Tema 2', 'Tema 3'];
    display.forEach((t, i) => {
      const tag = document.createElement('span');
      tag.className = 'preview-tag';
      tag.textContent = t;
      if (selectedThemes.length === 0) tag.style.opacity = '.4';
      container.appendChild(tag);
    });
  }

  function selectEntry(type) {
    entryType = type;
    document.getElementById('entryFree').classList.toggle('selected', type === 'free');
    document.getElementById('entryRequest').classList.toggle('selected', type === 'request');
    const prev = document.getElementById('prevEntry');
    prev.textContent = type === 'free' ? '🔓 Entrada livre' : '🔒 Requer solicitação';
  

    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');

    hamburger.addEventListener('click', () => {
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
  }
</script>

</body>
</html>