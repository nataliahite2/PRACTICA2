
<?php
include 'database.php';
include 'registre.php';
session_start();

if ($_POST['register']){

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $password=$_POST['passwd'];
    $user=$_POST['user'];
    
    add_user($nombre, $apellido, $email, $password, $user);

}



?>