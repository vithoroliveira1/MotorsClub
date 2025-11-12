// MotorsClub - JavaScript Customizado
// Validação de formulário e funcionalidades dinâmicas

// Aguarda o carregamento completo do DOM
document.addEventListener('DOMContentLoaded', function() {
    
    // ============================================
    // VALIDAÇÃO DO FORMULÁRIO DE CONTATO
    // ============================================
    
    // Obtém o formulário de contato
    const formularioContato = document.getElementById('formularioContato');
    
    // Se o formulário existir, adiciona validação
    if (formularioContato) {
        // Obtém os campos do formulário
        const nome = document.getElementById('nome');
        const email = document.getElementById('email');
        const telefone = document.getElementById('telefone');
        const tipoContato = document.getElementById('tipoContato');
        const mensagem = document.getElementById('mensagem');
        const aceite = document.getElementById('aceite');
        
        // Validação em tempo real do campo Nome
        nome.addEventListener('blur', function() {
            validarNome(nome);
        });
        
        // Validação em tempo real do campo E-mail
        email.addEventListener('blur', function() {
            validarEmail(email);
        });
        
        // Validação em tempo real do campo Telefone
        telefone.addEventListener('blur', function() {
            validarTelefone(telefone);
        });
        
        // Validação em tempo real do campo Tipo de Contato
        tipoContato.addEventListener('change', function() {
            validarTipoContato(tipoContato);
        });
        
        // Validação em tempo real do campo Mensagem
        mensagem.addEventListener('blur', function() {
            validarMensagem(mensagem);
        });
        
        // Validação em tempo real do checkbox Aceite
        aceite.addEventListener('change', function() {
            validarAceite(aceite);
        });
        
        // Máscara para o campo Telefone
        telefone.addEventListener('input', function() {
            aplicarMascaraTelefone(telefone);
        });
        
        // Validação ao submeter o formulário
        formularioContato.addEventListener('submit', function(e) {
            // Previne o envio padrão do formulário
            e.preventDefault();
            
            // Valida todos os campos
            let formValido = true;
            
            if (!validarNome(nome)) formValido = false;
            if (!validarEmail(email)) formValido = false;
            if (!validarTelefone(telefone)) formValido = false;
            if (!validarTipoContato(tipoContato)) formValido = false;
            if (!validarMensagem(mensagem)) formValido = false;
            if (!validarAceite(aceite)) formValido = false;
            
            // Se o formulário for válido, permite o envio
            if (formValido) {
                // Remove a classe de validação visual
                formularioContato.classList.remove('was-validated');
                
                // Submete o formulário
                formularioContato.submit();
            } else {
                // Adiciona a classe de validação visual do Bootstrap
                formularioContato.classList.add('was-validated');
                
                // Exibe mensagem de erro
                mostrarMensagemErro('Por favor, preencha todos os campos obrigatórios corretamente.');
                
                // Scroll para o primeiro campo com erro
                const primeiroErro = formularioContato.querySelector('.is-invalid');
                if (primeiroErro) {
                    primeiroErro.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
        });
    }
    
    // ============================================
    // FUNÇÕES DE VALIDAÇÃO
    // ============================================
    
    /**
     * Valida o campo Nome
     * @param {HTMLElement} campo - Campo de input do nome
     * @returns {boolean} - Retorna true se válido, false caso contrário
     */
    function validarNome(campo) {
        const valor = campo.value.trim();
        
        if (valor === '' || valor.length < 3) {
            campo.classList.add('is-invalid');
            campo.classList.remove('is-valid');
            return false;
        }
        
        campo.classList.remove('is-invalid');
        campo.classList.add('is-valid');
        return true;
    }
    
    /**
     * Valida o campo E-mail
     * @param {HTMLElement} campo - Campo de input do e-mail
     * @returns {boolean} - Retorna true se válido, false caso contrário
     */
    function validarEmail(campo) {
        const valor = campo.value.trim();
        const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
        if (valor === '' || !regexEmail.test(valor)) {
            campo.classList.add('is-invalid');
            campo.classList.remove('is-valid');
            return false;
        }
        
        campo.classList.remove('is-invalid');
        campo.classList.add('is-valid');
        return true;
    }
    
    /**
     * Valida o campo Telefone
     * @param {HTMLElement} campo - Campo de input do telefone
     * @returns {boolean} - Retorna true se válido, false caso contrário
     */
    function validarTelefone(campo) {
        const valor = campo.value.replace(/\D/g, ''); // Remove caracteres não numéricos
        
        if (valor === '' || valor.length < 10 || valor.length > 11) {
            campo.classList.add('is-invalid');
            campo.classList.remove('is-valid');
            return false;
        }
        
        campo.classList.remove('is-invalid');
        campo.classList.add('is-valid');
        return true;
    }
    
    /**
     * Valida o campo Tipo de Contato
     * @param {HTMLElement} campo - Campo select do tipo de contato
     * @returns {boolean} - Retorna true se válido, false caso contrário
     */
    function validarTipoContato(campo) {
        const valor = campo.value;
        
        if (valor === '') {
            campo.classList.add('is-invalid');
            campo.classList.remove('is-valid');
            return false;
        }
        
        campo.classList.remove('is-invalid');
        campo.classList.add('is-valid');
        return true;
    }
    
    /**
     * Valida o campo Mensagem
     * @param {HTMLElement} campo - Campo textarea da mensagem
     * @returns {boolean} - Retorna true se válido, false caso contrário
     */
    function validarMensagem(campo) {
        const valor = campo.value.trim();
        
        if (valor === '' || valor.length < 10) {
            campo.classList.add('is-invalid');
            campo.classList.remove('is-valid');
            return false;
        }
        
        campo.classList.remove('is-invalid');
        campo.classList.add('is-valid');
        return true;
    }
    
    /**
     * Valida o checkbox Aceite
     * @param {HTMLElement} campo - Campo checkbox do aceite
     * @returns {boolean} - Retorna true se válido, false caso contrário
     */
    function validarAceite(campo) {
        if (!campo.checked) {
            campo.classList.add('is-invalid');
            return false;
        }
        
        campo.classList.remove('is-invalid');
        return true;
    }
    
    /**
     * Aplica máscara de telefone no campo
     * @param {HTMLElement} campo - Campo de input do telefone
     */
    function aplicarMascaraTelefone(campo) {
        let valor = campo.value.replace(/\D/g, ''); // Remove caracteres não numéricos
        
        if (valor.length <= 10) {
            // Telefone fixo: (11) 1234-5678
            valor = valor.replace(/(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
        } else {
            // Celular: (11) 91234-5678
            valor = valor.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
        }
        
        campo.value = valor;
    }
    
    // ============================================
    // FUNÇÕES DE MENSAGENS
    // ============================================
    
    /**
     * Exibe mensagem de erro
     * @param {string} mensagem - Mensagem de erro a ser exibida
     */
    function mostrarMensagemErro(mensagem) {
        const mensagemErro = document.getElementById('mensagemErro');
        if (mensagemErro) {
            mensagemErro.textContent = mensagem;
            mensagemErro.classList.remove('d-none');
            mensagemErro.classList.add('d-block');
            
            // Remove a mensagem após 5 segundos
            setTimeout(function() {
                mensagemErro.classList.add('d-none');
                mensagemErro.classList.remove('d-block');
            }, 5000);
        }
    }
    
    /**
     * Exibe mensagem de sucesso
     * @param {string} mensagem - Mensagem de sucesso a ser exibida
     */
    function mostrarMensagemSucesso(mensagem) {
        const mensagemSucesso = document.getElementById('mensagemSucesso');
        if (mensagemSucesso) {
            mensagemSucesso.textContent = mensagem;
            mensagemSucesso.classList.remove('d-none');
            mensagemSucesso.classList.add('d-block');
        }
    }
    
    // ============================================
    // VERIFICAÇÃO DE PARÂMETROS URL
    // ============================================
    
    // Verifica se há parâmetros de sucesso ou erro na URL
    const urlParams = new URLSearchParams(window.location.search);
    
    if (urlParams.get('sucesso') === '1') {
        mostrarMensagemSucesso('Mensagem enviada com sucesso! Entraremos em contato em breve.');
        
        // Limpa o formulário após sucesso
        if (formularioContato) {
            formularioContato.reset();
            // Remove classes de validação
            formularioContato.classList.remove('was-validated');
            const campos = formularioContato.querySelectorAll('.is-valid, .is-invalid');
            campos.forEach(function(campo) {
                campo.classList.remove('is-valid', 'is-invalid');
            });
        }
        
        // Remove o parâmetro da URL
        window.history.replaceState({}, document.title, window.location.pathname);
    }
    
    if (urlParams.get('erro')) {
        const erro = urlParams.get('erro');
        mostrarMensagemErro(decodeURIComponent(erro));
        
        // Remove o parâmetro da URL
        window.history.replaceState({}, document.title, window.location.pathname);
    }
    
    // ============================================
    // FILTRO DE CARROS (Página Carros)
    // ============================================
    
    /**
     * Filtra os carros na página carros.php
     */
    window.filtrarCarros = function() {
        const filtroModelo = document.getElementById('filtroModelo');
        const filtroAno = document.getElementById('filtroAno');
        const filtroPreco = document.getElementById('filtroPreco');
        const gridCarros = document.getElementById('gridCarros');
        const semResultados = document.getElementById('semResultados');
        const totalCarros = document.getElementById('totalCarros');
        
        if (!gridCarros) return;
        
        const modeloBusca = filtroModelo ? filtroModelo.value.toLowerCase().trim() : '';
        const anoBusca = filtroAno ? filtroAno.value : '';
        const precoBusca = filtroPreco ? filtroPreco.value : '';
        
        const cardsCarros = gridCarros.querySelectorAll('.col-md-4');
        let carrosVisiveis = 0;
        
        cardsCarros.forEach(function(card) {
            const modelo = card.getAttribute('data-modelo') || '';
            const ano = card.getAttribute('data-ano') || '';
            const preco = parseInt(card.getAttribute('data-preco')) || 0;
            
            let mostrar = true;
            
            // Filtro por modelo
            if (modeloBusca && !modelo.includes(modeloBusca)) {
                mostrar = false;
            }
            
            // Filtro por ano
            if (anoBusca && ano !== anoBusca) {
                mostrar = false;
            }
            
            // Filtro por preço
            if (precoBusca) {
                if (precoBusca === '0-50000' && preco > 50000) {
                    mostrar = false;
                } else if (precoBusca === '50000-80000' && (preco < 50000 || preco > 80000)) {
                    mostrar = false;
                } else if (precoBusca === '80000-120000' && (preco < 80000 || preco > 120000)) {
                    mostrar = false;
                } else if (precoBusca === '120000+' && preco < 120000) {
                    mostrar = false;
                }
            }
            
            if (mostrar) {
                card.style.display = 'block';
                carrosVisiveis++;
            } else {
                card.style.display = 'none';
            }
        });
        
        // Atualiza o contador de carros
        if (totalCarros) {
            totalCarros.textContent = carrosVisiveis;
        }
        
        // Mostra ou oculta a mensagem de "sem resultados"
        if (semResultados) {
            if (carrosVisiveis === 0) {
                semResultados.style.display = 'block';
                gridCarros.style.display = 'none';
            } else {
                semResultados.style.display = 'none';
                gridCarros.style.display = 'flex';
            }
        } else {
            // Se não houver elemento semResultados, apenas mostra/esconde o grid
            if (carrosVisiveis === 0) {
                gridCarros.style.display = 'none';
            } else {
                gridCarros.style.display = 'flex';
            }
        }
    };
    
    // Adiciona evento de busca em tempo real no campo de modelo
    const filtroModelo = document.getElementById('filtroModelo');
    if (filtroModelo) {
        filtroModelo.addEventListener('input', filtrarCarros);
    }
    
    // Adiciona evento de mudança nos filtros
    const filtroAno = document.getElementById('filtroAno');
    const filtroPreco = document.getElementById('filtroPreco');
    
    if (filtroAno) {
        filtroAno.addEventListener('change', filtrarCarros);
    }
    
    if (filtroPreco) {
        filtroPreco.addEventListener('change', filtrarCarros);
    }
    
    /**
     * Limpa os filtros e mostra todos os carros
     */
    window.limparFiltros = function() {
        const filtroModelo = document.getElementById('filtroModelo');
        const filtroAno = document.getElementById('filtroAno');
        const filtroPreco = document.getElementById('filtroPreco');
        
        if (filtroModelo) filtroModelo.value = '';
        if (filtroAno) filtroAno.value = '';
        if (filtroPreco) filtroPreco.value = '';
        
        // Chama a função de filtrar para mostrar todos os carros
        filtrarCarros();
    };
    
    // ============================================
    // SMOOTH SCROLL
    // ============================================
    
    // Adiciona smooth scroll para links âncora
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
});

