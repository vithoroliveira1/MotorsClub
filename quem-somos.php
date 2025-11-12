<?php
// MotorsClub - Página Quem Somos
// Apresenta a empresa e seus valores

// Define o caminho base do site (ex: /motorsclub)
$base_path = dirname($_SERVER['SCRIPT_NAME']);
if ($base_path == '/' || $base_path == '\\') {
    $base_path = '';
} else {
    $base_path = rtrim($base_path, '/\\');
}

// Função para retornar o caminho correto da imagem
function getImagePath($imagePath) {
    global $base_path;
    // Remove barras duplicadas
    $imagePath = str_replace('//', '/', $imagePath);
    $imagePath = ltrim($imagePath, './');
    
    // Retorna caminho absoluto a partir da raiz do site
    return $base_path . '/' . $imagePath;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos - MotorsClub</title>
    
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
                        <a class="nav-link active" href="quem-somos.php">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carros.php">Carros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <main class="main-content">
        <!-- Hero Section -->
        <section class="bg-danger text-white py-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="display-4 fw-bold">Quem Somos</h1>
                        <p class="lead">Conheça a MotorsClub e descubra como estamos transformando a experiência de compra de carros</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sobre a Empresa -->
        <section class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-4">Nossa História</h2>
                        <p class="lead">A MotorsClub nasceu com a missão de revolucionar o mercado automotivo, oferecendo uma experiência transparente, confiável e acessível para todos os brasileiros.</p>
                        <p>Fundada em 2020, nossa empresa cresceu rapidamente graças ao compromisso com a qualidade, transparência e satisfação do cliente. Hoje, somos referência no segmento de vendas de carros usados e seminovos.</p>
                        <p>Acreditamos que comprar um carro não precisa ser um processo complicado ou estressante. Por isso, desenvolvemos um modelo de negócio focado na simplicidade, confiança e valorização do cliente.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="<?php echo htmlspecialchars(getImagePath('assets/img/about.jpg')); ?>" alt="Sobre a MotorsClub" class="img-fluid rounded shadow"
                             style="max-height: 400px; object-fit: cover; width: 100%;"
                             onerror="console.error('Erro ao carregar about.jpg'); this.style.background='#343a40'; this.style.display='flex'; this.style.alignItems='center'; this.style.justifyContent='center'; this.innerHTML='<span style=\'color:white;font-size:20px;\'>Sobre Nós</span>';">
                    </div>
                </div>
            </div>
        </section>

        <!-- Valores -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Nossos Valores</h2>
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="text-center">
                            <i class="fas fa-handshake fa-3x text-danger mb-3"></i>
                            <h5>Transparência</h5>
                            <p>Informações claras e honestas sobre todos os veículos</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <i class="fas fa-star fa-3x text-danger mb-3"></i>
                            <h5>Qualidade</h5>
                            <p>Veículos inspecionados e garantidos</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <i class="fas fa-heart fa-3x text-danger mb-3"></i>
                            <h5>Atendimento</h5>
                            <p>Foco total na satisfação do cliente</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <i class="fas fa-tag fa-3x text-danger mb-3"></i>
                            <h5>Preço Justo</h5>
                            <p>Melhor custo-benefício do mercado</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-5 bg-danger text-white">
            <div class="container text-center">
                <h2 class="mb-4">Pronto para Encontrar Seu Carro Ideal?</h2>
                <p class="lead mb-4">Explore nossa seleção de veículos e descubra a diferença MotorsClub</p>
                <a href="carros.php" class="btn btn-light btn-lg me-3">
                    <i class="fas fa-car me-2"></i>Ver Carros
                </a>
                <a href="contato.php" class="btn btn-outline-light btn-lg">
                    <i class="fas fa-phone me-2"></i>Solicitar Proposta
                </a>
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

