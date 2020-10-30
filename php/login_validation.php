<?php
 require 'connection.php';
  
 $email  = $_POST['email'];
 $password = $_POST['password'];

$select ="SELECT * FROM users WHERE email='$email' and password='$password'";

$query = mysqli_query($conectar, $select);

$rows = mysqli_num_rows($query);

if ($rows>0){
    echo "Bienvenido";
} else{

    echo '<script type="text/javascript">',
    '  alert("Correo o Contraseña incorrecta.");',
    '</script>'
;
}
mysqli_free_result($query);
mysqli_close($conectar);
?>