<?php

$title = 'TP2 - Ejercicio 3';

if ($app->request->method == "GET") {
    $nombre = $_GET["nombre"];
    $email = $_GET["email"];
    $telefono = $_GET["telefono"];
    $edad = $_GET["edad"];
    $calzado = $_GET["calzado"];
    $altura = $_GET["altura"];
    $nacimiento = $_GET["nacimiento"];
    $colorpelo = $_GET["colorpelo"];
    $fechaturno = $_GET["fechaturno"];
    $horaturno = $_GET["horaturno"];

    $errores = array();
    
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
    
}

//Invoco la vista

require 'views/index.view.php';



?>
