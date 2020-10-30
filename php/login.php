<?php
 require 'connection.php';
  
 $id  = $_POST['id'];
 $name  = $_POST['name'];
 $email  = $_POST['email'];
 $phone = $_POST['phone'];
 $password = $_POST['password'];
 $user_type = $_POST['user_type'];

$insert = "INSERT INTO users VALUES ('$id','$name','$email','$phone','$password','$user_type') ";

$query = mysqli_query($conectar, $insert);

if($query){
echo "correcto";
} else {
    <script>
    alert("No Match");
    
    </script>

    echo "incorecto";
}

?>