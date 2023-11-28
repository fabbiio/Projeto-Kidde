<?php
    session_start();
    ob_start(); //Limpa o buffer de redirecionamento
    date_default_timezone_set("America/Sao_Paulo");
    


    define('URL', 'http://localhost/Projeto_2/');
    define('URLADM', 'http://localhost/Projeto_2/adm/');

    define('CONTROLER', 'Home');
    define('METODO', 'index');

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '712396');
    define('DBNAME', 'kidde');
    define('PORT', '3306');