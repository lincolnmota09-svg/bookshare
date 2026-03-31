<?php
include('../php/verificar.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Perfil do Leitor</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../Home/home.css">

<style>
:root {
  --cor-primaria: #6c63ff;
  --cor-secundaria: #f5f6fa;
  --cor-texto: #333;
  --cor-sub: #777;
  --branco: #fff;
}
.card.add {
  cursor: progress;
  font-size: 50px;
  color: #666;
  transition: 0.2s;
  width: 40px;
  height: 50px;
  margin-top: 100px;
  margin-left: 30px;
  position: relative;
  padding-bottom: -50px;
  display: flex;
  align-items: center;     /* centraliza vertical */
  justify-content: center; /* centraliza horizontal */
}

.card.add:hover {
  background: #eaeaea;
  color: #000;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(135deg, #ece9ff, #f5f6fa);
  color: var(--cor-texto);
}

/* CONTAINER */
.container {
  max-width: 1000px;
  margin: 40px auto;
  padding: 20px;
}

/* CARD PERFIL */
.perfil-card {
  background: var(--branco);
  border-radius: 16px;
  padding: 30px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
  transition: 0.3s;
}

.perfil-card:hover {
  transform: translateY(-5px);
}

/* HEADER */
.perfil-header {
  display: flex;
  align-items: center;
  gap: 25px;
  flex-wrap: wrap;
}

.perfil-header img {
  width: 110px;
  height: 110px;
  border-radius: 50%;
  border: 4px solid var(--cor-primaria);
  object-fit: cover;
}

.info h2 {
  font-weight: 600;
}

.info p {
  color: var(--cor-sub);
  margin-top: 5px;
}

/* BOTÃO */
.btn {
  margin-left: auto;
  padding: 10px 18px;
  border: none;
  border-radius: 8px;
  background: var(--cor-primaria);
  color: white;
  cursor: pointer;
  transition: 0.3s;
}

.btn:hover {
  background: #574fd6;
}

/* STATS */
.stats {
  display: flex;
  justify-content: space-between;
  margin-top: 30px;
  background: var(--cor-secundaria);
  padding: 20px;
  border-radius: 12px;
}

.stat {
  text-align: center;
  flex: 1;
}

.stat h3 {
  font-size: 22px;
}

.stat p {
  color: var(--cor-sub);
}

/* SEÇÃO LIVROS */
.secao {
  margin-top: 30px;
}

.secao h3 {
  margin-bottom: 15px;
}

/* GRID */
.grid-livros {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
  gap: 20px;
}

/* CARD LIVRO */
.livro {
  background: var(--branco);
  border-radius: 12px;
  padding: 10px;
  text-align: center;
  box-shadow: 0 5px 15px rgba(0,0,0,0.05);
  transition: 0.3s;
}

.livro:hover {
  transform: translateY(-5px) scale(1.03);
}

.livro img {
  width: 100%;
  border-radius: 8px;
}

.livro p {
  margin-top: 8px;
  font-size: 14px;
}

/* RESPONSIVO */
@media (max-width: 600px) {
  .perfil-header {
    flex-direction: column;
    align-items: flex-start;
  }

  .btn {
    margin: 10px 0 0 0;
  }

  .stats {
    flex-direction: column;
    gap: 15px;
  }
  /* botão de add */

}
</style>
</head>

<body>

   <header>
    <div class="header-left">
      <div class="logo"><a href=""><img src="../imagens/logo/logo.png" alt=""></a></div>

      <!-- Nav desktop -->
      <nav>
        <a href="../Home/inicio.php" >início</a>
        <a href="../Clube/clube.php">Clube</a> 
        <a href="../Emprestar/emprestar.php">Emprestar</a>
        <a href="../Perfil/perfil.php" class="active">Perfil</a>
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

     <div class="mobile-menu" id="mobileMenu">
    <a href="../Home/inicio.php" >início</a>
    <a href="../Clube/clube.php">Clube</a> 
    <a href="../Emprestar/emprestar.php">Emprestar</a>
    <a href="../Perfil/perfil.php" class="active">Perfil</a>


    <div class="mobile-search">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/>
      </svg>
      <input type="text" placeholder="Search..." />
    </div>

  </div>
  </header>


<div class="container">

  <div class="perfil-card">
    
    <div class="perfil-header">
      <img src="https://github.com/lincolnmota09-svg/bookshare/blob/main/imagens/usuario/edilson.png?raw=true" alt="usuario">
      
      <div class="info">
        <h2>Edilson Junior</h2>
        <p>📚 amante de quadrinhos e mangás</p>
      </div>

     
    </div>

    <div class="stats">
      <div class="stat">
        <h3>15</h3>
        <p>Livros lidos</p>
      </div>
      <div class="stat">
        <h3>5</h3>
        <p>Favoritos</p>
      </div>
      <div class="stat">
        <h3>10</h3>
        <p>Resenhas</p>
      </div>
    </div>

    <div class="secao">
      <h3>📖 Adicionados</h3>
      <div class="grid-livros">
        
        <div class="livro">
          <img style="width: 90%; height: 90%; object-fit: cover;" src="https://github.com/lincolnmota09-svg/bookshare/blob/main/imagens/capas-livros/capa6.png?raw=true">
          <p>Livro 1</p>
        </div>

        <div class="livro">
          <img style="width: 90%; height: 90%; object-fit: cover;" src="https://github.com/lincolnmota09-svg/bookshare/blob/main/imagens/capas-livros/capa2.jpg?raw=true">
          <p>Livro 2</p>
        </div>

        <div class="livro">
          <img style="width: 90%; height: 90%; object-fit: cover;" src="https://github.com/lincolnmota09-svg/bookshare/blob/main/imagens/capas-livros/capa5.png?raw=true">
          <p>Livro 3</p>
        </div>

        
          <!-- BOTÃO ADD -->
          <div class="card add">
            <span>+</span>
           </div>
          </div>
        </div>

      </div>
    </div>

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
    });

    
  </script>
</body>
</html>