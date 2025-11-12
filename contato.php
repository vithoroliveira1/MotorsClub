<?php
// MotorsClub - Página de Contato
// Formulário de contato com validação JavaScript
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - MotorsClub</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- CSS Customizado -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Navbar Fixa -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">
                <i class="fas fa-car me-2"></i>MotorsClub
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quem-somos.php">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carros.php">Carros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contato.php">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <main class="main-content">
        <!-- Header da Página -->
        <section class="bg-danger text-white py-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="display-4 fw-bold">Entre em Contato</h1>
                        <p class="lead">Estamos prontos para atender você e ajudar a encontrar o carro ideal</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Formulário de Contato -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card shadow border-0">
                            <div class="card-body p-4">
                                <h3 class="card-title mb-4">
                                    <i class="fas fa-envelope me-2 text-danger"></i>Envie sua Mensagem
                                </h3>
                                
                                <!-- Mensagens de erro/sucesso (serão preenchidas via JavaScript) -->
                                <div id="mensagemErro" class="alert alert-danger d-none" role="alert"></div>
                                <div id="mensagemSucesso" class="alert alert-success d-none" role="alert"></div>

                                <!-- Formulário com método POST -->
                                <form id="formularioContato" action="processa-contato.php" method="POST" novalidate>
                                    <!-- Nome Completo -->
                                    <div class="mb-3">
                                        <label for="nome" class="form-label">
                                            Nome Completo <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" 
                                               class="form-control" 
                                               id="nome" 
                                               name="nome" 
                                               placeholder="Digite seu nome completo"
                                               required>
                                        <div class="invalid-feedback">
                                            Por favor, informe seu nome completo.
                                        </div>
                                    </div>

                                    <!-- E-mail -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">
                                            E-mail <span class="text-danger">*</span>
                                        </label>
                                        <input type="email" 
                                               class="form-control" 
                                               id="email" 
                                               name="email" 
                                               placeholder="seuemail@exemplo.com"
                                               required>
                                        <div class="invalid-feedback">
                                            Por favor, informe um e-mail válido.
                                        </div>
                                    </div>

                                    <!-- Telefone -->
                                    <div class="mb-3">
                                        <label for="telefone" class="form-label">
                                            Telefone <span class="text-danger">*</span>
                                        </label>
                                        <input type="tel" 
                                               class="form-control" 
                                               id="telefone" 
                                               name="telefone" 
                                               placeholder="(11) 99999-9999"
                                               required>
                                        <div class="invalid-feedback">
                                            Por favor, informe um telefone válido.
                                        </div>
                                    </div>

                                    <!-- Interesse (carro específico) -->
                                    <div class="mb-3">
                                        <label for="interesse" class="form-label">
                                            Carro de Interesse
                                        </label>
                                        <input type="text" 
                                               class="form-control" 
                                               id="interesse" 
                                               name="interesse" 
                                               placeholder="Ex: Honda Civic 2022"
                                               value="<?php echo isset($_GET['carro']) ? htmlspecialchars($_GET['carro']) : ''; ?>">
                                        <small class="form-text text-muted">
                                            Deixe em branco se ainda não tem um carro específico em mente
                                        </small>
                                    </div>

                                    <!-- Tipo de Contato -->
                                    <div class="mb-3">
                                        <label for="tipoContato" class="form-label">
                                            Tipo de Contato <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-select" id="tipoContato" name="tipoContato" required>
                                            <option value="">Selecione uma opção</option>
                                            <option value="compra">Quero comprar um carro</option>
                                            <option value="venda">Quero vender um carro</option>
                                            <option value="duvida">Tenho uma dúvida</option>
                                            <option value="orcamento">Solicitar orçamento</option>
                                            <option value="outro">Outro</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Por favor, selecione o tipo de contato.
                                        </div>
                                    </div>

                                    <!-- Mensagem -->
                                    <div class="mb-3">
                                        <label for="mensagem" class="form-label">
                                            Mensagem <span class="text-danger">*</span>
                                        </label>
                                        <textarea class="form-control" 
                                                  id="mensagem" 
                                                  name="mensagem" 
                                                  rows="5" 
                                                  placeholder="Digite sua mensagem aqui..."
                                                  required></textarea>
                                        <div class="invalid-feedback">
                                            Por favor, escreva uma mensagem.
                                        </div>
                                        <small class="form-text text-muted">
                                            Mínimo de 10 caracteres
                                        </small>
                                    </div>

                                    <!-- Checkbox de Aceite -->
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" 
                                               class="form-check-input" 
                                               id="aceite" 
                                               name="aceite" 
                                               required>
                                        <label class="form-check-label" for="aceite">
                                            Aceito receber comunicações da MotorsClub <span class="text-danger">*</span>
                                        </label>
                                        <div class="invalid-feedback">
                                            Você deve aceitar para continuar.
                                        </div>
                                    </div>

                                    <!-- Botão de Envio -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-danger btn-lg">
                                            <i class="fas fa-paper-plane me-2"></i>Enviar Mensagem
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Informações de Contato -->
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="card shadow border-0 h-100">
                            <div class="card-body">
                                <h5 class="card-title mb-4">
                                    <i class="fas fa-info-circle me-2 text-danger"></i>Informações
                                </h5>
                                
                                <div class="mb-4">
                                    <h6><i class="fas fa-map-marker-alt me-2 text-danger"></i>Endereço</h6>
                                    <p class="text-muted">Av. Principal, 123<br>São Paulo, SP<br>CEP: 01234-567</p>
                                </div>

                                <div class="mb-4">
                                    <h6><i class="fas fa-phone me-2 text-danger"></i>Telefone</h6>
                                    <p class="text-muted">(11) 1234-5678</p>
                                </div>

                                <div class="mb-4">
                                    <h6><i class="fas fa-envelope me-2 text-danger"></i>E-mail</h6>
                                    <p class="text-muted">contato@motorsclub.com.br</p>
                                </div>

                                <div class="mb-4">
                                    <h6><i class="fas fa-clock me-2 text-danger"></i>Horário de Atendimento</h6>
                                    <p class="text-muted">Segunda a Sexta: 9h às 18h<br>Sábado: 9h às 13h</p>
                                </div>

                                <hr>

                                <h6 class="mb-3">Redes Sociais</h6>
                                <div class="social-links">
                                    <a href="#" class="text-danger me-3"><i class="fab fa-facebook fa-2x"></i></a>
                                    <a href="#" class="text-danger me-3"><i class="fab fa-instagram fa-2x"></i></a>
                                    <a href="#" class="text-danger me-3"><i class="fab fa-twitter fa-2x"></i></a>
                                    <a href="#" class="text-danger"><i class="fab fa-youtube fa-2x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5><i class="fas fa-car me-2"></i>MotorsClub</h5>
                    <p>Sua loja de confiança para encontrar o carro perfeito. Qualidade, garantia e os melhores preços.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Contato</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i>Av. Principal, 123 - São Paulo, SP</p>
                    <p><i class="fas fa-phone me-2"></i>(11) 1234-5678</p>
                    <p><i class="fas fa-envelope me-2"></i>contato@motorsclub.com.br</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Redes Sociais</h5>
                    <div class="social-links">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-youtube fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <hr class="bg-light">
            <div class="text-center">
                <p>&copy; 2024 MotorsClub. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript Customizado -->
    <script src="assets/js/script.js"></script>
</body>
</html>

