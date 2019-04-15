<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TURNO</title>
</head>

<body>
    <h1>RESUMEN</h1>
     <form name="resumen">
   
    <label for="nombre">Nombre:</label>
    <?php echo $_POST["nombre"]; ?>
    <br>

    <label for="email">Email:</label>
    <?php echo $_POST["email"];?>
    <br>
    <label for="telefono">Telefono:</label>
    <?php echo $_POST["telefono"];?>
    <br>
    <label for="edad">Edad:</label>
    <?php echo $_POST["edad"];?>
    <br>
    <label for="fechaturno">Fecha del Turno:</label>
    <?php echo $_POST["fechaturno"];?>
    <br>
    <label for="horaturno">Hora del Turno:</label>


    <?php echo $_POST["horaturno"];?>
    </form>
</body>

</html>
