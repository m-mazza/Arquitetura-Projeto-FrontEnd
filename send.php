<?php

    // entrada de dados do formulário
    $nome       = $_POST['nome'];
    $telefone   = $_POST['telefone'];
    $email      = $_POST['email'];
    $assunto    = $_POST['assunto'];
    $mensagem   = $_POST['mensagem'];



    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'phpmailer/vendor/autoload.php';

    if(@$_POST['envio'] == 's') {
        
        $mail = new PHPMailer(true);
        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 't';
            $mail->SMTPAuth   = true;
            $mail->Username   = '';
            $mail->Password   = '';
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;
            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS | 465 PHPMailer::ENCRYPTION_SMTPS `

            //Recipients
            $mail->setFrom('', '');
            $mail->addAddress('', '');
            $mail->addReplyTo('', '');

            //Content
            $mail->CharSet = 'UTF-8';
            $mail->isHTML(true);
            $mail->SetLanguage("br");
            $mail->Subject = 'Contato do Site';

            $mensagemhtml = '
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml">
                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                </head>
                <body style="margin:30px 0; padding: 0;">
                    <table align="center" cellpadding="0" cellspacing="0" width="680" style="font-family: Arial, Helvetica, sans-serif;">
                        <tr style="background-color: #e5e5e5;">
                            <td style="padding: 25px; text-align: center; border-left: 1px solid gray; border-right: 1px solid gray; border-top: 1px solid gray;">
                                <img src="http://prumaarquitetura.com.br/assets/images/pruma-logo-blck.svg" style="width: 150px !important;">
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom: 0; border-left: 1px solid gray; border-right: 1px solid gray; border-bottom: 1px solid #e5e5e5;">
                                <table align="center" width="70%" style="padding: 20px 0;" cellpadding="0" cellspacing="0">
                                    <tr><td style="height:10px"></td></tr>
                                    <tr>
                                        <td style="padding: 10px 0;">
                                            <table width="100%" cellpadding="0" cellspacing="0">
                                                <tr style="text-align:center;font-family: Arial, Helvetica, sans-serif;"><td><strong>E-MAIL DE CONTATO</strong></td></tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr><td style="height:10px"></td></tr>
                                </table>
                            </td>
                        </tr>            
                        <tr>
                            <td style="border-left: 1px solid gray; border-right: 1px solid gray;">
                                <table align="center" width="75%" style="padding: 20px 0;" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <table width="100%" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width="20%" style="padding: 8px 0 8px 8px; border-bottom: 1px solid gray;"> 
                                                        <strong><small style="text-align:center;font-family: Arial, Helvetica, sans-serif;">Nome</small></strong>
                                                    </td>
                                                    <td width="80%" style="padding: 8px 0 8px 8px; border-bottom: 1px solid gray;">
                                                        <small style="text-align:center;font-family: Arial, Helvetica, sans-serif;">'.$nome.'</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%" style="padding: 8px 0 8px 8px; border-bottom: 1px solid gray;"> 
                                                        <strong style="text-align:center;font-family: Arial, Helvetica, sans-serif;"><small>Telefone</small></strong>
                                                    </td>
                                                    <td width="80%" style="padding: 8px 0 8px 8px; border-bottom: 1px solid gray;">
                                                        <small style="text-align:center;font-family: Arial, Helvetica, sans-serif;">'.$telefone.'</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%" style="padding: 8px 0 8px 8px; border-bottom: 1px solid gray;"> 
                                                        <strong><small style="text-align:center;font-family: Arial, Helvetica, sans-serif;">E-mail</small></strong>
                                                    </td>
                                                    <td width="80%" style="padding: 8px 0 8px 8px; border-bottom: 1px solid gray;">
                                                        <small style="text-align:center;font-family: Arial, Helvetica, sans-serif;">'.$email.'</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%" style="padding: 8px 0 8px 8px; border-bottom: 1px solid gray;"> 
                                                        <strong><small style="text-align:center;font-family: Arial, Helvetica, sans-serif;">Assunto</small></strong>
                                                    </td>
                                                    <td width="80%" style="padding: 8px 0 8px 8px; border-bottom: 1px solid gray;">
                                                        <small style="text-align:center;font-family: Arial, Helvetica, sans-serif;">'.$assunto.'</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="padding: 40px 8px 8px 8px; text-align: center;"> 
                                                        <strong><small style="text-align:center;font-family: Arial, Helvetica, sans-serif;">Mensagem Enviada</small></strong>
                                                    </td>
                                                </tr>
                                                <tr style="text-align: justify;">
                                                    <td colspan="2" style="padding: 20px 8px; border-bottom: 1px solid gray;  border-top: 1px solid gray;"> 
                                                        <small style="text-align:center;font-family: Arial, Helvetica, sans-serif;">
                                                            '.$mensagem.'
                                                        </small>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>   
                                    <tr><td style="height:30px"></td></tr>
                                </table>
                            </td>
                        </tr>
                        <tr style="background-color: #e5e5e5">
                            <td style="border-left: 1px solid gray; border-right: 1px solid gray;border-bottom: 1px solid gray;">
                                <table width="100%" style="padding: 20px; height:20px;" cellpadding="0" cellspacing="0">
                                    <tr><td style="height:10px"></td></tr>
                                      <tr style="text-align:center;">
                                        <td><strong><a href="www.prumaarquitetura.com.br" style="color:#000; text-decoration: none;">www.prumaarquitetura.com.br</a></strong></td>
                                      </tr>
                                    <tr><td style="height:10px"></td></tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </body>
            </html>';

            $mail->Body = $mensagemhtml;
            $mail->send();
            ?>
            <script>
                window.location.href = './?envio=true';            
            </script>
        <?php
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }

?>