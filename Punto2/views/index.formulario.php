<h1 class="h1Formulario">FORMULARIO DE CONSULTA MEDICA</h1>
    
    <form name="formulario" method="post">
        <label for="nombre">Nombre:</label> 
        <input type="text" name="nombre" required><br>
        
        <label for="email">Email:</label> 
        <input type=email name="email" required><br>
        
        <label for="telefono">Telefono:</label> 
        <input type="tel" name="telefono" required><br>
        
        <label for="edad">Edad:</label> 
        <input type="number" min="1" max="120" id="edad" name="edad" required><br>
        
        <label for="calzado">Talla de Calzado:</label> 
        <input type="number" name="calzado" value="20" min="20" max="45" id="c1"><br>
        
        <label for="altura">Altura:</label>
        <input type="range" name="altura" min="50" max="230">
        <output name="resultado" for="altura"></output><br>             
        
        <label for="nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="nacimiento" required><br>
        
        <label for="colorpelo">Color de pelo:</label>
        <select name="colorpelo">
            <option value="morocho">Morocho</option>
            <option value="rubio">Rubio</option>
            <option value="pelirojo">Pelirojo</option>
            <option value="castaño">Castaño</option>
        </select><br>
        
        <label for="fechaturno">Fecha del Turno:</label>
        <input type="date" name="fechaturno" required><br>
        
        <label for="horaturno">Hora del Turno</label>
        <input type="time" name="horaturno" value="8:00" min="8:00" max="17:00" step="900"><br>
        
        
        <button type="submit" name="submit">Enviar</button> 
        <button type="reset" name="reset">Limpiar</button>
    </form>