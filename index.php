<?php
	define("MODULE_PATH","modulos/");
	define("TEMPLATE_PATH","view/");
	
	require_once dirname(__FILE__).'/'.TEMPLATE_PATH.'header.php';
	require_once dirname(__FILE__).'/'.TEMPLATE_PATH.'menu.php';
	
	$mod = (isset($_GET['mod']))?$_GET['mod']:"inico";
		
	switch($mod){
		case "buscador":
			$mod = "buscador";
			$acc = $_GET['acc'];
			break;
		case "nosotros":
			$mod = "nosotros";
			$acc = $_GET['acc'];
			break;
		case "Noticia":
			$mod = "Noticia";
			$acc = $_GET['acc'];
			break;
		default:
			$mod = "inicio";
			$acc = "inicio";
	}
	require_once dirname(__FILE__).'/'.MODULE_PATH.$mod.'/'.$acc.'.php';
	require_once dirname(__FILE__).'/'.TEMPLATE_PATH.'foot.php';
?>
