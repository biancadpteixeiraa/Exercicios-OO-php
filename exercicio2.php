<?php
// Crie uma trait chamada 'Mensagens' que define um método 'enviarMensagem'.
// Crie duas classes, 'EmailSender' e 'SMSSender', que utilizam a trait 'Mensagens'.
// Demonstre a utilização da trait em ambas as classes.
// Trait Mensagens
trait Mensagens {
    public function enviarMensagem($mensagem) {
        echo "Mensagem: $mensagem<br>";
    }
}

class EmailSender {
    use Mensagens;

}

class SMSSender {
    use Mensagens;

}

$emailSender = new EmailSender();
$emailSender->enviarMensagem("Oi e-mail.");

$smsSender = new SMSSender();
$smsSender->enviarMensagem("Oi SMS.");
?>
