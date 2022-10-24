<?php

include 'database.php';

// define variables and set to empty values
$usuari = $contrasenya = "";
$nameErr = $ContraErr= "";


if (isset($_POST['login'])) {
    if (empty($_POST["usuari"])) {
        $nameErr = "Usuari requirit";
    } else {
        $usuari = test_input($_POST["usuari"]);
    }
    if (empty($_POST["contra"])) {
        $ContraErr = "Contrasenya requerida";
    } else {
        $contrasenya = test_input($_POST["contra"]);
    }

    validar_usuaris($usuari,$contrasenya);
  }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


?>