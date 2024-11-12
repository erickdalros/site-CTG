<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $para = "erickhdros@gmail.com"; // Altere para o seu e-mail
    $assunto = "Mensagem do formulário de contato";

    // Corpo do e-mail em HTML
    $corpo = "
    <html>
    <head>
        <title>$assunto</title>
        <style>
            body { font-family: Arial, sans-serif; }
            .email-container { background-color: #f9f9f9; padding: 20px; border-radius: 8px; }
            .email-header { color: #333; font-size: 20px; font-weight: bold; }
            .email-body { margin-top: 10px; color: #555; }
            .email-footer { font-size: 12px; color: #888; margin-top: 20px; }
        </style>
    </head>
    <body>
        <div class='email-container'>
            <div class='email-header'>Nova mensagem de contato</div>
            <div class='email-body'>
                <p><strong>Nome:</strong> $nome</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Mensagem:</strong><br>$mensagem</p>
            </div>
            <div class='email-footer'>
                <p>Este é um e-mail automático. Por favor, não responda.</p>
            </div>
        </div>
    </body>
    </html>
    ";

    // Cabeçalhos para enviar o e-mail como HTML
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: " . $email . "\r\n";

    // Enviar o e-mail
    if (mail($para, $assunto, $corpo, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail.";
    }
}
?>
