<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Inclua o autoload do Composer se estiver utilizando o Composer
require('../../../apps\phpmyadmin5.1.1\vendor/autoload.php');

$mail = new PHPMailer(true);

try {
  // Configurações do servidor
  $mail->isSMTP();
  $mail->CharSet = "UTF-8";
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587;
  $mail->SMTPSecure = "tls";
  $mail->SMTPAuth = true;
  $mail->Username = "mr.mathofc@gmail.com";
  $mail->Password = "pcon rtbf ixoe wepq";

  // Remetente e destinatário
  $mail->setFrom($mail->Username, 'Mr.Math');
  $mail->addAddress($email);                        // E-mail do destinatário
  $mail->Subject = $nome . " - Ative seu cadastro"; // Assunto do e-mail

  // Conteúdo do e-mail em HTML
  $conteudo_email = "
    <style>
    font-family: Calibri;
    </style>
    Confirme esse e-mail para ativar seu cadastro em nosso site.<br>
    Você só precisa clicar no botão abaixo: <br><br>
    <a href='http://localhost/mrmathWEB/cadastro/ativacao.php?hash=$hash' style='
        background-color: #007bff;
        border: none;
        color: white;
        padding: 10px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    '> Confirmar E-mail</a>";

  // Define que o corpo será em HTML
  $mail->isHTML(true);
  $mail->Body = $conteudo_email;

  // Tenta enviar o e-mail
  if ($mail->send()) {
    echo "<style>#carregando{display:none;}</style>
        <div class='alert alert-light' role='alert'>Link de ativação de cadastro foi enviado ao seu e-mail. Verifique sua caixa de entrada.</div>";
  } else {
    echo "<style>#carregando{display:none;}</style>
        <div class='alert alert-primary' role='alert'>Falha ao enviar link de ativação!</div>";
  }
} catch (Exception $e) {
  echo "Erro ao enviar e-mail: {$mail->ErrorInfo}";
}