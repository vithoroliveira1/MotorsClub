<?php
// MotorsClub - Processamento do Formulário de Contato
// Recebe os dados do formulário via POST e grava em arquivo .txt

// Verifica se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitiza e valida os dados recebidos
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $telefone = isset($_POST['telefone']) ? trim($_POST['telefone']) : '';
    $interesse = isset($_POST['interesse']) ? trim($_POST['interesse']) : 'Não informado';
    $tipoContato = isset($_POST['tipoContato']) ? trim($_POST['tipoContato']) : '';
    $mensagem = isset($_POST['mensagem']) ? trim($_POST['mensagem']) : '';
    $aceite = isset($_POST['aceite']) ? 'Sim' : 'Não';
    
    // Validação básica no servidor
    $erros = [];
    
    if (empty($nome)) {
        $erros[] = "Nome é obrigatório.";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "E-mail válido é obrigatório.";
    }
    
    if (empty($telefone)) {
        $erros[] = "Telefone é obrigatório.";
    }
    
    if (empty($tipoContato)) {
        $erros[] = "Tipo de contato é obrigatório.";
    }
    
    if (empty($mensagem) || strlen($mensagem) < 10) {
        $erros[] = "Mensagem deve ter pelo menos 10 caracteres.";
    }
    
    // Se houver erros, redireciona de volta ao formulário
    if (!empty($erros)) {
        header("Location: contato.php?erro=" . urlencode(implode(", ", $erros)));
        exit;
    }
    
    // Prepara os dados para gravação
    $dataHora = date('d/m/Y H:i:s');
    $dadosContato = [
        "Data/Hora" => $dataHora,
        "Nome" => $nome,
        "E-mail" => $email,
        "Telefone" => $telefone,
        "Carro de Interesse" => $interesse,
        "Tipo de Contato" => $tipoContato,
        "Mensagem" => $mensagem,
        "Aceite" => $aceite
    ];
    
    // Formata os dados para gravação no arquivo
    $conteudoArquivo = "========================================\n";
    $conteudoArquivo .= "NOVO CONTATO - MotorsClub\n";
    $conteudoArquivo .= "========================================\n";
    $conteudoArquivo .= "Data/Hora: " . $dataHora . "\n";
    $conteudoArquivo .= "Nome: " . $nome . "\n";
    $conteudoArquivo .= "E-mail: " . $email . "\n";
    $conteudoArquivo .= "Telefone: " . $telefone . "\n";
    $conteudoArquivo .= "Carro de Interesse: " . $interesse . "\n";
    $conteudoArquivo .= "Tipo de Contato: " . $tipoContato . "\n";
    $conteudoArquivo .= "Mensagem: " . $mensagem . "\n";
    $conteudoArquivo .= "Aceite: " . $aceite . "\n";
    $conteudoArquivo .= "========================================\n\n";
    
    // Nome do arquivo onde os dados serão gravados
    $nomeArquivo = 'contatos.txt';
    
    // Tenta gravar no arquivo
    // Se o arquivo não existir, será criado
    $arquivoGravado = file_put_contents($nomeArquivo, $conteudoArquivo, FILE_APPEND | LOCK_EX);
    
    // Verifica se a gravação foi bem-sucedida
    if ($arquivoGravado !== false) {
        // Sucesso: redireciona para página de sucesso
        header("Location: contato.php?sucesso=1");
        exit;
    } else {
        // Erro ao gravar: redireciona com mensagem de erro
        header("Location: contato.php?erro=" . urlencode("Erro ao salvar contato. Tente novamente."));
        exit;
    }
    
} else {
    // Se não for POST, redireciona para a página de contato
    header("Location: contato.php");
    exit;
}
?>

