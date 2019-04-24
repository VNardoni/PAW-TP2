<?php
$errores=array();

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $edad = $_POST['edad'];
    $talla = $_POST['talla'];
    $altura = $_POST['altura'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $pelo = $_POST['pelo'];
    $fechaTurno = $_POST['fechaTurno'];
    $turno = $_POST['turno'];

   
function validarImagen(){
    if($_FILES["imagen"]["name"]){//Si no es null
        $filename = $_FILES["imagen"]["name"];
        $GLOBALS['dirImagen'] = "diagnosticos/". basename($filename);//Path a guardar la imagen
         
        $extensionesPermitidas = array("jpg","png");
        $extensionImagen = pathinfo($filename, PATHINFO_EXTENSION);//Recupero extension de la imagen

        if(in_array($extensionImagen, $extensionesPermitidas))// si la extension es una de las validas
        {
            if(file_exists('turnos/turnos.json')){//Recupero json para agregar al final del nombre de la imagen el id que le corresponde
                $turnosDatosActuales = file_get_contents('turnos/turnos.json');
                $arrayTurnos = json_decode($turnosDatosActuales, true);
                //Asignar ID
                $id = @(sizeof($arrayTurnos)); 
                $GLOBALS['dirImagen'] = $id.$GLOBALS['dirImagen'];

                if (file_exists($GLOBALS['dirImagen'])) {
                    array_push($GLOBALS['fallo'],"Ya existe una imagen llamada: ". $filename);//imagen con nombre repetido
                }elseif(!$GLOBALS['fallo']){
                    //Si no hay otro error guardo la imagen. Pregunto recien aca para que, 
                    //si la imagen tiene un error, se le indique al usuario junto con los demas errores.
                    //Si preguntara al inicio de validarImagen no tendria mensaje de error de la imagen (si lo hubiese)
                    $tmp = $_FILES["imagen"]["tmp_name"];//Path actual de la imagen
                    move_uploaded_file($tmp, $GLOBALS['dirImagen']);//Guardar imagen nueva ubicacion
                $viewImage='dirImagen';
                }
            }else{
                array_push($GLOBALS['fallo'],"No existe el archivo turnos.json");
            }
        }else{//ERROR: imagen con extension invalida
            array_push($GLOBALS['fallo'],"Imagen con extension invalida: debe ser png o jpg.");
        }
    }
}


//Validacion Nombre
    if (!preg_match("/^[A-Za-z\\- \']+$/",$nombre)) {
        $errores['errorNombre'] = "-El nombre ingresado no es valido.";
    }
    
    //Validacion mail con funcion filter_var()
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['errorEmail'] = "-Formato invalido para un email.";
    }
    
    //Validacion fecha de nacimiento
    $fechaDeHoy = date('Y-m-d');    
    if ($fechaNacimiento > $fechaDeHoy) {
        $errores['errorFechaNacimiento'] = "-La fecha de nacimiento es futura a la de hoy.";
    }
    
    //Validacion fecha de turno
    if ($fechaTurno < $fechaDeHoy) {
        $errores['errorFechaTurno'] = "-La fecha del turno ya paso.";
    } 
    




function almacenarTurno(){
    if(file_exists('turnos/turnos.json')){
        $turnosDatosActuales = file_get_contents('turnos/turnos.json');
        $arrayTurnos = json_decode($turnosDatosActuales, true);
        //Asignar ID
        $id = @(sizeof($arrayTurnos));
        $nuevoTurno = array(
            'id'=> $id,
            'nombre'=> $_POST['nombre'],
            'email'=> $_POST['email'],
            'telefono'=> $_POST['telefono'],
            'edad'=> $_POST['edad'],
            'talla'=> $_POST['talla'],
            'altura'=> $_POST['altura'],
            'fechaNacimiento'=> $_POST['fechaNacimiento'],
            'pelo'=> $_POST['pelo'],
            'fechaTurno'=> $_POST['fechaTurno'],
            'turno'=> $_POST['turno'],
            'imagen'=> $id.$_FILES["imagen"]["name"]
        );
        $arrayTurnos[] = $nuevoTurno;
        $arrayTurnosActualizado = json_encode($arrayTurnos);

        if(!file_put_contents('turnos/turnos.json',$arrayTurnosActualizado)){
            array_push($GLOBALS['fallo'],"Hubo un error al intentar guardar su formulario!");
        }
    }else{
        array_push($GLOBALS['fallo'],"No existe el archivo turnos.json");
    }
}

if($errores){
        require 'controllers/Formulario.php';//Fallo algun valor
    }else{
        almacenarTurno();//Si todos lo datos correctos los almaceno en json
        if($errores){//Si almacenar en archivo json fallo
            require 'controllers/Formulario.php';//Fallo algo
        }else{
            require 'controllers/resumen.php';//Todos los datos validos
        }
    }

?>