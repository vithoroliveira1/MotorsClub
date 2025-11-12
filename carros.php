<?php
// MotorsClub - Página Carros
// Exibe todos os carros disponíveis dinamicamente usando array PHP

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
    <title>Carros - MotorsClub</title>
    
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
                        <a class="nav-link active" href="carros.php">Carros</a>
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
        <!-- Header da Página -->
        <section class="bg-danger text-white py-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="display-4 fw-bold">Nossos Carros</h1>
                        <p class="lead">Encontre o veículo perfeito para você</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Filtros e Busca -->
        <section class="py-4 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3"><i class="fas fa-filter me-2"></i>Filtrar Carros</h5>
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" id="filtroModelo" placeholder="Buscar por modelo...">
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select" id="filtroAno">
                                            <option value="">Todos os anos</option>
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-select" id="filtroPreco">
                                            <option value="">Todos os preços</option>
                                            <option value="0-50000">Até R$ 50.000</option>
                                            <option value="50000-80000">R$ 50.000 - R$ 80.000</option>
                                            <option value="80000-120000">R$ 80.000 - R$ 120.000</option>
                                            <option value="120000+">Acima de R$ 120.000</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-danger w-100" onclick="filtrarCarros()" type="button">
                                            <i class="fas fa-search me-2"></i>Filtrar
                                        </button>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <button class="btn btn-outline-secondary btn-sm" onclick="limparFiltros()" type="button">
                                            <i class="fas fa-times me-2"></i>Limpar Filtros
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lista de Carros -->
        <section class="py-5">
            <div class="container">
                <?php
                // Array PHP com todos os carros disponíveis
                // Cada carro possui: modelo, preço, ano, km e imagem
                $carros = [
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
                    ],
                    [
                        'modelo' => 'Ford Focus',
                        'preco' => 75000,
                        'ano' => 2021,
                        'km' => 25000,
                        'imagem' => 'assets/img/car4.jpg'
                    ],
                    [
                        'modelo' => 'Chevrolet Cruze',
                        'preco' => 88000,
                        'ano' => 2022,
                        'km' => 18000,
                        'imagem' => 'assets/img/car5.jpg'
                    ],
                    [
                        'modelo' => 'Hyundai Elantra',
                        'preco' => 79000,
                        'ano' => 2022,
                        'km' => 12000,
                        'imagem' => 'assets/img/car6.jpg'
                    ],
                    [
                        'modelo' => 'Nissan Sentra',
                        'preco' => 85000,
                        'ano' => 2021,
                        'km' => 22000,
                        'imagem' => 'assets/img/car7.jpg'
                    ],
                    [
                        'modelo' => 'Fiat Cronos',
                        'preco' => 65000,
                        'ano' => 2023,
                        'km' => 5000,
                        'imagem' => 'assets/img/car8.jpg'
                    ],
                    [
                        'modelo' => 'Renault Fluence',
                        'preco' => 72000,
                        'ano' => 2020,
                        'km' => 30000,
                        'imagem' => 'assets/img/car9.jpg'
                    ]
                ];

                // Contador para controlar o número de carros exibidos
                $totalCarros = count($carros);
                ?>

                <div class="row mb-4">
                    <div class="col-md-12">
                        <p class="text-muted">Exibindo <strong id="totalCarros"><?php echo $totalCarros; ?></strong> carros disponíveis</p>
                    </div>
                </div>

                <!-- Grid de Cards Bootstrap -->
                <div class="row g-4 justify-content-start" id="gridCarros">
                    <?php
                    // Loop para exibir todos os carros dinamicamente
                    // Cada carro é exibido em um card Bootstrap
                    foreach ($carros as $index => $carro) {
                        // Formata o preço para exibição em reais
                        $precoFormatado = number_format($carro['preco'], 2, ',', '.');
                        // Formata a quilometragem
                        $kmFormatado = number_format($carro['km'], 0, ',', '.');
                        ?>
                        <div class="col-md-4 col-lg-4" data-modelo="<?php echo strtolower($carro['modelo']); ?>" 
                             data-ano="<?php echo $carro['ano']; ?>" 
                             data-preco="<?php echo $carro['preco']; ?>">
                            <div class="card h-100 shadow-sm carro-card">
                                <img src="<?php echo htmlspecialchars(getImagePath($carro['imagem'])); ?>" 
                                     class="card-img-top" 
                                     alt="<?php echo htmlspecialchars($carro['modelo']); ?>" 
                                     style="height: 250px; object-fit: cover; width: 100%;"
                                     onerror="console.error('Erro ao carregar: <?php echo htmlspecialchars(getImagePath($carro['imagem'])); ?>'); this.style.background='#dc3545'; this.style.display='flex'; this.style.alignItems='center'; this.style.justifyContent='center'; this.innerHTML='<span style=\'color:white;font-size:18px;\'><?php echo htmlspecialchars($carro['modelo']); ?></span>';">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><?php echo $carro['modelo']; ?></h5>
                                    <p class="card-text">
                                        <strong class="text-danger fs-4">R$ <?php echo $precoFormatado; ?></strong>
                                    </p>
                                    <ul class="list-unstyled mb-3">
                                        <li><i class="fas fa-calendar me-2 text-muted"></i><strong>Ano:</strong> <?php echo $carro['ano']; ?></li>
                                        <li><i class="fas fa-tachometer-alt me-2 text-muted"></i><strong>KM:</strong> <?php echo $kmFormatado; ?> km</li>
                                    </ul>
                                    <div class="mt-auto">
                                        <a href="contato.php?carro=<?php echo urlencode($carro['modelo']); ?>" 
                                           class="btn btn-danger w-100">
                                            <i class="fas fa-phone me-2"></i>Solicitar Proposta
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <!-- Mensagem quando não há resultados -->
                <div id="semResultados" class="text-center py-5" style="display: none;">
                    <i class="fas fa-search fa-3x text-muted mb-3"></i>
                    <h4>Nenhum carro encontrado</h4>
                    <p class="text-muted">Tente ajustar os filtros de busca</p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-5 bg-danger text-white">
            <div class="container text-center">
                <h2 class="mb-4">Não Encontrou o Carro Ideal?</h2>
                <p class="lead mb-4">Entre em contato conosco e vamos te ajudar a encontrar o veículo perfeito</p>
                <a href="contato.php" class="btn btn-light btn-lg">
                    <i class="fas fa-envelope me-2"></i>Fale Conosco
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

