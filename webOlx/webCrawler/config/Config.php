<?php

    session_start();
    ob_start();

    //Credênciais de acesso ao BD
    define('DRIVE','mysql');
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DBNAME','alpes_one');
    define('PORT', 3306);
    
?>