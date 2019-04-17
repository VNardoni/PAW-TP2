<?php

$title = 'TP2 - Ejercicio 4';

if ($app->request->method == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $edad = $_POST["edad"];
    $calzado = $_POST["calzado"];
    $altura = $_POST["altura"];
    $nacimiento = $_POST["nacimiento"];
    $colorpelo = $_POST["colorpelo"];
    $fechaturno = $_POST["fechaturno"];
    $horaturno = $_POST["horaturno"];

    $errores = array();
    $datos = array ();
    
    $datos['nombre'] = $nombre;
    $datos['email'] = $email;
    $datos['telefono'] = $telefono;
    $datos['edad'] = $edad;
    $datos['calzado'] = $calzado;
    $datos['altura'] = $altura;
    $datos['nacimiento'] = $nacimiento;
    $datos['colorpelo'] = $colorpelo;
    $datos['fechaturno'] = $fechaturno;
    $datos['horaturno'] = $horaturno;
    
    
    //Validacion Nombre
    if (!preg_match("/^[A-Za-z\\- \']+$/",$nombre)) {
        $errores['errorNombre'] = "El nombre ingresado no es valido.";
    }
    
    //Validacion mail con funcion filter_var()
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['errorEmail'] = "Formato invalido para un email.";
    }
    
    //Validacion fecha de nacimiento
    $fechaDeHoy = date('Y-m-d');    
    if ($nacimiento > $fechaDeHoy) {
        $errores['errorFechaNacimiento'] = "La fecha de nacimiento es futura a la de hoy.";
    }
    
    //Validacion fecha de turno
    if ($fechaturno < $fechaDeHoy) {
        $errores['errorFechaTurno'] = "La fecha del turno ya paso.";
    } 
    




require 'upload.php';
}

//Invoco la vista

require 'views/index.view.php';



?>
