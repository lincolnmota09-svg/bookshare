<?php
include('../php/verificar.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Home/home.css">
    <link rel="stylesheet" href="emprestar.css">
    

    <title>Emprestar livro</title>
</head>
<body>

  <header>

    <div class="header-left">
      <div class="logo"><a href=""><img src="../imagens/logo/logo.png" alt=""></a></div>

      <!-- Nav desktop -->
      <nav>
        <a href="../Home/inicio.php">início</a>
        <a href="../Clube/clube.php">Clube</a>
        <a href="../Emprestar/emprestar.php" class="active">Emprestar</a>
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
      <a href="../Clube/clube.php">Clube</a>
      <a href="../Emprestar/emprestar.php" class="active">Emprestar</a>
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
      <h1 id="titulo">Quer <span style="color: #7c7cff;">emprestar</span> um livro?</h1>
      <p id="subtitulo">Compartilhe sua biblioteca com a comunidade e ajude outros leitores.</p>
    </div>

    <div class="btn-escolha">
      <a href="../Home/inicio.php" class="btn-escolha-personalizado">Pegar emprestado</a>
      <a href="emprestar.php" id="btn-escolha-personalizado-outline">Emprestar um livro</a>
    </div>
  </div>


  <!-- ====== PÁGINA EMPRESTAR LIVRO ====== -->
  <main class="el-page">

    <!-- Card do formulário -->
    <section class="el-card">
      <header class="el-form-header">
        <h1>Novo Empréstimo</h1>
        <p>Preencha as informações abaixo para disponibilizar seu livro</p>
      </header>

      <form id="emprestarForm" class="el-form" enctype="multipart/form-data" novalidate>

        <!-- Foto do livro -->
        <div class="el-field">
          <label>FOTO DO LIVRO</label>
          <label for="fotoLivro" class="el-upload" id="uploadDrop">
            <input type="file" id="fotoLivro" name="fotoLivro" accept="image/*" hidden />
            <div class="el-upload-inner" id="uploadInner">
              <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                <path d="M21 15l-5-5L5 21"></path>
              </svg>
              <strong>Clique ou arraste uma foto do livro</strong>
              <small>JPG, PNG ou WEBP — até 5 MB</small>
            </div>
            <img class="el-upload-preview" id="uploadPreview" alt="" hidden />
            <button type="button" class="el-upload-remove" id="uploadRemove" hidden aria-label="Remover foto">×</button>
          </label>
        </div>

        <!-- Nome do livro -->
        <div class="el-field">
          <label for="nomeLivro">NOME DO LIVRO</label>
          <div class="el-input-wrapper">
            <input
              type="text"
              id="nomeLivro"
              name="nomeLivro"
              maxlength="80"
              placeholder="Ex: O Senhor dos Anéis"
            />
            <span class="el-counter" id="nomeCounter">0/80</span>
          </div>
        </div>

        <!-- Descrição -->
        <div class="el-field">
          <label for="descricao">DESCRIÇÃO</label>
          <div class="el-input-wrapper">
            <textarea
              id="descricao"
              name="descricao"
              maxlength="400"
              rows="4"
              placeholder="Fale um pouco sobre o livro, detalhes importantes para quem for pegar emprestado..."
            ></textarea>
            <span class="el-counter" id="descCounter">0/400</span>
          </div>
        </div>

        <!-- Estado do livro -->
        <div class="el-field">
          <label>ESTADO DO LIVRO</label>
          <p class="el-help">Selecione a opção que melhor descreve o seu livro</p>

          <div class="el-chips" id="estadoChips" role="radiogroup" aria-label="Estado do livro">
            <button type="button" class="el-chip" data-value="novo">Novo</button>
            <button type="button" class="el-chip el-selected" data-value="otimo">Ótimo</button>
            <button type="button" class="el-chip" data-value="bom">Bom</button>
            <button type="button" class="el-chip" data-value="razoavel">Razoável</button>
            <button type="button" class="el-chip" data-value="desgastado">Desgastado</button>
          </div>
          <input type="hidden" id="estadoValue" name="estado" value="otimo" />
        </div>

        <!-- Tempo de devolução -->
        <div class="el-field">
          <label>TEMPO DE DEVOLUÇÃO</label>
          <p class="el-help">Quanto tempo o leitor pode ficar com o livro</p>

          <div class="el-chips el-chips-compact" id="prazoChips" role="radiogroup" aria-label="Tempo de devolução">
            <button type="button" class="el-chip" data-value="7">7 dias</button>
            <button type="button" class="el-chip el-selected" data-value="15">15 dias</button>
            <button type="button" class="el-chip" data-value="30">30 dias</button>
            <button type="button" class="el-chip" data-value="60">60 dias</button>
            <button type="button" class="el-chip" data-value="custom">Personalizado</button>
          </div>

          <div class="el-input-wrapper el-custom-prazo" id="customPrazoWrap" hidden>
            <input
              type="number"
              id="prazoCustom"
              name="prazoCustom"
              min="1"
              max="365"
              placeholder="Número de dias"
            />
            <span class="el-suffix">dias</span>
          </div>
          <input type="hidden" id="prazoValue" name="prazo" value="15" />
        </div>

        <!-- Criador -->
        <div class="el-field">
          <label>CRIADOR</label>
          <div class="el-owner">
            <img src="../imagens/usuario/edilson.png" alt="" class="el-owner-avatar" />
            <div class="el-owner-text">
              <strong>Edilson Jr.</strong>
              <small>Responsável pelo empréstimo</small>
            </div>
          </div>
        </div>

        <!-- Ações -->
        <div class="el-actions">
          <button type="button" class="el-btn el-btn-secondary" id="cancelBtn">Cancelar</button>
          <button type="submit" class="el-btn el-btn-primary">Publicar livro</button>
        </div>
      </form>
    </section>

    <!-- Livros já publicados -->
    <section class="el-books-section">
      <div class="el-books-header">
        <h2>Seus livros publicados</h2>
        <div class="el-filters" role="tablist" aria-label="Filtrar livros">
          <button type="button" class="el-filter el-selected" data-filter="todos">Todos</button>
          <button type="button" class="el-filter" data-filter="emprestado">Emprestados</button>
          <button type="button" class="el-filter" data-filter="devolvido">Devolvidos</button>
        </div>
      </div>

      <div class="el-books-grid" id="booksGrid">

        <!-- Livro 1: EMPRESTADO -->
        <article class="el-book-card" data-status="emprestado">
          <div class="el-book-cover">
            <div class="el-book-placeholder" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
              </svg>
            </div>
            <span class="el-badge el-badge-warn">Emprestado</span>
          </div>
          <div class="el-book-body">
            <h3>O alquimista</h3>
            <p>Boa conservação.</p>

            <div class="el-book-meta">
              <span class="el-pill">Ótimo</span>
              <span class="el-pill el-pill-ghost">15 dias</span>
            </div>

            <div class="el-book-owner">
              <img src="../imagens/usuario/edilson.png" alt="" />
              <span>Edilson Jr.</span>
            </div>

            <button type="button" class="el-btn el-btn-ghost">Ver detalhes</button>
          </div>
        </article>

        <!-- Livro 2: DEVOLVIDO -->
        <article class="el-book-card" data-status="devolvido">
          <div class="el-book-cover el-cover-blue">
            <div class="el-book-placeholder" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
              </svg>
            </div>
            <span class="el-badge el-badge-ok">Devolvido</span>
          </div>
          <div class="el-book-body">
            <h3>1984</h3>
            <p>Distopia clássica de George Orwell.</p>

            <div class="el-book-meta">
              <span class="el-pill">Bom</span>
              <span class="el-pill el-pill-ghost">30 dias</span>
            </div>

            <div class="el-book-owner">
              <img src="../imagens/usuario/edilson.png" alt="" />
              <span>Edilson Jr.</span>
            </div>

            <button type="button" class="el-btn el-btn-ghost">Ver detalhes</button>
          </div>
        </article>

        <!-- Livro 3: EMPRESTADO -->
        <article class="el-book-card" data-status="emprestado">
          <div class="el-book-cover el-cover-purple">
            <div class="el-book-placeholder" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
              </svg>
            </div>
            <span class="el-badge el-badge-warn">Emprestado</span>
          </div>
          <div class="el-book-body">
            <h3>O alienista</h3>
            <p>Fedição especial.</p>

            <div class="el-book-meta">
              <span class="el-pill">Novo</span>
              <span class="el-pill el-pill-ghost">7 dias</span>
            </div>

            <div class="el-book-owner">
              <img src="../imagens/usuario/edilson.png" alt="" />
              <span>Edilson Jr.</span>
            </div>

            <button type="button" class="el-btn el-btn-ghost">Ver detalhes</button>
          </div>
        </article>

      </div>
    </section>

  </main>


  <script>
    // ===== Contadores =====
    const nomeInput = document.getElementById('nomeLivro');
    const nomeCounter = document.getElementById('nomeCounter');
    nomeInput.addEventListener('input', () => {
      nomeCounter.textContent = `${nomeInput.value.length}/80`;
    });

    const descInput = document.getElementById('descricao');
    const descCounter = document.getElementById('descCounter');
    descInput.addEventListener('input', () => {
      descCounter.textContent = `${descInput.value.length}/400`;
    });

    // ===== Seleção única (chips de rádio) =====
    function singleSelect(containerId, hiddenId) {
      const container = document.getElementById(containerId);
      const hidden = hiddenId ? document.getElementById(hiddenId) : null;
      if (!container) return;

      container.addEventListener('click', (e) => {
        const chip = e.target.closest('.el-chip');
        if (!chip) return;
        container.querySelectorAll('.el-chip').forEach((c) => c.classList.remove('el-selected'));
        chip.classList.add('el-selected');
        if (hidden) hidden.value = chip.dataset.value;

        // Prazo personalizado
        if (containerId === 'prazoChips') {
          const wrap = document.getElementById('customPrazoWrap');
          if (chip.dataset.value === 'custom') {
            wrap.hidden = false;
            document.getElementById('prazoCustom').focus();
          } else {
            wrap.hidden = true;
          }
        }
      });
    }
    singleSelect('estadoChips', 'estadoValue');
    singleSelect('prazoChips', 'prazoValue');

    document.getElementById('prazoCustom')?.addEventListener('input', (e) => {
      document.getElementById('prazoValue').value = e.target.value;
    });

    // ===== Upload da foto =====
    const fotoInput = document.getElementById('fotoLivro');
    const preview = document.getElementById('uploadPreview');
    const inner = document.getElementById('uploadInner');
    const removeBtn = document.getElementById('uploadRemove');
    const drop = document.getElementById('uploadDrop');

    function showFile(file) {
      if (!file) return;
      const reader = new FileReader();
      reader.onload = (e) => {
        preview.src = e.target.result;
        preview.hidden = false;
        inner.hidden = true;
        removeBtn.hidden = false;
      };
      reader.readAsDataURL(file);
    }

    fotoInput.addEventListener('change', (e) => showFile(e.target.files?.[0]));
    removeBtn.addEventListener('click', (e) => {
      e.preventDefault();
      fotoInput.value = '';
      preview.hidden = true;
      preview.removeAttribute('src');
      inner.hidden = false;
      removeBtn.hidden = true;
    });

    ['dragenter', 'dragover'].forEach((ev) =>
      drop.addEventListener(ev, (e) => {
        e.preventDefault();
        drop.classList.add('el-upload-hover');
      })
    );
    ['dragleave', 'drop'].forEach((ev) =>
      drop.addEventListener(ev, (e) => {
        e.preventDefault();
        drop.classList.remove('el-upload-hover');
      })
    );
    drop.addEventListener('drop', (e) => {
      const file = e.dataTransfer.files?.[0];
      if (file) {
        fotoInput.files = e.dataTransfer.files;
        showFile(file);
      }
    });

    // ===== Filtro de livros (Todos / Emprestados / Devolvidos) =====
    const filterButtons = document.querySelectorAll('.el-filter');
    const booksGrid = document.getElementById('booksGrid');

    filterButtons.forEach((btn) => {
      btn.addEventListener('click', () => {
        filterButtons.forEach((b) => b.classList.remove('el-selected'));
        btn.classList.add('el-selected');

        const filter = btn.dataset.filter;
        booksGrid.querySelectorAll('.el-book-card').forEach((card) => {
          const status = card.dataset.status;
          card.hidden = !(filter === 'todos' || filter === status);
        });
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
