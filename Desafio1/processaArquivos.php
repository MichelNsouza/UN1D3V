<?php
$nomeArquivo = isset($_POST['nomeDoArquivo']) ? $_POST['nomeDoArquivo'] : '';
$conteudo = isset($_POST['conteudo']) ? $_POST['conteudo'] : '';
$subscrever = isset($_POST['subscrever']) ? $_POST['subscrever'] : '';

if (trim($nomeArquivo) !== '' && trim($conteudo) !== '') {
    $tipo = ($subscrever === 'sim') ? 'w' : 'a';

    $arquivo = fopen($nomeArquivo . '.txt', $tipo);
    if ($arquivo) {
        fwrite($arquivo, $conteudo . PHP_EOL); 
        fclose($arquivo);
        $aviso = "Arquivo gravado com sucesso!<br><a href='/index.php'>Voltar para Tela principal</a>";
        $alerta = "success";
    } else {
        $aviso = "Não foi possível abrir o arquivo para escrita.";
        $alerta = "danger";
    }
} else {
    if (trim($nomeArquivo) === '') {
        $aviso = "O campo nome do arquivo não foi informado corretamente!";
    } elseif (trim($conteudo) === '') {
        $aviso = "O campo conteúdo do arquivo não foi informado corretamente!";
    }
    $alerta = "warning";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">
    <title>PHP Test</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-primary-subtle">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class='alert alert-<?php echo $alerta; ?>' role='alert'>
          <?php echo $aviso; ?>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
          crossorigin="anonymous">
  </script>
</body>
</html>
