<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">
    <title>Escrever em Arquivo</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-dark">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 p-5 border border-success bg-primary-subtle">
        <form method="POST" action="processaArquivos.php">
          <h1>Escreva algo :) </h1>
          <div class="mb-3">
            <label for="nomeDoArquivo" class="form-label">Nome do Arquivo</label>
            <input type="text" class="form-control" id="nomeDoArquivo" name="nomeDoArquivo" required>
          </div>
          <div class="mb-3">
            <label for="conteudo" class="form-label">Conteúdo</label>
            <textarea class="form-control" id="conteudo" name="conteudo" rows="3" required></textarea>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="subscrever" name="subscrever" value="sim">
            <label class="form-check-label" for="subscrever">Sobrescrever o arquivo existente</label>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
          crossorigin="anonymous">
  </script>
</body>
</html>
