<?php
namespace Sts\Controllers;
use Core\ConfigView;
    class CadastrarSetor{
        public function index(){
            $carregarView = new ConfigView('cadastrar_setor');
            $carregarView->renderizar();

        }
    }