
<?php
include 'database.php';
//add_user("claudia","lopez","claudia@gmail.com", "12345", "claudia");


if (isset($_POST['register'])){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $pssword=$_POST['psswd'];
    $user=$_POST['user'];
    add_user($nombre, $apellido, $email, $pssword, $user);

}
?>

