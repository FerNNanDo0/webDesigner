<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = strip_tags($_POST['nome']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $mensagem = strip_tags($_POST['mensagem']);

        $para = 'seuemail@exemplo.com'; // Troque para o seu email real
        $assunto = 'Nova mensagem do site Designer';
        $corpo = "Nome: $nome\nEmail: $email\nMensagem:\n$mensagem";

        $headers = "From: $email";

        if (mail($para, $assunto, $corpo, $headers)) {
            echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Erro ao enviar. Tente novamente.'); window.history.back();</script>";
        }
    } else {
        header("Location: contato.php");
        exit;
    }
?>
