
    <body>
        <h1>RESUMEN</h1>
        <form name="resumen">

            <label for="nombre">Nombre:</label>
            <?php echo $_GET["nombre"]; ?>
            <br>

            <label for="email">Email:</label>
            <?php echo $_GET["email"];?>
            <br>
            <label for="telefono">Telefono:</label>
            <?php echo $_GET["telefono"];?>
            <br>
            <label for="edad">Edad:</label>
            <?php echo $_GET["edad"];?>
            <br>
            <label for="calzado">Talla de Calzado:</label> 
            <?php echo $_GET["calzado"];?>
            <br>
            <label for="altura">Altura:</label>
            <?php echo $_GET["altura"];?>
            <br>
            <label for="nacimiento">Fecha de Nacimiento:</label>
            <?php echo $_GET["nacimiento"];?>
            <br>
            <label for="colorpelo">Color de pelo:</label>

            <?php echo $_GET["colorpelo"];?>
            <br>
            <label for="fechaturno">Fecha del Turno:</label>
            <?php echo $_GET["fechaturno"];?>
            <br>
            <label for="horaturno">Hora del Turno:</label>


            <?php echo $_GET["horaturno"];?>
        </form>


    </body>


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
    <?php 
        endif;
    ?> 