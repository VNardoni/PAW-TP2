    <!-- Si hubo errores > Muestra vector errores; SINO > Muestra datos. -->
    <?php if (!empty($errores)): ?>
        <section id="errores">
            <h3>Error en la carga del formulario</h3>
            <li>
            <?php foreach ($errores as $tipoError => $error): ?>
                <ol><?= $error ?></ol>
            
            <?php endforeach; ?>
            </li>
        </section> 
    <?php else: 
            foreach($datos as $tipoDato => $dato):
                echo $tipoDato.": "." ".$dato."<br/>";
            endforeach;
        endif;
    ?> 