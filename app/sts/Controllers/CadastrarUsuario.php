<?php
    namespace Sts\Controllers;
    use Core\ConfigView;
    
    class CadastrarUsuario
    {
        public function index(){
            $carregarView = new ConfigView('cadastrar_usuario');
            $carregarView->renderizar();
        }
    }