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


## 🎓 Recursos de Aprendizado

- [Documentação PHP](https://www.php.net/docs.php)
- [Documentação Bootstrap](https://getbootstrap.com/docs/5.3/)
- [Documentação JavaScript MDN](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript)
- [Git Handbook](https://guides.github.com/introduction/git-handbook/)

