<?php

require_once 'models/EmpresaDAO.php';
require_once 'models/ProductoDAO.php';
require_once 'models/SliderDAO.php';
require_once 'models/EnvioCorreo.php';
class InicioController
{ 

	private $model;

	public function __CONSTRUCT(){
        
    }

	function index(){
		$model=new EmpresaDAO();
		$empresas=$model->find('nombre','MovilSec');
		$modelProducto=new ProductoDAO();
		$productos=$modelProducto->findSix();
		$modeloSlider=new SliderDAO();
		$sliders=$modeloSlider->findAll();
		require_once 'views/layout/header.php';
		require_once 'views/index/index.php';
		require_once 'views/layout/footer.php';
	}
	 function login(){
		require_once 'views/admin/layout/header.php';
		require_once 'views/admin/login/login.php';
		require_once 'views/admin/layout/footer.php';
	}

	function enviarCorreo(){
		$name=$_POST['nombre'];
		$email=$_POST['email'];
		$asunto=$_POST['asunto'];
		$envioCorreo=new EnvioCorreo();
		$model=new EmpresaDAO();
		$empresas=$model->find('nombre','MovilSec');
		if (!empty($name) && !empty($email) && !empty($asunto) ) {
			$envioCorreo->setName($name);
			$envioCorreo->setEmail($email);
			$envioCorreo->setAsunto($asunto);
			$emaile=$envioCorreo->enviar($empresas[0]->emailcontacto);
			if($emaile){
				$modeloSlider=new SliderDAO();
				$sliders=$modeloSlider->findAll();
				$model=new EmpresaDAO();
				$empresas=$model->find('nombre','MovilSec');
				require_once 'views/layout/header.php';
				require_once 'views/index/enviado.php';
				require_once 'views/layout/footer.php';
			}
		}
		
	}
}
?>