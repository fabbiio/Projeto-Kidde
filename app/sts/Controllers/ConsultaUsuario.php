<?php
namespace Sts\Controllers;
use Core\ConfigView;
    class ConsultaUsuario{
        public function index(){
            $carregarView = new ConfigView('consultar_usuario');
            $carregarView->renderizar();
        }
    }