<?php
namespace AdmCore;
use AdmSts\Controllers\Home;

class ConfigController
{
    private $Url;
    private $UrlConjunto;
    private $UrlController;
    private $UrlParametro;

    private static $Format;

    public function __construct()
    {
        if(!empty(filter_input(INPUT_GET,'base',FILTER_DEFAULT))){
            $this->UrlController = filter_input(INPUT_GET,'base',FILTER_DEFAULT);
        }else{
            $this->UrlController = CONTROLLER;
        }
    }

    public function carregar(){
        $classe = "\\AdmSts\\Controllers\\" . $this->UrlController ;
        if (class_exists($classe)){
            $classeCarregar = new $classe;
            $classeCarregar->principal();
        }else{
            $classeCarregar = new Home();
            $classeCarregar->principal();
        }
    }
}