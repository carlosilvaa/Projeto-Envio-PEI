<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $confirmacao = isset($_POST['confirmacao']) ? $_POST['confirmacao'] : null;
    $professorId = isset($_POST['professor_id']) ? $_POST['professor_id'] : null;
    $documentoId = isset($_POST['documento_id']) ? $_POST['documento_id'] : null;
    if ($confirmacao) {
        $mensagem = "A leitura do PEI foi confirmada com sucesso.";
    } else {
        $mensagem = "Erro ao confirmar a leitura. Tente novamente.";
    }
} else {
    header("Location: 404.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Confirmação de Leitura</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="confirm-card text-center">
            <div class="text-center mb-3">
                <a href="#">
                    <img src="../img/UTFPR_logo.png" alt="Logo UTFPR" width="250" height="96">
                </a>
            </div>
            <h3 class="mb-4">Obrigado!</h3>
            <div class="alert <?php echo isset($confirmacao) ? 'alert-success' : 'alert-danger'; ?>">
                <?php echo $mensagem; ?>
            </div>
        </div>
    </div>
</body>

</html>