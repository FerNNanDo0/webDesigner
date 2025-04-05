<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Home - Meu Site</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  
  <!-- Lightbox CSS -->
  <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/css/lightbox.min.css" rel="stylesheet">

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
                            <a class="nav-link active" id="link-menu" aria-current="page" href="/index.php">Início</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link" id="link-menu" href="/contato.php">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
  <div class="container mt-5">
    <h1 id="titulo" class="text-center">Designer</h1>
  </div>

  <section>
    <?php
        $imagens = glob('assets/img/*.png'); // ou png, webp, etc.
    ?>

    <div class="container my-5">
        <div class="row g-4 mt-5">
            <?php foreach($imagens as $img): ?>
            <div class="col-6 col-md-4 col-lg-3">
                <a href="<?= $img ?>" data-lightbox="galeria" data-title="<?= $img ?>">
                  <img src="<?= $img ?>" width="auto" height="auto" class="img-fluid rounded shadow" alt="Imagem">
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

  </section>

    <!-- Lightbox JS -->
   <script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/js/lightbox.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>
