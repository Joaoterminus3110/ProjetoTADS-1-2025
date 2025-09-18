# KILL THE SUN — Site de Jogos (PHP + MySQL)

Projeto de um site de jogos 2D com cadastro e login obrigatórios para jogar. O jogo principal é carregado via **iframe** a partir de `/jogo/KILLBETA7/` (exportado do Construct).

> **Status:** MVP funcional (cadastro, login, proteção de rota e embed do jogo).

---

## 🧰 Stack
- **PHP** (PDO) + **MySQL**
- **HTML/CSS** (Bootstrap básico em `index.php`), assets estáticos em `Imagem/` e `Trailer/`
- Sessões PHP para autenticação
- Jogo em `/jogo/KILLBETA7/` (Construct export)

---

## 🚀 Como rodar (XAMPP/LAMP)

1. **Clone/extraia** este repositório dentro do seu servidor web (ex.: `htdocs/ProjetoTADS-1-2025` no XAMPP).
2. **Inicie** Apache e MySQL.
3. **Crie o banco** e a tabela (SQL abaixo).
4. Ajuste, se necessário, as credenciais em `conexao.php`.
5. Acesse: `http://localhost/ProjetoTADS-1-2025/`

### Banco de dados

Por padrão, `conexao.php` aponta para o banco `killofsun` (usuário `root`, senha vazia). Crie a base e a tabela:

```sql
CREATE DATABASE IF NOT EXISTS killofsun DEFAULT CHARSET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE killofsun;

CREATE TABLE I usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  senha_hash VARCHAR(255) NOT NUL
);
```


---

## 🗂️ Estrutura (resumo)

```
ProjetoTADS-1-2025/
├── index.php                 # Home
├── sobrejogo.php             # Página “Sobre” + trailer
├── galeriadejogos.php        # Galeria de imagens
├── Jogosatuaisefuturos.php   # Lista de jogos atual e futuro
├── contato.php               # Formulário (Formsubmit)
├── cadastro.php              # Cadastro de usuários
├── entre.php                 # Login
├── jogar.php                 # Rota protegida (carrega o jogo)
├── conexao.php               # Conexão PDO com MySQL
├── jogo/
│   └── KILLBETA7/
│       └── index.php         # Loader do jogo (Construct export)
├── css/                      # Estilos
├── Imagem/                   # Logos, capas e screenshots
└── Trailer/                  # Vídeos
```

---

## 📄 O que cada arquivo PHP faz

### `conexao.php`
- Cria um objeto **PDO** conectado ao MySQL usando:
  - host: `localhost`
  - dbname: `killofsun`
  - user: `root` / pass: vazio (ajustável)
- Define `PDO::ATTR_ERRMODE = EXCEPTION` para facilitar o tratamento de erros.

### `cadastro.php`
- Exibe um formulário de **cadastro** (`nome`, `email`, `senha`).
- Ao `POST`, **hashea** a senha com `password_hash()` e **insere** em `usuarios` via **prepared statement**.
- Ao concluir, inicia/usa **$_SESSION**. Observação: o código atual define `$_SESSION['user_id'] = $nome;` — ideal seria salvar o **ID** (p.ex. via `$pdo->lastInsertId()` ou um `SELECT` após o insert).

### `entre.php`
- Exibe o formulário de **login** (`email`, `senha`).
- Busca o usuário por e-mail e valida a senha com `password_verify()`.
- Em caso de sucesso, popula `$_SESSION['user_id']` (com o **id** do usuário) e `$_SESSION['user_name']`, depois **redireciona** para `jogar.php`.
- Em caso de falha, mostra mensagem de erro.

### `jogar.php`
- **Rota protegida**: se `$_SESSION['user_id']` não existir, redireciona para `entre.php`.
- Carrega o jogo principal em um **iframe** e oferece:
  - **Download** (`KILLBETA7.zip`)
  - **Abrir em nova aba** (`/jogo/KILLBETA7/index.php`)

### `index.php`
- **Home** do site. Mostra menu e uma apresentação do universo do jogo.

### `sobrejogo.php`
- Página **Sobre**, com trailer (`Trailer/*.mp4`) e descrição das fases.

### `galeriadejogos.php`
- **Galeria** com screenshots (imagens em `Imagem/*`).

### `Jogosatuaisefuturos.php`
- Lista o jogo atual (Kill the Sun) e um **jogo futuro** (placeholder).

### `contato.php`
- Formulário que **envia** para o **Formsubmit** (e-mail configurado). Não há backend próprio para contato neste projeto.

### `jogo/KILLBETA7/index.php`
- Página gerada/exportada pelo **Construct**. Carrega scripts e assets do jogo.

---

## 🔐 Fluxo de autenticação 

1. **Cadastro** (`/cadastro.php`): cria registro em `usuarios` com senha hasheada.
2. **Login** (`/entre.php`): valida credenciais e cria sessão.
3. **Jogar** (`/jogar.php`): verifica a sessão; sem login → redireciona ao `/entre.php`.

> **Sessões usadas:** `$_SESSION['user_id']` (obrigatória) e `$_SESSION['user_name']` (opcional para UI).

---

## 🧭 Navegação principal

- `/index.php` — Home  
- `/sobrejogo.php` — Sobre o game  
- `/galeriadejogos.php` — Galeria  
- `/Jogosatuaisefuturos.php` — Nossos jogos  
- `/contato.php` — Contato  
- `/cadastro.php` — Cadastro  
- `/entre.php` — Entrar  
- `/jogar.php` — **Jogar (requer login)**

---

## ✅ Checklist de qualidade / TODOs

- [ ] **Logout**: criar `logout.php` limpando a sessão (`session_unset(); session_destroy();`) e link no menu.
- [ ] **Fix cadastro**: salvar `$_SESSION['user_id']` com o **ID real** do usuário (não o nome).
- [ ] **Validação**: validar tamanho/força da senha e normalizar e-mail (lowercase, trim).
- [ ] **CSRF**: adicionar tokens nos formulários de cadastro/login.
- [ ] **Case-sensitive**: em `entre.php`, o link está para `Cadastro.php` (com C maiúsculo). Em Linux, o arquivo é `cadastro.php` (minúsculo).
- [ ] **Credenciais**: mover credenciais para variáveis de ambiente ou arquivo não versionado.
- [ ] **Erros**: mensagens mais neutras (evitar vazar se o e-mail já existe).
- [ ] **HTTPS** em produção.



---

## 👤 Autor
João Mateus Alcantara dos Santos
