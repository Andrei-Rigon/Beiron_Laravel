<?php

    namespace App\Services\Email;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

class sendService
{
    public function EnviarEmail($LOGIN, $EMAIL){
        // Fazer o Envio de Email por aqui.
        echo "Login: $LOGIN, EMAIL: $EMAIL";


if (isset($_POST['send'])) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'andreirigon6@gmail.com';
        $mail->Password = 'vzxr cfhu hidp qkwa';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('andreirigon6@gmail.com', 'Andrei');

        $mail->addAddress($_POST['email']);
        $mail->isHTML(true);
        $mail->Subject = 'Recuperando sua senha - Beiron';

        // Corpo do e-mail com o ajuste de imagem
        $mail->Body = '
        <!DOCTYPE html>
        <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #f4f4f4;
                }
                .container {
                    width: 100%;
                    max-width: 600px;
                    margin: 0 auto;
                    background: white;
                    padding: 20px;
                    border-radius: 5px;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                }
                .header {
                    position: relative;
                    text-align: center;
                }
                .content {
                    padding: 20px;
                }
                .footer {
                    text-align: center;
                    padding: 20px;
                    font-size: 12px;
                    color: #888;
                }
                .button {
    display: inline-block;
    background-color: #ff6f00;
    color: white; /* Cor do texto do botão */
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    margin-top: 20px;
}
    a {
    color: white; /* Cor do texto dos links */
    text-decoration: none; /* Remove sublinhado dos links */
}
                .btnConfirmar {
                    color: white;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <img src="cid:paisagem" alt="Paisagem de formações rochosas" style="width: 80%; height: auto;">
                    <h1>Sua Jornada é a nossa Jornada</h1>
                </div>
                <div class="content">
                    <h2>Olá, Usuário!</h2>
                    <p>Sabemos que até os maiores heróis enfrentam desafios, mas não se preocupe! Aqui está o link para redefinir sua senha e voltar à sua aventura:</p>
                    <a href="http://127.0.0.1:8000/email/RecuperarSenha" class="button" style="color: white;">Redefinir Senha</a>
                    <p>Caso você não tenha solicitado a alteração de senha, ignore este e-mail.</p>
                    <p>Continue firme na sua jornada!</p>
                </div>
                <div class="footer">
                    <p>Obrigado,<br>Equipe Beiron</p>
                </div>
            </div>
        </body>
        </html>';

        // Anexando a imagem para ser usada no e-mail
        $mail->AddEmbeddedImage('assets/Logo-001.jpg', 'paisagem');
        $mail->send();

        echo "<script>
        alert('E-mail enviado com sucesso. Confira sua Caixa de Entrada do E-mail.');
        document.location.href = 'http://127.0.0.1:8000/login';
        </script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

    }
}