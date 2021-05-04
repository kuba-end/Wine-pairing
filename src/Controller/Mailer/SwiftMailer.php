<?php

require "../../../vendor/autoload.php";


class SwiftMailer
{
    public function __construct()
    {
        $transport = new Swift_SmtpTransport("s118.linuxpl.com", 587);
        $transport->setUsername("kontakt@kubarudzinski.pl");
        $transport->setPassword("Q2o@C1%1~@c1S1@");

        $mailer = new Swift_Mailer($transport);

        $message = new Swift_Message();
        $message
            ->setFrom($_POST['email'])
            ->setTo("kontakt@kubarudzinski.pl")
            ->setSubject($_POST['topic'])
            ->setBody($_POST['message']);

        $mailer->send($message);
    }
}
$triger = new SwiftMailer();
