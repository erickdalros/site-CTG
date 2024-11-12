<?php
// se requimento POST então recebe variáveis do html e salva em variaveis locais do php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $para = "erickhdros@lojasbecker.com"; // Altere para o seu e-mail
    $assunto = "Mensagem do formulário de contato";

    // Corpo do e-mail em HTML
    $corpo = "
     <html>
    <head>
        <title>$assunto</title>
        <style>
            body { font-family: Arial, sans-serif; }
            h1{ align-item: center; text-align: center; font-size: 40px; }

            .email-container { background-color: #f9f9f9; padding: 20px; border-radius: 8px; }
            table { width: 100%; border-collapse: collapse; }
            table, th, td { border: 1px solid #ddd; }
            th, td { padding: 8px; text-align: left; }
            th { background-color: #4CAF50; color: white; }
            td { background-color: #f2f2f2; }
            .email-footer { font-size: 15px; color: red; margin-top: 20px; }
        </style>
    </head>
    <body>
        <div class='email-container'>
			<h1><strong>Email de Associação CTG Porteira das Missões</strong></h1>
			<p>Recebemos um envio de uma pessoa que se interessou em se associoar no nosso CTG, portanto siga as regras abaixo: </p>
			<p> • Não compartilhar essas informações recebidas, são totalmente sigilosas</p>
			<p> • Chamar a pessoa no Whatsapp através do contato infado pelo interessado</p>
			<p> • Caso os número informado pelo interessado não esteja no Whatsapp, avisar o <strong> ERICK HENTZ DAL ROS (55) 99166-7108</strong></p>
            <table>
                <tr>
                    <th>Pergunta</th>
                    <th>Resposta</th>
                </tr>
                <tr>
                    <td><strong>Nome</strong></td>
                    <td>$nome</td>
                </tr>
                <tr>
                    <td><strong>Contato 1</strong></td>
                    <td>$telefone1</td>
                </tr>
                <tr>
                    <td><strong>Contato 2</strong></td>
                    <td>$telefone2</td>
                </tr>
                <tr>
                    <td><strong>E-mail</strong></td>
                    <td>$email</td>
                </tr>
                <tr>
                    <td><strong>CPF</strong></td>
                    <td>$cpf</td>
                </tr>
            </table>
            <div class='email-footer'>
                <p>Este é um e-mail automático. Por favor, não responda.</p>
            </div>
        </div>
    </body>
    </html>
    ";


	// Cabeçalho para enviar o email como html
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: " . $email . "\r\n";

    // Conferência se o email foi enviado com sucesso ou não
    if (mail($para, $assunto, $corpo, $headers)) {
    	echo "E-mail enviado com SUCESSO!";
    } else {
    	echo("ERRO ao enviar o E-mail!");
    }
}
?>