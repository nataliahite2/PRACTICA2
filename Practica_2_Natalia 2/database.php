<?php
include 'config.php';
//tindrem funcions de l'estil connect, add_user, delete_user, get_user_passwd...
function add_user ($nom, $cognom, $email, $pssword, $user){
    $servername = "mysql-natalia.alwaysdata.net";
    $username = "natalia";
    $password = "Holaquetal123";
    $dbname = "natalia_cv";

    // Check connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "SELECT nom, cognoms, email, user, psswd FROM usuari";
    $result = $conn->query($sql);

    
    
    $sql = "INSERT INTO usuari (nom, cognoms, email, user, psswd)
    VALUES ('$nom', '$cognom', '$email', '$user', '$pssword')";

    if ($conn->query($sql) === TRUE) {
      ?>
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
          <link rel="stylesheet" href="style.css">
        </head>
          <div class="card-body p-5 text-center">
            <h5 class="card-title">¡Te has registrado correctamente!</h5>
            <a href="/Programacio_tercer/Practica_2_Natalia/cv.php" class="btn btn-light text-body">Accede a tu currículum</a>
          </div>
        <?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
}

function validar_usuaris($user, $clave){
  $servername = "mysql-natalia.alwaysdata.net";
  $username = "natalia";
  $password = "Holaquetal123";
  $dbname = "natalia_cv";

  // Check connection
  $conexion = mysqli_connect($servername, $username, $password, $dbname);
  $sql = "SELECT nom, cognoms, email, user, psswd FROM usuari";
  $result = $conexion->query($sql);

  $q = "SELECT COUNT(*) as contar from usuari where user ='$user' and psswd = '$clave'";
  $consulta = mysqli_query($conexion,$q);
  $array = mysqli_fetch_array($consulta);

  if($array['contar']>0){
    $_SESSION['username'] = $user;
    header("location:cv.php");
  } else {
    echo "Datos incorrectos";
  }
}


/*
$servername = "mysql-natalia.alwaysdata.net";
$username = "natalia";
$password = "Holaquetal123";
$dbname = "natalia_cv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, nom, cognoms, email, user, psswd FROM usuari";
$result = $conn->query($sql);

//if ($result->num_rows > 0) {
  // output data of each row

$conn->close();
*/





 
?>

