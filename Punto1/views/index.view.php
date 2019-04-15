<!DOCTYPE html>
<html lang="es">
<head>
    <title><?= $title ?></title>
    <meta charset="utf-8" />
    <link href="<?= statics('main.css') ?>" rel="stylesheet" type="text/css">
</head>
<body>
<main>
    <?php 
        
            require 'index.formulario.php'; 
     
    ?>
    
    <!-- Si hubeo errores -->
    <?php if (!empty($errores)): ?>
        <section id="errores">
            <h3>Error en la carga del formulario</h3>
            <li>
            <?php foreach ($errores as $tipoError => $error): ?>
                <ol><?= $error ?></ol>
            
            <?php endforeach; ?>
            </li>
        </section> 
    <?php endif; ?>

    
</main>
</body>
</html>
