# MotorsClub 🚗

## Sobre o Projeto

**MotorsClub** é uma loja fictícia de venda de carros desenvolvida em PHP, JavaScript e Bootstrap. O projeto apresenta um site completo e moderno com layout responsivo, oferecendo uma experiência de usuário intuitiva e funcionalidades dinâmicas.

### Características Principais

- ✅ Layout responsivo e moderno
- ✅ PHP para processamento dinâmico
- ✅ JavaScript para validação de formulários
- ✅ Bootstrap 5 com múltiplos componentes
- ✅ 4 páginas principais (Home, Quem Somos, Carros, Contato)
- ✅ Persona explicada na página Quem Somos
- ✅ Formulário com validação completa
- ✅ Array PHP com carros dinâmicos
- ✅ Design consistente com cores preta, vermelha e cinza

---

## 📋 Páginas do Projeto

### 1. **index.php** - Página Inicial
- Hero section com call-to-action
- Seção de destaques da empresa
- Carros em destaque (3 primeiros)
- Navbar fixa e footer completo

### 2. **quem-somos.php** - Quem Somos
- História da empresa
- Persona detalhada (dor, demanda e solução)
- Valores da empresa
- Seção de CTA

### 3. **carros.php** - Listagem de Carros
- Array PHP com 9 carros
- Cards Bootstrap dinâmicos
- Filtros de busca (modelo, ano, preço)
- Validação JavaScript em tempo real

### 4. **contato.php** - Formulário de Contato
- Formulário com 6+ campos
- Validação JavaScript completa
- Validação PHP no servidor
- Envio via POST para processa-contato.php

### 5. **processa-contato.php** - Processamento
- Recebe dados via POST
- Valida dados no servidor
- Grava em arquivo contatos.txt
- Redireciona com mensagem de sucesso/erro

---

## 🚀 Como Rodar Localmente

### Pré-requisitos

- PHP 7.4 ou superior
- Servidor web (Apache, Nginx ou PHP built-in server)
- Navegador web moderno

### Passo a Passo

1. **Clone ou baixe o projeto**
   ```bash
   cd "https://github.com/vithoroliveira1/MotorsClub"
   ```

2. **Inicie o servidor PHP**
   
   **Opção 1: Servidor PHP Built-in (Recomendado)**
   ```bash
   php -S localhost:8000
   ```
   
   **Opção 2: Usando XAMPP/WAMP**
   - Copie a pasta do projeto para `htdocs` (XAMPP) ou `www` (WAMP)
   - Acesse: `http://localhost/motorsclub`

3. **Acesse no navegador**
   ```
   http://localhost:8000
   ```

4. **Verifique as páginas**
   - Home: `http://localhost:8000/index.php`
   - Quem Somos: `http://localhost:8000/quem-somos.php`
   - Carros: `http://localhost:8000/carros.php`
   - Contato: `http://localhost:8000/contato.php`

---

## 📁 Estrutura de Pastas

```
TECH ACADEMY 2/
│
├── index.php                 # Página inicial
├── quem-somos.php            # Página sobre a empresa
├── carros.php                # Listagem de carros
├── contato.php               # Formulário de contato
├── processa-contato.php      # Processamento do formulário
├── contatos.txt              # Arquivo de contatos (gerado automaticamente)
├── README.md                 # Este arquivo
│
└── assets/
    ├── css/
    │   └── style.css         # Estilos customizados
    ├── js/
    │   └── script.js         # JavaScript customizado
    └── img/
        ├── car-hero.jpg      # Imagem hero (home)
        ├── about.jpg         # Imagem sobre nós
        ├── car1.jpg          # Imagem carro 1
        ├── car2.jpg          # Imagem carro 2
        ├── car3.jpg          # Imagem carro 3
        ├── car4.jpg          # Imagem carro 4
        ├── car5.jpg          # Imagem carro 5
        ├── car6.jpg          # Imagem carro 6
        ├── car7.jpg          # Imagem carro 7
        ├── car8.jpg          # Imagem carro 8
        └── car9.jpg          # Imagem carro 9
```

---

## 🐙 Como Criar o Repositório no GitHub

### Passo 1: Criar Conta no GitHub (se não tiver)

1. Acesse [https://github.com](https://github.com)
2. Clique em "Sign up"
3. Preencha os dados e crie sua conta

### Passo 2: Criar Novo Repositório

1. Faça login no GitHub
2. Clique no ícone "+" no canto superior direito
3. Selecione "New repository"
4. Preencha os dados:
   - **Repository name:** `motorsclub`
   - **Description:** `Site de loja de carros desenvolvido em PHP, JavaScript e Bootstrap`
   - **Visibility:** Public (ou Private)
   - **NÃO marque** "Initialize this repository with a README" (já temos um)
5. Clique em "Create repository"

### Passo 3: Conectar Repositório Local ao GitHub

Após criar o repositório, o GitHub mostrará comandos. Use os seguintes:

```bash
# Navegue até a pasta do projeto
cd "C:\Users\vitho\Desktop\TECH ACADEMY 2"

# Inicialize o repositório Git (se ainda não foi feito)
git init

# Adicione todos os arquivos
git add .

# Faça o primeiro commit
git commit -m "Criação da estrutura inicial do projeto"

# Adicione o repositório remoto (substitua SEU_USUARIO pelo seu usuário do GitHub)
git remote add origin https://github.com/SEU_USUARIO/motorsclub.git

# Renomeie a branch principal para main (se necessário)
git branch -M main

# Envie os arquivos para o GitHub
git push -u origin main
```

---

## 📝 Comandos Git Essenciais

### Comandos Básicos

```bash
# Verificar status dos arquivos
git status

# Adicionar arquivos ao stage
git add .                    # Adiciona todos os arquivos
git add nome-do-arquivo.php  # Adiciona arquivo específico

# Fazer commit
git commit -m "Mensagem do commit"

# Ver histórico de commits
git log

# Enviar para o GitHub
git push

# Baixar atualizações do GitHub
git pull

# Ver branches
git branch

# Criar nova branch
git branch nome-da-branch

# Mudar de branch
git checkout nome-da-branch
```

### Comandos Avançados

```bash
# Desfazer alterações não commitadas
git checkout -- nome-do-arquivo

# Desfazer último commit (mantendo alterações)
git reset --soft HEAD~1

# Ver diferenças entre arquivos
git diff

# Clonar repositório
git clone https://github.com/SEU_USUARIO/motorsclub.git
```

---

## ✅ Commits Obrigatórios

Seguindo as boas práticas de versionamento, você deve fazer commits em etapas. Aqui estão os commits sugeridos:

### 1. Estrutura Inicial
```bash
git add .
git commit -m "Criação da estrutura inicial do projeto"
```

### 2. Página Home
```bash
git add index.php assets/css/style.css assets/img/
git commit -m "Implementação da página inicial com hero section e cards Bootstrap"
```

### 3. Página Quem Somos
```bash
git add quem-somos.php
git commit -m "Página Quem Somos com persona, dor, demanda e solução"
```

### 4. Página Carros
```bash
git add carros.php
git commit -m "Página Carros dinâmica com array PHP e cards Bootstrap"
```

### 5. Formulário de Contato
```bash
git add contato.php processa-contato.php assets/js/script.js
git commit -m "Formulário com validação JS e processamento em PHP"
```

### 6. Estilos e Ajustes Finais
```bash
git add assets/css/style.css
git commit -m "Finalização dos estilos customizados e ajustes de responsividade"
```

### 7. Documentação
```bash
git add README.md
git commit -m "Documentação completa do projeto no README"
```

---

## 🎨 Componentes Bootstrap Utilizados

1. **Navbar** - Menu de navegação fixo
2. **Cards** - Exibição de carros e informações
3. **Forms** - Formulário de contato com validação
4. **Buttons** - Botões de ação (CTA)
5. **Modal** - (Opcional) Para detalhes dos carros
6. **Grid System** - Layout responsivo

---

## 🔧 Funcionalidades Implementadas

### PHP
- ✅ Array PHP com 9 carros (modelo, preço, ano, km, imagem)
- ✅ Página Carros dinâmica gerando cards Bootstrap
- ✅ Processamento de formulário via POST
- ✅ Gravação de contatos em arquivo .txt
- ✅ Validação no servidor

### JavaScript
- ✅ Validação de formulário em tempo real
- ✅ Máscara de telefone
- ✅ Filtro de carros (modelo, ano, preço)
- ✅ Mensagens de erro/sucesso
- ✅ Smooth scroll

### CSS
- ✅ Cores: preta, vermelha e cinza
- ✅ Tipografia moderna
- ✅ Layout responsivo
- ✅ Animações e transições
- ✅ Scrollbar personalizada

---

## 📸 Imagens

**⚠️ IMPORTANTE:** As imagens atualmente são placeholders SVG com extensão .jpg. Para o site funcionar corretamente, você precisa substituí-las por imagens JPG reais ou gerá-las usando o gerador PHP.

### Opção 1: Gerar Imagens Placeholder (Recomendado)

1. Certifique-se de que a extensão GD do PHP está instalada:
   ```bash
   php -m | findstr gd
   ```

2. Execute o gerador de imagens:
   ```bash
   php gerar-imagens-placeholder.php
   ```

3. Isso gerará todas as imagens necessárias em `assets/img/`

### Opção 2: Usar Imagens Reais

1. Baixe imagens de carros (formato JPG ou PNG)
2. Redimensione para aproximadamente 800x600px
3. Substitua os arquivos em `assets/img/`
4. Mantenha os nomes dos arquivos:
   - `car-hero.jpg` - Imagem principal da home
   - `about.jpg` - Imagem da página Quem Somos
   - `car1.jpg` até `car9.jpg` - Imagens dos carros

**Sugestões de fontes de imagens:**
- [Unsplash](https://unsplash.com/s/photos/car)
- [Pexels](https://www.pexels.com/search/car/)
- [Pixabay](https://pixabay.com/images/search/car/)

**📖 Para gerar as imagens, execute: `php gerar-imagens-placeholder.php` (requer extensão GD do PHP)**

---

## 🐛 Solução de Problemas

### Erro: "Cannot modify header information"
- **Solução:** Certifique-se de que não há espaços ou quebras de linha antes de `<?php` nos arquivos PHP

### Imagens não aparecem
- **Solução:** Verifique se os caminhos das imagens estão corretos e se os arquivos existem em `assets/img/`

### Formulário não envia
- **Solução:** Verifique se o PHP está rodando e se a pasta tem permissão de escrita para criar `contatos.txt`

### JavaScript não funciona
- **Solução:** Abra o console do navegador (F12) e verifique se há erros. Certifique-se de que o arquivo `script.js` está sendo carregado.

---

## 📞 Contato

Para dúvidas ou sugestões sobre o projeto, entre em contato através do formulário na página de contato do site.

---

## 📄 Licença

Este projeto é fictício e foi desenvolvido para fins educacionais.

---

## 👨‍💻 Desenvolvido por

**MotorsClub Team**

---

## 🎓 Recursos de Aprendizado

- [Documentação PHP](https://www.php.net/docs.php)
- [Documentação Bootstrap](https://getbootstrap.com/docs/5.3/)
- [Documentação JavaScript MDN](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript)
- [Git Handbook](https://guides.github.com/introduction/git-handbook/)

---

**Última atualização:** Novembro 2024

