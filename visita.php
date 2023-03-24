  <?php

      require_once 'config.php';
      $date = date('Y-m-d');

      function getRealIP() {
          if (!empty($_SERVER['HTTP_CLIENT_IP']))
              return $_SERVER['HTTP_CLIENT_IP'];
             
          if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
              return $_SERVER['HTTP_X_FORWARDED_FOR'];
         
          return $_SERVER['REMOTE_ADDR'];
      }
      $ip_visita = getRealIP();

      $consul_query = mysqli_query($conexion, "SELECT * FROM visitas WHERE ip_visita = '".$ip_visita."' ");

      if (mysqli_num_rows($consul_query)==0) {
              
        mysqli_query($conexion, "INSERT INTO `visitas` (`id_visita`, `ip_visita`, `fecha_visita`, `cantidad_visitas`, `origen`) VALUES (NULL, '$ip_visita', '$date', '0', '0')");
      }
      else
      {
        $row = mysqli_fetch_array($consul_query);
        $cant_visita = $row[3]+1;
        mysqli_query($conexion, "UPDATE `visitas` SET `cantidad_visitas` = '$cant_visita' WHERE `visitas`.`ip_visita` = '".$ip_visita."' ");
      }
      ?>