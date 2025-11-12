<?php
// MotorsClub - Página Inicial
// Exibe a home page da loja de carros

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
    <title>MotorsClub - Sua Loja de Carros de Confiança</title>
    
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
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quem-somos.php">Quem Somos</a>
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

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Encontre o Carro dos Seus Sonhos</h1>
                    <p class="lead mb-4">A MotorsClub oferece os melhores veículos com qualidade garantida e o melhor atendimento do mercado.</p>
                    <a href="carros.php" class="btn btn-danger btn-lg me-3">
                        <i class="fas fa-car me-2"></i>Ver Carros
                    </a>
                    <a href="contato.php" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-phone me-2"></i>Fale Conosco
                    </a>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="<?php echo htmlspecialchars(getImagePath('assets/img/car-hero.jpg')); ?>" alt="Carro" class="img-fluid rounded shadow" 
                         style="max-height: 500px; object-fit: cover; width: 100%;"
                         onerror="console.error('Erro ao carregar car-hero.jpg'); this.style.background='#dc3545'; this.style.display='flex'; this.style.alignItems='center'; this.style.justifyContent='center'; this.innerHTML='<span style=\'color:white;font-size:24px;\'>MotorsClub</span>';">
                </div>
            </div>
        </div>
    </section>

    <!-- Destaques -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Por Que Escolher a MotorsClub?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <i class="fas fa-shield-alt fa-3x text-danger mb-3"></i>
                            <h5 class="card-title">Garantia Total</h5>
                            <p class="card-text">Todos os nossos veículos possuem garantia e são inspecionados por profissionais qualificados.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <i class="fas fa-dollar-sign fa-3x text-danger mb-3"></i>
                            <h5 class="card-title">Melhor Preço</h5>
                            <p class="card-text">Oferecemos os melhores preços do mercado com condições de pagamento flexíveis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <i class="fas fa-headset fa-3x text-danger mb-3"></i>
                            <h5 class="card-title">Atendimento 24/7</h5>
                            <p class="card-text">Nossa equipe está sempre pronta para atender você, quando e onde precisar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Carros em Destaque -->
    <section class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center mb-5" style="color: #212529 !important;">Carros em Destaque</h2>
            <div class="row g-4">
                <?php
                // Array com carros em destaque (primeiros 3 carros)
                $carrosDestaque = [
                    [
                        'modelo' => 'Honda Civic',
                        'preco' => 89900,
                        'ano' => 2022,
                        'km' => 15000,
                        'imagem' => 'assets/img/car1.jpg'
                    ],
                    [
                        'modelo' => 'Toyota Corolla',
                        'preco' => 95000,
                        'ano' => 2021,
                        'km' => 20000,
                        'imagem' => 'assets/img/car2.jpg'
                    ],
                    [
                        'modelo' => 'Volkswagen Golf',
                        'preco' => 82000,
                        'ano' => 2023,
                        'km' => 8000,
                        'imagem' => 'assets/img/car3.jpg'
                    ]
                ];

                // Loop para exibir os carros em destaque
                foreach ($carrosDestaque as $carro) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card h-100 shadow-sm">';
                    echo '<img src="' . htmlspecialchars(getImagePath($carro['imagem'])) . '" class="card-img-top" alt="' . htmlspecialchars($carro['modelo']) . '" style="height: 200px; object-fit: cover; width: 100%;" onerror="console.error(\'Erro: ' . htmlspecialchars(getImagePath($carro['imagem'])) . '\'); this.style.background=\'#dc3545\'; this.style.display=\'flex\'; this.style.alignItems=\'center\'; this.style.justifyContent=\'center\'; this.innerHTML=\'<span style=\\\'color:white;font-size:16px;\\\'>' . htmlspecialchars($carro['modelo']) . '</span>\';">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $carro['modelo'] . '</h5>';
                    echo '<p class="card-text"><strong>Preço:</strong> R$ ' . number_format($carro['preco'], 2, ',', '.') . '</p>';
                    echo '<p class="card-text"><small class="text-muted">Ano: ' . $carro['ano'] . ' | KM: ' . number_format($carro['km'], 0, ',', '.') . '</small></p>';
                    echo '<a href="carros.php" class="btn btn-danger">Ver Detalhes</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
            <div class="text-center mt-5">
                <a href="carros.php" class="btn btn-danger btn-lg">Ver Todos os Carros</a>
            </div>
        </div>
    </section>

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

