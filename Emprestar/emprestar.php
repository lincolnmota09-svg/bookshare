<?php
include('../php/verificar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emprestar</title>
     
     <link rel="stylesheet" href="emprestar.css">
     <link rel="stylesheet" href="../Home/home.css">
</head>
<body>
    <header>
    <div class="header-left">
      <div class="logo"><a href=""><img src="../imagens/logo/logo.png" alt=""></a></div>

      <!-- Nav desktop -->
      <nav>
        <a href="../Home/inicio.php" >início</a>
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
    <a href="../Home/inicio.php" >início</a>
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


  <div class="page-title">
    <h1>📚 Minha Estante de Empréstimos</h1>
    <p>Cadastre e gerencie os livros que você empresta</p>
  </div>

  <!-- FORM -->
  <div class="form-card">
    <h2><span>➕</span> Adicionar Livro</h2>

    <div class="form-grid">

      <!-- Imagem -->
      <div class="form-group full">
        <label>Capa do Livro</label>
        <div class="img-upload-area" onclick="document.getElementById('bookCover').click()">
          <input type="file" id="bookCover" accept="image/*" onchange="previewImage(event)" />
          <img class="img-preview" id="coverPreview" alt="Capa" />
          <div id="uploadPlaceholder">
            <div class="img-upload-icon">🖼️</div>
            <div class="img-upload-text">Clique para enviar a capa do livro</div>
          </div>
        </div>
      </div>

      <!-- Título -->
      <div class="form-group">
        <label>Título</label>
        <input type="text" id="bookTitle" placeholder="Ex: O Pequeno Príncipe" />
      </div>

      <!-- Autor -->
      <div class="form-group">
        <label>Autor</label>
        <input type="text" id="bookAuthor" placeholder="Ex: Antoine de Saint-Exupéry" />
      </div>

      <!-- Gênero -->
      <div class="form-group">
        <label>Gênero</label>
        <select id="bookGenre">
          <option value="">Selecione...</option>
          <option>Romance</option>
          <option>Ficção Científica</option>
          <option>Terror</option>
          <option>Fantasia</option>
          <option>Biografia</option>
          <option>Auto-ajuda</option>
          <option>Policial</option>
          <option>Histórico</option>
          <option>Infantil</option>
          <option>Outro</option>
        </select>
      </div>

      <!-- Ano -->
      <div class="form-group">
        <label>Ano de Publicação</label>
        <input type="number" id="bookYear" placeholder="Ex: 1943" min="1000" max="2099" />
      </div>

      <!-- Tempo de empréstimo -->
      <div class="form-group">
        <label>Prazo de Empréstimo</label>
        <select id="bookTime">
          <option value="">Sem prazo</option>
          <option>3 dias</option>
          <option>7 dias</option>
          <option>14 dias</option>
          <option>30 dias</option>
          <option>60 dias</option>
        </select>
      </div>

      <!-- Condição -->
      <div class="form-group">
        <label>Condição</label>
        <select id="bookCondition">
          <option value="">Selecione...</option>
          <option>Novo</option>
          <option>Ótimo</option>
          <option>Bom</option>
          <option>Regular</option>
          <option>Desgastado</option>
        </select>
      </div>

      <!-- Status -->
      <div class="form-group full">
        <label>Status</label>
        <div class="status-options">
          <label>
            <input type="radio" name="bookStatus" value="Disponível" checked />
            <span>✅ Disponível</span>
          </label>
          <label>
            <input type="radio" name="bookStatus" value="Emprestado" />
            <span>📤 Emprestado</span>
          </label>
          <label>
            <input type="radio" name="bookStatus" value="Reservado" />
            <span>🔖 Reservado</span>
          </label>
        </div>
      </div>

      <!-- Observações -->
      <div class="form-group full">
        <label>Observações</label>
        <textarea id="bookNotes" placeholder="Ex: Capa levemente amassada, leitura recomendada para maiores de 12 anos..."></textarea>
      </div>

    </div>

    <button class="btn-add" onclick="addBook()">Adicionar à Estante</button>
  </div>

  <!-- BOOKS LIST -->
  <div class="section-title">
    <h2>📖 Estante</h2>
    <span class="books-count" id="booksCount">0 livros</span>
  </div>

  <div class="books-grid" id="booksGrid">
    <div class="empty-state">
      <div class="empty-icon">📭</div>
      <p>Nenhum livro cadastrado ainda.<br/>Adicione seu primeiro livro acima!</p>
    </div>
  </div>


   <script>
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
    });</script>

</body>
</html>