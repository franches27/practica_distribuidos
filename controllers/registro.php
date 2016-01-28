<?php 
    require_once '../models/cliente.php'; 
    $clientModel = new Transf(); 
    $datos = array(
    	'usuario' => $_POST['usuario'],
    	'clave' => $_POST['clave'],
    	'correo' => $_POST['correo'],
    	'nombre' => $_POST['nombre'],
        'apellido' => $_POST['apellido'],
        'producto' => $_POST['producto'],
    	'marca' => $_POST['marca'],
    	'cedula' => $_POST['cedula']
    );
    echo $clientModel->set_transf($datos); 
	
?>