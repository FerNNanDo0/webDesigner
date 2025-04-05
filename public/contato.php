<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Contato</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="icon" sizes="180x180" href="assets/img/imagem-6.png">
</head>
<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid ms-5 me-5">
        <img src="assets/img/imagem-4.png" width="60px" height="70px" class="img-fluid rounded shadow">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <small><span class="navbar-toggler-icon"></span></small>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item align-self-center">
                    <a class="nav-link" id="link-menu" aria-current="page" href="/index.php">Início</a>
                </li>
                <li class="nav-item align-self-center">
                    <a class="nav-link active" id="link-menu" href="/contato.php">Contato</a>
                </li>
            </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container mt-5" id="contato">
    <h2><i class="fa fa-envelope"></i> Entre em contato</h2>

    <form action="enviar-contato.php" method="post">
      <div class="mb-3">
        <label for="nome" class="form-label">Seu nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Seu e-mail:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <div class="mb-3">
        <label for="mensagem" class="form-label">Mensagem:</label>
        <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
      </div>

      <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Enviar</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>
