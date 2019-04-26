# PAW-TP2

## 3. Realice las modificaciones necesarias para que el script del punto anterior reciba los datos mediante el método GET. ¿Qué diferencia nota? ¿Cuándo es conveniente usar cada método? Consejo: Utilice las herramientas de desarrollador de su Navegador (Pestaña Red) para observar las diferencias entre las diferentes peticiones. 

Los metodos se diferencian en la forma como transmiten los parametros, en el metodo GET se transmiten en la URL, pudiendo asi verse los datos. Mientras que en el metodo POST los datos no son visibles ya que son enviados en el formulario.
Es conveniente usar el metodo POST cuando los datos que viajan en el contienen informacion privada que no se requiera que se vea, por el contrario, si esos datos son necesarios para algun motivo se usara el metodo GET para que los datos se transmitan por la URL.

## 4. ¿Qué sucede si 2 usuarios cargan imágenes con el mismo nombre de imagen? ¿Qué mecanismo implementar para evitar que un usuario sobrescriba una imagen con el mismo nombre?

Al cargar dos imagenes con el mismo nombre la primer imagen se sobreescribe, teniendo solo acceso a ver la ultima imagen subida. Para solucionar esto se podria generar un valor automatico incremental que se concatene al final del nombre de la imagen para que cada una de ellas tenga un nombre distinto.

## 5. Utilice las herramientas para desarrollador del navegador y observe cómo fueron codificados por el navegador los datos enviados por el navegador en los dos ejercicios anteriores. ¿Qué diferencia nota?

La diferencia que se observa es que en el ejercicio 4 se envia una imagen del tipo imagen/png.En cuanto al punto 3 los datos son enviados por el metodo get incluyendo los mismos en la url mientras que en el punto 4 los datos se envian mediante el metodo POST observandose el header content-type : multipart/form-data
