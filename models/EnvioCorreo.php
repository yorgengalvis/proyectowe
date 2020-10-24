<?php
class EnvioCorreo{

private $name;
private $email;
private $asunto;

function __construct(){}

	public function enviar($emailEmpresa){
		$header = "From: informatica@movilserv.co"."\r\n";
		$header .= "Reply-To: informatica@movilserv.co"."\r\n";
		$header .= "X-Mailer: PHP/".phpversion();
		$msg="
		Hola administrador,

		Has recibido un nuevo formulario de contacto desde la pagina web
		<strong>MovilServ.co</strong> con los siguientes datos:

		<b>Nombres: </b>".$this->name."
		<p><b>Email: </b></p>".$this->email."
		<p><b>Asunto: </b></p><p>".$this->asunto."</p>
		";
		$mail = mail($emailEmpresa, '1 Formulario de contacto',$msg,$header);
		return $mail;
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