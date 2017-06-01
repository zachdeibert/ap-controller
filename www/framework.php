<?php
    header("Content-Type: image/png");
    header("Content-Length: 67");
    readfile("image.png");

    $message = $_GET["message"];
    include "controller/handler.php";
?>
