<!DOCTYPE html>
<html lang="es">
<head>
    <title><?= $title ?></title>
    <meta charset="utf-8" />
    <link href="<?= statics('main.css') ?>" rel="stylesheet" type="text/css">
</head>
<body>
<main>
    <?php if($_GET){
 require 'index.resultado.php';     
}else{
     require 'index.formulario.php' ;
    }
    
?>

</main>
</body>
</html>
