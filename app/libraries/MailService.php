<?php
error_reporting( E_ALL );
require "PHPMailer.php";

class MailService extends \Phalcon\Mvc\User\Component
{
    public function enviar($address,$subject,$body)
    {
        $mail = new PHPMailer();
        $mail->Host = 'mail.imps.org.ar';
        $mail->Username = 'dmunioz@imps.org.ar';
        $mail->Password = 'dan$%&--iel';
        $mail->Port = 26;
        //$mail->SMTPSecure='';
        $mail->From = 'dmunioz@imps.org.ar';
        $mail->FromName = 'Informatica';

        $mail->SMTPDebug = 2;

        $mail->addAddress($address);
        $mail->isHTML(true);  // El correo se env�a como HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;

        if($mail->send())
        {echo "ADASDSADASD";
            $this->flash->success("Se envio el email...");
            return true;
        }
       else
        {
            $this->flash->error("No se pudo enviar el email");
            $this->flash->error("Error del envio:  ".$mail->ErrorInfo);
            return $mail->ErrorInfo;
        }
    }
}