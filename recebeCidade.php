<?php

include "connection.php";

$link = MySql_Connect();

$cidade = $_POST["cidade"];
$date   = date('Y-m-d');

if (!empty(trim($cidade))){
    $cQuery = "INSERT INTO pessoa (cidade, dt_digit)
               VALUES ('$cidade', '$date')";

    MySql_Execute($link, $cQuery);

    header("location: /Manumission/html/alcoolicos-anonimos.html");
}else{
       
    header("location: /Manumission/index.php");
}

mysqli_close($link);