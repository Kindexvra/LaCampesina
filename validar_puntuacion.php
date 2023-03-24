<?php

  include 'config.php';
  $date = date('Y-m-d');

    if (isset($_POST['producto_n'])) {
        
        function getRealIP() {
          if (!empty($_SERVER['HTTP_CLIENT_IP']))
              return $_SERVER['HTTP_CLIENT_IP'];
             
          if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
              return $_SERVER['HTTP_X_FORWARDED_FOR'];
         
          return $_SERVER['REMOTE_ADDR'];
        }

      $producto_n = isset ($_POST['producto_n']) ? $_POST['producto_n'] : null ;
      $stars = isset ($_POST['stars']) ? $_POST['stars'] : null ;
      $user_agent = $_SERVER['HTTP_USER_AGENT'];
      $ip_visita = getRealIP();

      // Validar que el token exista en la base de datos
      $result_match_ip = mysqli_query($conexion, "SELECT ip_user FROM puntuaciones WHERE ip_user = '".$ip_visita."' AND producto_n = '".$producto_n."'");

      if (mysqli_num_rows($result_match_ip)>0) {
          
          mysqli_query($conexion, "UPDATE `puntuaciones` SET `stars` = '$stars' WHERE `puntuaciones`.`ip_user` = '".$ip_visita."' AND producto_n = '".$producto_n."' ");

           echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>¡Se ha actualizado su calificación!</div>";
        
      }
      else
      {

      mysqli_query($conexion, "INSERT INTO `puntuaciones` (`id_puntuacion`, `producto_n`, `stars`, `ip_user`, `user_agent`, `fecha_puntuacion`) VALUES (NULL, '$producto_n', '$stars', '$ip_visita', '$user_agent', '$date')");

           echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>¡Gracias por calificarnos!</div>";

      }
      
            echo '<script type="text/javascript">
            function quitar(){
              document.getElementById("result-stars1").innerHTML = "";
              document.getElementById("result-stars2").innerHTML = "";
            } 
            setTimeout ("quitar()", 5000); //tiempo expresado en milisegundos
            </script>';

  }
 
    ?>

