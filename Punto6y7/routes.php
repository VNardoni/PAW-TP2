<?php

$app->router->define([
    '' => 'controllers/index.php',
    
    'Formulario' => 'controllers/Formulario.php',
    'tablaTurnos' => 'controllers/Turnos.php',
    'resumen' => 'controllers/resumen.php',
    'chequearEjercicio' => 'controllers/validador.php',
    'VistaDeFichaDeTurno' => 'controllers/Ficha.php',
]);
