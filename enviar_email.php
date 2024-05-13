<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $mensagem = $_POST['msg'];

    $to = "maykon.kelm.portfolio@gmail.com;
    $subject = "Nova mensagem do formulário do site";
    $message = "Nome: $nome\nEmail: $email\nMensagem:\n$mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email enviado com sucesso!";
    } else {
        echo "Erro ao enviar o email.";
    }
}
?>
