<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=kanban', $user, $pass);
} catch(PDOException $e) {

    echo "Whoops - something went way wrong!";
    exit();
    print_r($e);
}
