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

    <div class="header-left">
      <div class="logo"><a href=""><img src="../imagens/logo/logo.png" alt=""></a></div>

      <!-- Nav desktop -->
      <nav>
        <a href="../Home/inicio.php">início</a>
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
      <a href="../Home/inicio.php">início</a>
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
      <p id="subtitulo">Encontre o clube ideal para você ou crie o seu próprio!</p>
    </div>

    <div class="btn-escolha">
      <a href="clube.php" class="btn-escolha-personalizado">Entrar em um clube</a>
      <a href="criarClube.php" id="btn-escolha-personalizado-outline">Criar um clube</a>
    </div>
  </div>


  <!-- ====== PÁGINA CRIAR CLUBE ====== -->
  <main class="nc-page">

    <!-- Card do formulário -->
    <section class="nc-card">
      <header class="nc-form-header">
        <h1>Novo Clube</h1>
        <p>Preencha as informações abaixo para criar seu clube personalizado</p>
      </header>

      <form id="novoClubeForm" class="nc-form" novalidate>
        <!-- Nome do clube -->
        <div class="nc-field">
          <label for="nomeClube">NOME DO CLUBE</label>
          <div class="nc-input-wrapper">
            <input
              type="text"
              id="nomeClube"
              name="nomeClube"
              maxlength="60"
              placeholder="Ex: Leitores de Fantasia"
            />
            <span class="nc-counter" id="nomeCounter">0/60</span>
          </div>
        </div>

        <!-- Temas -->
        <div class="nc-field">
          <label>TEMA DO CLUBE</label>
          <p class="nc-help">Escolha exatamente 3 temas para o seu clube</p>
          <p class="nc-selected-count" id="selectedCount">0 de 3 selecionados</p>

          <div class="nc-chips" id="chips">
            <button type="button" class="nc-chip" data-value="Fantasia">Fantasia</button>
            <button type="button" class="nc-chip" data-value="Romance">Romance</button>
            <button type="button" class="nc-chip" data-value="Terror">Terror</button>
            <button type="button" class="nc-chip" data-value="Ficção Científica">Ficção Científica</button>
            <button type="button" class="nc-chip" data-value="Clássicos">Clássicos</button>
            <button type="button" class="nc-chip" data-value="Poesia">Poesia</button>
            <button type="button" class="nc-chip" data-value="Não-Ficção">Não-Ficção</button>
            <button type="button" class="nc-chip" data-value="Mangá & HQ">Mangá &amp; HQ</button>
            <button type="button" class="nc-chip" data-value="Presencial">Presencial</button>
            <button type="button" class="nc-chip" data-value="Online">Online</button>
            <button type="button" class="nc-chip" data-value="Discussão">Discussão</button>
            <button type="button" class="nc-chip" data-value="Recomendação">Recomendação</button>
          </div>
        </div>

        <!-- Descrição -->
        <div class="nc-field">
          <label for="descricao">DESCRIÇÃO</label>
          <div class="nc-input-wrapper">
            <textarea
              id="descricao"
              name="descricao"
              maxlength="300"
              rows="4"
              placeholder="Descreva o propósito do clube, quem pode participar e o que vocês vão fazer juntos..."
            ></textarea>
            <span class="nc-counter" id="descCounter">0/300</span>
          </div>
        </div>

        <!-- Tipo de entrada -->
        <div class="nc-field">
          <label>TIPO DE ENTRADA</label>
          <div class="nc-entry-options" role="radiogroup" aria-label="Tipo de entrada">
            <label class="nc-entry-option nc-selected">
              <input type="radio" name="tipoEntrada" value="livre" checked />
              <span class="nc-entry-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="11" width="18" height="10" rx="2"></rect>
                  <path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                </svg>
              </span>
              <span class="nc-entry-text">
                <strong>ENTRADA LIVRE</strong>
                <small>Qualquer pessoa pode entrar diretamente</small>
              </span>
            </label>

            <label class="nc-entry-option">
              <input type="radio" name="tipoEntrada" value="solicitacao" />
              <span class="nc-entry-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="11" width="18" height="10" rx="2"></rect>
                  <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
              </span>
              <span class="nc-entry-text">
                <strong>REQUER SOLICITAÇÃO</strong>
                <small>Membros precisam de aprovação para entrar</small>
              </span>
            </label>
          </div>
        </div>

        <!-- Ações -->
        <div class="nc-actions">
          <button type="button" class="nc-btn nc-btn-secondary" id="cancelBtn">Cancelar</button>
          <button type="submit" class="nc-btn nc-btn-primary">Criar Clube</button>
        </div>
      </form>
    </section>

    <!-- Clubes já criados -->
    <section class="nc-clubs-section">
      <h2>Seus Clubes Criados</h2>

      <div class="clubes">
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

      </div>
    </section>

  </main>


  <script>
    // ===== Contador do nome =====
    const nomeInput = document.getElementById('nomeClube');
    const nomeCounter = document.getElementById('nomeCounter');
    nomeInput.addEventListener('input', () => {
      nomeCounter.textContent = `${nomeInput.value.length}/60`;
    });

    // ===== Contador da descrição =====
    const descInput = document.getElementById('descricao');
    const descCounter = document.getElementById('descCounter');
    descInput.addEventListener('input', () => {
      descCounter.textContent = `${descInput.value.length}/300`;
    });

    // ===== Seleção de temas (máx. 3) =====
    const chipsContainer = document.getElementById('chips');
    const selectedCount = document.getElementById('selectedCount');
    const MAX_TEMAS = 3;

    chipsContainer.addEventListener('click', (e) => {
      const chip = e.target.closest('.nc-chip');
      if (!chip) return;

      const selected = chipsContainer.querySelectorAll('.nc-chip.nc-selected');

      if (chip.classList.contains('nc-selected')) {
        chip.classList.remove('nc-selected');
      } else if (selected.length < MAX_TEMAS) {
        chip.classList.add('nc-selected');
      }

      const count = chipsContainer.querySelectorAll('.nc-chip.nc-selected').length;
      selectedCount.textContent = `${count} de ${MAX_TEMAS} selecionados`;
    });

    // ===== Tipo de entrada =====
    document.querySelectorAll('.nc-entry-option input[type="radio"]').forEach((radio) => {
      radio.addEventListener('change', () => {
        document.querySelectorAll('.nc-entry-option').forEach((opt) => opt.classList.remove('nc-selected'));
        radio.closest('.nc-entry-option').classList.add('nc-selected');
      });
    });

    // ===== Menu mobile (hamburger) =====
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');

    if (hamburger && mobileMenu) {
      hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('open');
        mobileMenu.classList.toggle('open');
      });

      mobileMenu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
          hamburger.classList.remove('open');
          mobileMenu.classList.remove('open');
        });
      });
    }
  </script>

</body>
</html>
