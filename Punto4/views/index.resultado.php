<h1>RESUMEN</h1>
  
   <?php    
  if(isset($errores)){
        echo "<h3>Se produjeron los siguientes errores: </h3>";        
        foreach($errores as $tipoError => $error){
                    echo "entro";
                 echo  $error; 
                }
  }
   ?>            
                
         
        
        
    
     
 <!--SINO MUESTRO DATOS. -->     
    <section class="datos">    
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
        <label for="calzado">Talla de Calzado:</label> 
        <?php echo $_POST["calzado"];?> 
        <br>
        <label for="altura">Altura:</label>
        <?php echo $_POST["altura"];?> 
        <br>
        <label for="nacimiento">Fecha de Nacimiento:</label>
        <?php echo $_POST["nacimiento"];?> 
        <br>
        
        <label for="colorpelo">Color de pelo:</label>
        <?php echo $_POST["colorpelo"];?> 
        <br>
        <label for="fechaturno">Fecha del Turno:</label>
        <?php echo $_POST["fechaturno"];?> 
        <br>
        <label for="horaturno">Hora del Turno:</label>
        <?php echo $_POST["horaturno"];?>
        <br>
        <?php echo $viewImage ?>
            

   </section>
     