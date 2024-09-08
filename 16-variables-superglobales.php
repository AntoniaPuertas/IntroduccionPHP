<?php include 'includes/header.php';

/**
 * Variables Superglobales
 * Son arrays predefinidos que están disponibles en todos los ámbitos a lo largo de un script en PHP
 * Contienen información sobre el entorno del servidor, la solicitud http, las cookies... 
 * No necesitan ser declaradas con la palabra clave global antes de ser usadas
 *
 */


 /**
 *  $_GET - contiene variables pasadas al script actual a través de parámetros URL
  */


  /**
   * $_POST - Contiene variables pasadas al script actual a través de HTTP POST method
   * se suele utilizar para pasar datos de formularios
   */


   /**
    * $_REQUEST - contiene el contenido de $_GET, $_POST y $_COOKIE
    * Se utiliza cuando no estás seguro de cómo se enviaron los datos
    */

    /**
     * $_COOKIE - Contiene variables pasadas al script actual a través de http Cookies
     */

    /**
     * $_SESSION - Contiene variables de sesión disponibles para el script actual
     * Para acceder a ella requiere que se inicie la sesión con session_start()
     */

     /**
      * $_SERVER - Contiene información sobre el entorno del servidor y la ejecución
      * Incluye headers, paths y locations de script
      */

      // Mostrar la IP del usuario
        $user_ip = $_SERVER['REMOTE_ADDR'];
        echo "Tu IP es: " . $user_ip . "<br>";

        //probamos accediendo desde la dirección ip de nuestra máquina
        //para averiguarla por consola con el comando ipconfig
        //escribimos en la dirección del navegador la dirección ip en vez de localhost
        // Mostrar la IP del servidor
        $user_ip = $_SERVER['SERVER_ADDR'];
        echo "IP del servidor: " . $user_ip . "<br>";

        $_SERVER['SERVER_NAME']; //contiene el nombre del dominio
        $_SERVER['SERVER_SOFTWARE']; //contiene el software que utiliza el servidor
        $_SERVER['HTTP_USER_AGENT']; //contiene información sobre el navegador del cliente

        //mostrar todas las variables $_SERVER disponibles
        echo '<ul>';
        foreach($_SERVER as $clave => $valor){
            echo '<li>'.$clave.' - '. $valor.'</li>';
        }
        echo '</ul>';

      /**
       * $_FILES - Contiene información sobre archivos subidos a través de HTTP POST method
       */

       /**
        * $_ENV - Contiene variables de entorno disponibles para el script actual
        * la disponibilidad depende de la configuración del servidor
        */

        // Acceder a una variable de entorno (si está disponible)
        $path = $_ENV['PATH'] ?? 'No disponible';
        echo "PATH: " . $path;

        /**
         * $GLOBALS - Contiene referencias a todas las variables disponibles en el ámbito global del script
         * contiene variables definidas por el usuario y otras superglobales
         */
include 'includes/footer.php';