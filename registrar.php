<?php

include("config.php");
$date = date('Y-m-d');

      function getRealIP() {
          if (!empty($_SERVER['HTTP_CLIENT_IP']))
              return $_SERVER['HTTP_CLIENT_IP'];
             
          if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
              return $_SERVER['HTTP_X_FORWARDED_FOR'];
         
          return $_SERVER['REMOTE_ADDR'];
      }
      $ip_visita = getRealIP();

if (isset($_POST['nombreyapellido'])) {
        
        $name_apellido = isset ($_POST['nombreyapellido']) ? $_POST['nombreyapellido'] : null ;
        $email = isset ($_POST['email']) ? $_POST['email'] : null ;
        $localidad = isset ($_POST['localidad']) ? $_POST['localidad'] : null ;
        $startdate = isset ($_POST['startdate']) ? $_POST['startdate'] : null ;
        $como_leche = isset ($_POST['sellist']) ? $_POST['sellist'] : null ;
        $check = isset ($_POST['conditions']) ? $_POST['conditions'] : null ;
        
        $result_validemail = mysqli_query($conexion, "SELECT * FROM Registro WHERE email = '".$email."'");
        
        if(empty($name_apellido)){
        echo "<div class='alert alert-danger alert-dismissible fade show owald' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert'></button><strong>¡Atención!</strong> Complete el campo <b>Nombre y Apellido</b>, <b>Correo</b> y  <b>Fecha de Nacimiento</b></div>";
        }
        elseif(empty($email)){
        echo "<div class='alert alert-danger alert-dismissible fade show owald' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert'></button><strong>¡Atención!</strong> Complete el campo <b>Correo electrónico</b></div>";
        }
        elseif(mysqli_num_rows($result_validemail)>0){
        echo "<div class='alert alert-danger alert-dismissible fade show owald' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert'></button><strong>¡Atención!</strong> Ya existe un usuario con este correo</div>";
        }
        elseif(empty($localidad)){
        echo "<div class='alert alert-danger alert-dismissible fade show owald' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert'></button><strong>¡Atención!</strong> Complete el campo <b>Localidad / Estado</b></div>";
        }
        elseif(empty($startdate)){
        echo "<div class='alert alert-danger alert-dismissible fade show owald' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert'></button><strong>¡Atención!</strong> Complete el campo <b>Fecha de nacimiento</b></div>";
        }
        elseif(empty($check)){
        echo "<div class='alert alert-danger alert-dismissible fade show owald' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert'></button><strong>¡Atención!</strong> Debe aceptar recibir recibir información y/o otras promociones de Nestlé Venezuela</div>";
        }
        else{
        $consulta = "INSERT INTO `Registro` (`id_persona`, `nombre_apellido`, `email`, `fecha_nacimiento`, `localidad`, `consume_leche`, `informacion_recibir`, `ip_user`, `fecha_registro`) VALUES (NULL, '$nombre_apellido', '$email', '$startdate', '$localidad', '$como_leche', '$check1', '$ip_visita', '$date');";
        mysqli_query($conexion, $consulta);
        
       echo "<div class='alert alert-success alert-dismissible fade show owald' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert'></button>¡Te haz registrado con éxito! <br>
        Te damos la gracias por tu registro y te invitamos que estés al tanto de todo lo nuevo que se estará publicando en las mismas</div>";
        }
    
    

        


}

?>