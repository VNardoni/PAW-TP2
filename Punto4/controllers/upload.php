<?php
//if($_POST)
//{
$target_dir = "/uploads/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    

//chequeo que la imagen no exista
    if (file_exists($target_file)) {
    echo "La imagen ya existe";
    $uploadOk = 0;
    }
    
    // chequeo el tamaño de la imagen
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "La imagen supera el tamaño maximo.";
    $uploadOk = 0;
}
    // chequeo el formato de la imagen
    
    if($imageFileType != "jpg" && $imageFileType != "png") {
    echo "Solo se aceptan imagenes png o jpg";
    $uploadOk = 0;
}
    
    
    // chequeo si hubo algun error
if ($uploadOk == 0) {
    echo "La imagen no pudo ser cargada";
// si todo esta okintento subir la imagen
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " La imagen ha sido cargada.";
    } else {
        echo "Hubo un error al cargar el archivo.";
    }
}
   echo "<img src='img/$nombreArchivo'>";

   //$info['diagnostiico'] = "<img src=". $targetFile." height=200 width=300 />";


//}
?>