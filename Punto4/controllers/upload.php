<?php
$target_dir = "controllers/uploads/";

$target_dir = $target_dir . basename($_FILES['diagnostico']['name']);
$file_name = $_FILES['diagnostico']['name'];
$subirArchivo = "true";
$mensaje_error = "";
$imageFileType = strtolower(pathinfo($target_dir, PATHINFO_EXTENSION));

/*
if (!($_FILES['diagnostico']['type'] == "image/pjpg" OR $_FILES['diagnostico']['type'] == "image/png")) {
    $mensaje_error = "ARCHIVO INVALIDO. -> Tu archivo tiene que ser JPG o GIF.";
    $subirarchivo = "false";
}
*/
// VALIDO TIPO DE IMAGEN
if (!($imageFileType == "jpg" OR $imageFileType == "png")) {
    $mensaje_error = $mensaje_error . "- ARCHIVO INVALIDO. -> Tu archivo tiene que ser JPG o GIF.<BR>";
}

// VALIDO TAMAÑO DE IMAGEN
if ($_FILES['diagnostico']['size']>200000) {
    $mensaje_error = $mensaje_error . "El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo.<BR>";
}

if (move_uploaded_file($_FILES['diagnostico']["tmp_name"], $target_dir)) {
       $viewImage = "<img src='controllers/uploads/$file_name' >";
        require 'views/index.resultado.php';
} else {
        echo $mensaje_error;    
} 

?>