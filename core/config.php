<?php
    session_start();

    date_default_timezone_set("America/Sao_Paulo");
    ob_start(); //Limpa o buffer de redirecionamento

    define('URL', 'http://localhost/Projeto_2/');
    define('URLADM', 'http://localhost/Projeto_2/adm/');

    define('CONTROLLER', 'Home');
    define('METODO', 'index');

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '712396');
    define('DBNAME', 'kidde');
    define('PORT', '3306');