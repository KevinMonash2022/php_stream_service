<?php

    //host
    define("HOST", "localhost");

    //dbname
    define("DBNAME", "anime");

    //user
    define("USER", "root");

    //pass
    define("PASS", "");

    $conn = new PDO("mysql:host=".HOST.";dbname=".anime."", USER, PASS);

    if($conn == true) {
        echo "db connection is successful";
    } else {
        echo "db error"
    }