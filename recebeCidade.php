<?php

include "connection.php";

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';


$link = MySql_Connect();

$cidade = $_POST["cidade"];
$date   = date('Y-m-d');

if (!empty($cidade)){
    $cQuery = "INSERT INTO pessoa (cidade, dt_digit)
               VALUES ('$cidade', '$date')";

    MySql_Execute($link, $cQuery);

    header("location: /Manumission/html/alcoolicos-anonimos.html");
}else{
    header("location: /Manumission/index.php");
    alert("Por favor, digite a cidade.");
}

mysqli_close($link);