<?php

$title = 'TP2 - Ejercicio 1';

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
        $errores['errorFechaNacimiento'] = "La fecha ingresada es futura a la de hoy.";
    }
    
    //Validacion fecha de turno
    if ($fechaturno < $fechaDeHoy) {
        echo "La fecha ingresada ya paso.";
        $errores['errorFechaTurno'] = "La fecha ingresada ya paso.";
    } else {
        echo "Fecha rango correcta";
    }
    
    
    
}

//Invoco la vista

require 'views/index.view.php';



?>
