<?php
    session_start();
    ob_start(); //Limpa o buffer de redirecionamento

    define('URL', 'http://localhost/Projeto_2/');
    define('URLADM', 'http://localhost/Projeto_2/adm/');

    define('CONTROLLER', 'Home');
    define('METODO', 'index');

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '712396');
    define('DBNAME', 'controle');
    define('PORT', '3306');