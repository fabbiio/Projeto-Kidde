<?php
    namespace Sts\Controllers;
    use Core\ConfigView;
    
    class CadastrarLinha
    {
        public function index(){
            $carregarView = new ConfigView('cadastrar_linha');
            $carregarView->renderizar();
        }
    }