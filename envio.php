<?php
// Recebendo os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$mensagem = $_POST['mensagem'];

// Configuração do e-mail
$to = "jpmesq3@gmail.com"; // Destinatário
$subject = "Nova Mensagem do Site";
$headers = "From: $nome <php$email>\r\n";

// Corpo da mensagem
$message = "Nome: $nome\n";
$message .= "Email: $email\n";
$message .= "Mensagem: $message";

// Enviando o e-mail
mail($to, $subject, $message, $headers);

// Mensagem de sucesso
echo "Mensagem enviada com sucesso!";
