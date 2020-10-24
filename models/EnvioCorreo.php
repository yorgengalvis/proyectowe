<?php
require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/OAuth.php';
require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/PHPMailer.php';


class EnvioCorreo{

    private $name;
    private $email;
    private $asunto;

    function __construct(){}

    public function enviar($emailEmpresa){
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = 'mail.gemetech.co';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = "info@gemetech.co";
        $mail->Password = "Ke6T7aK89@";
        $mail->setFrom('info@gemetech.co', 'MovilServ Formularios');
        $mail->addAddress($emailEmpresa, $emailEmpresa);
        $mail->Subject = 'Formulario de Contacto';
        $mail->Body = " 
        Hola ".$emailEmpresa.",
        <p>El presente correo te notifica de un envio de correo electronico desde el formulario
        web de la pagina principal con los siguientes datos: </p>
        <p>
        <strong>Nombre Interesado: </strong>".$this->name."
        <br><strong>email: </strong>".$this->email."
        <br><strong>Descripcion: </strong>".$this->asunto."

        <br>
        <br>Este mensaje fue generado automaticamente.
        </p>
        ";
        $mail->CharSet = 'UTF-8'; // Con esto ya funcionan los acentos
        $mail->IsHTML(true);
        return $mail->send();
    }

public function getName(){
    return $this->name;
}

public function setName($name){
    $this->name = $name;
    return $this;
}

public function getEmail(){
    return $this->email;
}
public function setEmail($email){
    $this->email = $email;
    return $this;
}
public function getAsunto(){
    return $this->asunto;
}
public function setAsunto($asunto){
    $this->asunto = $asunto;
    return $this;
}
}
?>