<?php
include 'config.php';
//tindrem funcions de l'estil connect, add_user, delete_user, get_user_passwd...
function add_user ($nom, $cognom, $email, $password, $user){
    $servername = "mysql-natalia.alwaysdata.net";
    $username = "natalia";
    $password = "Holaquetal123";
    $dbname = "natalia_cv";

    // Check connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "SELECT nom, cognoms, email, user, psswd FROM usuari";
    $result = $conn->query($sql);
    
    $sql = "INSERT INTO usuari (nom, cognoms, email, user, psswd)
    VALUES ('$nom', '$cognom', '$email', '$user', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
}


 
?>

?>