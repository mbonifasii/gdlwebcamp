<?php
    $conn = new mysqli('localhost', 'root', 'admin2020', 'gdlwebcamp');

    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }

?>