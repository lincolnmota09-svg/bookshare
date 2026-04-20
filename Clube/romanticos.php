<?php
include('../php/verificar.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Românticos</title>
    <link rel="stylesheet" href="../Home/home.css">
    <link rel="stylesheet" href="clubesEstilo.css">
    <style>
        .hero {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background: linear-gradient(135deg, #1a1a2e 0%, #16213e 55%, #0f3460 100%);
  padding: 80px 24px 68px;
  border-bottom: 1px solid #2a2a3e;
  text-align: center;
}

#titulo {
  font-size: clamp(26px, 5vw, 52px);
  font-weight: 800;
  color: white;
}

#subtitulo {
  margin-top: 12px;
  font-size: 15px;
  color: #7070a0;
}

.btn-escolha {
  margin-top: 30px;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 20px;
}

/* --- BOTÕES --- */
.btn-escolha-personalizado {
  padding: 12px 28px;
  background-color: #4a4aff;
  border: none;
  border-radius: 8px;
  color: white;
  cursor: pointer;
  font-size: 14px;
  font-weight: 600;
  transition: all .2s;
  text-decoration: none;
}

#btn-escolha-personalizado-outline {
  padding: 12px 28px;
  background: transparent;
  color: #a0a0c0;
  border: 1px solid #3a3a55;
  border-radius: 8px;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  display: inline-block;
  transition: all .2s;
  text-decoration: none;
}

.btn-escolha-personalizado:hover{
  transform: translateY(-2px);
  background-color: #3a3aee;
}

#btn-escolha-personalizado-outline:hover{
  transform: translateY(-2px);
  border-color: rgb(61, 59, 219);
}

    </style>
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
    <div class="clube-page">  

  <!-- ========= BANNER ========= -->
  <div class="clube-banner">
    <div class="banner-inner">
      <div class="clube-icon-wrap">🎮</div>
      <h1>Romanticos</h1>
      <p>para os apaixonados em romance</p>
    </div>
  </div>

  <!-- ========= INFO ========= -->
  <div class="clube-info">

    <div class="info-row">
      <span class="membros-count">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
        </svg>
        <strong id="numMembros">128</strong>&nbsp;membros
      </span>
      <span class="dot">·</span>
      <span class="badge-aberto">Aberto</span>
    </div>

    <div class="criador-row">
      <img src="../imagens/usuario/edilson.png" alt="Criador" />
      <span>Criado por <strong>Edilson.Jr</strong></span>
    </div>

    <div class="tags-row">
      <span class="tag">Debates</span>
      <span class="tag">Recomendações</span>
      <span class="tag">Online</span>
    </div>

  </div>

  <hr class="divider" />

  <!-- ========= JOIN ========= -->
  <div class="join-section">
    <p class="join-text">
      Este é um clube <span>aberto</span>. Qualquer pessoa pode entrar e participar do chat.
    </p>
    <button class="btn-entrar" id="btnEntrar" onclick="entrarNoClube()">
      Entrar
    </button>
  </div>

  <!-- ========= CHAT ========= -->
  <div class="clube-chat">
    <div class="chat-header">
      <span class="dot-live"></span>
      Chat ao vivo
    </div>

    <div class="chat-mensagens" id="chatMensagens">
      <div class="msg">
        <img class="msg-avatar" src="../imagens/usuarios/pedin.png" alt="Ana" />
        <div class="msg-body">
          <span class="msg-user">Bandeira</span>
          <p class="msg-text">Clube massa</p>
        </div>
      </div>
      <div class="msg">
        <img class="msg-avatar" src="../imagens/usuarios/pacu.png" alt="Carlos" />
        <div class="msg-body">
          <span class="msg-user">Pacu</span>
          <p class="msg-text">ome Pedin deixe de zuada</p>
        </div>
      </div>
      <div class="msg">
        <img class="msg-avatar" src="../imagens/usuarios/trepas.png" alt="Julia" />
        <div class="msg-body">
          <span class="msg-user">Tromba</span>
          <p class="msg-text">Fala isso nao Pacu❤️</p>
        </div>
      </div>
      <div class="msg">
        <img class="msg-avatar" src="../imagens/usuarios/yudi.png" alt="Marcos" />
        <div class="msg-body">
          <span class="msg-user">Yudi</span>
          <p class="msg-text">Vou fazer as impadas</p>
        </div>
      </div>
    </div>

    <div class="chat-input-area">
      <div class="chat-locked" id="chatLocked">
        🔒 Entre no clube para participar do chat
      </div>
      <div class="chat-input-row hidden" id="chatInputRow">
        <input type="text" id="chatInput" placeholder="Digite uma mensagem..." maxlength="300" />
        <button onclick="enviarMensagem()">Enviar</button>
      </div>
    </div>
  </div>

</div>

<script>
  let membro = false;

  function entrarNoClube() {
    membro = true;

    // Atualiza botão
    const btn = document.getElementById('btnEntrar');
    btn.textContent = '✓ Membro';
    btn.classList.add('membro');
    btn.disabled = true;

    // Incrementa contador
    const num = document.getElementById('numMembros');
    num.textContent = parseInt(num.textContent) + 1;

    // Libera chat
    document.getElementById('chatLocked').classList.add('hidden');
    document.getElementById('chatInputRow').classList.remove('hidden');
    document.getElementById('chatInput').focus();

    // Mensagem de boas-vindas no chat
    addSystemMsg('Você entrou no clube! Seja bem-vindo(a) 🎉');
  }

  function enviarMensagem() {
    const input = document.getElementById('chatInput');
    const texto = input.value.trim();
    if (!texto) return;

    const chat = document.getElementById('chatMensagens');
    const msg = document.createElement('div');
    msg.classList.add('msg', 'msg-own');
    msg.innerHTML = `
      <img class="msg-avatar" src="../imagens/usuario/edilson.png" alt="você" />
      <div class="msg-body">
        <span class="msg-user">Você</span>
        <p class="msg-text">${escapeHTML(texto)}</p>
      </div>
    `;
    chat.appendChild(msg);
    chat.scrollTop = chat.scrollHeight;
    input.value = '';
  }

  function addSystemMsg(texto) {
    const chat = document.getElementById('chatMensagens');
    const el = document.createElement('div');
    el.style.cssText = 'text-align:center;font-size:12px;color:#50c878;padding:4px 0;';
    el.textContent = texto;
    chat.appendChild(el);
    chat.scrollTop = chat.scrollHeight;
  }

  function escapeHTML(str) {
    return str.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');
  }

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Enter' && membro) enviarMensagem();
  });

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